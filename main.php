<?php 
include 'db.php';
$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($connection,$query));
session_start();
 if(!isset($_SESSION['name']))
{
	echo '<script>alert("Please login");window.location.href="login.php"</script>';
}
$name=$_SESSION['name'];


?>
<html>
<head>
	<title>PHP Quizer</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<header>
		<div class="container">
			<h3>Welcome to our quiz competition</h3>
		</div>
	</header>
<br>
	<main>
			<div class="container">
				<h2><?php  echo "Welcome <u>" . $name . " </u>Test Your PHP Knowledge"?></h2>
				<!-- <p>
					This is a multiple choise quiz to test your PHP Knowledge.
				</p> -->
				<ul>
					<li><strong>Number of Questions:</strong><?php echo $total_questions; ?> </li>
					<li><strong>Type:</strong> Multiple Choise</li>
					<li><strong>Estimated Time:</strong> <?php echo $total_questions*1.5; ?></li>

				</ul>

				<a href="question.php?n=1" class="start" style="float: right; margin-right: 160px;">Start Quize</a>

			</div>

	</main>


	<footer>
			<div class="container" style=" margin-bottom: 40%;">
				Copyright &copy; Brilliant
			</div>


	</footer>
