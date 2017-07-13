<?php
/**
 * Created by PhpStorm.
 * User: PC1
 * Date: 9.6.2017 г.
 * Time: 13:50
 */

namespace Adapter;


class PDODatabaseStatement implements DatabaseStatementInterface
{
    /**
     * @var \PDOStatement
     */
    private $statement;

    /**
     * PDODatabaseStatement constructor.
     * @param \PDOStatement $statement
     */
    public function __construct(\PDOStatement $statement)
    {
        $this->statement = $statement;
    }


    public function execute(array $params = [])
    {
        return $this->statement->execute($params);
    }

    public function fetcRow()
    {
        return $this->statement->fetch(\PDO::FETCH_ASSOC);
    }

    public function fetchAll()
    {
        return $this->statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function fetchObject($className)
    {
        return $this->statement->fetchObject($className);
    }
}