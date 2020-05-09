<?php include "templates/Inc/Header.php" ?>
	<style>
	.table-responsive {
			max-height: 300px;
		}
	</style>
	
	<div class="container">
		
      <div id="adminHeader">
        <h2>Widget News Admin</h2>
        <p>You are logged in as <b><?php echo htmlspecialchars( $_SESSION['username']) ?></b>. <a href="admin.php?action=logout"?>Log out</a></p>
      </div>
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
          <td>
            <?php echo $article->title?>
          </td>
        </tr>

<?php } ?>

      </table>
</div>
      <p><?php echo $results['totalRows']?> article<?php echo ( $results['totalRows'] != 1 ) ? 's' : '' ?> in total.</p>
	
    <a class="btn btn-primary px-3 px-2" href="admin.php?action=newArticle">Add a New Article</a>
	</div>
</div>
<?php include "templates/Inc/Footer.php" ?>
