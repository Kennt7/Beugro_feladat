
<?php require_once("adb_kat.php")?>
<html>
    <meta name="author" content="Nagy Zoltán">
    <meta charset="utf-8">
	<head>
		<title>Orders</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" type="text/css" href="css/index.css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js">
    </script>
        
	</head>
	
	<body>
		<header>
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
		            <h1>
			            <legend>Customer orders</legend>
		            </h1>
                </div>
            </div>
        </header>

        <main>
		<div class="container">
           
                <div class=".col-md">
                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th>OrderId</th>
                                <th>orderDate</th>
                                <th>CustomerId</th>
                            </tr>
                        </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
               
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
             </div>
            </div><!---container end-->
                <div class="container2">
            <div class="btn-group btn-group-md">
                <div class="row">
                    <div class="col-md col-sm">
                        <div class="">
                            <button type="button" class="btn btn-success">
                                Create</button>
                        </div>
                        <div class="">
                            <button type="button" class="btn btn-primary">
                                Read</button>
                        </div>
                        <div class="">
                            <button type="button" class="btn btn-secondary">
                                Update</button>
                        </div>
                        <div class="">
                            <button type="button" class="btn btn-danger">
                                Delete</button>
                        </div>
                       
                    </div>    
                </div>
            </div>
        </div><!---container end--->
        </main>
	</body>
	
<html>