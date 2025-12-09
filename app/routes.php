<?php

use App\Controllers\HomeController;
use App\Controllers\CarController;
use App\Controllers\MechanicContorller;
use App\Controllers\OwnerController;

$app->get("/", [HomeController::class, 'index']);
$app->get("/cars", [CarController::class, 'index']);
// Form pentru adăugare mașină
$app->get("/cars/create", [CarController::class, 'create']);
$app->post("/cars", [CarController::class, 'store']);
// Car CRUD
$app->get('/cars/{id}', [CarController::class, 'show']);
$app->get('/cars/{id}/edit', [CarController::class, 'edit']);
$app->post('/cars/{id}/update', [CarController::class, 'update']);
$app->post('/cars/{id}/delete', [CarController::class, 'destroy']);
$app->get("/mechanics", [MechanicContorller::class, 'index']);
// Mechanic CRUD
$app->get('/mechanics/create', [MechanicContorller::class, 'create']);
$app->post('/mechanics', [MechanicContorller::class, 'store']);
$app->get('/mechanics/{id}', [MechanicContorller::class, 'show']);
$app->get('/mechanics/{id}/edit', [MechanicContorller::class, 'edit']);
$app->post('/mechanics/{id}/update', [MechanicContorller::class, 'update']);
$app->post('/mechanics/{id}/delete', [MechanicContorller::class, 'destroy']);
$app->get("/owners", [OwnerController::class, 'index']);
// Owner CRUD
$app->get('/owners/create', [OwnerController::class, 'create']);
$app->post('/owners', [OwnerController::class, 'store']);
$app->get('/owners/{id}', [OwnerController::class, 'show']);
$app->get('/owners/{id}/edit', [OwnerController::class, 'edit']);
$app->post('/owners/{id}/update', [OwnerController::class, 'update']);
$app->post('/owners/{id}/delete', [OwnerController::class, 'destroy']);