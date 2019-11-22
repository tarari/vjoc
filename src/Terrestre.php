<?php


namespace Vjoc{

use Vjoc\Vivir;

class Terrestre extends Ser implements Vivir
{
    /**
     * @return mixed
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * @param mixed $pais
     */
    public function setPais($pais)
    {
        $this->pais = $pais;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    private $nombre;
    private $pais;
    private $description;

    public function reproducir()
    {

       $this->show("Vaya! uno más en la familia!");
    }

    public function cultivar()
    {
        show("Agrícolas! Uníos!!!");
    }
}
}