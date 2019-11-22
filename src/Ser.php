<?php


namespace Vjoc {

    abstract class Ser
    {
        protected $color;
        protected $nojos;
        protected $idioma;

        protected function show($string)
        {
            echo '<p>' . $string . '</p>';
        }
    }
}
