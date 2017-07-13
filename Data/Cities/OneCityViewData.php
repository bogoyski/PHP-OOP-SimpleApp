<?php
/**
 * Created by PhpStorm.
 * User: PC1
 * Date: 10.6.2017 г.
 * Time: 15:37
 */

namespace Data\Cities;


class OneCityViewData
{
    private $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


}