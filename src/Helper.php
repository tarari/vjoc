<?php


namespace Vjoc;

use Vjoc\Poblacion;
use Vjoc\Terrestre;

class Helper
{
    static function show(String $string)
    {
        if ($string) {
            echo '<p>' . $string . '</p>';
        }
    }

    static function poblar(int $max,Poblacion $poblacion){
        for($i=0;$i<$max;$i++){
            $a=new Terrestre();
            $poblacion->append($a);
        }
    }
}