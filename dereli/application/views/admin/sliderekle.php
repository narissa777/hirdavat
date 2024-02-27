
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SLİDER</title>
  <link rel="shortcut icon" href="<?php echo base_url('assets/frontend/'); ?>images/fevicon.png" type="image/x-icon">
</head>

<?php $this->load->view('admin/include/sidebar'); ?>
<?php $this->load->view('admin/include/header'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Slider Düzenleme</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">ANA SAYFA</a></li>
              <li class="breadcrumb-item active">SLİDER DÜZENLEME</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

                <!-- Begin Page Content -->
                <div style="margin-left:50px; margin-right:50px;"  class="panel-body">
    <form action="<?php echo base_url('admin/sliderekle'); ?>" role="form" method="POST" enctype= "multipart/form-data">
    <?php flashread(); ?>
    <div class="form-group">
        <label>Başlık Giriniz</label>
        <input name="sliderbaslik" class="form-control" type="text" >
        <p class="help-block">Sliderın Başlığını giriniz.</p>
      </div>

      <div class="form-group">
        <label>Açıklama Giriniz</label>
        <input name="slideryazi" class="form-control" type="text" >
        <p class="help-block">Sliderın açıklamasını giriniz.</p>
      </div>


      <div class="form-group">
        <label>Bir Fotoğraf Seçiniz</label>
        <input name="resimyol" class="form-control" type="file" >
        <p class="help-block">SEÇECEĞİNİZ RESİMİN İSMİNDE TÜRKÇE KARAKTER BULUNMAMALI VE BOYUTLARI DAHA UYGUN BİR GÖRÜNÜM İÇİN 960 X 720 FORMATINDA OLMALIDIR</p>
      </div>
      <button  style="margin-left:500px;" name="kaydet" type="submit" class="btn btn-info">KAYDET </button>
<br>


  
</div>
     
     
      
      

    </form>
    <br><br><br><br>
  </div>

  
</div>

       

</body>

</html>
<?php $this->load->view('admin/include/footer'); ?>