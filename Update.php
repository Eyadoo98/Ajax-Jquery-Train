<?php

  include('connect.php');
  
   $id = $_POST['ids'];
   $query = "select * from users where id = $id";
   $result = mysqli_query($connect,$query);  
   
?>



<form action="doUpdate.php?id=<?php echo $id;?>" method="POST">
<div class="modal" id='empModal' tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Update Users</h5><?php  echo $id;?>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php
        while ($row = mysqli_fetch_assoc($result)) {
          ?>
        
        <div class="modal-body">
      <div class="form-group">
    <label for="exampleInputEmail1">UserName</label>
    <input type="text" value="<?php echo $row['username']?>" name="username" class="form-control"  aria-describedby="emailHelp">    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" value="<?php echo $row['fname']?>" name="Fname" class="form-control"  aria-describedby="emailHelp">    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text" name="Lname" value="<?php echo $row['lname']?>" class="form-control"  aria-describedby="emailHelp">    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" value="<?php echo $row['password']?>" name="Pass" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" value="<?php echo $row['email']?>" name="email" class="form-control"  aria-describedby="emailHelp">    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="text" value="<?php echo $row['phone']?>"  name="phone" class="form-control"  aria-describedby="emailHelp">    
  </div>
  <h2>Select Gender</h2>
    <input type="radio" name="Gender" value="1">Male
    <input type="radio" name="Gender" value="2">Fmale
  <br>
    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <select name="state" id="">
      <option value="1">Admin</option>
      <option value="2">User</option>
    </select><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <div class="modal-footer">
            <button type="submit"   class="btn btn-primary">Update</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</form>
  
        
        
        <?php
        }
      ?>
      

