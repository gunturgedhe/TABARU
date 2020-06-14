<!DOCTYPE html>
<html lang="en">
<head>
  <title>AdminPelaporanPMW</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
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
          <a class="nav-link" href="<?php echo base_url().'index.php/dosen' ?>">DOSEN</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url().'index.php/mahasiswa' ?>">MAHASISWA</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url().'index.php/lapadm' ?>">LAPORAN</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a class="btn btn-danger" type="submit" href="<?php echo base_url('index.php/login/logout')?>">
        <span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
      </ul>
      </div>
    </div>
</nav>
  <h1>Data Mahasiswa</h1>
<div class="form-row col-lg-12">
  <form>
    <div class="form-row align-items-center">
      <?php echo form_open('search/searchmhs')?>
        <div class="col-auto"> 
          <input type="text" name="keyword" id="keyword" class="form-control mb-2" placeholder="Search">
        </div>
        <div class="col-auto">
          <button type="submit" class="btn btn-info mb-2">Cari</button>
        </div>
      <?php echo form_close()?>
    </div>
  <br>
<div class="table-responsive">
  <table class="table table-bordered">
  <div class="row">
      <div class="col-lg-3">
      	<?php echo $this->session->flashdata('hasil'); ?>
        <a class="btn btn-success" href="<?php echo base_url('index.php/mahasiswa/c_mahasiswa') ?>"><i class="fa fa file"></i>Create</a>
          <table class="table" id="dataTables-example">
            <thead class="thead-dark">
                <tr>
                  <th>Nomor Induk Mahasiswa</th>
                  <th>Nama Mahasiswa</th>
                  <th>No. HP</th>
                  <th>Password</th>
                  <th>Jurusan</th>
                  <th>Program Studi</th>
                  <th>Kode Dosen Pembimbing</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $count = 0;
                  foreach ($mahasiswa as $m){
                  $count = $count + 1; ?>
                <tr>
                  <td><?php echo $m->nim ?></td>                                
                  <td><?php echo $m->nama ?></td>                                
                  <td><?php echo $m->no_hp ?></td>                                
                  <td><?php echo $m->password ?></td>                                
                  <td><?php echo $m->jurusan ?></td>                                
                  <td><?php echo $m->prodi ?></td>                                
                  <td><?php echo $m->kddospem ?></td>
                  <td>
                    <a class="btn btn-warning" href="<?php echo base_url('index.php/mahasiswa/e_mahasiswa/'). $m->nim ?>"><i class="fa fa file"></i>Edit</a>
                    <a class="btn btn-danger" href="<?php echo base_url('index.php/mahasiswa/delete/'). $m->nim ?>"><i class="fa fa file"></i>Delete</a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
          </table>
        <!-- /.table-responsive -->
      </div>
      <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
  </div>
  <!-- /.col-lg-12 -->
  </div>
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
</body>
</html>


  