<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HUMANS</title>
    <link rel="stylesheet" href="styles.css">
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


<ul class="parametres">
  <h3 class="parametres__title">Paramètres de confidentialité</h3>
  <?php echo '<a href="/SI-PHP-master/motdepasse.php" <li class="parametres__li">Changer de mot de passe</li></a>' ?>
  <li class="parametres__li">Changer l'adresse mail</li>
  <li class="parametres__li">Changer de photo de profil</li>
  <li class="parametres__li">Changer de nom de profil</li>
</ul>
</body>
</html>

	

<?php session_destroy()?>
