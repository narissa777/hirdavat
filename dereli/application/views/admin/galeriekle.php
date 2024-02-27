<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GALERİ</title>
  <link rel="shortcut icon" href="<?php echo base_url('assets/frontend/'); ?>images/fevicon.png" type="image/x-icon">
</head>
<body class="hold-transition sidebar-mini">


<?php $this->load->view('admin/include/sidebar'); ?>
<?php $this->load->view('admin/include/header'); ?>






  
<?php flashread(); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">GALERİ RESİM EKLEME SAYFASI</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">ANA SAYFA</a></li>
              <li class="breadcrumb-item active">GALERİ RESİM EKLEME SAYFASI</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    <div style="margin-left:500px; margin-right:500px;" style="color:#009531;">
      
   </div>

   <div style="margin-left:50px; margin-right:50px;"  class="panel-body">
    <form action="<?php echo base_url('admin/galeriekle'); ?>" role="form" method="POST" enctype= "multipart/form-data">
      
      <div class="form-group">
        <label>Fotoğrafa Bir Ad Veriniz</label>
        <input name="resimadi" class="form-control" type="text" >
        <p class="help-block">Kayıt edeceğiniz fotoğrafa bir ad veriniz.</p>
      </div>

      <div class="form-group">
        <label>Bir Fotoğraf Seçiniz</label>
        <input name="resimurl" class="form-control" type="file" >
        <p class="help-block">SEÇECEĞİNİZ RESİMİN İSMİNDE TÜRKÇE KARAKTER BULUNMAMALI VE BOYUTLARI DAHA UYGUN BİR GÖRÜNÜM İÇİN 1000 X 1000 FORMATINDA OLMALIDIR</p>
      </div>
      <button  style="margin-left:500px;" name="kaydet" type="submit" class="btn btn-info">KAYDET </button>

    
     
      
      

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