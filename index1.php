<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


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
    

<?php
    $id = $_GET['name'];
    echo $id;
?>

    <h2 style="position: absolute; left: 500px;">Ajax Notification</h2>
<br><br><br>
<div class="container">
    <form method="POST" id="comment_form">
        <div class="form-group">
            <label>Enter Subject</label>
            <input type="text" name="subject" id="subject" class="form-control">
        </div>
        <div class="form-group">
            <label>Enter Comment</label>
            <textarea name="comment" id="comment" class="form-control" cols="30" rows="10">
            </textarea>
        </div>
        <div class="form-group">
            <input type="submit" name="post" id="post" class="btn btn-info" value="post">
        </div>
    </form>
    </div>
    <?php
        include('newchat.php');
        //include('User.php');
        
    ?>
    <!-- <div id="alert_popover">
        <div class="wrappper">
            <div class="content">
                     
            </div>
        </div>
    </div>
     -->
<script>
    $(document).ready(function(){
        
    setInterval(function() {
        load_last_notification();
    },1000);

   function load_last_notification() {
        $.ajax({
            url:"fetch1.php",
            method:"POST",
            data:{x : <?php echo $id = $_GET['name'];?>},
            success:function(data){
                $('.content').html(data);
            }
        });
    }
    $("#comment_form").on('submit',function(event){
        event.preventDefault();
        
        if ($('#subject').val() !='' && $('#comment').val() !='') {

        var form_data = $(this).serialize();
        
            $.ajax({
                url:"insert1.php",
                method:"POST",
                data:form_data,
                success:function(data)
                {
                    //alert("Insert Success");
                    $("#comment_form")[0].reset();
                }
            });
        }
        else
        {
            alert("Both Field Are Required");
        }
    });
})
    </script>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script><!-- files for ajax -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
       
</body>
</html>