<?php
require_once "app.php";
$app->checkLogin();

$userService = new \Service\User\UserService($db, $encryptionService);

$infoForTemplate = $userService->getUserProfileInfo();

$app->loadTemplate('profile_frontend', $infoForTemplate);