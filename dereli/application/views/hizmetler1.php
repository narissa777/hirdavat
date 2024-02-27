<?php $this->load->view("include/header");?>

    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid header_top_container">

          
        </div>
      </div>
      <header class="header_section">
      <div class="header_top">
        <div class="container-fluid header_top_container">

          
        </div>
      </div>
      <br><br>
      
  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="detail-box pr-md-2">
            <div class="heading_container">
              <h2 class="">
               <?php echo $hizmetlerimizz[0]->kartbaslik; ?>
              </h2>
            </div>
            <p class="detail_p_mt">
              <?php echo $hizmetlerimizz[0]->kartaciklama; ?>
            </p>
           
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="img-box ">
            <img src="<?php echo base_url('').$hizmetlerimizz[0]->resimyol; ?>" class="box_img" alt="about img">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- about section ends -->

  <!-- info section -->
  <!-- info section -->
<section class="info_section">
        <div class="container">
            <div class="info_top">
                <div class="row">
                    <div class="col-md-12" style="display: flex; justify-content: center;">
                        <a class="navbar-brand" href="<?php echo base_url("admin/index"); ?>">
                            Dereli Hidrolik
                        </a>
                    </div>
                    <div class="col-md-5">
                        <div class="info_contact">
                            <!-- İletişim bilgileri buraya gelecek -->
                        </div>
                    </div>
                    <!-- Diğer içerikler buraya gelecek -->
                </div>
            </div>
            <div class="info_bottom">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="info_detail">
                            <h5>Hakkımızda</h5>
                            <?php
                            $hakkimizda_aciklama = $hakkimizda[0]->hakkimda_aciklama1;
                            $karakter_siniri = 209;

                            if (strlen($hakkimizda_aciklama) > $karakter_siniri) {
                                $kisaltilmis_metin = substr($hakkimizda_aciklama, 0, $karakter_siniri);
                                $data = base_url('admin/hakkimizda');
                                echo '<p>' . $kisaltilmis_metin . ' <a class="devam-okuma-link" href="' . $data . '">Devamını oku</a></p>';
                            } else {
                                echo '<p>' . $hakkimizda_aciklama . '</p>';
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="info_detail">
                            <h5>Hizmetler</h5>
                            <p><?php echo $baslik[0]->hizmetlerbaslik; ?></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="col-lg-4 col-md-12 mb-3">
                            <div class="info_detail">
                                <h5>Sayfalar</h5>
                                <ul class="info_menu">
                                    <li>
                                        <a href="<?php echo base_url("admin/index"); ?>">
                                            Anasayfa
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url("admin/hakkimizda"); ?>">
                                            Hakkımızda
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url("admin/hizmetler"); ?>">
                                            Hizmetlerimiz
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url("admin/urunler"); ?>">
                                            Ürünlerimiz
                                        </a>
                                    </li>
                                    <li class="mb-0">
                                        <a href="<?php echo base_url("admin/contact2"); ?>">
                                            İletişim
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                            <h5>İletişim</h5>

                        <div>
                            <ul class="info_menu">
                                <li>
                                    <a href="https://www.google.com/maps/dir//dereli+hidrolik/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x14c73fc35fea6701:0x358a368a4b515c6a?sa=X&ved=2ahUKEwjE5MT-98yBAxVWSfEDHZDuAQQQ9Rd6BAg1EAA&ved=2ahUKEwjE5MT-98yBAxVWSfEDHZDuAQQQ9Rd6BAhBEAQ">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <span>Konum</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <span>(0258) 251 35 91</span>
                                    </a>
                                    <div class="col-lg-3 col-md-3" style="display:flex; justify-content: space-around;">
                                        <div class="social_box">
                                            <a href="https://www.facebook.com/p/Dereli-Hidrolik-ve-H%C4%B1rdavat-San-Tic-Ltd-%C5%9Eti-100063651903285/?paipv=0&eav=AfafF44A7FAYhbTaSx0SIhCUcPCuuekXxcMbpo9s1qtpE9PrJC3j1K-inmSeGIpir0w&_rdr"
                                                target="_blank">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                            <br><br>
                                            <a href="https://www.instagram.com/derelihirdavat_hidrolik/" target="_blank">
                                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-0">
                                    <!-- Diğer içerikler buraya gelecek -->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    



</section>
  <?php $this->load->view('include/footer'); ?>

  <!-- end info_section -->

  

 