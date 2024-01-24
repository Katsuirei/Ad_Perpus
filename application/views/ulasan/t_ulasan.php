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
              <form method="post" action="<?= base_url() ?>index.php/ulasan/fungsiTambah">
                <div class="card-body">
                <div class="form-group">
                  <label>Nama User</label>
                  <select name="user_id" class="form-control select2" style="width: 100%;">
                  <option>--Pilih--</option>
                  <?php foreach($user as $u): ?>
                      <option value="<?= $u->nama_lengkap ?>" ><?= $u->nama_lengkap; ?></option>
                  <?php endforeach ;?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Judul Buku</label>
                  <select name="buku_id" class="form-control select2" style="width: 100%;">
                  <option>--Pilih--</option>
                  <?php foreach($buku as $p): ?>
                      <option value="<?= $p->judul ?>" ><?= $p->judul; ?></option>
                  <?php endforeach ;?>
                  </select>
                </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Ulasan</label>
                    <input type="text" class="form-control" name="ulasan" id="exampleInputPassword1" placeholder="Ketik disini..." required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Rating Buku</label>
                    <input type="number" class="form-control" name="rating" id="exampleInputPassword1" placeholder="Ketik disini..." required>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="<?= base_url() ?>index.php/ulasan" class="btn btn-warning">Kembali</a>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
</div>
</div>
</div>
</section>