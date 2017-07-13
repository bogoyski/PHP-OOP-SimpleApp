<?php
require_once "app.php";
$cityService = new \Service\CityService($db);
$info = $cityService->getAllCities();

$app->loadTemplate('city_frontend', $info);