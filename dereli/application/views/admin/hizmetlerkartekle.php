
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HİZMETLER KART</title>
  <link rel="shortcut icon" href="<?php echo base_url('assets/frontend/'); ?>images/fevicon.png" type="image/x-icon">
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
            <h1 class="m-0">Hizmetler Kart Ekleme Sayfası</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">ANA SAYFA</a></li>
              <li class="breadcrumb-item active">Hizmetler Kart Ekleme Sayfası</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    <div style="margin-left:500px; margin-right:500px;" style="color:#009531;">

    </div>
    <?php flashread(); ?>
    <div style="margin-left:50px; margin-right:50px;"  class="panel-body">
      <form action="<?php echo base_url('admin/hizmetlerkartekle'); ?>" role="form" method="POST" enctype= "multipart/form-data">

        <div class="form-group">
          <label>Kart Başlık Giriniz</label>
          <input name="kartbaslikekle" class="form-control" type="text" >
          <p class="help-block"></p>
        </div>
         <div class="form-group">
          <label>Kart Önsöz Giriniz</label>
          <textarea name="kartonsozekle" rows="5" class="form-control" type="text" ></textarea>
          <p class="help-block"></p>
        </div>
        <div class="form-group">
          <label>Kart Açıklama Giriniz</label>
          <textarea name="kartaciklamaekle" rows="5" class="form-control" type="text" ></textarea>
          <p class="help-block"></p>
        </div>
      
        <div class="form-group">
          <label>Kart Fotoğraf Seçiniz</label>
          <input name="resimyol" class="form-control" type="file" >
          <p class="help-block">SEÇECEĞİNİZ RESİMİN İSMİNDE TÜRKÇE KARAKTER BULUNMAMALIDIR.KART RESİMLERİ 960X720 BOYUTLARINDA OLMALIDIR.</p>
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
  <script src="<?php echo base_url(''); ?>plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url(''); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url(''); ?>dist/js/adminlte.min.js"></script>
</body>
</html>
