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
                <p>Votre adresse e-mail nous est bien parvenu.</p>
            </div>
            <?php endif; ?>
            </div>
              <form action="resultats.php" method="POST">
                    <div class="row">
                      <div class="col-xs-6">
                          <div class="form-group">
                              <label for="inputemail">Votre adresse e-mail</label>
                              <input type="text" name="nlemail" class="form-control" id="inputemail" value="<?= isset($_SESSION["inputs"]["nlemail"]) ? $_SESSION["inputs"]["nlemail"] : "";?>">
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
