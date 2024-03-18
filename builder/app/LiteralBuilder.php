<?php

namespace App;

class LiteralBuilder implements QueryBuilder
{
    protected $query;

    public function choose(string $fields): QueryBuilder
    {
        $this->query = "I'm selecting fields: $fields ";
        return $this;
    }

    public function from(string $table): QueryBuilder
    {
        $this->query .= "from the table: $table ";
        return $this;
    }

    public function where(string $field, string $operator, string $value): QueryBuilder
    {
        $this->query .= "where $field $operator $value ";
        return $this;
    }

    public function getQuery(): string
    {
        return $this->query;
    }
}
