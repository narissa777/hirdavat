

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ürün Düzenle</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url('/'); ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('/'); ?>dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">


<?php $this->load->view('admin/include/sidebar'); ?>
<?php $this->load->view('admin/include/header'); ?>






  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Hizmetler Kart Düzenleme Sayfası</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">ANA SAYFA</a></li>
              <li class="breadcrumb-item active">Hizmetler Kart Düzenleme Sayfası</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
    <div style="margin-left:500px; margin-right:500px;" style="color:#009531;">

    </div>
   
    <div style="margin-left:50px; margin-right:50px;"  class="panel-body">
      <form action="<?php echo base_url('admin/hizmetlerkartduzenlee'); ?>" role="form" method="POST" enctype= "multipart/form-data">
      
        <div class="form-group">
          <label>Hizmetler Kart Başlık</label>
          <input name="kartbaslikduzenle" class="form-control" type="text" value="<?php echo $hizmetlerkart->kartbaslik ; ?>">
          <p class="help-block">Başlık ekleyiniz.</p>
        </div>
        <div class="form-group">
          <label>Hizmetler Kart Açıklama</label>
          <input name="kartaciklamaduzenle" class="form-control" type="text" value="<?php echo $hizmetlerkart->kartaciklama; ?>">
          <p class="help-block">Açıklama ekleyiniz.</p>
        </div>
        <div class="form-group">
          <label>Hizmetler Kart Önsöz</label>
          <input name="kartonsozduzenle" class="form-control" type="text" value="<?php echo $hizmetlerkart->kartonsoz; ?>">
          <p class="help-block">Önsöz ekleyiniz.</p>
        </div>
        
        
        
        
        <input type="hidden" name="id" value="<?php echo $hizmetlerkart ->id ; ?>">
        
        </select>
        <br>
        <br>


        <button  style="margin-left:500px;" name="kaydett" type="submit" class="btn btn-info">KAYDET </button>






      </form>
      
      


      <br><br><br><br>
    </div>
  </div>
  <form action="<?php echo base_url('admin/hizmetlerkartduzenlee'); ?>" role="form" method="POST" enctype= "multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $hizmetlerkart->id; ?>">
        <div class="form-group">
          <label>Bir Fotoğraf Seçiniz</label>
          <input name="resimyol" class="form-control" type="file" >
          <p class="help-block">SEÇECEĞİNİZ RESİMİN İSMİNDE TÜRKÇE KARAKTER BULUNMAMALIDIR.</p>
        </div>
        
        <button  style="margin-left:500px;" name="kaydet" type="submit" class="btn btn-danger">DEĞİŞTİR </button>
      </form>

  



  <?php $this->load->view('admin/include/footer'); ?>

  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="<?php echo base_url('/'); ?>plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url('/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url('/'); ?>dist/js/adminlte.min.js"></script>
</body>
</html>