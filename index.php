<?php
    ini_set('display_errors','On');
    require __DIR__.'/vendor/autoload.php';

    use Vjoc\Poblacion;
    use Vjoc\Venusino;
    use Vjoc\Terrestre;
    use Vjoc\Helper;

    $poblacion=new Poblacion();
    $max=50;
    Helper::poblar($max,$poblacion);
    $total=$poblacion->count();
    Helper::show("La población actual es: {$total} personas");
    $v=new Venusino();
    $v->lanzar_bomba();
