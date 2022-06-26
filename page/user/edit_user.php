            <?php
            $edit = $mysqli->query("SELECT * FROM tbuser WHERE iduser = '$_GET[kode]'");
            $e = mysqli_fetch_array($edit);
            ?>
            
            <form role="form" method="post" action="index.php?page=update_user">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Id User</label>
                    <input type="text" class="form-control" name="iduser" value="<?php echo $e['iduser']; ?>" disabled="true" placeholder="Masukan Id User">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" name="namauser" value="<?php echo $e['namauser']; ?>" placeholder="Masukan Nama">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <input type="text" class="form-control" name="status" value="<?php echo $e['status']; ?>" placeholder="Masukan Status">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" value="<?php echo $e['password']; ?>" placeholder="Masukkan Password">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit</button>
                </div>
              </form>