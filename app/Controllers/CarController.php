<?php
namespace App\Controllers;
use App\Models\Car;
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
}