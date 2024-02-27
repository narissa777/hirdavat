  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/back/'); ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->admininfo->name ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> <?php echo $this->session->admininfo->gorev; ?></a>
        </div>
      </div>
      <br>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menüler</li><br>
        <li class="<?php active('panel'); ?>">
          <a href="<?php echo base_url('admin/panel'); ?>">
            <i class="fa fa-home"></i> <span>Anasayfa</span>
          </a>
        </li>
         <li class="<?php active('firmalar'); ?>" >
          <a href="<?php echo base_url('admin/firmalar'); ?>">
            <i class="fa fa-building"></i> <span>Firmalar</span>
          </a>
        </li>
        <li class="<?php active('aksiyonlar'); ?>" >
          <a href="<?php echo base_url('admin/aksiyonlar'); ?>">
            <i class="fa fa-list"></i> <span>Aksiyonlar</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('admin/cikis'); ?>">
            <i class="fa fa-sign-out"></i> <span>Oturumu Kapat</span>
          </a>
        </li>
        <li class="header">FONKSİYONLAR</li>
        <?php if($this->session->userdata('deletefunction')){ ?>
        <li><a href="<?php echo base_url('admin/deletefunction'); ?>" class="btn btn-flat btn-block btn-success"><i class="fa fa-check"></i>Silme Fonksiyonu Açık</a></li>
      <?php }else{ ?>
        <li><a href="<?php echo base_url('admin/deletefunction'); ?>" class="btn btn-flat btn-block btn-danger"><i class="fa fa-exclamation"></i>Silme Fonksiyonu Kapalı</a></li>
      <?php } ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- ANA KISIM BAŞLANGIÇ -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1 align="center">
        <br><br><?php if(isset($head)); {echo $head;} ?>         
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
      </ol>
    </section>
    <section class="content">
      <?php flashread(); ?>