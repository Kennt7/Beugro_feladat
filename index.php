
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
		
		<h1>
			<legend>Customer orders</legend>
		</h1>
    
		<div class=".container">
            <div class=".col-md-4">
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

            <form action="" method="post">
           
            <div class="crudfields">
            <input id="create" type="button" onclick="" value="Create"><br />
                <br />
            <input id="read" type="button" onclick="" value="Read"><br />
                <br />
            <input id="update" type="button" onclick="" value="Update"><br />
                <br />
            <input type="text" value="update"><br /><br />
            <input id="delete" type="button" onclick="" value="Delete"><br />
                <br />   
            </div>
            </form>
               
            </div>
    
		</div>
	</body>
	
<html>