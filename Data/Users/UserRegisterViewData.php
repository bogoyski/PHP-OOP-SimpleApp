<?php
/**
 * Created by PhpStorm.
 * User: PC1
 * Date: 9.6.2017 г.
 * Time: 15:12
 */

namespace Data\Users;


use Data\Cities\City;
use Data\Countries\Country;
use Data\Genders\Gender;
use Data\Orientations\Orientation;

class UserRegisterViewData
{
    /**
     * @var Gender[]|\Generator
     */
    private $genders;

    /**
     * @var Country[]|\Generator
     */
    private $countries;

    /** @var  City[]|\Generator */
    private $cities;

    /** @var  Orientation[]|\Generator */
    private $orientations;

    /**
     * @return Gender[]|\Generator
     */
    public function getGenders()
    {
        return $this->genders;
    }

    /**
     * @param callable $genders
     */
    public function setGenders(callable $genders)
    {
        $this->genders = $genders();
    }

    /**
     * @return Country[]|\Generator
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * @param callable $countries
     */
    public function setCountries(callable $countries)
    {
        $this->countries = $countries();
    }

    /**
     * @return City[]|\Generator
     */
    public function getCities()
    {
        return $this->cities;
    }

    /**
     * @param callable $cities
     */
    public function setCities(callable $cities)
    {
        $this->cities = $cities();
    }

    /**
     * @return Orientation[]|\Generator
     */
    public function getOrientations()
    {
        return $this->orientations;
    }

    /**
     * @param callable $orientations
     */
    public function setOrientations(callable $orientations)
    {
        $this->orientations = $orientations();
    }

}