<?php

    include('connect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <!-- Files For bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    
    <!-- File for Data Table -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">



        <!-- File for JQuery and DataTable -->
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>


</head>
<body>

    <?php 
        $id = $_GET['id'];
        echo $id?>    
    <h1>Admin Page</h1>
   
   <input type="submit" onclick="chat(<?php echo $id?>)" style="position: absolute; left: 800px; border-radius: 15px;" class="btn btn-warning" value="Send A Message For All" >
            <script>

                function chat(id){                    
                    var x = id;
                         window.location="index1.php?name="+x;
                                                                     
                }

                $(document).ready( function () {
                $('#DataTable').DataTable();
            });
             </script>


            <?php

            $query = "select * from users";
            $result = mysqli_query($connect,$query);

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
                        <th colspan="3">CRUD</th>
                    </tr>
                    
                    <?php                     
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo 
                            "<tr id= 'myTableRow'>". 
                                "<td >"."$row[username]"."</td>".
                                "<td >"."$row[password]"."</td>".
                                "<td >"."$row[email]"."</td>".
                                "<td >"."$row[phone]"."</td>".                                
                                "<td>"."<img style='width:100px;' src = 'images/".$row['image']."'>"."</td>";
                                if ($row['gender'] == 1 && $row['state']==1) {
                                    echo                    
                                        "<td >"."Male"."</td>".
                                        "<td >"."Admin"."</td>";                                                                    
                                }
                                elseif ($row['gender'] == 1 && $row['state']==2) {
                                    echo 
                                    "<td >"."Male"."</td>".
                                    "<td >"."User"."</td>";
                                }
                                elseif ($row['gender'] == 2 && $row['state']==1) {
                                    echo 
                                    "<td >"."Fmale"."</td>".
                                    "<td >"."Admin"."</td>";
                                }
                                elseif ($row['gender'] == 2 && $row['state']==2) {
                                    echo 
                                    "<td >"."Fmale"."</td>".
                                    "<td >"."User"."</td>";
                                }                            
                                echo                             
                                "<td>"."<input type = 'submit'  class='btn btn-primary'  onclick = 'Update($row[id])' value = 'Update'>"."</td>".
                                "<td>"."<input type = 'submit'  class='btn btn-success' onclick = 'Show($row[id])' value = 'Show'>"."</td>".
                                "<td>"."<input type = 'submit'  onclick = 'Del($row[id],$row[state])' class='btn btn-danger' value = 'Delete'>"."</td>";
                        }
                    ?>
                    <script>
                        //To Update On Information
                        function Update(id) {
                            $.ajax({
                                url:"Update.php",
                                type:"post",
                                data:{
                                   ids:id 
                                },
                                success:function(data){
                                    $("p").html(data);                                
                                    $('#empModal').modal('show');
                                }
                            });
                        }

                        //Show All Information
                        function Show(id) {
                           var newid = id;
                           $.ajax({
                            url:"ShowPsots.php",
                            data:"post",
                            data:{
                                ide : newid
                            },
                                success:function(aa){                                    
                                    $("p").html(aa);
                                // Display Modal
                            $('#empModal').modal('show');
                                }
                           }); 
                        }
                        //Delete All Information Of User
                        function Del(id,state) {                           
                        var ids = id;
                        var st = state;
                           $.ajax({
                            url:"DeleteUserOrAdmin.php",
                            data:"post",
                            data:{
                                ide:ids
                            },
                            success:function(data){                       
                                $("p").html(data);           
                                $("#myTableRow").remove();                                                                                                                                                                                      
                               }                        
                            });                 
                        }
                    </script>
                    <p></p>
                    </tr>
                </thead>
            </table>
            </div>


        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script><!-- files for ajax -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
       

            <!-- File for Data Table -->
            <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

</body>
</html>