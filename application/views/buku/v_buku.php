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
              <a href="buku/tambahData" class="btn btn-primary"><i class="fa fa-plus"> Tambah Data</i></a><br><br>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                        $count = 0;
                        foreach ($queryAllBuku as $row) {
                            $count = $count + 1;
                    ?>
                  <tr>
                    <td><?= $count ?></td>
                    <td><?= $row->judul ?></td>
                    <td><?= $row->penulis ?></td>
                    <td><?= $row->penerbit ?></td>
                    <td><?= $row->tahun_terbit ?></td>
                    <td>
                    <a class="btn btn-warning" href="<?= base_url('index.php/buku/edit') ?>/<?= $row->id_buku ?>">Edit</a>
                    <a class="btn btn-danger" href="<?= base_url('index.php/buku/fungsiDelete') ?>/<?= $row->id_buku ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')">Hapus</a>
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
