<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sibung SD Online</title>

    <!-- Bootstrap -->
    <link href="plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="plugins/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="plugins/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>


      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <img src="build/images/SD.png" height="100px" width="200px">
          <h2 style="font-size: 25px; font-weight: 600;color: #26b99a;">Sibung SD</h2>
          <h2 style="font-size: 18px; font-weight: 200; color: #26b99a;">Sistem Informasi Tabungan Sekolah Dasar</h2>
            <form action="cek_login.php" method="post">
              <p>Masukkan Username dan Password</p>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="username" required="Masukkan Username" autocomplete="off" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" required autocomplete="off" />
              </div>
              <div>
                <button type="submit" class="btn btn-success btn-sm btn-block">Masuk</button></form>
              </div><br>
              Belum punya akun?
              <a  class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalAdd"><i class="glyphicon glyphicon-plus"></i>Daftar</a>

              <div class="clearfix"></div>

              <div class="separator">


                <div class="clearfix"></div>
                <br />

                <div>
                  <p>Copyright © 2018</p>
                </div>
              </div>
          </section>
        </div>


      </div>
    </div>
  </body>
</html>
<!-- Modal -->
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Data</h4>
      </div>
      <div class="modal-body">
      <!-- start form for validation -->
      <form action="?module=<?php echo $_GET['module'];?>&aksi=simpan"  enctype="multipart/form-data" method="POST">
        <?php
          $query = "SELECT max(id_pegawai) as maxID FROM pegawai ";
          $hasil = mysqli_query($conn,$query);
          $data = @mysqli_fetch_array($hasil);
          $idMax = $data['maxID'];

          $noUrut = (int) substr($idMax, 1, 9);
          $noUrut++;
          $char = "P";
          $newID = $char.sprintf("%04s", $noUrut);
        ?>
                      <label for="id">ID Pegawai * :</label>
                      <input type="text"  class="form-control" disabled value="<?php echo $newID;?>"  />
                      <input type="hidden"  class="form-control" name="id" value="<?php echo $newID;?>"  />

                      <label for="nama">Nama * :</label>
                      <input type="text"  class="form-control" name="nama" autocomplete="off" required />

                      <label for="alamat">Alamat * :</label>
                      <textarea class="form-control" name="alamat" autocomplete="off" requerid  > </textarea>

                      <label for="telephone">Telephone:</label>
                      <input type="text"  class="form-control" name="telephone" autocomplete="off"   />

                      <label for="username">Username * :</label>
                      <input type="text"  class="form-control" name="username" autocomplete="off"  required />

                      <label for="password">Password * :</label>
                      <input type="password"  class="form-control" name="password" autocomplete="off"  required />

                      <label for="heard">Level *:</label>
                        <select id="heard" class="form-control" required name="level">
                            <option value="">- Pilih Level -</option>
                            <option value="1">User</option>
                            <option value="2">Admin</option>
                        </select>

                      <label>Status *:</label>
                      <select id="heard" class="form-control" required autocomplete="off"  name="status">
                            <option value="">- Pilih Status -</option>
                            <option value="Y">Aktif</option>
                            <option value="T">Tidak Aktif</option>
                      </select>
                      <br>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-success btn-sm">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
