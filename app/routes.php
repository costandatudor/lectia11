<?php

use App\Controllers\HomeController;
use App\Controllers\CarController;
use App\Controllers\MechanicContorller;

$app->get("/", [HomeController::class, 'index']);
$app->get("/cars", [CarController::class, 'index']);
$app->get("/mechanics", [MechanicContorller::class, 'index']);