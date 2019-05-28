<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resal social</title>
    <link rel="stylesheet" href="styles.css">
</head>
<?php $pdo = new PDO(
    'mysql:host=localhost;dbname=SI PHP;',
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
<section class="test"></section>
	
</body>
<?php session_destroy()?>
</html>