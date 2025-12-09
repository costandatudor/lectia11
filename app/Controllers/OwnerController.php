<?php
 namespace App\Controllers;
    use App\Models\Car;
    use App\Models\Owner;
    use App\Controllers\Controller;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    class OwnerController extends Controller{
        public function index(Request $request, Response $response, $args){
            $owners = Owner::all();
            $response->getBody()->write($this->view('owners/index.view.php', [
                'owners' => $owners
            ]));
            return $response;
        }

        public function create(Request $request, Response $response, $args)
        {
            $response->getBody()->write($this->view('owners/create.view.php'));
            return $response;
        }

        public function store(Request $request, Response $response, $args)
        {
            $data = $request->getParsedBody();
            $name = $data['name'] ?? null;

            if (!empty(trim($name))) {
                Owner::create(['name' => trim($name)]);
                $this->flash('Proprietar adăugat cu succes!', 'success');
            } else {
                $this->flash('Nume proprietar obligatoriu!', 'error');
            }

            return $response->withHeader('Location', '/owners')->withStatus(302);
        }

        public function show(Request $request, Response $response, $args)
        {
            $id = $args['id'] ?? null;
            $owner = Owner::find($id);
            if (!$owner) {
                $response->getBody()->write('Owner not found');
                return $response->withStatus(404);
            }
            $response->getBody()->write($this->view('owners/show.view.php', ['owner' => $owner]));
            return $response;
        }

        public function edit(Request $request, Response $response, $args)
        {
            $id = $args['id'] ?? null;
            $owner = Owner::find($id);
            if (!$owner) {
                $response->getBody()->write('Owner not found');
                return $response->withStatus(404);
            }
            $response->getBody()->write($this->view('owners/edit.view.php', ['owner' => $owner]));
            return $response;
        }

        public function update(Request $request, Response $response, $args)
        {
            $id = $args['id'] ?? null;
            $owner = Owner::find($id);
            if (!$owner) {
                $response->getBody()->write('Owner not found');
                return $response->withStatus(404);
            }
            $data = $request->getParsedBody();
            $owner->name = $data['name'] ?? $owner->name;
            $owner->save();
            $this->flash('Proprietar actualizat cu succes!', 'success');
            return $response->withHeader('Location', '/owners')->withStatus(302);
        }

        public function destroy(Request $request, Response $response, $args)
        {
            $id = $args['id'] ?? null;
            $owner = Owner::find($id);
            if (!$owner) {
                $response->getBody()->write('Owner not found');
                return $response->withStatus(404);
            }

            // detach owner from car by setting car_id to null
            $owner->car_id = null;
            $owner->save();

            $owner->delete();
            $this->flash('Proprietar șters cu succes!', 'success');
            return $response->withHeader('Location', '/owners')->withStatus(302);
        }
    }

