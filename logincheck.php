<?php





if(isset($_POST['submit'])){
    $errors=array();
    
    $noerror=true;
}


//username
if(empty($_POST['username'])){
    $noerror=false;
    array_push($errors,"The username required!");
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


?>



