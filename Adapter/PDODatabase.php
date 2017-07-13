<?php
/**
 * Created by PhpStorm.
 * User: PC1
 * Date: 9.6.2017 г.
 * Time: 13:23
 */

namespace Adapter;


class PDODatabase implements DatabaseInterface
{
    /**
     * @var \PDO
     */
    private $pdo;

    public function __construct(string $dbHost, string $dbName, string $dbCharset, string $dbUser, string $dbPass)
    {
        $dsn = "mysql:host=" . $dbHost . ";dbname=" . $dbName . ";charset=" . $dbCharset;
        $this->pdo = new \PDO($dsn, $dbUser, $dbPass);
    }

    public function prepare($sql): DatabaseStatementInterface
    {
       $pdoStatement = $this->pdo->prepare($sql);
       $statement = new PDODatabaseStatement($pdoStatement);

       return $statement;
    }

    public function errorInfo()
    {
        return $this->pdo->errorInfo();
    }

    public function lastId()
    {
        return $this->pdo->lastInsertId();
    }
}