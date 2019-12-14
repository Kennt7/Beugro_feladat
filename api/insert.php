<?php 




header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require_once("adb_kat.php");

$db_object = new Dbase();

$connection = $db_object->connect();


$data = json_decode(file_get_contents("php://input"));

$msg['message'] = '';







?>