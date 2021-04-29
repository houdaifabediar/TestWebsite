<html>
<head>
</head>

<body>
<title>Test website, Houdaifa Bediar</title>

<h1> Testing website voor CI/CD-tool </h1>

<h1> Testing website voor CI/CD-tool nummer 1 </h1>

<?php

$host = "localhost";
$username = "root";
$user_pass = "usbw";
$database_in_use = "test";
 
$mysqli = new mysqli($host, $username, $user_pass, $database_in_use);

echo $mysqli->host_info . "\n";




$sql = "SELECT Voornaam FROM gebruiker";
$result = $mysqli -> query ($sql);

if ($result -> num_rows > 0) {
	//output van de data 
	while ($row = $result -> fetch_assoc()) {
		echo "voornaam: " . $row["Voornaam"]; 
	}
} else {
	echo "no results";
}

$mysqli -> close();



?>


</body>

<html>
