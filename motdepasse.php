<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HUMANS</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="./css/design.css">
</head>
<?php $pdo = new PDO(
    'mysql:host=localhost;dbname=SI-PHP;',
    'root',
    '',
    [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_WARNING,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    ]
);
session_start();
$_SESSION["prenom"]= "Amanda";
$_SESSION["nom"]= "Johnson" ;
$_SESSION["followers"]= 12; 
$_SESSION["abonnements"]= 33; 
$_SESSION["projects"]= 42 ;

?>
<body>
  
<?php include 'menu.php'?>
<?php include 'header.php'?>
<?php include 'rightmenu.php'?>

<body>
  <section class="bloc_inscription">
    <div class="form">
      <div>
      <h2>Paramètre de confidentialité</h2>
      </div>
      <form method="POST" action="">     
        <div class="form__group">
          <input type="password" placeholder="Mot de passe actuel" class="form__input">
        </div>
        <div class="form__group">
          <input type="password" placeholder="Nouveau mot de passe" class="form__input">
        </div>
      <div class="submit">
          <input type="submit" class="submit__button" name="forminscription" value="Connexion" />
        </div>
        
      <?php
      if (isset($erreur)) {
        echo '<font color="red">' . $erreur . "</font>";
      }
      ?>
    </div>
  

  </section>
</body>


    <!-- CREER UNE FONCTION AVEC PASSWORD VERIFY POUR CHANGER DE MDP --> 
</body>
</html>
	

<?php session_destroy()?>
