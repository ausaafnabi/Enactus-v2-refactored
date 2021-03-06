<?php include "templates/Inc/Header.php" ?>
  
  <div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 block-30-sm item" <?php if($results['article']->id==1){ echo 'style="background-image: url(\'images/Palaash_1.jpg\');"';} elseif($results['article']->id==2){echo 'style="background-image: url(\'images/bg_1.jpeg\');"';} else{echo 'src="images/black-trans.png"';}?> data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-12">
              <span class="text-white text-uppercase"><?php echo date('j F Y', $results['article']->publicationDate)?> &mdash; by Admin</span>
              <h2 class="heading mb-5"><?php echo htmlspecialchars( $results['article']->title )?></h2>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  <div id="blog" class="site-section">
    <div class="container">            
		<div class="row">
			<div class="col-md-10">
				<h2><a href="./"><span class="ion-md-arrow-back"></span></a></h2>
				<h1 style="width: 75%;"><?php echo htmlspecialchars( $results['article']->title )?></h1>
				<div style="width: 75%; font-style: italic; padding-bottom:10px;"><?php echo htmlspecialchars( $results['article']->summary )?></div>
				<div style="width: 75%;padding-bottom:15px;"><?php echo $results['article']->content?></div>
				<p class="pubDate">Published on <?php echo date('j F Y', $results['article']->publicationDate)?></p>
			</div>
		</div>
	</div>
  </div>
<?php include "templates/Inc/Footer.php" ?>
