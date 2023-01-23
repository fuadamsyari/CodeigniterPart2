  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    <div class="row">
      <div class="col-lg-6">
        <a class="m-3 btn btn-primary" data-toggle="modal" data-target="#newRoleModal">Add New Role</a>
        <table class="table table-hover">
          <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>') ?>
          <?php if ($this->session->flashdata('message')) :   ?>
            <?= $this->session->flashdata('message'); ?>
            <?php $this->session->unset_userdata('message'); ?>
          <?php endif ?>
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Role</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 0;
            foreach ($role as $r) : ?>
              <tr>
                <th scope="row" class="nomor"><?= ++$i ?></th>
                <td><?= $r['role'] ?></td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-warning" href="<?= base_url('admin/roleaccess/' . $r['id']) ?>"><i class="fas fa-user-tag"></i></a>
                    <a class="btn btn-dark"><i class="fas fa-edit"></i></a>
                    <a class="btn btn-danger" href="<?= base_url('' . $r['id']) ?>"><i class="fas fa-trash-alt"></i></a>
                  </div>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->
  <!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="newRoldeModal" tabindex="-1" role="dialog" aria-labelledby="newRoldeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="newRoldeModalLabel">Add New Role</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?= base_url('admin/role') ?>" method="post">
            <input type="text" class="form-control" id="role" name="role" placeholder="Role name">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add</button>
          </form>
        </div>
      </div>
    </div>
  </div>