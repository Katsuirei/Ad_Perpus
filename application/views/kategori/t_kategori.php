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
              <form method="post" action="<?= base_url() ?>index.php/kategori/fungsiTambah">
                <div class="card-body">
               
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
                    <label for="exampleInputPassword1">Nama Kategori</label>
                    <input type="text" class="form-control" name="nama_kategori" id="exampleInputPassword1" placeholder="Ketik disini..." required>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                    </div>
                  </div>
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="<?= base_url() ?>index.php/kategori" class="btn btn-warning">Kembali</a>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
</div>
</div>
</div>
</section>