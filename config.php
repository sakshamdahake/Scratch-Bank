

<?php

$servername = "us-cdbr-east-03.cleardb.com";
$username = "b8c8ac53d9f61b";
$password = "06503c89";
$dbname = "heroku_f5ca66cb2ef647d";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
}

?>