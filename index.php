<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    
    
    <!--Start Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li> 
    </ul>
  </div>
</nav>
    <!-- End NavBar -->



    <!--Start Form -->
    <br>
    <form method="post" action="insert.php" enctype="multipart/form-data">
      <div class="container">
      <div class="form-group">
    <label for="exampleInputEmail1">UserName</label>
    <input type="text" name="username" class="form-control"  aria-describedby="emailHelp">    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" name="Fname" class="form-control"  aria-describedby="emailHelp">    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text" name="Lname" class="form-control"  aria-describedby="emailHelp">    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="Pass" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" class="form-control"  aria-describedby="emailHelp">    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="text" name="phone" class="form-control"  aria-describedby="emailHelp">    
  </div>
  <h2>Select Gender</h2>
    <input type="radio" name="Gender" value="1">Male
    <input type="radio" name="Gender" value="2">Fmale
</div>
    <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

    <select name="state" id="">
      <option value="1">Admin</option>
      <option value="2">User</option>
    </select><br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  
    <input type="file" name="image"><br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


    <button type="submit" class="btn btn-primary">Regester</button>
</form>
    <!-- End Form -->
       
       
       
       
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
       
    </body>
</html>