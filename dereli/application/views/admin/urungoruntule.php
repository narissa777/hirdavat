<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ÜRÜN</title>
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
            <h1 class="m-0">ÜRÜNLERİ GÖRÜNTÜLEME SAYFASI</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">ANA SAYFA</a></li>
              <li class="breadcrumb-item active">ÜRÜNLERİ GÖRÜNTÜLEME SAYFASI</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    <div style="margin-left:500px; margin-right:500px;" style="color:#009531;">
      
   </div>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-12">
        <div class="box box-solid">
          <div class="box-body">
            <table id="banka" class="table table-bordered table-striped" style="width:100%">
              <thead>
                <tr>
                  <th>Başlık</th>
                  <th>Açıklama</th>
                  <th>Fiyat</th>
                  <th>işlemler</th>
                  
                </tr>
              </thead>
              <tbody>
              <?php foreach ($urunler as $urun) {
                 ?>
                
                  <tr>
                  
                    <td>
                    <p><?php echo $urun->baslik ; ?></p>
                    </td>
                    <td>
                    <p><?php echo $urun->aciklama ; ?></p>
                      
                    </td>
                    <td>
                    <p><?php echo $urun->fiyat ; ?></p>
                      
                    </td>
                    <td>
                        <a href="<?php echo base_url('admin/urunduzenle/'.$urun->id.''); ?>" class="btn btn btn-success"><i class="fa fa-edit"></i> Düzenle</a>

                        
                          <button type="button" class="btn btn-danger" title="urunler sil" data-toggle="modal" data-target="#modal-danger-"><i class="fas fa-trash"></i></button>

                        <div class="modal fade" id="modal-danger-">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title"><?php echo $urun->baslik; ?> </h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <p>Silmek istediğinizden emin misiniz?&hellip;</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Hayır</button>
                              <a href="<?php echo base_url('admin/urunsil/'.$urun->id.'') ?>" class="button"><button type="button" class="btn btn-outline-danger">Evet</button></a>
                            </div>
                          </div>

                        </div>

                      </div>
                    </td>
                   
                    
                  </tr>
                  <?php  }?>
               
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  
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