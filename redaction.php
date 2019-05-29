<?php 
require_once '../config.php';

if(isset($_POST['article_titre'], $_POST['article_contenu'])) {
  if(!empty($_POST['article_titre']) AND !empty($_POST['article_contenu'])) {

        $article_titre = htmlspecialchars($_POST['article_titre']);
        $article_contenu = htmlspecialchars($_POST['article_contenu']);

        $ins = $pdo->prepare('INSERT INTO articles (titre, contenus, date_time_publication)
          VALUES (:titre, :contenus, NOW())');
          $ins->execute(array(
            'titre' => $_POST['article_titre'],
            'contenus' => $_POST['article_contenu']
          )
        );
  } else {
      $erreur = 'Veuillez remplir tous les champs';
  };
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Rédaction</title>
</head>
<body>
  <form action="" method="POST">
    <input type="text" placeholder="Titre" name="article_titre" id="">
    <textarea placeholder="Contenu de l'article" name="article_contenu" id="" cols="30" rows="10"></textarea>
    <input type="submit" name="submit" value="Envoyer l'artcile">
  </form>
  <br>
  <?php if(isset($erreur)) { echo $erreur; }?>
  
  <?php
    $req = $pdo-> query('SELECT* FROM articles ORDER BY id DESC');
    while($articles = $req->fetch()) :
  ?>
    <div class="">
    <h1><?php echo $articles['titre'] ?></h1>
    <p><?php echo $articles['contenus'] ?></p>
      <span><?php echo $articles['date_time_publication'] ?></span>
      <li><a href="articles.php?id=<?= $articles['id'] ?>"><?= $articles['titre'] ?></a> 
      | <a href="redaction.php?edit=<?= $articles['id'] ?>">Modifier</a> |
       <a href="supprimer.php?id=<?= $articles['id'] ?>">Supprimer</a></li>

    </div>
    <?php
  if(isset($_GET['id']) AND !empty($_GET['id'])) {
   $suppr_id = htmlspecialchars($_GET['id']);
   $suppr = $pdo->prepare('DELETE FROM articles WHERE id = ?');
   $suppr->execute(array($suppr_id));
   header('Location: redaction.php');
}
?>  <?php endwhile ?>
<?php while($articles = $req->fetch()) { ?>
      <?php } ?>
</body>
</html>