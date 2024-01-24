 <!-- Main content -->
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?= $judul ?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="<?= base_url() ?>index.php/user/fungsiTambah">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap" id="exampleInputEmail1" placeholder="Ketik disini..." required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Username</label>
                    <input type="text" class="form-control" name="username" id="exampleInputPassword1" placeholder="Ketik disini..." required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="text" class="form-control" name="password" id="exampleInputPassword1" placeholder="Ketik disini..." required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No Telp</label>
                    <input type="number" class="form-control" name="no_telp" id="exampleInputPassword1" placeholder="Ketik disini..." required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Level</label>
                    <input type="text" class="form-control" name="level" id="exampleInputPassword1" placeholder="Ketik disini..." required>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="<?= base_url() ?>index.php/user" class="btn btn-warning">Kembali</a>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
</div>
</div>
</div>
</section>