<?php

class Hotel{
    var $cantPersonas;
    var $cantDias;

    
    function calcTarifa($cantPersonas, $cantDias){
        $precioBase;
        $precioConIva;
        $precioConDescuento;
        $tarifa;
        $iva = 0.19;
        $individual = 2500;
        $doble = 4600;
        $familiar = 5200;
        if($cantPersonas == 1){
            $precioBase = $individual * $cantDias;
            $precioConIva = $precioBase + ($precioBase*$iva);
            $precioConDescuento = $precioConIva - ($precioConIva*0.05);
            $tarifa = 'Individual';
        }else if($cantPersonas == 2){
            $precioBase = $doble * $cantDias;
            $precioConIva = $precioBase + ($precioBase*$iva);
            $precioConDescuento = $precioConIva - ($precioConIva*0.09);
            $tarifa = 'Doble';
        }else if($cantPersonas > 2){
            $precioBase = $familiar * $cantDias;
            $precioConIva = $precioBase + ($precioBase*$iva);
            $precioConDescuento = $precioConIva - ($precioConIva*0.15);
            $tarifa = 'Familiar';
        }
        echo "<h1>Tarifa: {$tarifa} / Dias de estadia: {$cantDias}</h1>";
        echo "<h2>Precio sin iva: {$precioBase}</h2>";
        echo "<h2>Precio con iva: {$precioConIva}</h2>";
        echo "<h2>Precio con descuento: {$precioConDescuento}</h2>";
    }
}