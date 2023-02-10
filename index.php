<?php

//camelCase
declare(strict_types=1);
include_once 'Klasa.php';

    $finalnames = Rekurzija::names(); //pozovi gunkciju iz klase koja vraca spojena dva imena kao string
    $rekurzija = new Rekurzija($finalnames); //taj string proslijedi u funkciju koja ce imena pretvoriti u brojeve i dati valjani postotak (string)

echo PHP_EOL . 'THE CHANCES FOR TRUE LOVE ARE: ' . $rekurzija . '%';