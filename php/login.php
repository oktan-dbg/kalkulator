<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{
						if($user_data['miejscowosc'] === "Kosakowo"){
							
							if($user_data['admin'] === '1'){

								$_SESSION['user_id'] = $user_data['user_id'];
								header("Location: admin_kosakowo2.php");
								die;
	
							}else{
	
								$_SESSION['user_id'] = $user_data['user_id'];
								header("Location: kosakowo.php");
								die; 
							}

						}else if($user_data['miejscowosc'] === "Zukowo"){

							if($user_data['admin'] === '1'){

								$_SESSION['user_id'] = $user_data['user_id'];
								header("Location: admin_zukowo.php");
								die;
	
							}else{
	
								$_SESSION['user_id'] = $user_data['user_id'];
								header("Location: zukowo.php");
								die; 
							}

						}
 
					}
				}
			}
			
			echo '<script>alert("Nieprawidłowa nazwa użytkownika bądź hasło!")</script>';
		}else
		{
			echo '<script>alert("Nieprawidłowa nazwa użytkownika bądź hasło!")</script>';
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Zaloguj</title>
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
		margin-top: 5em;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 60px; margin: 10px; color: white; text-align: center;">Zaloguj</div>
			<a>Login:</a>
			<input id="text" type="text" name="user_name"><br><br>
			<a>Hasło:</a>
			<input id="text" type="password" name="password"><br><br>

			<div id="dol">
				<input id="button" type="submit" value="Zaloguj"><br><br>

				<a id="link" href="signup.php">Nie masz konta?</a><br><br>
			</div>
		</form>
	</div>
</body>
</html>