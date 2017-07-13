<?php
require_once "app.php";
$app->checkLogin();
$userService = new \Service\User\UserService($db, $encryptionService);
$sort = null;
$asc = false;
if (isset($_GET['sort'])) {
    $sort = $_GET['sort'];
    $asc = isset($_GET['asc']) && $_GET['asc'] == 'true';
}

if (isset($_POST['filter'])) {
    $gender = $_POST['gender'];
    $orientation = $_POST['orientation'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $minAge = $_POST['minAge'];
    $maxAge = $_POST['maxAge'];

    $users = $userService->findByFilter(
        $gender,
        $orientation,
        $country,
        $city,
        $minAge,
        $maxAge
    );
} else {
    $users = $userService->getAll($sort, $asc);
}

$app->loadTemplate("users_frontend", $users);


