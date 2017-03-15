<?php

require __DIR__ . '/../vendor/autoload.php';
include './users.php';
include './uploadFile.php';

session_start();

// Instantiate the app
$settings = require __DIR__ . '/../src/settings.php';
$app = new \Slim\App($settings);
$app->get('/babel/{id}', 'indexGetSubscribed');

// Run app
$app->run();

function indexGetSubscribed($request, $response, $args) {
    testUpload();
    $id = $args['id'];
    $sort = $request->getQueryParam('sort', $default = $id); // = desc if provided, asc otherwise
    return getSubscribed($sort);
}

?>