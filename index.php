<?php

// 1. Include the class
require 'Router.php';

// 2. Init the Router class
$router = new Router();

// 3. Define routes

// 3.1 GET method
$router->get('/', function(){
    // Code goes here
});

// 3.2 POST method
$router->post('/create', function(){
    // Code goes here
});

// 3.3 GET method with params
$router->get('/user/:id', function($params){
    // Code goes here
    echo $params['id'];
});

// 4. Finish
$router->listen();