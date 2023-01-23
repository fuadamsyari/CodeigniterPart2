  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-md-6 lg-4 ">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col">
                <div class="p-5">
                  <div class="text-center pt-4">
                    <h1 class="h4 text-gray-900 mb-4">Login Page</h1>
                  </div>
                  <?php if ($this->session->flashdata('message')) :   ?>
                    <?= $this->session->flashdata('message'); ?>
                    <?php $this->session->unset_userdata('message'); ?>
                  <?php endif ?>
                  <form class="user" method="post" action="<?= base_url('auth') ?>">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="email" placeholder="Enter Email Address..." name="email" value="<?= set_value('email') ?>">
                      <?= form_error('email', '<div><small class="text-danger pl-3" >', '</small>') ?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                      <?= form_error('password', '<div><small class="text-danger pl-3" >', '</small>') ?>
                    </div>
                    <div class="div-login pt-3 ">
                      <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                    </div>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="<?= base_url('auth') ?>/register">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>