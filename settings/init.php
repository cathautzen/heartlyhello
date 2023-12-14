<?php
require "classes/classDB.php";

define("CONFIG_LIVE", "1"); // 0: Test enviroment || 1: Live enviroment

if(CONFIG_LIVE == 0){
    $DB_SERVER = "localhost";
    $DB_NAME = "HeartlyHello";
    $DB_USER = "root";
    $DB_PASS = "";
}else{
    $DB_SERVER = "mysql28.unoeuro.com";
    $DB_NAME = "cautzen_dk_db";
    $DB_USER = "cautzen_dk";
    $DB_PASS = "bpmzEFywxtGB9eadA2H6";
}

$db = new db($DB_SERVER, $DB_NAME, $DB_USER, $DB_PASS);