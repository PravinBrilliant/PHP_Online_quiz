<?php $db=mysqli_connect("localhost","root","","demo"); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 	<link rel="stylesheet"  href="css/style.css"> -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title>Online quiz</title>
</head>
<body style="background-color: lightseagreen;"><form method="post">
	<div class="col-sm-12">
		<h2 align="center" style="padding-top: 3%; margin-left: -20%;">Demo Quiz</h2><br>
		<hr></div><div class="col-sm-9">
		<label style="margin-left: 40%;">Name :</label><br>
		<input type="text" name="name" style="padding-left: 50px; margin-left: 40%;" required><br><br>
		<label style="margin-left: 40%;">E-mail :</label><br>
		<input type="email" name="email" style="padding-left: 50px; margin-left: 40%;" required><br><br>
		<label style="margin-left: 40%;">Mobile no :</label><br>
		<input type="tel" name="mobile" pattern="{6789}[0-9]{9}" style="padding-left: 50px;margin-left: 40%; " required><br><br>
		<label style="margin-left: 40%;"> Feedback :</label><br>
		<input type="text" name="feedback" style="padding-bottom: 60px;padding-left: 50px;;margin-left: 40%;"><br><br>
		<input type="submit" name="submit" style="margin-left: 70%;" class="btn btn-primary">

</div></form>
</body>
</html>

<?php 
session_start();
if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$feedback=$_POST['feedback'];
	$date = date('Y-m-d H:i:s');
 
   $qry="insert into user values(null,'$name','$email','$mobile','$feedback','$date')";
  
       $_SESSION['name']=$name;
       $_SESSION['email']=$email;



   if(mysqli_query($db,$qry)) {
   	echo '<script>alert("Loggin succesfully");window.location.href="main.php"</script>';
   }else{
   	echo '<script>alert("error");window.location.href="login.php"</script>';
   }


}?>