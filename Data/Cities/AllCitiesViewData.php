<?php
/**
 * Created by PhpStorm.
 * User: PC1
 * Date: 10.6.2017 г.
 * Time: 15:46
 */

namespace Data\Cities;


class AllCitiesViewData
{
    /**
     * @var City[]|\Generator
     */
    private $cities;

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
    public function setCities(callable $callable)
    {
        $this->cities = $callable();
    }


}