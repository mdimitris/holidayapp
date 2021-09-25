<div class="login-box">
  <div class="card">
    <div class="card-body login-card-body">
      <?php
      if (isset($_SESSION["user_found"])) {
        if ($_SESSION["user_found"] == 0) { ?>

          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-ban"></i> Alert!</h5>
            Please insert the correct credentials
          </div>
      <?php }
      } ?>

      <p class="login-box-msg">Sign in to start your session</p>

      <form action="./user-functions.php" name='checkuser' method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name='email' placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name='password' placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <input type="submit" class="btn btn-primary btn-block" name='checkuser' value='Sign In' />
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->