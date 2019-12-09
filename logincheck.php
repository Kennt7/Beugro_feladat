<?php


require_once("adb_kat.php");


//if submit button exists
if(isset($_POST['submit'])){
    $errors=array();
    
    $noerror=true;
    
    
    //username field check
if(empty($_POST['username'])){
    $noerror=false;
    array_push($errors,"The username required!");
}

//password filed check
if(empty($_POST['password'])){
    $noerror=false;
    array_push($errors,"The password required!");
}

//repassword check
if(empty($_POST['password2'])){
    $noerror=false;
    array_push($errors,"The password confirmation required!");
}



//passwordcheck
if(!($_POST['password'] == $_POST['password2'])){
    
    $noerror=false;
    array_push($errors,"The passwords not matching!");
}

//print errors
if(!empty($errors)){
    foreach($errors as $key){
        
        echo $key."<br />";
    }
}

if($noerror){
    $username=mysqli_real_escape_string($pdo,$_POST['username']);
}
    
}




$pdo->close();


?>



