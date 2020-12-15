<?php

include ('connect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- Files For bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


</head>
<body>
    




    <?php
        
        $id = $_GET['ide'];    
        $query = "select * from users where id = $id";
        $result = mysqli_query($connect,$query);
        while ($row=mysqli_fetch_assoc($result)) {
         ?>
                      <div class="modal" id='empModal' tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Show All Information Of User</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      
                                <div class="form-group">
                <label for="exampleInputEmail1">UserName</label>
                <input type="text" value="<?php echo $row['username'] ?>" name="username" class="form-control"  aria-describedby="emailHelp">    
              </div>

              <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" value="<?php echo $row['fname'] ?>" name="Fname" class="form-control"  aria-describedby="emailHelp">    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text" value="<?php echo $row['lname'] ?>" name="Lname" class="form-control"  aria-describedby="emailHelp">    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" value="<?php echo $row['password'] ?>" name="Pass" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" value="<?php echo $row['email'] ?>" name="email" class="form-control"  aria-describedby="emailHelp">    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="text" value="<?php echo $row['phone'] ?>" name="phone" class="form-control"  aria-describedby="emailHelp">    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Gender</label>
    <input type="text" value="<?php if ($row['gender']==1) {
      echo "Male";
    }elseif($row['gender']==2){
      echo "Fmale";
    } ?>" name="phone" class="form-control"  aria-describedby="emailHelp">    
  </div>

  
  <div class="form-group">
    <label for="exampleInputEmail1">Stast</label>
    <input type="text" value="<?php if ($row['state']==1) {
      echo "Admin";
    }
    elseif($row['state']==2){
      echo "Users";
    }
    ?>" name="phone" class="form-control"  aria-describedby="emailHelp">    
  <br>
    <div>
    <img style="width: 100px;" src = "images/<?php echo $row['image']?>">
    </div>
</div>
                    </div>
                    <div class="modal-footer">                 
                      <button type="button" class="btn btn-primary">Ok</button>
                    </div>
                  </div>
                </div>
              </div>
         <?php
        }
   ?>

       



        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script><!-- files for ajax -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
       

</body>
</html>