<?php


echo file_get_contents('templates/head.html');



$page=file_get_contents('templates/calc.html');


$tomeg= $_POS['tomeg'];
$magassag= $_POST['magassag'];




function calcArea($tomeg,$magassag){
    
    $t=$tomeg/($magassag*$magassag);

    return $t;
}

$page=str_replace('{{result}}',$t, $page);

echo $page;

?>