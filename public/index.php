<?php

require "../vendor/autoload.php";

$app = new Slim();

$app->get("/", function () {
    echo "You GOT it.";
});

$app->post("/", function () {
    echo "You POSTED it.";
});

$app->put("/", function () {
    header("Content-Type: application/json");
    echo "{ 'message': 'put request sent' }";
});

$app->get("/zombies", function () {
    echo "Welcome to Florida!";
    echo "<img src='http://lorempixel.com/1000/700/' />";
});

$app->run();