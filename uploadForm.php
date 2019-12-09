<!doctype HTML>
<?php header("Content-Type: text/html; charset=UTF-8"); ?>

<html>

	<head>
		<title></title>
	</head>
	
	<body>
	
	<!--Fájfeltöltő űrlap -->
	<form action="upload_pic.php" method="post"
    enctype="multipart/form-data">
    <label for="file">Fájlnév:</label>
    <input type="file" name="file" id="file">
    <br>
    <input type="submit" name="elkuld" value="elkuld">
  </form>
	</body>
	
<html>