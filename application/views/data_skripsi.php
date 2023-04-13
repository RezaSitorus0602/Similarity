<!DOCTYPE html>
<html>
    <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>--------------------------</title>
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url() ;?>asetadmin/theme/bootstrap.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url() ;?>asetadmin/theme/usebootstrap.css">
    <?php 
    foreach($css_files as $file): ?>
      <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>
    </head> 
<body style="background-image: url('<?php echo base_url() ;?>asetadmin/gambar/jadi1b.jpg')">
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
<div class="container">
<div class="page-header">
                  <h1 id="tables">Data Judul Skripsi</h1>
                </div>
        
        
           <?php echo $output; ?>
        
        <hr>
        <a href="<?php echo base_url() ;?>Dataskripsi/logout"><button type="button" class="btn btn-primary">Logout</button></a>
        <hr>
    </div>
    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
<script src="<?php echo base_url() ;?>asetadmin/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo base_url() ;?>asetadmin/bootstrap/usebootstrap.js"></script>

</body>
</html>