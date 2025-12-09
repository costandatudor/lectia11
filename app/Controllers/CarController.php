<?php
namespace App\Controllers;
use App\Models\Car;
use App\Models\Mechanic;
use App\Models\Owner;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Controllers\Controller;

class CarController extends Controller{
    public function index(Request $request, Response $response, $args){
        $cars = Car::all();
        $response->getBody()->write($this->view('cars/index.view.php', [
            'cars' => $cars
        ]));
        return $response;
    }   

    public function create(Request $request, Response $response, $args)
    {
        $mechanics = Mechanic::all();
        $owners = Owner::all();
        $response->getBody()->write($this->view('cars/create.view.php', [
            'mechanics' => $mechanics,
            'owners' => $owners
        ]));
        return $response;
    }

    public function store(Request $request, Response $response, $args)
    {
        $data = $request->getParsedBody();
        $model = $data['model'] ?? null;
        $mechanic_id = $data['mechanic_id'] ?? null;
        $owner_id = $data['owner_id'] ?? null;
        $new_mechanic_name = trim($data['new_mechanic_name'] ?? '');
        $new_owner_name = trim($data['new_owner_name'] ?? '');

        // If user asked to create a new mechanic, create it and get its id
        if ($mechanic_id === 'new' && $new_mechanic_name !== '') {
            $mech = Mechanic::create(['name' => $new_mechanic_name]);
            $mechanic_id = $mech->id;
        }

        // Create the car
        $car = Car::create([
            'model' => $model,
            'mechanic_id' => $mechanic_id
        ]);

        // Handle owner: either existing, new, or none
        if ($owner_id === 'new' && $new_owner_name !== '') {
            // create owner with car relation
            Owner::create([
                'name' => $new_owner_name,
                'car_id' => $car->id
            ]);
        } elseif (!empty($owner_id)) {
            $owner = Owner::find($owner_id);
            if ($owner) {
                $owner->car_id = $car->id;
                $owner->save();
            }
        }

        $this->flash('Mașină adăugată cu succes!', 'success');
        return $response->withHeader('Location', '/cars')->withStatus(302);
    }

    public function show(Request $request, Response $response, $args)
    {
        $id = $args['id'] ?? null;
        $car = Car::find($id);
        if (!$car) {
            $response->getBody()->write('Car not found');
            return $response->withStatus(404);
        }

        $response->getBody()->write($this->view('cars/show.view.php', ['car' => $car]));
        return $response;
    }

    public function edit(Request $request, Response $response, $args)
    {
        $id = $args['id'] ?? null;
        $car = Car::find($id);
        if (!$car) {
            $response->getBody()->write('Car not found');
            return $response->withStatus(404);
        }
        $mechanics = Mechanic::all();
        $owners = Owner::all();
        $response->getBody()->write($this->view('cars/edit.view.php', [
            'car' => $car,
            'mechanics' => $mechanics,
            'owners' => $owners
        ]));
        return $response;
    }

    public function update(Request $request, Response $response, $args)
    {
        $id = $args['id'] ?? null;
        $car = Car::find($id);
        if (!$car) {
            $response->getBody()->write('Car not found');
            return $response->withStatus(404);
        }

        $data = $request->getParsedBody();
        $car->model = $data['model'] ?? $car->model;
        $car->mechanic_id = $data['mechanic_id'] ?? $car->mechanic_id;
        $car->save();

        // handle owner assignment
        $owner_id = $data['owner_id'] ?? null;

        // If no owner selected, detach any existing owner from this car
        if (empty($owner_id)) {
            Owner::where('car_id', $car->id)->update(['car_id' => null]);

        } else if ($owner_id === 'new' && !empty(trim($data['new_owner_name'] ?? ''))) {
            // clear any existing owner for this car to avoid unique constraint
            Owner::where('car_id', $car->id)->update(['car_id' => null]);
            Owner::create(['name' => trim($data['new_owner_name']), 'car_id' => $car->id]);

        } else {
            // assigning an existing owner: clear previous owner for this car (if any)
            Owner::where('car_id', $car->id)->where('id', '!=', $owner_id)->update(['car_id' => null]);

            $owner = Owner::find($owner_id);
            if ($owner) {
                $owner->car_id = $car->id;
                $owner->save();
            }
        }

        $this->flash('Mașină actualizată cu succes!', 'success');
        return $response->withHeader('Location', '/cars')->withStatus(302);
    }

    public function destroy(Request $request, Response $response, $args)
    {
        $id = $args['id'] ?? null;
        $car = Car::find($id);
        if (!$car) {
            $response->getBody()->write('Car not found');
            return $response->withStatus(404);
        }

        // detach owner if any
        $owner = $car->owner()->first();
        if ($owner) {
            $owner->car_id = null;
            $owner->save();
        }

        $car->delete();

        $this->flash('Mașină ștearsă cu succes!', 'success');
        return $response->withHeader('Location', '/cars')->withStatus(302);
    }
}