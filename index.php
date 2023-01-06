<?php

require 'Router.php';

// 1. Init the Router class
$router = new Router();

// 2. Define routes

// 2.1 GET method
$router->get('/', function(){
    // Code goes here
});

// 2.2 POST method
$router->post('/create', function(){
    // Code goes here
});

// 2.3 GET method with params
$router->get('/user/:id', function($params){
    // Code goes here
    echo $params['id'];
});

// 3. Finish
$router->listen();