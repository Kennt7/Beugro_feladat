<?php 

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require_once("adb_kat.php");

$db_connection = new Dbase();
$connection = $db_connection->connect();


//check get id parameter or not
if(isset($_GET['productID'])){
$product_id = filter_var($GET['productID'],FILTER_VALIDATE_INT, [
    'options' => [
        'default' => 'all_products',
        'min_range' => 1
    ]
]);
}
else{
    $product_id = 'all_products';
}

if($statement->rowCount()>0){

    $products_array = [];

    while($row = $statement->fetch(PDO::FETCH_ASSOC)){

        $product_data = [
            'productID' => $row['productID'],
            'orderID' => $row['orderID'],
            'amount' => $row['amount'],
            'color' => $row['color'],
            'price' => $row ['price']
        ];
        //push product data in our $products_array Array
        array_push($products_array,$product_data);

    }//end while

    json_encode($products_array);
}
else{
    //if no product in our database

    echo json_encode(['message' =>'No product found']);

}


?>