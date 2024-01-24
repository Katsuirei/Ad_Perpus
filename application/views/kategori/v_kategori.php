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
              <a href="kategori/tambahData" class="btn btn-primary"><i class="fa fa-plus"> Tambah Data</i></a><br><br>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                        $count = 0;
                        foreach ($queryAllkategori as $row) {
                            $count = $count + 1;
                    ?>
                  <tr>
                    <td><?= $count ?></td>
                    <td><?= $row->buku_id ?></td>
                    <td><?= $row->nama_kategori ?></td>
                    <td>
                    <!-- <a class="btn btn-warning" href="<?= base_url('index.php/kategori/edit') ?>/<?= $row->id_kategori ?>">Edit</a> -->
                    <a class="btn btn-danger" href="<?= base_url('index.php/kategori/fungsiDelete') ?>/<?= $row->id_kategori ?>"  onclick="return confirm('Anda yakin mau menghapus item ini ?')">Hapus</a>
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
