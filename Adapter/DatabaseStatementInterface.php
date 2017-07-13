<?php
/**
 * Created by PhpStorm.
 * User: PC1
 * Date: 9.6.2017 г.
 * Time: 13:19
 */

namespace Adapter;


interface DatabaseStatementInterface
{
    public function execute(array $params = []);

    public function fetcRow();

    public function fetchAll();

    public function fetchObject($className);
}