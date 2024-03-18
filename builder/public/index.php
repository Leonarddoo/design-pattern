<?php
require('../vendor/autoload.php');

use App\MySqlQueryBuilder;
use App\LiteralBuilder;

$queryBuilder = new MySqlQueryBuilder();

$queryBuilder->select('name, age')
    ->from('users')
    ->where('age', '>', '18');

echo $queryBuilder->getQuery() . "\n";

$literalBuilder = new LiteralBuilder();

$literalBuilder->select('name, age')
    ->from('users')
    ->where('age', '>', '18');

echo $literalBuilder->getQuery(). "\n";