<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><?= $judul ?></h3>
              </div>
              <!-- /.card-header -->
              
              <div class="card-body">
              <a href="peminjaman/tambahData" class="btn btn-primary"><i class="fa fa-plus"> Tambah Data</i></a><br><br>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama User Insert</th>
                    <th>Nama User</th>
                    <th>Judul Buku</th>
                    <th>Tgl Pinjam</th>
                    <th>Tgl Kembali</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                        $count = 0;
                        foreach ($queryAllpeminjaman as $row) {
                            $count = $count + 1;

                        $tgl_kembali = new DateTime($row->tgl_pengembalian);
                        $tgl_sekarang = new DateTime();
                        $selisih = $tgl_sekarang->diff($tgl_kembali)->format("%a");
                    ?>
                  <tr>
                    <td><?= $count ?></td>
                    <td><?= $row->user_insert ?></td>
                    <td><?= $row->user_id ?></td>
                    <td><?= $row->buku_id ?></td>
                    <td><?= $row->tgl_peminjaman ?></td>
                    <td><?= $row->tgl_pengembalian ?></td>
                    <td>
                        <?php
                        if ($tgl_kembali >= $tgl_sekarang or $selisih == 0) {
                            echo "<b class='bg bg-warning'>Belum di Kembalikan</b>";
                        } else {
                            echo "Telat <b style = 'color:red;'>" . $selisih . "</b> Hari <br> <span class='label label-danger'> Denda Perhari = 1.000 ";
                        }
                        ?>
                    </td>
                    <td>
                    <a class="btn btn-success" href="<?= base_url('index.php/peminjaman/kembalikan') ?>/<?= $row->id_peminjaman ?>"  onclick="return confirm('Anda yakin mau Mengembalikan Buku ini ?')">Kembalikan</a>
                    </td>
                  </tr>
                  </tbody>
                  <?php } ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
</div>
</div>
</div>
</section>
