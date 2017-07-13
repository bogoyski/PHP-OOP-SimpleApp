<?php
require_once "app.php";

$userService = new \Service\User\UserService($db, $encryptionService);
if (isset($_POST['register'])) {
    $uploadService = new \Service\Upload\UploadService();

    $avatarUrl = null;
    if ($_FILES['avatar']['error'] === 0) {
        $avatarUrl = $uploadService->upload($_FILES['avatar'], 'images');
    }

    $userService->register(
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['nickname'],
        $_POST['email'],
        $_POST['pass'],
        $_POST['confirm'],
        $_POST['phone'],
        new DateTime($_POST['birthday']),
        intval($_POST['gender']),
        intval($_POST['country']),
        intval($_POST['city']),
        intval($_POST['orientation']),
        $_POST['description'],
        $avatarUrl
    );

    header("Location: login.php");
    exit;
}


$infoForTemlate = $userService->getRegisterViewData();

$app->loadTemplate('register_frontend', $infoForTemlate);