<?php
/**
 * Created by PhpStorm.
 * User: yuriy
 * Date: 25.06.18
 * Time: 14:29
 */

namespace App\DesignPatterns\Database;

class SqlQueryBuilder
{
    private $fields = '*';
    private $tableName;
    private $condition;

    public function select($fields)
    {
        $this->fields = $fields;

        return $this;
    }

    public function from($tableName)
    {
        $this->tableName = $tableName;

        return $this;
    }

    public function where($condition)
    {
        $this->condition = $condition;

        return $this;
    }

    public function getQuery()
    {
        return \sprintf(
            'SELECT %s FROM %s WHERE %s',
            $this->fields,
            $this->tableName,
            $this->condition
        );
    }
}

