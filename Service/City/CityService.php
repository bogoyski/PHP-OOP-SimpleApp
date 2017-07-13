<?php
/**
 * Created by PhpStorm.
 * User: PC1
 * Date: 10.6.2017 г.
 * Time: 15:38
 */

namespace Service\City;


use Adapter\DatabaseInterface;
use Data\Cities\AllCitiesViewData;
use Data\Cities\City;
use Data\Cities\OneCityViewData;

class CityService
{
    /**
     * @var DatabaseInterface
     */
    private $db;

    /**
     * CityService constructor.
     * @param DatabaseInterface $db
     */
    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;
    }

    public function getOneCity(): OneCityViewData
    {
        $stmt = $this->db->prepare("SELECT name FROM cities LIMIT 1");
        $stmt->execute();
        $city = $stmt->fetchObject(OneCityViewData::class);

        return $city;
    }

    public function getAllCities(): AllCitiesViewData
    {
        $allCities = new AllCitiesViewData();

        $stmt = $this->db->prepare("SELECT id, name FROM cities");
        $stmt->execute();
        $callable = function () use ($stmt) {
            while ($city = $stmt->fetchObject(City::class)) {
                yield $city;
            }
        };

        $allCities->setCities($callable);


        return $allCities;
    }

}