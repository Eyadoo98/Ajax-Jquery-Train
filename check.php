<?php

    //Include Connection
    
    include('connect.php');

    $username = $_POST['username'];
    $pass = $_POST['passuser'];

    //Query for take all data 
    
    $query = "select * from users";
    $result = mysqli_query($connect,$query);
    
    //if there is no result then die
    
    if (!$result) {
        die ("There Is NO Result Here");
    }
    
    //To Check If The User Is exist Or Not

    while ($row = mysqli_fetch_assoc($result) ) {
      
        if ($row['username'] == $username && $row['password'] == $pass  && $row['state'] == 1) {
            header("Location:Admin.php?id=$row[id]");
        }
       elseif ($row['username'] == $username && $row['password'] == $pass && $row['state'] == 2) {
            header("Location:User.php?id=$row[id]");
        }
    }


?>