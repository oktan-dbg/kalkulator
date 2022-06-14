<?php

$dbhost = "localhost";
$dbuser = "dapjrknbde_aplikacja";
$dbpass = "Cyi4-n2[uWE!-+4R";
$dbname = "dapjrknbde_aplikacja";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}