<section class="leftNav">
	<img src="assets/images/Humans_logo.png" alt="humans" class="humansLogo">
  <ul class="navMenuLeft">
    <li><img src="assets/images/monitor.svg" alt=""><a href="">Fil d'actualité</a></li>
    <li><img src="assets/images/piggy-bank.svg" alt=""><a href="">Cagnottes</a></li>
    <li><img src="assets/images/star (1).svg" alt=""><a href="">Évènements</a></li>
    <li><img src="assets/images/chat 2.svg" alt=""><a href="">Messages</a></li>
    <li><img src="assets/images/settings.svg" alt=""><a href="">Paramètres</a></li>
    <li><img src="assets/images/logout.svg" alt=""><?php if (isset($_SESSION)) {
      echo '<a href="">Déconnexion</a>';
    }else {
     echo' <a href="login.php">Connexion</a>';
    }?></li>
  </ul>
</section>