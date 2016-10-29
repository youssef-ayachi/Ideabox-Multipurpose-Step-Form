<?php
    $to = "info@gmail.com"; /*Your Email*/
    $date = date ("l, F jS, Y");
    $time = date ("h:i A");
        $Email=  $_POST['email'];
        $Name = $_POST['nom'];
        $country = $_POST['country'];
        $Pw = $_POST['pw'];
        $subject = "Message envoyé du formulaire multi-étapes"; 
        $msg="
        Name: $Name
        Email: $Email
        Country: $country
        Courses: $Pw
        Message sent on: $date, hour: $time.n";
        mail($to, $subject, $msg, "From: $Email")
?>	
