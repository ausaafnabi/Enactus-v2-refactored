<?php include "templates/Inc/Header.php" ?>
	<style>
	.table-responsive {
			max-height: 300px;
		}
	</style>
	
	<div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 block-30-sm item" style="background-image: url('images/07-min.JPG');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h2 class="heading mb-5">Administrator Page</h2>
            </div>
          </div>
        </div>
      </div> 
    </div>
  </div>
  
  	<div class="site-section">
		<div id="adminHeader">
			<h2>Widget | News | Admin</h2>
				<p>You are logged in as <b><?php echo htmlspecialchars( $_SESSION['username']) ?></b>. <a href="admin.php?action=logout"?>Log out</a></p>
		</div>

	<div class="container">	
		<div class="row block-9">
			<div class="card col-md-5">
				<h1>All Articles</h1>
				<?php if ( isset( $results['errorMessage'] ) ) { ?>
					<div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
				<?php } ?>


				<?php if ( isset( $results['statusMessage'] ) ) { ?>
					<div class="statusMessage"><?php echo $results['statusMessage'] ?></div>
				<?php } ?>
				<div style="display: block;overflow-y:scroll;height:300px;" class="table-responsive">
					<table class="table table-hover">
						<thread>
						<tr>
							<th>Publication Date</th>
							<th>Article</th>
						</tr>
						</thread>

						<?php foreach ( $results['articles'] as $article ) { ?>

							<tr onclick="location='admin.php?action=editArticle&amp;articleId=<?php echo $article->id?>'">
								<td><?php echo date('j M Y', $article->publicationDate)?></td>
								<td><?php echo $article->title?></td>
							</tr>

						<?php } ?>

					</table>
				</div>
			<p><?php echo $results['totalRows']?> article<?php echo ( $results['totalRows'] != 1 ) ? 's' : '' ?> in total.</p>
			<a class="btn btn-primary px-3 px-2" href="admin.php?action=newArticle">Add a New Article</a>
		</div>
		
		<div class="card col-md-5">
				<h1>All Media</h1>
				<?php if ( isset( $results['errorMessage'] ) ) { ?>
					<div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
				<?php } ?>


				<?php if ( isset( $results['statusMessage'] ) ) { ?>
					<div class="statusMessage"><?php echo $results['statusMessage'] ?></div>
				<?php } ?>
				<div style="display: block;overflow-y:scroll;height:300px;" class="table-responsive">
					<table class="table table-hover">
						<thread>
						<tr>
							<th>Publication Date</th>
							<th>Article</th>
						</tr>
						</thread>

						<?php foreach ( $results['media'] as $media ) { ?>

							<tr onclick="location='admin.php?action=editMedia&amp;mediaId=<?php echo $media->id?>'">
								<td><?php echo date('j M Y', $media->publicationDate)?></td>
								<td><?php echo $media->title?></td>
							</tr>

						<?php } ?>

					</table>
				</div>
			<p><?php echo $results['totalRowsMedia']?> article<?php echo ( $results['totalRowsMedia'] != 1 ) ? 's' : '' ?> in total.</p>
			<a class="btn btn-primary px-3 px-2" href="admin.php?action=newMedia">Add a New Media</a>
		</div>
	</div>
 </div>

<?php include "templates/Inc/Footer.php" ?>
