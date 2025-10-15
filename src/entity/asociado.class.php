<?php
    class Asociado {
        const RUTA_LOGOS_ASOCIADOS = '/public/images/asociados/';

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
        private $logo;

        /**
         * @var string
         */
        private $descripcion;

        /**
         * @param string $nombre
         * @param string $logo
         * @param string $descripcion
         */
        public function __construct(string $nombre="", string $logo="", string $descripcion="") {
            $this->id = null;
            $this->nombre = $nombre;
            $this->logo = $logo;
            $this->descripcion = $descripcion;
        }

        // GETTERS
        
        /**
         * @return int
         */
        public function getId():?int {
            return $this->id;
        }
        
        /**
         * @return string
         */
        public function getNombre():?string {
            return $this->nombre;
        }
        
        /**
         * @return string
         */
        public function getLogo():?string {
            return $this->logo;
        }
        
        /**
         * @return string
         */
        public function getDescripcion():?string {
            return $this->descripcion;
        }

        // SETTERS

        /**
         * @param int $id
         * @return Asociado
         */
        public function setId(int $id):Asociado {
            $this->id = $id;
            return $this;
        }

        /**
         * @param string $nombre
         * @return Asociado
         */
        public function setNombre(string $nombre):Asociado {
            $this->nombre = $nombre;
            return $this;
        }

        /**
         * @param string $logo
         * @return Asociado
         */
        public function setLogo(string $logo):Asociado {
            $this->logo = $logo;
            return $this;
        }

        /**
         * @param string $descripcion
         * @return Asociado
         */
        public function setDescripcion(string $descripcion):Asociado {
            $this->descripcion = $descripcion;
            return $this;
        }



        public function getUrl():string {
            return self::RUTA_LOGOS_ASOCIADOS . $this->getLogo();
        }

        public function __toString():string {
            return $this->getDescripcion();
        }
    }