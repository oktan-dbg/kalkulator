<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$miejscowosc = $_POST['miejscowosc'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password, miejscowosc) values ('$user_id','$user_name','$password','$miejscowosc')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}
		else
		{
			echo '<script>alert("Wypełnij formularz prawidłowymi informacjami!")</script>';
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Rejestracja</title>
</head>
<body>

<style type="text/css">
	
	#text{

		border-radius: 5px;
		padding: 1px;
		border: solid thin #aaa;
		margin-left: 10%;
		width: 70%;
		margin-top: 1em;
		font-size: 35px;
	}

	#button{

		float: right;
		padding: 10px;
		font-size: 35px;
		margin: 3px;
		color: white;
		border: 2px solid black;
		border-radius: 15px;
		background-color: lightskyblue;
	}

	#box{

		margin-left: 30em;
		margin-top: 6em;
		border-radius: 15px;
 		background: rgba(255, 255, 255, 0.1);
 		box-shadow: 0 20px 50px rgba(0, 0, 0, 0.20);
		width: 600px;
		height: 500px;
		padding: 20px;
	}
	a{
		text-decoration: none;
		color: #fff;
		font-size: 35px;
	}

	#dol{
		
	}

	</style>

	<div id="box">
		
		<form method="post">
		<div style="font-size: 60px; margin: 10px; color: white; text-align: center;">Zarejestruj się</div>
			<a>Login:</a>
			<input id="text" type="text" name="user_name"><br><br>
			<a>Hasło:</a>
			<input id="text" type="password" name="password"><br><br>
			<a>Gmina:</a>
			<select id="text" name="miejscowosc">
				<option value="Kosakowo" selected>Kosakowo</option>
				<option value="Zukowo">Żukowo</option>
			</select><br><br>

			<div id="dol">

				<input id="button" type="submit" value="Zarejestruj"><br><br>

				<a href="login.php">Powrót</a><br><br>
			</div>
		</form>
	</div>
</body>
</html>