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
    <hr>
      <a href="<?php echo base_url() ;?>"><button type="button" class="btn btn-info">Kembali</button></a>
</form>
  </div>
  
  <hr>  
<body onload="myFunction()">
  <div class="container">
      <div class="bodey">

    
          <div class="container1" id="loader">
              <div class="span1"></div>
              <div class="center1">
                  <div class="wrap">
                      <div class="bok-1 bok">
                          <i><img src="<?php echo base_url() ;?>asetadmin/loader/idea.png" alt=""></i>
                          <i><img src="<?php echo base_url() ;?>asetadmin/loader/idea.png" alt=""></i>
                      </div>
                      <div class="bok-2 bok">
                          <i><img src="<?php echo base_url() ;?>asetadmin/loader/idea.png" alt=""></i>
                          <i><img src="<?php echo base_url() ;?>asetadmin/loader/idea.png" alt=""></i>
                      </div>
                  </div>
              </div>
          </div>

  <?php
      if(count($cari)>0)
      {
      foreach($cari  as $row)
      {
?>

  <div style="display:none;" id="myDiv" class="alert alert-dismissable alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <h4>Mohon Maaf!</h4>
    <p>Judul skripsi yang anda ajukan sudah pernah dibuat.</p>
    <p>Judul skripsi yang anda ajukan pernah dibuat oleh <span  class="label label-info"><?php echo $row->nama_penulis; ?></span> Pada Tahun <span  class="label label-info"><?php echo $row->tahun; ?></span></p>
  </div>
  <?php
      }
                              
                        
                      ?>
    <?php }else {
      Echo '<div style="display:none;" id="myDiv" class="alert alert-dismissable alert-success">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <h4>Selamat!</h4>
      <p>Judul skripsi yang anda ajukan masih belum pernah diajukan, Silahkan hubungi dosen pembimbing anda.</p>
  </div>';  
    }
    ?>
 
 </div>
<script>
    var myVar;
    
    function myFunction() {
      myVar = setTimeout(showPage, 3000);
    }
    
    function showPage() {
      document.getElementById("loader").style.display = "none";
      document.getElementById("myDiv").style.display = "block";
    }
    </script>
</body>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url() ;?>asetadmin/bootstrap/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ;?>asetadmin/bootstrap/usebootstrap.js"></script>
  </body>
</html>
