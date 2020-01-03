
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
        
    <link rel="stylesheet" href="./css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="./css/fonts.css"/>
    <link rel="stylesheet" type="text/css" href="./css/app.css"/>
    <link rel="stylesheet" type="text/css" href="./css/index.css"/>
        
	</head>
	
	<body>


		<header>
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
		            <h1>
			            <legend>Products</legend>
		            </h1>
                </div>
            </div>
        </header>
        
        
        <nav class="navbar navbar-toggleable-md">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> 
            </button>
            <a class="navbar-brand" href="index.php">
                
                CRUD
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Main<span class="sr-only">(current)</span></a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.php">Products</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
        </nav>
        <main>
             <div class=".col-md-8">
                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th>ProductId</th>
                                <th>OrderId</th>
                                <th>Product_group</th>
                                <th>Product_name</th>
                                <th>Amount</th>
                                <th>Color</th>
                                <th>Price</th>
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
                </table><!---table end-->
             </div><!---col-md-8 end--->
        <section>
                <div class="container">
                    <div class="btn-group btn-group-md-4">
                        <div class="row">
                            
                            <div class="col-md-3" style="background-color:black">
                                <button type="button" class="btn btn-success">
                                Create</button>
                            </div>
                            
                            <div class="col-md-3" style="background-color:white">
                                <button type="button" class="btn btn-primary">
                                Read</button>
                            </div>
                            
                            <div class="col-md-3" style="background-color:black">
                                <button type="button" class="btn btn-secondary">
                                Update</button>
                            </div>
                        <div class="col-md-3" style="background-color:white">
                            <button type="button" class="btn btn-danger">
                                Delete</button>
                        </div>
                            
                        </div><!---row end--->
                    </div><!---btn groupend--->
                </div><!---container end--->
            </section> 
                
        </main>
	</body>
	
<html>