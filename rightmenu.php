<section class="rightNav">
  <div class="rightNavTop">
    <div class="profilePicAndName">
      <div class="myProfilePic"></div>
        <?php echo "<h2 class='myName'>" . $_SESSION["prenom"] . " " . $_SESSION["nom"] . "</h2>"    ?>
    </div>
  </div>
<div class="stats">
  <ul class="firstStat">
    <li class="statsNumbers"><?php echo $_SESSION["followers"]?></li>
    <li class="statsLabels">ABONNÉ(E)S</li>
  </ul>
  <ul class="secondStat">
    <li class="statsNumbers"><?php echo $_SESSION["abonnements"]?></li>
    <li class="statsLabels">ABONNEMENTS</li>
  </ul>
  <ul class="thirdStat">
    <li class="statsNumbers"><?php echo $_SESSION["projects"]?></li>
    <li class="statsLabels">PROJETS</li>
  </ul>
</div>
<h2 class="bestFriendsTitle">Meilleurs amis</h2>
<ul class="bestFriends">
  <li><img src="assets/images/Maxime Frisou.svg" alt=""><a href="" class="bestFriendsName">Maxime Frisou</a></li>

  <li><img src="assets/images/Jane Meyer.svg" alt=""><a href="" class="bestFriendsName">Jane Meyer</a></li>

  <li><img src="" alt=""><a href="" class="bestFriendsName">Thomas Smith</a></li>
</ul>
</section>