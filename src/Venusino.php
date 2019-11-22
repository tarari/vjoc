<?php


namespace Vjoc {


    class Venusino extends ExtraTerrestre implements Dominarplaneta
    {
        public function __construct()
        {
            $this->color = "Rojo";
        }
         public function __toString()
        {
            return __CLASS__;
        }
        public function lanzar_bomba()
        {
            $this->show("[{$this}]: Hemos lanzado una bomba atómica!!");
        }

        public function ataque_risa()
        {
            $this->show("[{$this}]: Sus morireis de risa!!");
        }

        public function agotar_recursos()
        {
            $this->show("[{$this}]: Sus quedareis sin na!!");
        }

    }
}