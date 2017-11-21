<?php
var_dump($_POST);
$erreurs = array();

if(!array_key_exists("nom", $_POST) || $_POST["nom"] == ""){
  $erreurs["nom"] = "Vous n'avez pas indiqué votre prénom et nom.";
}

if(!array_key_exists("email", $_POST) || $_POST["email"] == ""){
  $erreurs["email"] = "Vous n'avez pas indiqué votre adresse e-mail.";
}

if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
  $erreurs[] = "L'adresse e-mail que vous avez saisie n'est pas valide.";
}

if(!array_key_exists("message", $_POST) || $_POST["message"] == ""){
  $erreurs["message"] = "Quel message désirez-vous nous envoyer ?";
}

session_start();

if(!empty($erreurs)){
  $_SESSION["erreurs"] = $erreurs;
  $_SESSION["inputs"] = $_POST;
  header('Location: index.php #nouscontacter');
}

else {
  $_SESSION["success"] = 1 ;
  $message = $_POST["message"];
  $headers = "Envoyé par ".$_POST["email"].".";
  mail("essaiucph@gmail.com", "formulaire contact", $message, $headers);
  header('Location: index.php #nouscontacter');
}

var_dump($erreurs);
die();

?>
