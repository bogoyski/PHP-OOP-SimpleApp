<?php
/**
 * Created by PhpStorm.
 * User: PC1
 * Date: 11.6.2017 г.
 * Time: 14:45
 */

namespace Service\Encryption;


class BCryptEncryptionService implements EncryptionServiceInterface
{

    public function encrypt($password): string
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    public function isValid($password, $passwordHash): bool
    {
        return password_verify($password, $passwordHash);
    }
}