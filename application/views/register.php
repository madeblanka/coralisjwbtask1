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
			      			<h3 class="mb-4">Sign Up</h3>
			      		</div>
			      	</div>
					<form action="<?= site_url('user/register')?>" method="post" enctype="multipart/form-data" class="signin-form">
			      		<div class="form-group mt-3">
			      			<input type="text" class="form-control" name="email" required>
			      			<label class="form-control-placeholder" for="email">Email</label>
			      		</div>
			      		
                        <div class="form-group mt-3">
			      			<input type="text" class="form-control" name="nama" required>
			      			<label class="form-control-placeholder" for="nama">Nama</label>
			      		</div>
    
                        <div class="form-group">
                            <input id="password-field" type="password"  name="password" class="form-control" required>
                            <label class="form-control-placeholder" for="password">Password</label>
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>

                        <div class="form-group mt-3">
                            <label for="profile">Foto Profile </label>
			      			<input name="profile" type="file" class="form-control" required>
			      		</div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
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
