<?php
var_dump($_POST);
$erreurs = array();

if(!array_key_exists("nlemail", $_POST) || $_POST["nlemail"] == ""){
  $erreurs["nlemail"] = "Vous n'avez pas indiqué votre adresse e-mail.";
}

if(!filter_var($_POST["nlemail"], FILTER_VALIDATE_EMAIL)){
  $erreurs[] = "L'adresse e-mail que vous avez saisie n'est pas valide.";
}


session_start();

if(!empty($erreurs)){
  $_SESSION["erreurs"] = $erreurs;
  $_SESSION["inputs"] = $_POST;
}

else {
  $resultats = array();
  $_SESSION["success"] = 1 ;
  $nlmail = $_POST["nlemail"];
  $headers = "Envoyé par ".$nlemail.".";
  mail("essaiucph@gmail.com", "formulaire contact", $nlemail, $headers);

  echo $headers;

}

var_dump($erreurs);
die();

?>
