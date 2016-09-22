<?php

use Symfony\Component\HttpFoundation\Request;

// route for "/client" URI: load client list and return it in JSON format
$app->get('/client', function () use ($app) {
    $sql = "SELECT * FROM Client";
    $clients = $app['db']->fetchAll($sql);
    return $app->json($clients);
});

// route for "/client/{id}" URI: load specific client info and return it in JSON format
$app->get('/client/{id}', function ($id) use ($app) {
    $sql = "SELECT * FROM Client WHERE id = ?";
    $client = $app['db']->fetchAssoc($sql, array((int) $id));

    return $app->json($client);
})->assert('id', '\d+');

// Delete user
$app->get('/client/delete/{id}', function ($id) use ($app) {
    $sql = "DELETE FROM Client WHERE id = ?";
    $app['db']->fetchAssoc($sql, array((int) $id));
    return $app->json('No content', 204);
})->assert('id', '\d+')
    ->bind('api_client_delete');

// Create user
$app->post('/client/create', function (Request $request) use ($app) {
    if (!$request->request->has('nom')) {
        return $app->json('Missing parameter: nom', 400);
    }
    if (!$request->request->has('prenom')) {
        return $app->json('Missing parameter: prenom', 400);
    }

    $client = new \VoApi\Client();
    $client->setNom($request->request->get('nom'));
    $client->setPrenom($request->request->get('prenom'));
    $app['dao.user']->save($client);

    $responseData = array(
        'id' => $client->getId(),
        'nom' => $client->getNom(),
        'prenom' => $client->getPrenom()
    );

    return $app->json($responseData, 201);
})->bind('api_user_add');