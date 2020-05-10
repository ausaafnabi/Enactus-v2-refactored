<?php include "templates/Inc/Header.php" ?>
	  <h2><a href="./"><span class="ion-md-arrow-back"></span></a></h2>
      <h1 style="width: 75%;"><?php echo htmlspecialchars( $results['article']->title )?></h1>
      <div style="width: 75%; font-style: italic;"><?php echo htmlspecialchars( $results['article']->summary )?></div>
      <div style="width: 75%;"><?php echo $results['article']->content?></div>
      <p class="pubDate">Published on <?php echo date('j F Y', $results['article']->publicationDate)?></p>



<?php include "templates/Inc/Footer.php" ?>
