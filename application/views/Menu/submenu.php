  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    <div class="row">
      <div class="col-lg">
        <a class="m-3 btn btn-primary" data-toggle="modal" data-target="#newSubMenuModal">Add New Submenu</a>
        <table class="table table-hover">
          <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
              <?= validation_errors() ?>
            </div>
          <?php endif ?>
          <?php if ($this->session->flashdata('message')) :   ?>
            <?= $this->session->flashdata('message'); ?>
            <?php $this->session->unset_userdata('message'); ?>
          <?php endif ?>
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Menu ID</th>
              <th scope="col">Url</th>
              <th scope="col">Icon</th>
              <th scope="col">Active</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 0;
            foreach ($subMenu as $sm) : ?>
              <tr>
                <th scope="row" class="nomor"><?= ++$i ?></th>
                <td><?= $sm['title'] ?></td>
                <td><?= $sm['menu'] ?></td>
                <td><?= $sm['url'] ?></td>
                <td><?= $sm['icon'] ?></td>
                <td><?= $sm['is_active'] ?></td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-dark"><i class="fas fa-edit"></i></i></a>
                    <a class="btn btn-danger" href="<?= base_url('menu/hapusSubMenu/' . $sm['id']) ?>"><i class=" fas fa-trash-alt"></i></a>
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
  <div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="newSubMenuModalLabel">Add New SubMenu</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?= base_url('menu/submenu') ?>" method="post">
            <div class="form-group">
              <input type="text" class="form-control" id="title" name="title" placeholder="SubMenu Title">
            </div>
            <div class="form-group">
              <select name="menu_id" class="custom-select" id="menu_id">
                <?php foreach ($menu as $m) : ?>
                  <option value="<?= $m['id'] ?>"><?= $m['menu'] ?></option>
                <?php endforeach ?>
              </select>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="url" name="url" placeholder="SubMenu url">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="icon" name="icon" placeholder="SubMenu icon">
            </div>
            <div class="input-group-prepend">
              <div class="form-check">
                <input type="checkbox" id="is_active" value="1" name="is_active" aria-label="Checkbox for following text input" checked>
                <label for="#is_active" class="px-2 form-check-label">Active?</label>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add</button>
          </form>
        </div>
      </div>
    </div>
  </div>