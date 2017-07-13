<?php
require_once "app.php";
$userservice = new \Service\User\UserService($db, $encryptionService);
if (isset($_POST['login'])) {
    $nickname = $_POST['nickname'];
    $password = $_POST['pass'];

    if($userservice->login($nickname, $password)) {
        header("Location: profile.php");
        exit;
    } else {
        throw new Exception("Password mismatch");
    }

}

$app->loadTemplate('login_frontend');