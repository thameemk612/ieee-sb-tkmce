<!DOCTYPE html>
<html lang="en">

<head>
  <title>Signup - PES Online Quiz | IEEE SB TKMCE</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="shortcut icon" href="<?php echo base_url ()?>assets/front/img/fav.png">
  <link href="<?=base_url();?>assets/login/bootstrap.css" rel='stylesheet' type='text/css' />
  <link href="<?=base_url();?>assets/login/style.css" rel='stylesheet' type='text/css' />
  <link href="<?=base_url();?>assets/login/font-awesome.min.css" rel="stylesheet">

  <link href="//fonts.googleapis.com/css?family=Cabin:400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext,vietnamese" rel="stylesheet">

</head>

<body>
	<div class="popup">
		<div class="login px-sm-4 mx-auto mw-100">
			<h5 class="text-center mb-4">Sign Up<h5>
        <?php if($this->session->flashdata('msg')): ?>
        <div class="alert alert-success" role="alert">
          <center><?php echo $this->session->flashdata('msg'); ?></center>
        </div>
        <?php endif; ?>
        <?php if($this->session->flashdata('msgreq')): ?>
        <div class="alert alert-danger" role="alert">
          <center><?php echo $this->session->flashdata('msgreq'); ?></center>
        </div>
        <?php endif; ?>
			<form action="<?=base_url("Quiz_admin/signup")?>" method="post">
        <div class="form-group">
					<label class="mb-2">Name</label>
					<input type="text" class="form-control" value="<?php echo set_value('name'); ?>"  name="name" aria-describedby="emailHelp" placeholder="" required="">
				</div>
        <div class="form-group">
          <label class="mb-2">Phone Number</label>
          <input type="tel" class="form-control" value="<?php echo set_value('phone'); ?>"  name="phone" aria-describedby="emailHelp" placeholder="" required="">
        </div>
        <div class="form-group">
          <label class="mb-2">Batch</label>
          <input type="text" class="form-control"value="<?php echo set_value('batch'); ?>"   name="batch" aria-describedby="emailHelp" placeholder="" required="">
        </div>
				<div class="form-group">
					<label class="mb-2">Email address</label>
					<input type="email" class="form-control" value="<?php echo set_value('email'); ?>"  name="email" aria-describedby="emailHelp" placeholder="" required="">
				</div>
				<div class="form-group">
					<label class="mb-2">Password</label>
					<input type="password" name="password" value="<?php echo set_value('password'); ?>"  class="form-control" required="">
				</div>
        <div class="form-group">
          <label class="mb-2">Re-enter password</label>
          <input type="password" name="passconf" class="form-control" required="">
        </div>
				<button type="submit" class="btn btn-primary submit mt-2">Signup</button>
				<p class="text-center mt-2">
          <a class="ml-3" href="<?=base_url()?>home">Home</a>
          <a class="ml-3" href="<?=base_url()?>pes_login">Already have an account !</a>
        </p>
        <p class="text-center mt-2">
          <a class="ml-3" href="<?=base_url()?>privacypolicy">By creating an account, you are agreeing our privacy terms and condition</a>
        </p>
			</form>
		</div>

	</div>
</body>
</html>
