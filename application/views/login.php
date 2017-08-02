<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
	<title>Mandiri</title>
	
	<link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/styles.css" />
	

</head>
<body>

	<section class="container">
			<section class="login-form">
			  <?= form_open('login', ['name' => 'login_form','role' => 'login']); ?>
					<img src="<?= base_url() ?>assets/images/logo.png" class="img-responsive" alt="" />
					    <?php if (!empty($this->session->flashdata('error'))) : ?>
					        	<p class="alert-danger text-center" id="message"><?= $this->session->flashdata('error') ?></p>
					   	  <?php endif ?>

					   	    <?= form_error('username', '<p class="alert-danger text-center">', '</p>');?>
					   	     <?= form_input('username', $input->username, ['class' => 'form-control input-lg', 'placeholder' => 'Username']) ?>  

					   	       <?= form_error('password', '<p class="alert-danger text-center">', '</p>');?>
					   	            <?= form_password('password', $input->password, ['class' => 'form-control input-lg', 'placeholder' => 'Password']) ?>
					
					<button type="submit" name="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
					
				</form>
			
			</section>
	</section>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>