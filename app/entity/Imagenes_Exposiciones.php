<?php
namespace dwes\app\entity;

use dwes\app\entity\IEntity;

class Imagenes_Exposiciones implements IEntity {
    /**
     * @var int
     */
    private $idImagen;
    
    /**
     * @var int
     */
    private $idExposicion;

    public function __construct(int $idImagen = 0, int $idExposicion = 0)
    {
        $this->idImagen = $idImagen;
        $this->idExposicion = $idExposicion;
    }

    /**
     * @return int
     */
    public function getId(): int {
        return 0;
    }

    /**
     * @return int
     */
    public function getIdImagen(): ?int
    {
        return $this->idImagen;
    }

    /**
     * @return int
     */
    public function getIdExposicion(): ?int
    {
        return $this->idExposicion;
    }

    /**
     * @param int idImagen
     * @return Imagenes_Exposiciones
     */
    public function setIdImagen(int $idImagen): Imagenes_Exposiciones {
        $this->idImagen = $idImagen;
        return $this;
    }

    /**
     * @param int idExposicion
     * @return Imagenes_Exposiciones
     */
    public function setIdExposicion(int $idExposicion): Imagenes_Exposiciones {
        $this->idExposicion = $idExposicion;
        return $this;
    }

    public function toArray(): array
    {
        return [
            'idImagen' => $this->getIdImagen(),
            'idExposicion' => $this->getIdExposicion()
        ];
    }
}