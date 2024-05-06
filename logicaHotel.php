<?php

require('hotel.php');


$instanciaHotel = new Hotel;

$instanciaHotel->cantPersonas = $_POST["personas"];
$instanciaHotel->cantDias = $_POST["dias"];

$instanciaHotel->calcTarifa($instanciaHotel->cantPersonas, $instanciaHotel->cantDias);
