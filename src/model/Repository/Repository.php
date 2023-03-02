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

    public function search($table, array $conditions, $column = ['*'])
    {
        $query = $this->queryBuilder::table($table)->select($column);
        foreach ($conditions as $condition) {
            $query = $query->where($condition[0], $condition[1]);
        }
        return $query->get();
    }


    public function read($table, $column = ['*'])
    {
        return $this->queryBuilder::table($table)->select($column)->where('is_delete', 0)->get();
    }

    public function find($table, $index)
    {

        return $this->queryBuilder::table($table)->select()->where('id', $index)->first();
    }


    public function update($table, $index, $value)
    {
        return $this->queryBuilder::table($table)->update($index, $value);
    }

    public function delete($table, $index)
    {
        return $this->queryBuilder::table($table)->delete($index);
    }
}
