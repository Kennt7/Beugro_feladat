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

if(isset($data->productID)){

    $msg['message'] = '';
    $product_id = $data->productID;
    $order_id = $data->orderID;

    //get product by id from database

     $get_product = "SELECT * FROM 'product' WHERE id=:product_id";
     $get_statement = $connection->prepare($get_product);
     $get_statement->bindValue(':product_id',$product_id,PDO::PARAM_INT);
     $get_statement-execute();


    if($get_statement->rowCount()>0){

        //fetch product from database
        $row = $get_statement->fetch(PDO::FETCH_ASSOC);

        //check if new update request data is available then set it otherwise set olda data
        $product_amount = isset($data->amount) ? $data->amount : $row['amount'];
        $product_color = isset($data->color) ? $data->color : $row['color'];
        $product_price = isset($data->price) ? $data->price : $row['price'];

        $update_query = "UPDATE 'product' SET amount = :amount, color = :color, price = :color WHERE productID = :productID";

        $update_statement = $connection-prepare($update_query);

        $update_statement->bindValue(':amount',htmlspecialchars(strip_tags($product_amount)), PDO::PARAM_STR);
        $update_statement->bindValue(':color',htmlspecialchars(strip_tags($product_color)), PDO::PARAM_STR);
        $update_statement->bindValue(':price',htmlspecialchars(strip_tags($product_price)), PDO::PARAM_STR);
        $update_statement->bindValue(':prodcutID',$product_id,PDO::PARAM_INT);
        $update_statement->bindValue(':orderID',$order_id,PDO::PARAM_INT);

        if($update_statement->execute()){
            $msg = ['message'] = 'Data updated done!';
        }
        else{
            $msg['message'] = 'data not updated!!!';
        }


    }
    else{
        $msg['message'] = 'productID is not valid';
    }

    echo json_encode($msg);

}






?>