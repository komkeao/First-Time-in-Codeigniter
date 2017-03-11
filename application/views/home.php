<html>
<head>
	<meta charset="UTF-8">
	<title><?php echo $title;?></title>
</head>
<body>
<form action="index.php/saveImage/index" method="POST" enctype="multipart/form-data" >
<input type="file" name="featured" id="featured" />
<input type="submit" value="upload">
</form>
</body>
</html>