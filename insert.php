<?php
        include ('connect.php');
    
    //if (isset($_POST['submit'])) {
        $target = "images/".basename($_FILES['image']['name']);
        $image = $_FILES['image']['name'];
        $msg = "";
        $fname = $_POST['Fname'];
        $lname = $_POST['Lname'];
        $email = $_POST['email'];
        $pass  = $_POST['Pass'];
        $phone  = $_POST['phone'];
        $gender =$_POST['Gender'];
        $state = $_POST['state'];
        $username = $_POST['username'];
    
        //echo $fname . " ".$lname . " ".$email . " ".$pass. " ".$phone . " ".$gender . " "."<br>";
        $query = "insert into users ( fname, lname, password, email, phone, gender, state,username,image) values
        ('$fname','$lname','$pass','$email','$phone','$gender','$state','$username','$image')";
        $result = mysqli_query($connect,$query);
        if ($result) {
            echo "Insert Into DB ";
        }else {
            echo " Not Inserted";
        }
    

        if (move_uploaded_file($_FILES['image']['tmp_name'],$target)) {
            $msg = "upload image";
        }else {
            $msg = "Wrong IN Upload Image";
        }
    
    mysqli_close($connect);
?>