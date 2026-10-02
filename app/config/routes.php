
<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
/**
 * ------------------------------------------------------------------
 * LavaLust - an opensource lightweight PHP MVC Framework
 * ------------------------------------------------------------------
 *
 * MIT License
 *
 * Copyright (c) 2020 Ronald M. Marasigan
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
 *
 * @package LavaLust
 * @since Version 1
 */

/** @var object $router **/

$_SESSION['student_access'] = true;

$router->get('/', 'Welcome::index');

$router->get('/student', 'StudentController::index');

$router->get('/student/profile', 'StudentController::profile')
       ->middleware('student');

$router->get('/users', 'UsersController::index');


/*
|--------------------------------------------------------------------------
| Authentication Routes - Lab 5
|--------------------------------------------------------------------------
*/

$router->get('/login', 'LoginController::index');

$router->post('/login/authenticate', 'LoginController::login');

$router->get('/logout', 'LoginController::logout');


/*
|--------------------------------------------------------------------------
| Product Routes - Lab 5
|--------------------------------------------------------------------------
*/

$router->group(
    ['prefix' => '/products', 'middleware' => 'auth'],
    function ($router) {

        $router->get('/', 'ProductController::index');

        $router->get('/create', 'ProductController::create');

        $router->post('/store', 'ProductController::store');

        $router->get('/edit/{id}', 'ProductController::edit');

        $router->post('/update/{id}', 'ProductController::update');

        $router->get('/delete/{id}', 'ProductController::delete');
    }
);


/*
|--------------------------------------------------------------------------
| API Authentication Routes - Lab 6
|--------------------------------------------------------------------------
*/

$router->post('/api/login', 'ApiAuthController::login');


/*
|--------------------------------------------------------------------------
| Product API Routes - Lab 6
|--------------------------------------------------------------------------
*/

// GET: Retrieve all products
$router->get('/api/products', 'ApiProductController::index');

// GET: Retrieve one product
$router->get('/api/products/{id}', 'ApiProductController::show');

// POST: Create a product
$router->post('/api/products', 'ApiProductController::store');

// PUT: Update a product
$router->put('/api/products/{id}', 'ApiProductController::update');

// PATCH: Partially update a product
$router->patch('/api/products/{id}', 'ApiProductController::update');

// DELETE: Delete a product
$router->delete('/api/products/{id}', 'ApiProductController::delete');