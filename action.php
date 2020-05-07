<?php    
   $to = $_POST['email'];
   $subject = "This is subject";
   
   $message = "Hello world";
   
   $header = "From:contact@madbunny.pl \r\n";
   $header .= "MIME-Version: 1.0\r\n";
   $header .= "Content-type: text/html\r\n";
   
   $retval = mail ($to,$subject,$message,$header);
   
?>