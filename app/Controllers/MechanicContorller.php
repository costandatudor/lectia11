<?php
namespace App\Controllers;
use App\Models\Car;
use App\Models\Mechanic;
use App\Controllers\Controller;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class MechanicContorller extends Controller{
    public function index(Request $request, Response $response, $args){
        $mechanics = Mechanic::all();
        $response->getBody()->write($this->view('mechanics/index.view.php', [
            'mechanics' => $mechanics
        ]));
        return $response;
    }

    public function create(Request $request, Response $response, $args)
    {
        $response->getBody()->write($this->view('mechanics/create.view.php'));
        return $response;
    }

    public function store(Request $request, Response $response, $args)
    {
        $data = $request->getParsedBody();
        $name = $data['name'] ?? null;

        if (!empty(trim($name))) {
            Mechanic::create(['name' => trim($name)]);
            $this->flash('Mecanic adăugat cu succes!', 'success');
        } else {
            $this->flash('Nume mecanic obligatoriu!', 'error');
        }

        return $response->withHeader('Location', '/mechanics')->withStatus(302);
    }

    public function show(Request $request, Response $response, $args)
    {
        $id = $args['id'] ?? null;
        $mechanic = Mechanic::find($id);
        if (!$mechanic) {
            $response->getBody()->write('Mechanic not found');
            return $response->withStatus(404);
        }
        $response->getBody()->write($this->view('mechanics/show.view.php', ['mechanic' => $mechanic]));
        return $response;
    }

    public function edit(Request $request, Response $response, $args)
    {
        $id = $args['id'] ?? null;
        $mechanic = Mechanic::find($id);
        if (!$mechanic) {
            $response->getBody()->write('Mechanic not found');
            return $response->withStatus(404);
        }
        $response->getBody()->write($this->view('mechanics/edit.view.php', ['mechanic' => $mechanic]));
        return $response;
    }

    public function update(Request $request, Response $response, $args)
    {
        $id = $args['id'] ?? null;
        $mechanic = Mechanic::find($id);
        if (!$mechanic) {
            $response->getBody()->write('Mechanic not found');
            return $response->withStatus(404);
        }
        $data = $request->getParsedBody();
        $mechanic->name = $data['name'] ?? $mechanic->name;
        $mechanic->save();
        $this->flash('Mecanic actualizat cu succes!', 'success');
        return $response->withHeader('Location', '/mechanics')->withStatus(302);
    }

    public function destroy(Request $request, Response $response, $args)
    {
        $id = $args['id'] ?? null;
        $mechanic = Mechanic::find($id);
        if (!$mechanic) {
            $response->getBody()->write('Mechanic not found');
            return $response->withStatus(404);
        }

        // detach mechanic from cars
        foreach ($mechanic->cars()->get() as $car) {
            $car->mechanic_id = null;
            $car->save();
        }

        $mechanic->delete();
        $this->flash('Mecanic șters cu succes!', 'success');
        return $response->withHeader('Location', '/mechanics')->withStatus(302);
    }
}
