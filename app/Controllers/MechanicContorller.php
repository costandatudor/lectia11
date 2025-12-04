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
}
