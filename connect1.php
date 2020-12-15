<?php

$host = "localhost";
$username = "root";
$pass = "";
$database = "commente";
$connect = mysqli_connect($host,$username,$pass,$database);

if ($connect) {
    //echo "Connect Success"."<br>";
}
else {
    echo "Not Success"."<br>";
} 

?>