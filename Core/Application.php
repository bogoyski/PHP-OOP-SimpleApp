<?php
/**
 * Created by PhpStorm.
 * User: PC1
 * Date: 9.6.2017 г.
 * Time: 14:38
 */

namespace Core;


class Application
{
    const FRONTEND_FOLDER = 'frontend';

    function loadTemplate($templateName, $data = null) {

        include self::FRONTEND_FOLDER . DIRECTORY_SEPARATOR . $templateName . '.php';
    }

    public function checkLogin()
    {
        if (!isset($_SESSION['user_id'])) {
            header("Location: login.php");
            exit;
        }
    }
}