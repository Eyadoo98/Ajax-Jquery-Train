<?php
    
//Connect To DataBase
$username = "root";
$pass = "";
$database = "challenge";
$host = "localhost";

$connect = mysqli_connect($host,$username,$pass,$database);
if ($connect) {
    //echo "Connect Success"."<br>";
}
else {
    echo "Not Success"."<br>";
} 