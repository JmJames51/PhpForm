<?php 

$name = $_POST['user_name']; 
$prenom = $_POST['user_prenom']; 
$mail = $_POST['user_mail'];
$phone = $_POST['user_phone'];
$message = $_POST['user_message'];
$subject = $_POST['sujet'];

echo("Merci ${prenom} ${name} de nous avoir contacté à propos de “${subject}”. <br/> 
Un de nos conseiller vous contactera soit à l’adresse ${mail} ou par téléphone au ${phone} dans les plus brefs délais pour traiter votre demande : 
${message}" );


?>