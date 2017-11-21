<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
	  <meta charset="utf-8">
    <title>Nous contacter</title>
    <link href="contact.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
      <div class="container">
          <div class="starter-template">
            <?php if(array_key_exists("erreurs", $_SESSION)): ?>
            <div class="alert alert-danger">
                <?= implode("<br>", $_SESSION["erreurs"]); ?>
            </div>
            <?php endif; ?>
            <?php if(array_key_exists("success", $_SESSION)): ?>

            <div class="alert alert-success">
                <p>Votre e-mail nous est bien parvenu.</p>
            </div>
            <?php endif; ?>
            </div>
            <form action="resultats.php" method="POST">
                  <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <div id="pactu">
                                <p>Suivez toute l'actualité à propos UCPH en consultant directement votre boîte e-mail !</p>
                                <label for="inputemail">Votre adresse e-mail</label>
                                <input type="text" name="nlemail" class="form-control" id="inputemail" value="<?= isset($_SESSION["inputs"]["nlemail"]) ? $_SESSION["inputs"]["nlemail"] : "";?>">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" name="button">Envoyer</button>
                      </div>
                  </div>
              </form>
              <form action="contact.php" method="POST">
                    <div class="row">
                      <div class="col-xs-6">
                          <div class="form-group">
                              <label for="inputname">Votre prénom et nom</label>
                              <input type="text" name="nom" class="form-control" id="inputname" value="<?= isset($_SESSION["inputs"]["nom"]) ? $_SESSION["inputs"]["nom"] : "";?>">
                          </div>
                      </div>
                      <div class="col-xs-6">
                          <div class="form-group">
                              <label for="inputemail">Votre adresse e-mail</label>
                              <input type="text" name="email" class="form-control" id="inputemail" value="<?= isset($_SESSION["inputs"]["email"]) ? $_SESSION["inputs"]["email"] : "";?>">
                          </div>
                      </div>
                      <div class="col-xs-12">
                          <div class="form-group">
                              <label for="inputmessage">Votre message</label>
                              <textarea name="message" id="inputmessage" class="form-control"><?= isset($_SESSION["inputs"]["message"]) ? $_SESSION["inputs"]["message"] : "";?></textarea>
                          </div>
                      </div>
                      <button type="submit" class="btn btn-primary" name="button">Envoyer</button>
                  </div>
              </form>
          </div>
      </div>
  </body>
</html>
<?php
unset($_SESSION["inputs"]);
unset($_SESSION["erreurs"]);
unset($_SESSION["success"]);
 ?>
