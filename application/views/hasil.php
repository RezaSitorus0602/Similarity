<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>--------------------------</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url() ;?>asetadmin/theme/bootstrap.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url() ;?>asetadmin/theme/usebootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ;?>asetadmin/loader/gaya1.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="bootstrap/html5shiv.js"></script>
      <script src="bootstrap/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="http://usebootstrap.com/" class="navbar-brand">Sistem Pencarian Judul Skripsi</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
		  
        </div>
      </div>
    </div>
    <img class="img-responsive" src="<?php echo base_url() ;?>asetadmin/gambar/jadi2a.jpg"> 
      <div class="page-header" id="banner">
        <div class="row">
          <div class="col-lg-12">
          <h2 align="center"> <img src="<?php echo base_url() ;?>asetadmin/gambar/jadi3b.jpg" alt="" width="50"> Silahkan Ketikan Judul Skripsi Anda <img src="<?php echo base_url() ;?>asetadmin/gambar/jadi3a.jpg" alt="" width="50"></h2>
          </div>
        </div>
        <hr>  
      </div>
    </div>
    <div class="container">
    <form action="<?php echo base_url('Cari/hasil')?>" action="GET">
    <div class="form-group">
      <div class="input-group">
        <span class="input-group-addon"></span>
        <input type="text" class="form-control" name="cari">
        <span class="input-group-btn">
          <button class="btn btn-primary" type="submit">Cari</button>
        </span>
      </div>
    </div>
</form>
  </div>
  <hr>  
  <p align="center"><img class="img-responsive" src="<?php echo base_url() ;?>asetadmin/gambar/jadi2.png" width="150"> </p>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url() ;?>asetadmin/bootstrap/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ;?>asetadmin/bootstrap/usebootstrap.js"></script>
  </body>
</html>
