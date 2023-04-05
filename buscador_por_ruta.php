<?php

$url = "punto_venta_informacion";
$request = \Illuminate\Http\Request::create($url);
// // Get the route for the request
$route = app('router')->getRoutes()->match($request);

// Get the controller for the route
$controller = $route->getAction();

dd($controller);
