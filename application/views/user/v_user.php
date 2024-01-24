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
              <a href="user/tambahData" class="btn btn-primary"><i class="fa fa-plus"> Tambah Data</i></a><br><br>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>No Telp</th>
                    <th>Level</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                        $count = 0;
                        foreach ($query as $row) {
                            $count = $count + 1;
                    ?>
                  <tr>
                    <td><?= $count ?></td>
                    <td><?= $row->nama_lengkap ?></td>
                    <td><?= $row->username ?></td>
                    <td><?= $row->password ?></td>
                    <td><?= $row->no_telp ?></td>
                    <td><?= $row->level ?></td>
                    <td>
                    <a class="btn btn-warning" href="<?= base_url('index.php/user/edit') ?>/<?= $row->id_user ?>">Edit</a>
                    <a class="btn btn-danger" href="<?= base_url('index.php/user/fungsiDelete') ?>/<?= $row->id_user ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')">Hapus</a>
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
