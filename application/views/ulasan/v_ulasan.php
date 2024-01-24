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
              <a href="ulasan/tambahData" class="btn btn-primary"><i class="fa fa-plus"> Tambah Data</i></a><br><br>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama User</th>
                    <th>Judul Buku</th>
                    <th>Ulasan</th>
                    <th>Rating Buku</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                        $count = 0;
                        foreach ($queryAllulasan as $row) {
                            $count = $count + 1;
                    ?>
                  <tr>
                    <td><?= $count ?></td>
                    <td><?= $row->user_id ?></td>
                    <td><?= $row->buku_id ?></td>
                    <td><?= $row->ulasan ?></td>
                    <td><b class="text-info"><?= $row->rating ?></b></td>
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
