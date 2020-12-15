<?php
 include("connect.php");
    //$username = $_GET["username"];
    
     //$ids = $_GET['clientID'];
     //$clientID = $_GET["clientID"];
     
     $clientID = $_GET["id"];
     
     echo $clientID."<br>";
     
  
    
    $username = $_POST['username'];
    $fname = $_POST['Fname'];
    $lname = $_POST['Lname'];
    $pass = $_POST['Pass'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['Gender'];
    $state = $_POST['state'];

    $sel = "select * from users where id = $clientID";
    $do = mysqli_query($connect,$sel);
    while ($row = mysqli_fetch_assoc($do)) {
        if ($row['state'] == 1) {
            echo "Sorry Cont Update On An Admin";
        }else {
            
    $query ="update users set username = '$username',
    fname = '$fname',
    lname = '$lname',
    password ='$pass',
    email = '$email',
    phone = '$phone',
    gender='$gender',
    state ='$state' where id = $clientID";
$result = mysqli_query($connect,$query);
if ($result) {
    echo "Update User Success";
}else {
    echo "Sorry Cont Update";   
}
    }
}



?>