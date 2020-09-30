<?php
// $host="148.72.232.169:3306";
// $username="emitra";
// $password="Emitra@2019";
// $databasename="ph17759465606_";


$host = 'localhost';
$username = 'root';
$password = '';
$databasename="ph17759465606_";


$connect=mysqli_connect($host,$username,$password) or die("cannot caonnect to database");
mysqli_select_db($connect,$databasename) or die ("cannot find database");
//echo "Connected successfully";
?>
