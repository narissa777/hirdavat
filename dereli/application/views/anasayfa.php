


<?php $this->load->view('include/header'); ?>






<!-- slider section -->
<section class="slider_section ">


  <div id="customCarousel1" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">

      <?php $counter  = 0; ?>
      <?php foreach ($slider as $sliderogeleri) {?>

        <div class="carousel-item <?php 
        $counter = $counter + 1;
        if ($counter == 1) {
          echo 'active';
        }
      ?>">
      <div class="hero_area" style="height: 980px;">
        <div class="hero_bg_box" style="height:100%" > 
          <img src="<?php echo base_url('').$sliderogeleri->resimyol; ?>" alt="">
        </div> 
        <div  style="width: 100%; height: auto; position: absolute !important;">
          <div>

            <div class="detail-box">
              <h1>
                <?php echo $sliderogeleri->sliderbaslik; ?><br>
              </h1>
              <p>
                <?php echo $sliderogeleri->slideryazi; ?>
              </p>
              <div class="btn-box">
                <a href="tel:05327773676" target="_blank">
                  İletisime Geç
                </a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  <?php } ?>


</div>
<div class="carousel_btn-box">
  <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
    <i class="fa fa-arrow-left" aria-hidden="true"></i>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
    <i class="fa fa-arrow-right" aria-hidden="true"></i>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<?php $this->load->view('include/social'); ?>
</section>
<!-- end slider section -->



<!-- service section -->

<section class="service_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center ">
      <h2 class="">
        Hizmetlerimiz
      </h2>
      <p class="col-lg-8 px-0">
        <?php echo $baslik[0]->hizmetlerbaslik; ?>
      </p>
    </div>

    <div class="service_container">
      <div class="carousel-wrap ">
        <div class="service_owl-carousel owl-carousel">

          <?php foreach ($hizmetlerimiz as $hizmetlerimizogeleri) {?>
            <div class="item">
              <div class="box ">
                <div class="img-box">
                  <img src="<?php echo base_url('').$hizmetlerimizogeleri->logo; ?>">
                </div>
                <div class="detail-box">
                  <h5>
                    <?php echo $hizmetlerimizogeleri->hizmetlerimiz_baslik; ?>
                  </h5>
                  <p>
                    <?php echo $hizmetlerimizogeleri->hizmetlerimiz_aciklama1; ?>
                  </p>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
        <div class="btn-box">
          <a href="<?php echo base_url("admin/hizmetler");?>" class="btn1" target="">
            <span>Daha fazlası</span>
          </a>
        </div>
      </div>

    </div>
    


  </div>
</section>
<br>
<br>

<!-- service section ends -->

<!-- about section -->

<section class="about_section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-5 offset-md-1">
        <div class="detail-box pr-md-2">
          <div class="heading_container">
            <h2 class="">
              Hakkımızda
            </h2>
          </div>
          <br><br>
          <p class="detail_p_mt">
            <?php echo $hakkimizda[0]->hakkimda_aciklama1; ?>
          </p>
          <a href="<?php echo base_url("admin/hakkimizda");?>" class="">
            Daha Fazlası
          </a>
        </div>
      </div>
      <div class="col-md-6 px-0">
        <div class="img-box ">
          <img src="<?php echo base_url('').$hakkimizda[0]->yangorsel1; ?>" class="box_img" alt="about img">
        </div>
      </div>
    </div>
  </div>
</section>
<br><br>

<!-- about section ends -->

<!-- team section -->
<br><br>
<section class="team_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Ürünlerimiz
      </h2>
      <p>
        <?php echo $baslik[0]->urunlerbaslik; ?>
      </p>
    </div>


    <div class="container mt-5">
      <div class="row">


        <?php foreach ($urunler as $urunogeleri) {?>
          <div class="col-md-4 mb-4">
            <div class="card p-3 bg-white">

              <div class="about-product text-center mt-2">
                <img src="<?php echo base_url('').$urunogeleri->resim; ?>" width="300">
                <div>
                  <h4><?php echo $urunogeleri->baslik; ?></h4>
                  <h6><?php echo $urunogeleri->aciklama; ?></h6>
                </div>
              </div>
              <?php 
              if ($urunogeleri->fiyat == '0') {?>
                <div class="btn-box">
                  <a href="<?php echo base_url("admin/contact2");?>" class="btn1" target="">
                    <span>Bizimle İletişime Geçiniz</span>
                  </a>
                </div>
              <?php }else { ?>
                <div class="d-flex justify-content-between total font-weight-bold mt-4">
                  <span>Fiyat</span><span><?php echo $urunogeleri->fiyat; ?></span>
                </div>
              <?php } ?>
            </div>

          </div>
        <?php } ?>







      </div>
      <div class="btn-box">
        <a href="<?php echo base_url("admin/urunler");?>" class="btn1" target="">
          <span>Daha fazlası</span>
        </a>
      </div>
    </div>

  </div>
</section>

<!-- end team section -->

<!-- contact section -->

  <!-- <section class="contact_section">
    <div class="container-fluid">

        <div class="contact_section">
            <div class="col-md-5 px-0">
                <div class="img-box ">
                    <img src="images/bizimle.jpg" class="box_img" alt="about img"> 
                </div>
            </div>
            <div class="col-md-5 mx-auto">
                <div class="form_container">
                    <div class="heading_container heading_center">
                        <h2>Sipariş</h2> 
                        <h3><?php echo $baslik[0]->siparisbaslik; ?></h3>
                        <br>
                        <div class="btn_box">
                            <a href="https://www.facebook.com/p/Dereli-Hidrolik-ve-H%C4%B1rdavat-San-Tic-Ltd-%C5%9Eti-100063651903285/?paipv=0&eav=AfafF44A7FAYhbTaSx0SIhCUcPCuuekXxcMbpo9s1qtpE9PrJC3j1K-inmSeGIpir0w&_rdr" target="_blank"> 
                                <button>
                                    İletişime Geç
                                </button>
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section> -->

  <!-- end contact section -->

  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          GALERİ
        </h2>
        <hr>
      </div>

      <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <?php $counter = 0; ?>
          <?php foreach ($galeri as $galeriogeleri) { ?>
            <div class="carousel-item <?php if ($counter == 0) echo 'active'; ?>">
              <div class="row">
                <div class="col-lg-7 col-md-9 mx-auto">
                  <div class="client_container">
                    <div class="img-box">
                      <img src="<?php echo base_url('') . $galeriogeleri->resimurl; ?>"
                      alt=""
                      style="max-width: 700%; max-height: 370px; object-fit: cover;">
                    </div>

                    <div class="detail-box">
                      <span>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php $counter++; ?>
          <?php } ?>
        </div>

        <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>




  <!-- end client section -->





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
                                        <span>(0532) 777 36 76</span>
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


