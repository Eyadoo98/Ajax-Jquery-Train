<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
</head>
<body>
    
<script>
    $(document).ready(function(){
        
    setInterval(function() {
        load_last_notification();
    },1000);

   function load_last_notification() {
        $.ajax({
            url:"fetch1.php",
            method:"POST",
            
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
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>