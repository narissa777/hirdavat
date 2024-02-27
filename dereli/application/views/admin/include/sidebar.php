<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dereli Hidrolik Admin Panel</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/backend/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/backend/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url("admin/slidergoruntule"); ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class=""></i>
                </div>
                <div class="sidebar-brand-text mx-3">Dereli Hidrolik Admin Panel </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
           <!--  <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('admin/anasayfa'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Anasayfa</span></a>
            </li> -->
          

            <!-- Divider -->
            <hr class="sidebar-divider">

<!-- Kategori 1 - Slider -->
<div class="sidebar-heading">
    Ayarlar
</div>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSlider"
        aria-expanded="false" aria-controls="collapseSlider">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Slider</span>
    </a>
    <div id="collapseSlider" class="collapse" aria-labelledby="headingSlider"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Ayarlar</h6>
            <a class="collapse-item" href="<?php echo base_url('admin/slidergoruntule'); ?>">Slider Görüntüle</a>
            <a class="collapse-item" href="<?php echo base_url('admin/slider'); ?>">Slider Ekle</a>
        </div>
    </div>
</li>

<!-- Kategori 2 - Hizmetler -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseHizmetler"
        aria-expanded="false" aria-controls="collapseHizmetler">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Hizmetler Slider</span>
    </a>
    <div id="collapseHizmetler" class="collapse" aria-labelledby="headingHizmetler"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Ayarlar</h6>
            <a class="collapse-item" href="<?php echo base_url('admin/hizmetlergoruntule'); ?>">Hizmetler Görüntüle</a>
            <a class="collapse-item" href="<?php echo base_url('admin/hizmetlerindex'); ?>">Hizmetler Ekle</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseHizmetlerKartEkle"
        aria-expanded="false" aria-controls="collapseHizmetlerKartEkle">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Hizmetler Kart Ekle</span>
    </a>
    <div id="collapseHizmetlerKartEkle" class="collapse" aria-labelledby="headingHizmetlerKartEkle"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Ayarlar</h6>
            <a class="collapse-item" href="<?php echo base_url('admin/hizmetlerkartgoruntule'); ?>">Hizmetler Kart Görüntüle</a>
            <a class="collapse-item" href="<?php echo base_url('admin/hizmetlerkartekleindex'); ?>">Hizmetler Kart Ekle</a>
        </div>
    </div>
</li>

<!-- Kategori 3 - Hakkımızda -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseHakkimizda"
        aria-expanded="false" aria-controls="collapseHakkimizda">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Hakkımızda</span>
    </a>
    <div id="collapseHakkimizda" class="collapse" aria-labelledby="headingHakkimizda"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Ayarlar</h6>
            <a class="collapse-item" href="<?php echo base_url('admin/hakkimizdaduzenle'); ?>">Hakkımızda Düzenle</a>
        </div>
    </div>
</li>

<!-- Kategori 4 - Ürünler -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUrunler"
        aria-expanded="false" aria-controls="collapseUrunler">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Ürünler</span>
    </a>
    <div id="collapseUrunler" class="collapse" aria-labelledby="headingUrunler"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Ayarlar</h6>
            <a class="collapse-item" href="<?php echo base_url('admin/urungoruntule'); ?>">Ürün Görüntüle</a>
            <a class="collapse-item" href="<?php echo base_url('admin/urunadd'); ?>">Ürün Ekle</a>
        </div>
    </div>
</li>

<!-- Kategori 5 - Galeri -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGaleri"
        aria-expanded="false" aria-controls="collapseGaleri">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Galeri</span>
    </a>
    <div id="collapseGaleri" class="collapse" aria-labelledby="headingGaleri"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Ayarlar</h6>
            <a class="collapse-item" href="<?php echo base_url('admin/galerigoruntule'); ?>">Galeri Görüntüle</a>
            <a class="collapse-item" href="<?php echo base_url('admin/galeri'); ?>">Galeri Ekle</a>
        </div>
    </div>
</li>

<!-- Kategori 6 - Başlık Açıklama -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBaslikAciklama"
        aria-expanded="false" aria-controls="collapseBaslikAciklama">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Başlık Açıklama</span>
    </a>
    <div id="collapseBaslikAciklama" class="collapse" aria-labelledby="headingBaslikAciklama"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Ayarlar</h6>
            <a class="collapse-item" href="<?php echo base_url('admin/baslikaciklamaduzenle'); ?>">Başlık Açıklama Düzenle</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseIletisim"
        aria-expanded="false" aria-controls="collapseIletisim">
        <i class="fas fa-fw fa-wrench"></i>
        <span>İletişim</span>
    </a>
    <div id="collapseIletisim" class="collapse" aria-labelledby="headingIletisim"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Ayarlar</h6>
            <a class="collapse-item" href="<?php echo base_url('admin/contactduzenle'); ?>">İletişim Bilgileri Düzenle</a>
            <a class="collapse-item" href="<?php echo base_url('admin/mesajlar'); ?>">Gelen Mesajları Görüntüle</a>
        </div>
    </div>
</li>

            <!-- Divider -->
            <hr class="sidebar-divider">

          

            <!-- Sidebar Message
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div> -->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                   