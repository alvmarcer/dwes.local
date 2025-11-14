<?php
namespace dwes\app\repository;

use dwes\app\database\QueryBuilder;
use dwes\app\entity\Usuario;

class UsuariosRepository extends QueryBuilder
{
    /**
     * @param string $table
     * @param string $classEntity
     */
    public function __construct(string $table = 'usuario', string $classEntity = Usuario::class)
    {
        parent::__construct($table, $classEntity);
    }
}
