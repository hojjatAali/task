<?php

namespace Src\model\Repository;

use Src\Core\QueryBuilder;
use Src\model\database\Connection;

class Repository
{
    private QueryBuilder $queryBuilder;

    public function __construct()
    {
        $this->queryBuilder = new QueryBuilder;

    }


    public function finedByEmail($email)
    {
        return $this->queryBuilder::table('user')->select()->where('email', $email)->first();

    }

    public function insert($data, $table)
    {
        return $this->queryBuilder::table($table)->create($data);

    }

    public function read($table, $column = null)
    {
        return $this->queryBuilder::table($table)->select($column)->get();

    }

    public function find($table, $index)
    {

        return $this->queryBuilder::table($table)->select()->where('id', $index)->first();


    }
}
