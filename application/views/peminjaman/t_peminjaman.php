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
              <?php 
              $tgl = date('Y-m-d'); 
              $tgl_kembali = date( "Y-m-d", strtotime( "$tgl +7 day" ) );
              // $tujuh_hari = mktime(0, 0, 0, date("n"), date("j") + 7, date("Y"));
              // $tgl_kembali = date('Y-m-d', $tujuh_hari);
              ?>
              <!-- form start -->
              <form method="post" action="<?= base_url() ?>index.php/peminjaman/fungsiTambah">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputPassword1">User Insert</label>
                    <input type="text" class="form-control" value="<?= $this->session->userdata('nama_lengkap') ?>" name="user_insert" id="exampleInputPassword1" readonly>
                  </div>
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
                    <label for="exampleInputPassword1">Tgl Pinjam</label>
                    <input type="date" class="form-control" value="<?= $tgl ?>" name="tgl_peminjaman" id="exampleInputPassword1" placeholder="Ketik disini..." readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tgl Kembali</label>
                    <input type="date" class="form-control" name="tgl_pengembalian" value="<?= $tgl_kembali ?>" id="exampleInputPassword1" placeholder="Ketik disini..." readonly>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="<?= base_url() ?>index.php/peminjaman" class="btn btn-warning">Kembali</a>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
</div>
</div>
</div>
</section>