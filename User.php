<?php
    include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- file for bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    
    <!-- File for Data Table -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

        <!-- File for JQuery and DataTable -->
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
   

        <style>

#alert_popover{
 display: block;
 position:absolute;
 bottom: 50px;
 left: 50px;   
}
.wrappper{
    display: table-cell;
    vertical-align: bottom;
    height: auto;
    width:200px;
}
.alert_default{
    color:#333333;
    background-color: #f2f2f2 ;
    border-color: #cccccc;
}
</style>

</head>
<body>
    
        <?php include('xx.php') ?>
            <script>
                $(document).ready( function () {
                $('#DataTable').DataTable();
                // setInterval(function() {
                //     load_last_notification();
                // },1000);
            });
            </script>

        <h1>User Page</h1>

            <?php
                $id = $_GET['id'];
                $query = "select * from users where id = $id";
                $result = mysqli_query($connect,$query);
                if (!$result) {
                    die('There is No Result Sorry');
                }               
                echo $id;
            ?>
            <div>
            <table id="DataTable">
                <thead> 
                    <tr>
                        <th>Username</th>
                        <th>password</th>
                        <th>Email</th>
                        <th>Phone</th>                        
                        <th>Image</th>
                        <th>Gender</th>
                        <th>Status</th>
                    </tr>                
                     </thead>
                 <tbody>
                    <tr>                
                <?php
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo "<td>".$row['username']."</td>".
                         "<td>".$row['password']."</td>".
                         "<td>".$row['email']."</td>".
                         "<td>".$row['phone']."</td>".
                         "<td>"."<img style='width:100px;' src = 'images/".$row['image']."'>"."</td>";
                         if ($row['gender'] == 1 && $row['state']==2) {
                             echo 
                             "<td>"."Male"."</td>".
                             "<td>"."User"."</td>";
                         }
                         if ($row['gender'] == 2 && $row['state']==2) {
                            echo 
                            "<td>"."Fmale"."</td>".
                            "<td>"."User"."</td>";
                         }
                }
               ?>   </tr>                    
                 </tbody>              
            </table>
            </div>

            <?php
                include('newchat.php');
            ?>
    <!-- <div id="alert_popover">
        <div class="wrappper">
            <div class="content">
                hhhhh
            </div>
        </div>
    </div> -->

        <!-- Files For Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>        
        <!-- File for Data Table -->
        <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>


</body>
</html>