<?php include "templates/Inc/Header.php" ?>

      <div id="adminHeader">
        <h2>Widget News Admin</h2>
        <p>You are logged in as <b><?php echo htmlspecialchars( $_SESSION['username']) ?></b>. <a href="admin.php?action=logout"?>Log out</a></p>

<div class="site-section">
	<div class="container">
		
      <h1><?php echo $results['pageTitle']?></h1>

      <form action="admin.php?action=<?php echo $results['formAction']?>" method="post">
        <input type="hidden" name="mediaId" value="<?php echo $results['media']->id ?>"/>

<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>
	<div class="block-23">
        <ul>

          <li>
			<div class="form-group">
				<label for="content">Media Image</label>
				<textarea name="imageLink" id="imageLink" placeholder="Image Link of the media" required maxlength="100000" style="height: 30em;"><?php echo htmlspecialchars( $results['media']->imageLink )?></textarea>
			</div>
          </li>
          
          <li>
			<div class="form-group">
				<label for="content">Publisher Name</label>
				<textarea name="publisherName" id="publisherName" placeholder="Publisher of the given media" required maxlength="100000" style="height: 30em;"><?php echo htmlspecialchars( $results['media']->publisherName )?></textarea>
			</div>
          </li>
          
          <li>
			<div class="form-group">
				<label for="title">Media Title</label>
				<input type="text" name="title" id="title" placeholder="Name of the Title" required autofocus maxlength="255" value="<?php echo htmlspecialchars( $results['media']->title )?>" />
			</div>
          </li>

          <li>
			<div class="form-group">
				<label for="summary">Media Summary</label>
				<textarea name="summary" id="summary" placeholder="Brief description of the Media" required maxlength="1000" style="height: 5em;"><?php echo htmlspecialchars( $results['media']->summary )?></textarea>
			</div>
          </li>


          <li>
			<div class="form-group">
				<label for="publicationDate">Publication Date</label>
				<input type="date" name="publicationDate" id="publicationDate" placeholder="YYYY-MM-DD" required maxlength="10" value="<?php echo $results['media']->publicationDate ? date( "Y-m-d", $results['media']->publicationDate ) : "" ?>" />
			</div>
          </li>


        </ul>

        <div class="buttons">
          <input type="submit" name="saveChanges" value="Save Changes" class="btn btn-success"/>
          <input type="submit" formnovalidate name="cancel" value="Cancel" class="btn btn-warning"/>
        </div>

      </form>

<?php if ( $results['media']->id ) { ?>
      <p><a href="admin.php?action=deleteArticle&amp;articleId=<?php echo $results['media']->id ?>" onclick="return confirm('Delete This Media?')" class="btn btn-danger">Delete This Media</a></p>
<?php } ?>
	</div>
	</div>
</div>

<?php include "templates/Inc/Footer.php" ?>
