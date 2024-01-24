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
              <a href="koleksi/tambahData" class="btn btn-primary"><i class="fa fa-plus"> Tambah Data</i></a><br><br>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama User</th>
                    <th>Judul Buku</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                        $count = 0;
                        foreach ($queryAllkoleksi as $row) {
                            $count = $count + 1;
                    ?>
                  <tr>
                    <td><?= $count ?></td>
                    <td><?= $row->user_id ?></td>
                    <td><?= $row->buku_id ?></td>
                    <td>
                    <!-- <a class="btn btn-warning" href="<?= base_url('index.php/koleksi/edit') ?>/<?= $row->id_koleksi ?>">Edit</a> -->
                    <a class="btn btn-danger" href="<?= base_url('index.php/koleksi/fungsiDelete') ?>/<?= $row->id_koleksi ?>"  onclick="return confirm('Anda yakin mau menghapus item ini ?')">Hapus</a>
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
