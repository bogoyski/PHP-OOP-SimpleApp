<?php
/**
 * Created by PhpStorm.
 * User: PC1
 * Date: 9.6.2017 г.
 * Time: 17:02
 */

namespace Service\User;


use Data\Users\AllUsersViewData;
use Data\Users\User;
use Data\Users\UserProfileViewData;
use Data\Users\UserRegisterViewData;

interface UserServiceInterface
{
    public function getRegisterViewData(): UserRegisterViewData;

    public function register(string $firstName,
                             string $lastName,
                             string $nickname,
                             string $email,
                             string $password,
                             string $confirmPassword,
                             string $phone,
                             \DateTime $birthday,
                             int $genderId,
                             int $coutryId,
                             int $cityId,
                             int $orientationId,
                             string $description = null,
                             string $pictureUrl = null);

    public function login($username, $password): bool;

    public function getUserProfileInfo(): UserProfileViewData;

    /**
     * @param null $sort
     * @param bool $isAsc
     * @return AllUsersViewData
     */
    public function getAll($sort = null, $isAsc = true): AllUsersViewData;

    public function findByFilter($gender, $orientation, $country, $city, $minAge, $maxAge, $sort = null, $isAsc = true): AllUsersViewData;

    public function findOne($id): User;
}