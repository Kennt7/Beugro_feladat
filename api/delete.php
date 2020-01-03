<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


require_once("adb_kat.php");

$db_connection = new Dbase();
$connection = $db_connection->connect();


//get data from request
$data = json_decode(file_get_contents("php://input"));


//checking if id available on $data

if(isset($data->productID)){
    $msg =['message'] = '';


$product_id = $data->productId;
//get product by id from database

$check_product = "SELECT * FROM 'products' WHERE productID=:product_id";
$check_product_stmt = $connection->prepare($check_product);
$check_product_stmt->bindValue(':product_id', $product_id,PDO::PARAM_INT);
$check_product_stmt->execute();


if($check_product_stmt->rowCount()>0){

    //delete product by id from database

    $delete_product = "DELETE FROM 'product' WHERE productID=:product_id";
    $delete_post_stmt = $connection->prepare($delete_product);
    $delete_product->bindValue('productID',$product_id,PDO::PARAM_INT);

    if($delete_post_stmt->execute()){
        $msg['message'] = 'Product deleted!';
    }
    else{
        $msg['message'] = 'post not deleted';
    }
}
else{
    $msg['message'] ='Invalid ID';
}

echo json_encode($msg);

}

?>