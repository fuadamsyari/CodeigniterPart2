  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    <div class="row pb-5">
      <div class="col-md-4">
        <?php if ($this->session->flashdata('message')) :   ?>
          <?= $this->session->flashdata('message'); ?>
          <?php $this->session->unset_userdata('message'); ?>
        <?php endif ?>
      </div>
      <div class="col-lg-12 pb-5">
        <div class="row">
          <div class="col-md-5">
            <form action="<?= base_url('user/changepassword') ?>" method="post">
              <div class="form-group">
                <label for="current_password">Current Password</label>
                <input type="password" class="form-control" id="current_password" name="current_password">
                <?= form_error('current_password', '<div><small class="text-danger pl-3" >', '</small>') ?>
              </div>
              <div class="form-group">
                <label for="new_password1">New Password</label>
                <input type="password" class="form-control" id="new_password1" name="new_password1">
                <?= form_error('new_password1', '<div><small class="text-danger pl-3" >', '</small>') ?>
              </div>
              <div class="form-group">
                <label for="new_password2">Repeat New Password</label>
                <input type="password" class="form-control" id="new_password2" name="new_password2">
                <?= form_error('new_password2', '<div><small class="text-danger pl-3" >', '</small>') ?>
              </div>
              <button type="submit" class="btn btn-primary">Change</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->