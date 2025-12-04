<?php
namespace dwes\app\entity;

use dwes\app\entity\IEntity;

class Exposicion implements IEntity {
    /**
     * @var int
     */
    private $id;
    
    /**
     * @var string
     */
    private $nombre;
    
    /**
     * @var string
     */
    private $descripcion;
    
    /**
     * @var string
     */
    private $fechaInicio;
    
    /**
     * @var string
     */
    private $fechaFin;
    
    /**
     * @var bool
     */
    private $activa;
    
    /**
     * @var int
     */
    private $idUsuario;

    /**
     * @param int $id
     * @param string $nombre
     * @param string $descripcion
     * @param string $fechaInicio
     * @param string $fechaFin
     * @param bool $activa
     * @param int $idUsuario
     */
    public function __construct(string $nombre = "", string $descripcion = "", string $fechaInicio = "", string $fechaFin = "", bool $activa = true, int $idUsuario = 0)
    {
        $this->id = null;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->fechaInicio = $fechaInicio;
        $this->fechaFin = $fechaFin;
        $this->activa = $activa;
        $this->idUsuario = $idUsuario;
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    /**
     * @return string
     */
    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    /**
     * @return string
     */
    public function getFechaInicio(): ?string
    {
        return $this->fechaInicio;
    }

    /**
     * @return string
     */
    public function getFechaFin(): ?string
    {
        return $this->fechaFin;
    }

    /**
     * @return bool
     */
    public function getActiva(): ?bool
    {
        return $this->activa;
    }

    /**
     * @return int
     */
    public function getIdUsuario(): ?int
    {
        return $this->idUsuario;
    }

    /**
     * @param string $nombre
     * @return Exposicion
     */
    public function setNombre(string $nombre): Exposicion
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * @param string $descripcion
     * @return Exposicion
     */
    public function setDescripcion(string $descripcion): Exposicion
    {
        $this->descripcion = $descripcion;
        return $this;
    }

    /**
     * @param string $fechaInicio
     * @return Exposicion
     */
    public function setFechaInicio(string $fechaInicio): Exposicion
    {
        $this->fechaInicio = $fechaInicio;
        return $this;
    }

    /**
     * @param string $fechaFin
     * @return Exposicion
     */
    public function setFechaFin(string $fechaFin): Exposicion
    {
        $this->fechaFin = $fechaFin;
        return $this;
    }

    /**
     * @param bool $activa
     * @return Exposicion
     */
    public function setActiva(bool $activa): Exposicion
    {
        $this->activa = $activa;
        return $this;
    }

    /**
     * @param int $idUsuario
     * @return Exposicion
     */
    public function setIdUsuario(int $idUsuario): Exposicion
    {
        $this->idUsuario = $idUsuario;
        return $this;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->getId(),
            'nombre' => $this->getNombre(),
            'descripcion' => $this->getDescripcion(),
            'fechaInicio' => $this->getFechaInicio(),
            'fechaFin' => $this->getFechaFin(),
            'activa' => $this->getActiva(),
            'idUsuario' => $this->getIdUsuario()
        ];
    }
}
