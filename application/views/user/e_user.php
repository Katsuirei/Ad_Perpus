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
              <?php foreach($user as $u){ ?>
              <form method="post" action="<?= base_url() ?>index.php/user/update">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">ID</label>
                    <input type="text" class="form-control" name="id_user" value="<?= $u->id_user ?>" id="exampleInputEmail1" placeholder="Judul" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap" value="<?= $u->nama_lengkap ?>" id="exampleInputEmail1" placeholder="Judul" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Username</label>
                    <input type="text" class="form-control" name="username" value="<?= $u->username ?>" id="exampleInputPassword1" placeholder="Penulis" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="text" class="form-control" name="password" value="<?= $u->password ?>" id="exampleInputPassword1" placeholder="Penerbit" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No Telp</label>
                    <input type="number" class="form-control" name="no_telp" value="<?= $u->no_telp ?>" id="exampleInputPassword1" placeholder="Tahun Terbit" required>
                  </div>
                  <div class="form-group">
                  <label>Level</label>
                  <select name="level" class="form-control select2" style="width: 100%;">
                    <option selected="selected">--Pilih--</option>
                    <option value="Administrator">Administrator</option>
                    <option value="Petugas">Petugas</option>
                    <option value="Peminjam">Peminjam</option>
                  </select>
                </div>
                  <div class="form-group">
                    <div class="input-group">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="<?= base_url() ?>index.php/user" class="btn btn-warning">Kembali</a>
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
              <?php } ?>
            </div>
            <!-- /.card -->
</div>
</div>
</div>
</section>