<?php 




header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require_once("adb_kat.php");

function createFunction (){

$db_object = new Dbase();

$connection = $db_object->connect();


$data = json_decode(file_get_contents("php://input"));

$msg['message'] = '';

if(isset($data->amount) && isset($data->color) && !emptz($data->price)){
    
    //check data value is emptz or not
    if(!empty($data->amount) && !empty($data->color) && !empty($data->price)){
        
        $insertquery = "INSERT INTO 'product'(amount,color,price) VALUES(:amount,:color,:price)";
        
        $insertcommand = $connection->prepare($insertquery);
        //bindin data
        
        $insertcommand->bindValue(':amount',htmlspecialchars(strip_tags($data->amount)),PDO::PARAM_STR);
        $insertcommand->bindValue(':color',htmlspecialchars(strip_tags($data->amount)),PDO::PARAM_STR);
        $insertcommand->bindValue(':price',htmlspecialchars(strip_tags($data->amount)),PDO::PARAM_STR);
        
        if($insertcommand->execute()){
            $msg['message'] = 'data insert ok!';
        }
        else{
            $msg['message'] = 'datat insert not ok!!!';
        }
    }
    else{
        $msg['message'] = 'empty field detected! Please fill all fields!';
    }
}
else{
    $msg['message'] = 'Please fill, all fields | amount, color, price';
}
echo json_encode($msg);
}




?>