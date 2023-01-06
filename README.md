# Simple PHP Router Class `v1.0`
This is a simple PHP Router Class. It requires no dependencies. Fork it and have fun with it.

It's a standalone single file PHP class to use on your projects. It requires no dependencies or no framework.


## How to use

You only need two files:

- 1 `route.php`
- 2 `.htaccess`

The `.htaccess` redirects all requests to `index.php`.

You can run everything from the index.php file, see the file for usage.

### Step 1 - Initialize
Create a router instance
```php
require "Router.php"

$router = new Router();
```

### Step 2 - Add route URIs
Add routes with `add` method:
```php
$router->add('GET', '/', function(){
    // Code goes here
});
```

You can directly call specific methods:

Only supports `get`, `post`, `put`, `patch`, `delete` right now
```php
$router->get('/', function(){
    // Code goes here
});

$router->post('/create', function(){
    // Code goes here
});
```

### Step 3 - Finish
Finish routing with `listen()` method
```php
$router->listen();
```

## Set URI params
You can set URI params of any type just by using `":"` before URI name
```php
$router->get('/user/:id', function($params){
    // Code goes here
    echo $params['id'];
});
```

## Example Code
```php
require 'Router.php';

$router->get('/', function(){
    // Code goes here
});

$router->post('/create', function(){
    // Code goes here
});

$router->get('/user/:id', function($params){
    // Code goes here
    echo $params['id'];
});

$router->listen();
```

## LICENSE
[MIT License](LICENSE)