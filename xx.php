
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
        
    </head>
<body>
    

<script>

    $(document).ready(function(){
        
    setInterval(function() {
        load_last_notification();
    },1000);

   function load_last_notification() {
       
    
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML = this.responseText;
            }
        };
        xhttp.open("POST", "fetch1.php", true);
        xhttp.send();

    // $.ajax({
        //     url:"fetch1.php",
        //     method:"POST",
        //     data:{x : 5},
        //     success:function(data){
        //         $('.content').html(data);
        //     }
          //});
        console.log('hi');
}
})
    </script>
<p id="demo"></p>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script><!-- files for ajax -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    
    </body>
</html>