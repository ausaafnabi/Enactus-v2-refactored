<?php include "templates/Inc/Header.php" ?>


    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 block-30-sm item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-4">
              	<div class="card fundraise-item">
					<div class="form volunteer" style="padding-left:20px;">
					<form action="admin.php?action=login" method="post" style="width: 90%;">
						<div class="form-group"></div>
							<img style="height: 100px;width: 100px;display: inline;" src="images/black-trans.png" alt="Image placeholder">
						<input type="hidden" name="login" value="true" />
							<?php if ( isset( $results['errorMessage'] ) ) { ?>
								<div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
							<?php } ?>
									<div class="form-group">
										<div style="margin-bottom: 25px" class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
											<input type="text" name="username" id="username" class="form-control py-2" placeholder="Admin Username" required autofocus maxlength="20" />
										</div>
									</div>
									
									<div class="form-group">
									<div style="margin-bottom: 25px" class="input-group">
									 <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
										<input type="password" name="password" id="password" class="form-control py-2" placeholder="Admin Password" required maxlength="20" />
									</div>
									</div>
							<div class="form-group">
								<div class="buttons">
									<input type="submit" class="btn btn-primary px-3 py-2" style="background: #f7ca44;border: 2px solid #f7ca44; color:#fff" name="login" value="Login" />
								</div>
							</div>
					</form>
					</div>
				</div>
            </div>
          </div>
        </div>
      </div>
  </div>
<?php include "templates/Inc/Footer.php" ?>
