<?php


namespace Vjoc;

use Vjoc\Helper;

class Poblacion extends \ArrayObject
{
    private $arr_pob;
    private $n_total;

    function __construct()
    {
        parent::__construct();
        Helper::show("Creando poblacion humana......");

    }
}