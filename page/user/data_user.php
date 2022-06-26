  

<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                  Tambah User
                </button>
                <a href="page/user/print_user.php">
                <button type="button" class="btn btn-success">
                <i class="fa fa-print"> Print </i>
                </button>
                </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                 <thead>
                    <tr>
                        <th>No</th>
                        <th>Id User</th>
                        <th>Nama</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                 </thead>
                 <tbody>
                    <?php
                    $no = 0;
                    $admin=$mysqli->query("SELECT * FROM tbuser");
                    while($m=mysqli_fetch_array($admin)){
                        $no++;
                    ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $m['iduser']; ?></td>
                        <td><?php echo $m['namauser']; ?></td>
                        <td><?php echo $m['status']; ?></td>
                        <td>
                          <a href="index.php?page=edit_user&kode=<?php echo $m['iduser']; ?>">
                          <button type="button" class="btn btn-warning"> <i class="fa fa-edit"></i> </button>
                          </a>
                          <a href="index.php?page=hapus_user&kode=<?php echo $m['iduser']; ?>" onclick="return confirm('yakin akan menghapus data?')">
                          <button type="button" class="btn btn-danger"> <i class="fa fa-trash"></i> </button>
                        </a>
                        </td>
                    </tr>
                    <?php } ?>
                 </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- .modal from tambah user -->
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Form Tambah User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- form start -->
              <form role="form" method="post" action="index.php?page=tambah_user">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Id User</label>
                    <input type="text" class="form-control" name="iduser" placeholder="Masukan Id User">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" name="namauser" placeholder="Masukan Nama">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <input type="text" class="form-control" name="status" placeholder="Masukan Status">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal from tambah user -->   