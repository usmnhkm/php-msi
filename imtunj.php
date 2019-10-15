<?php
 include "config/koneksi.php";
if(isset($_POST['simpan'])){
  $sql = "INSERT INTO imtunj VALUES ('$_POST[nama_lengkap]','$_POST[nama_panggilan]','$_POST[ttl]','$_POST[asal_sekolah]','$_POST[fakultas]','$_POST[prodi]','$_POST[angkatan]','$_POST[alamat_rumah]','$_POST[alamat_sekarang]','$_POST[no_hp]','$_POST[sosmed]')";
  $eksekusi = mysqli_query($con,$sql);
  echo "<script>alert('Data Berhasil Tersimpan');document.location.href='?menu=imtunj'</script>";
}
 ?>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Form Nilai</h6>
            </div>
            <div class="card-body">
            <form method="post">
            <div class="form-group">
                <div class="row">
                    <div class="col">
                    <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap">
                    </div>
                    <div class="col">
                    <input name="nama_panggilan" class="form-control" placeholder="Nama Panggilan">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                  <div class="col">
                  <input name="ttl" class="form-control" placeholder="Tempat, Tanggal Lahir">
                  </div>
                    <div class="col">
                    <input name="asal_sekolah" class="form-control" placeholder="Asal Sekolah">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                    <input type="text" name="fakultas" class="form-control" placeholder="Fakultas">
                    </div>
                    <div class="col">
                    <input type="text" name="prodi" class="form-control" placeholder="Program Studi">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                    <input name="angkatan" class="form-control" placeholder="Angkatan">
                    </div>
                    <div class="col">
                    <input type="text" name="alamat_rumah" class="form-control" placeholder="Alamat Asal">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                    <input type="text" name="alamat_sekarang" class="form-control" placeholder="Alamat Domisili">
                    </div>
                    <div class="col">
                    <input type="text" name="no_hp" class="form-control" placeholder="Nomor HP">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                    <input type="text" name="sosmed" class="form-control" placeholder="Sosial Media">
                    </div>
                </div>
            </div>
            <button type="submit" name="simpan" class="btn btn-primary">SIMPAN</button>
            </form>
            <br><br>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama Lengkap</th>
                      <th>Nama Panggilan</th>
                      <th>Tempat, Tanggal Lahir</th>
                      <th>Asal Sekolah</th>
                      <th>Fakultas</th>
                      <th>Program Studi</th>
                      <th>Angkatan</th>
                      <th>Alamat Asal</th>
                      <th>Alamat Domisili</th>
                      <th>Nomor HP</th>
                      <th>Sosial Media</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql = mysqli_query($con,"SELECT * FROM imtunj");
                    while($r=mysqli_fetch_array($sql)){
                      ?>
                    <tr>
                      <td><?php echo $r['nama_lengkap'] ?></td>
                      <td><?php echo $r['nama_panggilan'] ?></td>
                      <td><?php echo $r['ttl'] ?></td>
                      <td><?php echo $r['asal_sekolah'] ?></td>
                      <td><?php echo $r['fakultas'] ?></td>
                      <td><?php echo $r['prodi'] ?></td>
                      <td><?php echo $r['angkatan'] ?></td>
                      <td><?php echo $r['alamat_rumah'] ?></td>
                      <td><?php echo $r['alamat_sekarang'] ?></td>
                      <td><?php echo $r['no_hp'] ?></td>
                      <td><?php echo $r['sosmed'] ?></td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
