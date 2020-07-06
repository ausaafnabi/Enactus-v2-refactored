<?php include "templates/Inc/Header.php" ?>

      <div id="adminHeader">
        <h2>Widget News Admin</h2>
        <p>You are logged in as <b><?php echo htmlspecialchars( $_SESSION['username']) ?></b>. <a href="admin.php?action=logout"?>Log out</a></p>

<div class="site-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-5">
				<div class="card">
					<div class="text-center">
						<h1><?php echo $results['pageTitle']?></h1>
						<p class="text-h3">The Form to Create, Edit the Media details. Please fill the form carefully.</p>
					</div>
					<form action="admin.php?action=<?php echo $results['formAction']?>" method="post">
						<input type="hidden" name="mediaId" value="<?php echo $results['media']->id ?>"/>
							<?php if ( isset( $results['errorMessage'] ) ) { ?>
								<div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
							<?php } ?>
						<div class="block-23">
							<div class="col mt-4 pb-1 form-group">
								<label for="imageLink">Image Link</label>
								<input class="form-control" type="text" name="imageLink" id="imageLink" placeholder="Media Image URL" required maxlength="300"value="<?php echo $results['media']->imageLink ?>"/>
							</div>
							
							<div class="col mt-4 pb-1 form-group">
								<label for="publisherName">Publisher Name</label>
								<input class="form-control" type="text" name="publisherName" id="publisherName" placeholder="Media Publisher" required maxlength="300" value="<?php echo htmlspecialchars( $results['media']->publisherName )?>"/>
							</div>
							
							<div class=" col mt-4 pb-1 form-group">
								<label for="title">Media Title</label>
								<input class="form-control " type="text" name="title" id="title" placeholder="Name of the Title" required autofocus maxlength="255" value="<?php echo htmlspecialchars( $results['media']->title )?>" />
							</div>
							
							
							<div class="col mt-4 pb-1 form-group">
								<label for="mediaLink">Media Link</label>
								<input class="form-control" type="text" name="mediaLink" id="mediaLink" placeholder="Media Link" required autofocus maxlength="255" value="<?php echo $results['media']->mediaLink ?>" />
							</div>
							
							<div class="col mt-4 pb-1 form-group">
								<label for="summary">Media Summary</label>
								<textarea class="form-control" name="summary" id="summary" placeholder="Brief description of the Media" required maxlength="3000" rows="5" style="height: 5em;"><?php echo htmlspecialchars( $results['media']->summary )?></textarea>
							</div>
							
							<div class="col mt-4 pb-1 form-group">
								<label for="publicationDate">Publication Date</label>
								<input class="form-control" type="date" name="publicationDate" id="publicationDate" placeholder="YYYY-MM-DD" required maxlength="10" value="<?php echo $results['media']->publicationDate ? date( "Y-m-d", $results['media']->publicationDate ) : "" ?>" />
							</div>
							
							<div class="col mt-4 pb-1 form-group buttons">
								<input type="submit" name="saveChanges" value="Save Changes" class="btn btn-success"/>
								<input type="submit" formnovalidate name="cancel" value="Cancel" class="btn btn-warning"/>
							</div>
						</form>
					<?php if ( $results['media']->id ) { ?>
						<div style="padding-left: 20px; "><p><a href="admin.php?action=deleteMedia&amp;mediaId=<?php echo $results['media']->id ?>" onclick="return confirm('Delete This Media?')" class="btn btn-danger">Delete This Media</a></p></div>
					<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include "templates/Inc/Footer.php" ?>
