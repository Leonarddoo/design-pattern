<?php

namespace App;
class MySqlQueryBuilder implements QueryBuilder
{
    protected $query;

    public function select(string $fields): QueryBuilder
    {
        $this->query = "SELECT $fields ";
        return $this;
    }

    public function from(string $table): QueryBuilder
    {
        $this->query .= "FROM $table ";
        return $this;
    }

    public function where(string $field, string $operator, string $value): QueryBuilder
    {
        $this->query .= "WHERE $field $operator $value ";
        return $this;
    }

    public function getQuery(): string
    {
        return $this->query;
    }
}
