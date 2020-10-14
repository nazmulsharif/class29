<?php
	if(isset($_POST['submit'])){
		$pic_name =  $_FILES['image']['name'];
		$arr = explode('.', $pic_name);
		$extPic = end($arr);
		$upic_name = time().$pic_name;
		$epic_name = md5($upic_name).'.'.$extPic;
		$pic_tname =  $_FILES['image']['tmp_name'];
		move_uploaded_file($pic_tname , 'images/'.$epic_name);
	}	


?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="" enctype="multipart/form-data" method="post">
		<input type="file" name="image">
		<input type="submit" name="submit">
	</form>



	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	
</body>
</html>


<!-- 1. image name
2. image tmp_name
3. imagename -string to array(explode)
4. end()- image format
5. image name- time()
6. md5+ concate with image format
7.move_uploaded_file() -->