<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6 lg-5 ">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <div class="row">
            <div class="col">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                </div>
                <!-- form -->
                <form class="user" method="post" action="<?= base_url('auth/register') ?>">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full Name" value="<?= set_value('name') ?>">
                    <?= form_error('name', '<div><small class="text-danger pl-3" >', '</small>') ?>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email') ?>">
                    <?= form_error('email', '<div><small class="text-danger pl-3" >', '</small>') ?>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                      <?= form_error('password1', '<div><small class="text-danger pl-3" >', '</small>') ?>
                    </div>
                    <div class="col-sm-6">
                      <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">,
                      <?= form_error('password', '<div><small class="text-danger pl-3" >', '</small>') ?>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-user btn-block">
                    Register Account
                  </button>
                </form>
                <!-- end form -->
                <hr>
                <div class="text-center">
                  <a class="small" href="forgot-password.html">Forgot Password?</a>
                </div>
                <div class="text-center">
                  <a class="small" href="<?= base_url('auth') ?>">Already have an account? Login!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>