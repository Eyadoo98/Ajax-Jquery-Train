<?php

    include('connect.php');     
?>
<!DOCTYPE html>
<html lang="en">
        <!-- File for JQuery and DataTable -->
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
   <?php
       $id = $_GET['ide'];

       $query = "select * from users where id = $id";
       $result = mysqli_query($connect,$query);
       while ($row = mysqli_fetch_assoc($result)) {
           if ($row['state']==1) {
              echo "<div class='alert alert-danger' role='alert'>
                           Con't Delete An Admin
                    </div>";
           }else {

                $delete = "delete  from users where id = $id";
                $resultnew = mysqli_query($connect,$delete);
                 if ($resultnew) {
                     echo "<div class='alert alert-success' role='alert'>
                     Delete Success  
                   </div>";                     
                 }
                 else {
                     echo "there is an error";
                 }               
           }
       }
   ?>




    <!-- Files For bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>





            <!-- Files For Bootsrap -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script><!-- files for ajax -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
       

</body>
</html>
