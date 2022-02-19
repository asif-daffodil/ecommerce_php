<?php include_once("./header.php") ?>
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Login</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
			<div class="row">
				<!-- Sign-in -->			
<div class="col-md-6 col-sm-6 sign-in">
	<h4 class="">Sign in</h4>
	<p class="">Hello, Welcome to your account.</p>
	<div class="social-sign-in outer-top-xs">
		<a href="#" class="facebook-sign-in"><i class="fa fa-facebook"></i> Sign In with Facebook</a>
		<a href="#" class="twitter-sign-in"><i class="fa fa-twitter"></i> Sign In with Twitter</a>
	</div>
	<form class="register-form outer-top-xs" role="form">
		<div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
		    <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
		</div>
	  	<div class="form-group">
		    <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
		    <input type="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1" >
		</div>
		<div class="radio outer-xs">
		  	<label>
		    	<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Remember me!
		  	</label>
		  	<a href="#" class="forgot-password pull-right">Forgot your Password?</a>
		</div>
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Login</button>
	</form>					
</div>
<!-- Sign-in -->

<!-- create a new account -->
<?php  
	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$name = $_POST['name'];
		$pNumber = $_POST['pNumber'];
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];

		//name validation
		if(empty($name)){
			$err_name = "<span style='color: red;'>Please enter name !</span>";
		}elseif(!preg_match('/^[A-Za-z. ]*$/',$name)){
			$err_name = "<span style='color: red;'>Please enter valid name !</span>";
		}else{
			$name;
		}
		//phone number validation
		if(empty($pNumber)){
			$err_pNumber = "<span style='color: red;'>Please enter phone number !</span>";
		}elseif(!preg_match('/^[0-9]*$/',$pNumber)){
			$err_pNumber = "<span style='color: red;'>Please enter valid phone number !</span>";
		}else{
			$pNumber;
		}
		//password validation
		if(!empty($password) && ($password == $confirm_password)) {
			if (strlen($password) <= '8') {
				$passwordErr = "Your Password Must Contain At Least 8 Characters!";
			}
			elseif(!preg_match("#[0-9]+#",$password)) {
				$passwordErr = "Your Password Must Contain At Least 1 Number!";
			}
			elseif(!preg_match("#[A-Z]+#",$password)) {
				$passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
			}
			elseif(!preg_match("#[a-z]+#",$password)) {
				$passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
			} else {
				$passwordErr = "Please Check You've Entered Or Confirmed Your Password!";
			}
		}
		//userSave
		$db->userSave($email,$name,$pNumber,$password,$confirm_password);
		
	}

?>
<div class="col-md-6 col-sm-6 create-new-account">
	<h4 class="checkout-subtitle">Create a new account</h4>
	<p class="text title-tag-line">Create your new account.</p>
	<form class="register-form outer-top-xs" role="form" method="POST" action="<?php echo $_SERVER["PHP_SELP"];?>">
        <!-- name -->
		<div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Name <span>*</span></label>
		    <input type="text" name="name" value="<?=  $name ?? null; ?>" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
			<?=  $err_name ?? null; ?>
		</div>
		<!-- gender -->
		<div class="form-row">
			<p>Gander <span style="color:red;">*</span></p>
			<div class="form-check col-md-4">
				<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
				<label class="form-check-label" for="flexRadioDefault1">
					Male
				</label>
			</div>
			<div class="form-check col-md-4">
				<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
				<label class="form-check-label" for="flexRadioDefault1">
					Female
				</label>
			</div>
			<div class="form-check col-md-4">
				<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
				<label class="form-check-label" for="flexRadioDefault1">
					Others
				</label>
			</div>
		</div>
		<!-- phone -->
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Phone Number <span>*</span></label>
		    <input type="text" name="pNumber" value="<?=  $pNumber ?? null; ?>" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
			<?=  $err_pNumber ?? null; ?>
		</div>
		
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Password <span>*</span></label>
		    <input type="password" name="password" value="<?=  $password ?? null; ?>" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
			<?=  $passwordErr ?? null; ?>
		</div>
         <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Confirm Password <span>*</span></label>
		    <input type="password" name="confirm_password" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
		</div>
	  	<button type="submit" name="submit" class="btn-upper btn btn-primary checkout-page-button">Sign Up</button>
	</form>
	
	
</div>	
<!-- create a new account -->			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<div id="brands-carousel" class="logo-slider wow fadeInUp">

		<div class="logo-slider-inner">	
			<div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
				<div class="item m-t-15">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item m-t-10">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->
		    </div><!-- /.owl-carousel #logo-slider -->
		</div><!-- /.logo-slider-inner -->
	
</div><!-- /.logo-slider -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->
<?php include_once("./footer.php") ?>