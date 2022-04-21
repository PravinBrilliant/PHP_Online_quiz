<?php $db=mysqli_connect("localhost","root","","demo");
session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title>Quiz Admin page</title>
</head><form method="post">
<body><div class="container"><label>Name:</label><br>
<input type="text" name="name" required><br><br>
<label>Password :</label><br>
<input type="password" name="password" required><br><br>
<input type="submit" name="submit" class="btn btn-primary">

</label></div></form>


</body>
</html>
<?php

	if (isset($_POST['submit'])) {
		$name=$_POST['name'];
		$password=$_POST['password'];
   	$dup=mysqli_query($db,"Select * from admin where name='".$name."' AND password='".$password."'limit 1");
$_SESSION['name']=$name;
if(mysqli_num_rows($dup)>0){
	echo '<script>alert("loggin succesfully");window.location.href="add.php"</script>';
}else{
	echo '<script>alert("loggin failed");window.location.href="admin.php"</script>';
}

	}