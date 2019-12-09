
<?php header("Content-Type: text/html; charset=UTF-8"); ?>
<!---<php require_once("adb_kat.inc.php")?>  -->
<html>
    
	<head>
		<title>Login</title>
        
        <link rel="stylesheet" type="text/css"  href="css/login.css">
	</head>
	
	<body>
        <h1>Login</h1>
        <div class="container">
            
            <form action="logincheck.php" method="post">           
                <b>Username:</b><br />
                <input type="text" name="username"><br />
                <b>Password:</b><br />
                <input type="password" name="password"><br />
                <b>Repassword:</b><br />
                <input type="password" name="password2"><br /><br />   
                <input value="registration" type="submit" name="submit">
            </form>
        </div>
	</body>
	
<html>