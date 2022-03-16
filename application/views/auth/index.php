

<body style="background-color: #E5E5E5;">

	<div class="card">
		<div class="card-body">
			<div class="limiter">
				<div class="container-login100">
					<div class="wrap-login100">
                       
						<form class="login100-form validate-form" method="post" action="<?= base_url('auth'); ?>">
							<center class="mt-5 mb-5">
								<img src="<?= base_url('assets/');?>images/logo.png" alt="">
							</center>
							<!-- <span class="login100-form-title p-b-43">
						Login to continue
					</span> -->
                           <?= $this->session->flashData('message'); ?>
						   <label class="mt-5"><b>Username</b></label>
							<div class="wrap-input100 validate-input" data-validate="Masukan Username Anda">
								<input class="input100" type="text" name="username">
								<span class="focus-input100"></span>
                                <?= form_error('username', '<small class="text-danger pl-3">,</small>'); ?>
							</div>
                           

							<label><b>Password</b></label>
							<div class="wrap-input100 validate-input" data-validate="Password is required">
								<input class="input100" type="password" name="password">
								<span class="focus-input100"></span>
                                <?= form_error('password', '<small class="text-danger pl-3">,</small>'); ?>
							</div>
                           

							<!-- <div class="flex-sb-m w-full p-t-3 p-b-32">

								<div>
									<a href="#" class="txt1 tsdcr">
										Lupa password ?
									</a>
								</div>
							</div> -->


							<div class="container-login100-form-btn">
								<button type="submit" class="login100-form-btn">
									Masuk
								</button>
							</div>
						</form>

						<div class="login100-more" style="background-image: url('<?= base_url('assets/');?>images/log-ilus.png');">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>





