  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <div class="row">
      <div class="col-md-5">
        <?php if ($this->session->flashdata('message')) :   ?>
          <?= $this->session->flashdata('message'); ?>
          <?php $this->session->unset_userdata('message'); ?>
        <?php endif ?>
      </div>
    </div>
    <div class="card mb-3 p-2" style="max-width: 450px;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img class="img-thumbnail" src="<?= base_url('assets/img/profile/') ?><?= $user['image'] ?>" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"><?= $user['name'] ?></h5>
            <p class="card-text"><?= $user['email'] ?> </p>
            <p class="card-text"><small class="text-muted"><?= date('d F Y', $user['date_created']) ?></small></p>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->