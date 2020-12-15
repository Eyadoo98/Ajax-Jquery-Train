<?php

if ($_POST["subject"]) {
    
   include('connect1.php');
    $status = 0;
    $subject = mysqli_real_escape_string($connect,$_POST['subject']);
    $comment = mysqli_real_escape_string($connect,$_POST['comment']);
    
    $query = "insert into chat (comment_subject,comment_text)
    values('$subject','$comment')";
    mysqli_query($connect,$query);
    if (!$query) {
        echo "connt insert into DB";
    }else {
        echo "Inser SUccess";
  
    } 
}
?>