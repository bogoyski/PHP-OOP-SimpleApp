<?php
/**
 * Created by PhpStorm.
 * User: PC1
 * Date: 11.6.2017 г.
 * Time: 14:41
 */

namespace Service\Encryption;


interface EncryptionServiceInterface
{
    public function encrypt($password): string;

    public function isValid($password, $passwordHash): bool;
}