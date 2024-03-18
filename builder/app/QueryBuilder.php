<?php

namespace App;

interface QueryBuilder
{
    public function select(string $fields): QueryBuilder;
    public function from(string $table): QueryBuilder;
    public function where(string $field, string $operator, string $value): QueryBuilder;
    public function getQuery(): string;
}