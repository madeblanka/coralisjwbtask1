<?php $this->load->view('_partials/head')?>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Reset Password</h3>
			      		</div>
			      	</div>
					<form action="<?= site_url('user/updatepass')?>" method="post" enctype="multipart/form-data" class="signin-form">
                    <input type="hidden" name="email" value=<?= $user->email?>>
                    <input type="hidden" name="nama" value=<?= $user->nama?>>
                    <input type="hidden" name="profile" value=<?= $user->profile?>>
			      		<div class="form-group mt-3">
			      			<input type="password" class="form-control" name="password" required>
			      			<label class="form-control-placeholder" for="password">New Password</label>
			      		</div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Save</button>
		            </div>
		          </form>
		          <!-- <p class="text-center">Not a member? <a data-toggle="tab" href="#signup">Sign Up</a></p> -->
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>
<?php $this->load->view('_partials/footer')?>
