<?php
/**
 * Created by PhpStorm.
 * User: mrren
 * Date: 2019/6/28
 * Time: 1:37 PM
 */

require_once __DIR__."/../src/sign.php";


$secad = "asdfasdfasfd";
$data = ["a" => 1, "nb" => 4,1=>"dddss"];

$data = \epii\sign\sign::encode($data, $secad);

var_dump($data);

var_dump(\epii\sign\sign::check($data,$secad));