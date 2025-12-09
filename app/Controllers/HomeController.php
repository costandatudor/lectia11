<?php
namespace App\Controllers;

use App\Models\Car;
use App\Models\Mechanic;
use App\Models\Owner;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Controllers\Controller;

class HomeController extends Controller{
    public function index(Request $request, Response $response){
        $cars = Car::all();
        $mechanics = Mechanic::all();
        $owners = Owner::all();
        $response->getBody()->write($this->view('home.view.php', [
            'cars' => $cars,
            'mechanics' => $mechanics,
            'owners' => $owners
        ]));
        return $response;
    }
}