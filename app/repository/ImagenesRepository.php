<?php
namespace dwes\app\repository;

use dwes\app\entity\Imagen;
use dwes\app\database\QueryBuilder;

class ImagenesRepository extends QueryBuilder
{
    /**
     * @param string $table
     * @param string $classEntity
     */
    public function __construct(string $table = 'imagenes', string $classEntity = Imagen::class)
    {
        parent::__construct($table, $classEntity);
    }
}
