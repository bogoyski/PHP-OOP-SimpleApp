<?php
/**
 * Created by PhpStorm.
 * User: PC1
 * Date: 9.6.2017 г.
 * Time: 13:14
 */

namespace Adapter;


interface DatabaseInterface
{
    public function prepare($sql): DatabaseStatementInterface;

    public function errorInfo();

    public function lastId();
}