<!DOCTYPE html>
<html lang="en">
<head>
  <title>Halaman Mahasiswa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.png">
  <link rel="stylesheet" href="http://pmw.etupolinema.org/assets/css/style.css">
</head>
<body style="background-image:url(http://pmw.etupolinema.org/assets/img/bg5.png)">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse">
    <img src="<?php echo base_url(); ?>assets/img/logoo.jpg" alt="logoBrand" id="logoBrand" width="70" height="70">
      <ul class="navbar-nav mr-auto">      
        <li class="nav-item active">
          <h1 class="nav-link" >Edit Data Mahasiswa</h1>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a class="btn btn-danger" type="submit" href="<?php echo base_url('index.php/login/logout')?>">
        <span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
      </ul>
      </div>
    </div>
  </nav>
<br>
<br>
<section>
<form class="col-md-3" method="post" action="<?php echo base_url('index.php/lapmhs/edit') ?>">
    <div class="form-group">
      <label>Nomor Laporan</label>
      <input type="text" class="form-control" value="<?php echo $laporan->no_lap?>" disabled>
      <input type="hidden" name="no_lap" value="<?php echo $laporan->no_lap?>" >
    </div>
    <div class="form-group">
      <label>Judul PMW</label>
      <input type="text" class="form-control" name="judul" value="<?php echo $laporan->judul?>">
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Jenis Laporan</label>
      <select class="form-control" name="jnlap" id="exampleFormControlSelect1" value="<?php echo $laporan->jnlap?>">
        <option>Pilih salah satu</option>
        <option>Laporan Kemajuan 1</option>
        <option>Laporan Kemajuan 2</option>
        <option>Laporan Kemajuan 3</option>
        <option>Laporan Akhir</option>
      </select>
    </div>
    <div class="form-group">
      <label>Nomor Induk Mahasiswa</label>
      <input type="text" class="form-control" value="<?php echo $laporan->nim?>" disabled>
      <input type="hidden" name="nim" value="<?php echo $laporan->nim?>" >
    </div>
    <div class="form-group">
      <label>Tanggal Upload</label>
      <input type="date" class="form-control" name="tgl_upld" value="<?php echo $laporan->tgl_upld?>">
    </div>
    <div class="form-group">
      <label for="exampleFormControlFile1">File</label>
      <input type="file" class="form-control-file" id="exampleFormControlFile1" value="<?php echo $laporan->file?>">
    </div>
    <button type="submit" class="btn btn-warning" value="submit">Simpan</button>
    <a href="<?php echo base_url('index.php/lapmhs')?>" class="btn btn-primary">Kembali</a>
  </form>
 </section>
 <br><br><br>
 <footer class = "footer-area" id = "kontak">
 <div class = "container">
  <div class = "row justify-content-between">
    <div class = "col-sm-6 col-md-4 col-xl-3">
      <div class = "single-footer-widget footer_1">
        <a href="#Beranda">
        <img src="http://pmw.etupolinema.org/assets/img/logo1.png" alt="img"></a>
        <p>Enterpreneur Trining Unit</p>
        <p>Politeknik Negeri Malang</p>
      </div>
    </div>
    <div class = "col-sm-6 col-md-4 col-xl-4">
    <div class = "single-footer-widget footer_2">
        <h4>Sosial Media</h4>
        <p>Stay updated with our latest trends Seed heaven so said place winged over given forth fruit.</p>
        <p>Politeknik Negeri Malang</p>
      </div>
    </div>
    <div class = "col-xl-3 col-sm-6 col-md-4">
      <div class = "single-footer-widget footer_2">
        <h4>Kontak</h4>
        <div class= "contact_info">
          <p><span>Alamat : </span>Gedung AX (Kantin) Lt.3</p>
          <p><span>Telepon : </span>+2 36 265 (8060)</p>
          <p><span>Email : etupolinema@gmail.com</span></p>
        </div>
      </div>
    </div>    
  </div>
 </div>
 </footer>
 </div>
</body>
</html>