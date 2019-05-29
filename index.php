<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HUMANS</title>
    <link rel="stylesheet" href="styles.css">
</head>
<?php  $pdo = new PDO(
    'mysql:host=localhost;dbname=siphp;',
    'root',
    '',
    [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_WARNING,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    ]
);
if (!isset($_SESSION)) {
    header('Location:signup.php');
};
session_start();


?>
<body>
<?php include 'menu.php'?>
<?php include 'header.php'?>
<?php include 'rightmenu.php'?>

	
</body>
<?php session_destroy()?>
</html>