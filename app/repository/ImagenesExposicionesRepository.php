<?php
namespace dwes\app\repository;

use dwes\app\entity\Imagenes_Exposiciones;
use dwes\app\database\QueryBuilder;

class ImagenesExposicionesRepository extends QueryBuilder
{
    /**
     * @param string $table
     * @param string $classEntity
     */
    public function __construct(string $table = 'imagenes_exposiciones', string $classEntity = Imagenes_Exposiciones::class)
    {
        parent::__construct($table, $classEntity);
    }
}
