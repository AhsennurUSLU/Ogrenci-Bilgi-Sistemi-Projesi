<?php include "../includes/loginHeader.php"; ?>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"># Admin #</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      <br>
			  <br>
						<form method="POST" action="../functions/login.php" class="login-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control rounded-left" name="email" id="email" placeholder="Email" required>
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" class="form-control rounded-left" name="password" id="password" placeholder="Şifre" required>
	            </div>
				<br>
				<br>
	            <div class="form-group">
	            	<button type="submit" name="adminLogin" class="btn btn-primary rounded submit p-3 px-5">Giriş Yap</button>
	            </div>
	          </form>
			
	        </div>
				</div>
			</div>
		</div>
	</section>

	

    <?php include "../includes/loginFooter.php"; ?>
