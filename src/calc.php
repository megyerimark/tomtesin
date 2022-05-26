<?php

// * File: tomtesin.html
// * Author: Megyeri Márk Máté
// * Copyright: 2022, Megyeri Márk Máté
// * Group: Szoft I/N
// * Date: 2021-05-26
// * Github: https://github.com/megyerimark/
// * Licenc: GNU GPL

echo file_get_contents('templates/head.html');



$page=file_get_contents('templates/calc.html');


$tomeg= $_GET['tomeg'];
$magassag= $_GET['magassag'];




function calcArea($tomeg,$magassag){
    
    $t=$tomeg;
    $area=$t/$magassag*$magassag;
   


    return $area;
}

$page=str_replace('{{result}}', $area,$page);

echo $page;

?>