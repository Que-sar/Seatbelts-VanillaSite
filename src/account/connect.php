<?php 

#Connection for the database

$servername = "lochnagar.abertay.ac.uk";
$uname = "sql2003063";
$pwd = "HphZi7bMSjot";
$dbname = "sql2003063";

$connection = mysqli_connect($servername, $uname, $pwd, $dbname);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>