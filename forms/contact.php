<?php

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $mesaj = $_POST['message'];

 $to_email = 'vintea.nicu.cezar@gmail.com';
$mess = 'Nume:'.$name;
$headers = 'From:Liceul Teoretic "Liviu Deleanu"';
mail($to_email,$subject,$mess,$headers);
?>