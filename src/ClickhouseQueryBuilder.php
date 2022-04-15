<?php

declare(strict_types=1);

namespace FOD\DBALClickHouse;

class ClickhouseQueryBuilder extends \Doctrine\DBAL\Query\QueryBuilder
{
    public function fullOuterJoin($fromAlias, $join, $alias, $condition = null) {
        return $this->add('join', [
            $fromAlias => [
                'joinType'      => 'full outer',
                'joinTable'     => $join,
                'joinAlias'     => $alias,
                'joinCondition' => $condition,
            ],
        ], true);
    }
}
