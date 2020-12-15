<?php

    include('connect1.php');
    
   
    $query = "select * from chat WHERE comment_status = 0 ORDER BY comment_id DESC";
    $result = mysqli_query($connect,$query);
    $output = '';

    while ($row = mysqli_fetch_array($result)) {
        $output.='
        <div class = "alert alert_default" id = demo>
        <a href  = "#" class = "close" data-dismiss="alert"
        aria-label="close">&times;</a>
        <p><strong>'.$row["comment_subject"].'</strong>
        <small><em>'.$row["comment_text"].'</em><small>
        </p>
        </div>
        ';
    } 
    $update_query = "update chat set comment_status = 1 where comment_status = 0";
    mysqli_query($connect,$update_query);
    echo $output;

?>