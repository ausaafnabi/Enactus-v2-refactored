<?php include 'templates/Inc/Header.php'?>

<div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 block-30-sm item" style="background-image: url('images/success_2.jpeg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h2 class="heading mb-5">Media</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="block-30 block-30-sm item" style="background-image: url('images/success_1.jpeg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h2 class="heading mb-5">Media</h2>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  
<div class="site-section mb-5">
   <div class="container">
    <div class="row md-5">
	<div class="col-md-12 md-5">
		<h1>Media: </h1>
	</div>
	<!--
		This is a sample Media page
	-->
	
	<?php foreach($results['media'] as $media) { ?>
		<div class="card mb-4 text-white" style="max-width: 1200px;color:#000;margin:1rem;">
			<div class="card-header" style="padding:0.3rem 0.75rem;">
				<h2>Publisher</h2>
			</div>
			
		<div class="row no-gutters">
				<div class="col-md-2">
					<img class="img-responsive" style="width:100%;height:100%;" <?php echo $media->imageLink; ?>  alt="images/black-trans.png">
				</div>
			<div class="col-md-8">
				<div class="card-body">
					<h3 class="card-title"><a href=".?action=viewMedia&amp;mediaId=<?php echo $media->id?>">Hello World</a></h3>
					<p class="card-text" style="color:#000;">too beautiful to imagine it to be true</p>
					<a class="btn btn-primary" href=".?action=viewMedia&amp;mediaId=<?php echo $media->id?>" role="button">More...</a>
				</div>
			</div>
		</div>
      </div>
      <?php }?>
      
	
	<?php foreach($results['articles'] as $article) {?>
		<div class="card mb-4 text-white" style="max-width: 1200px;color:#000;margin:1rem;">
			<div class="row no-gutters">
				<div class="col-md-2">
					<img class="img-responsive" style="width:100%;height:100%;" <?php if($article->id==1){ echo 'src="images/successthumbnail.jpeg"';} elseif($article->id==2){echo 'src="images/successutkarsh.jpeg"';} else{echo 'src="images/black-trans.png"';}?> alt="images/black-trans.png">
				</div>
			<div class="col-md-8">
				<div class="card-body">
					<h3 class="card-title"><a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>"><?php echo htmlspecialchars($article->title) ?></a></h3>
					<p class="card-text" style="color:#000;"><?php echo htmlspecialchars($article->summary) ?></p>
					<a class="btn btn-primary" href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>" role="button">More...</a>
				</div>
			</div>
		</div>
      </div>
	<?php } ?>


  </div>
 </div>
</div>  


<?php include 'templates/Inc/Footer.php' ?>
