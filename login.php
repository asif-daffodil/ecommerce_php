<?php include_once("./header.php") ?>
<div class="breadcrumb">
  <div class="container">
    <div class="breadcrumb-inner">
      <ul class="list-inline list-unstyled">
        <li><a href="home.html">Home</a></li>
        <li class="active">Login</li>
      </ul>
    </div>
    <!-- /.breadcrumb-inner -->
  </div>
  <!-- /.container -->
</div>
<!-- /.breadcrumb -->

<div class="body-content">
  <div class="container">
    <div class="sign-in-page">
      <div class="row">
        <!-- Sign-in -->
        <div class="col-md-6 col-sm-6 sign-in">
          <h4 class="">Sign in</h4>
          <p class="">Hello, Welcome to your account.</p>
          <form class="register-form outer-top-xs" role="form">
            <div class="form-group">
              <label class="info-title" for="exampleInputEmail1"
                >Email Address <span>*</span></label
              >
              <input
                type="email"
                class="form-control unicase-form-control text-input"
                id="exampleInputEmail1"
              />
            </div>
            <div class="form-group">
              <label class="info-title" for="exampleInputPassword1"
                >Password <span>*</span></label
              >
              <input
                type="password"
                class="form-control unicase-form-control text-input"
                id="exampleInputPassword1"
              />
            </div>
            <div class="radio outer-xs">
              <label>
                <input
                  type="radio"
                  name="optionsRadios"
                  id="optionsRadios2"
                  value="option2"
                />Remember me!
              </label>
              <a href="#" class="forgot-password pull-right"
                >Forgot your Password?</a
              >
            </div>
            <button
              type="submit"
              class="btn-upper btn btn-primary checkout-page-button"
            >
              Login
            </button>
          </form>
        </div>
        <!-- Sign-in -->
      </div>
    </div>
  </div>
  <!-- /.container -->
</div>
<!-- /.body-content -->
<?php include_once("./footer.php") ?>
