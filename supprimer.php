<?php
require_once '../config.php';
if(isset($_GET['id']) AND !empty($_GET['id'])) {
   $suppr_id = htmlspecialchars($_GET['id']);
   $suppr = $pdo->prepare('DELETE FROM articles WHERE id = ?');
   $suppr->execute(array($suppr_id));
   header('Location: redaction.php');
}
?>