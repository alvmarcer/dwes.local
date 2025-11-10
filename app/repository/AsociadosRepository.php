<?php
namespace dwes\app\repository;

use dwes\app\entity\Imagen;
use dwes\app\entity\Asociado;
use dwes\app\database\QueryBuilder;

class AsociadosRepository extends QueryBuilder
{
    /**
     * @param string $table
     * @param string $classEntity
     */
    public function __construct(string $table = 'asociado', string $classEntity = Asociado::class)
    {
        parent::__construct($table, $classEntity);
    }
}
