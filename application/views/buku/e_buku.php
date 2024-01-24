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
              <?php foreach($buku as $u){ ?>
              <form method="post" action="<?= base_url() ?>index.php/buku/update">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">ID</label>
                    <input type="text" class="form-control" name="id_buku" value="<?= $u->id_buku ?>" id="exampleInputEmail1" placeholder="Judul" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul</label>
                    <input type="text" class="form-control" name="judul" value="<?= $u->judul ?>" id="exampleInputEmail1" placeholder="Judul" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Penulis</label>
                    <input type="text" class="form-control" name="penulis" value="<?= $u->penulis ?>" id="exampleInputPassword1" placeholder="Penulis" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Penerbit</label>
                    <input type="text" class="form-control" name="penerbit" value="<?= $u->penerbit ?>" id="exampleInputPassword1" placeholder="Penerbit" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tahun Terbit</label>
                    <input type="number" class="form-control" name="tahun_terbit" value="<?= $u->tahun_terbit ?>" id="exampleInputPassword1" placeholder="Tahun Terbit" required>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="<?= base_url() ?>index.php/buku" class="btn btn-warning">Kembali</a>
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