<?php
$onetwo = ['1', '2'];
$three = '3';
addItemToArray($onetwo, $three);

function addItemToArray($array, $item)
{
    array_push($array, $item);
    var_dump($array);
}
var_dump($onetwo);

addItemToArray2($onetwo, $three);

function addItemToArray2(&$array, $item)
{
    array_push($array, $item);
    var_dump($array);
}
var_dump($onetwo);
?>