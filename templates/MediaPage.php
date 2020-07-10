<?php include 'Inc/Header.php'?>

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
				<h2><?php echo htmlspecialchars($media->publisherName) ?></h2>
			</div>
			
		<div class="row no-gutters">
				<div class="col-md-2">
					<img class="img-responsive" style="width:100%;height:100%;" src="<?php echo $media->imageLink; ?>"  alt="images/black-trans.png">
				</div>
			<div class="col-md-8">
				<div class="card-body">
					<h3 class="card-title"><a href="<?php echo $media->mediaLink ?>"><?php echo htmlspecialchars($media->title) ?></a></h3>
					<p class="card-text" style="color:#000;"><?php echo htmlspecialchars($media->summary) ?></p>
					<a class="btn btn-primary" href="<?php echo $media->mediaLink ?>" role="button">More...</a>
				</div>
			</div>
		</div>
      </div>
      <?php }?>    
  </div>
 </div>
</div>  


<?php include 'Inc/Footer.php' ?>
