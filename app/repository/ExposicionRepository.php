<?php
namespace dwes\app\repository;

use dwes\app\entity\Exposicion;
use dwes\app\database\QueryBuilder;

class ExposicionRepository extends QueryBuilder
{
    /**
     * @param string $table
     * @param string $classEntity
     */
    public function __construct(string $table = 'exposiciones', string $classEntity = Exposicion::class)
    {
        parent::__construct($table, $classEntity);
    }
}
