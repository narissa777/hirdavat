

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
            <h1 class="m-0">Ürün Düzenleme Sayfası</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">ANA SAYFA</a></li>
              <li class="breadcrumb-item active">Ürün Düzenleme Sayfası</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
    <div style="margin-left:500px; margin-right:500px;" style="color:#009531;">

    </div>
   
    <div style="margin-left:50px; margin-right:50px;"  class="panel-body">
      <form action="<?php echo base_url('admin/urunduzenlee'); ?>" role="form" method="POST" enctype= "multipart/form-data">
      
        <div class="form-group">
          <label>Başlık</label>
          <input name="baslik" class="form-control" type="text" value="<?php echo $urunler->baslik; ?>">
          <p class="help-block">Başlık ekleyiniz.</p>
        </div>
        <div class="form-group">
          <label>Fiyat</label>
          <input name="fiyat" class="form-control" type="text" value="<?php echo $urunler->fiyat; ?>">
          <p class="help-block">Fiyat ekleyiniz.</p>
        </div>
        
        <input type="hidden" name="id" value="<?php echo $urunler->id; ?>">
        <div class="form-group">
          <label>Ön Yazı</label>
          <textarea name="aciklama" rows="5" class="form-control" type="text" ><?php echo $urunler->aciklama; ?></textarea>
          <p class="help-block">Ön yazı ekleyiniz.</p>
        </div>
        
        <input type="hidden" name="id" value="<?php echo $urunler->id ; ?>">
        
        </select>
        <br>
        <br>


        <button  style="margin-left:500px;" name="kaydett" type="submit" class="btn btn-info">KAYDET </button>






      </form>
      
      <form action="<?php echo base_url('admin/urunduzenlee'); ?>" role="form" method="POST" enctype= "multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $urunler ->id; ?>">
        <div class="form-group">
          <label>Bir Fotoğraf Seçiniz</label>
          <input name="resim" class="form-control" type="file" >
          <p class="help-block">SEÇECEĞİNİZ RESİMİN İSMİNDE TÜRKÇE KARAKTER BULUNMAMALIDIR.</p>
        </div>
        
        <button  style="margin-left:500px;" name="kaydet" type="submit" class="btn btn-danger">DEĞİŞTİR </button>
      </form>
      


      <br><br><br><br>
    </div>
  </div>

  



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