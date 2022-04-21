<?php 

session_start();
 if(!isset($_SESSION['score']))
{
	echo '<script>alert("Your session is expired...pleace login");window.location.href="login.php"</script>';
}
?>

<html>
<head>
	<title>PHP Quizer</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<header>
		<div class="container">
			<p>PHP Quizer</p>
		</div>
	</header>

	<main>
			<div class="container">
				<h2>Your Result</h2>
				<p>Congratulation You have completed this test succesfully.</p>
				<p>Your <strong>Score</strong> is <?php echo $_SESSION['score']; ?>  </p>
				<?php unset($_SESSION['score']); ?>
				<?php echo "thank you for your valuable time for this quiz competition <B>".$_SESSION['name'];"</B>";?>
			</div>

	</main>


	<footer>
			<div class="container">
				Copyright &copy;BRilliant
			</div>


	</footer>








</body>
</html>