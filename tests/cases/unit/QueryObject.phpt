<?php

/**
 * @Test: [unit] Minetro\Nextras\Orm\QueryObject\QueryObject
 */

use Nextras\Dbal\Drivers\Mysqli\MysqliDriver;
use Nextras\Dbal\QueryBuilder\QueryBuilder;
use Tester\Assert;
use Tests\Mocks\SimpleQueryObject;

require_once __DIR__ . '/../../bootstrap.php';

test(function () {
    $qo = new SimpleQueryObject();
    $qb = $qo->fetch(new QueryBuilder(new MysqliDriver()));

    Assert::type(QueryBuilder::class, $qb);
    Assert::equal('SELECT [*] FROM [foobar]', $qb->getQuerySql());
});
