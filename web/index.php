<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Silex\Provider\MonologServiceProvider;

//configure database connection
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'driver' => 'pdo_mysql',
        'host' => '127.0.0.1',
        'dbname' => 'vs',
        'user' => 'root',
        'password' => 'merci',
        'charset' => 'utf8',
    ),
));

$app->get('/', function () {
    return 'Hello world';
});

////GET	/{resource}/{id}	Show
//$app->get('/client/{id}', function ($id) use ($app) {
//    $sql = "SELECT * FROM Client WHERE id = ?";
//    $post = $app['db']->fetchAssoc($sql, array((int) $id));
//    return new Response(json_encode($post), 200, array('Content-Type' => 'application/json'));
//});
//
////DELETE	/{resource}/{id}	Destroy
//$app->delete('/client/delete/{id}', function ($id) use ($app) {
//    $todo = $app['db']->delete('todo', array('id' => $id));
//    return new Response('Todo deleted', 200);
//});


//require __DIR__.'/../app/config/dev.php';
//require __DIR__.'/../app/app.php';
require __DIR__.'/../app/config/routes.php';

$app->run();