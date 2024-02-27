<!doctype html>
<html lang="en">
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?php echo base_url('assets/frontend/contact/'); ?>css/style.css">
	<link rel="shortcut icon" href="<?php echo base_url('assets/frontend/'); ?>images/fevicon.png" type="image/x-icon">


</head>

<body>

	<?php $this->load->view('include/header'); ?>


	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"></h2>
				</div>
			</div>
			<br><br>
			<div class="row justify-content-center">
				<div class="col-md-10">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-md-6">
								<div class="contact-wrap w-100 p-lg-5 p-4">
									 <?php flashread(); ?>
									<h3 class="mb-4">Bizimle İletişime Geçin</h3>
									<div id="form-message-warning" class="mb-4"></div> 
									<div id="form-message-success" class="mb-4">
										Your message was sent, thank you!
									</div>
									<?php 
									date_default_timezone_set('Europe/Istanbul');
									$zaman=date('d.m.Y');
									$saat=date('H:i:s');


									?>
									<form action="<?php echo base_url('admin/message'); ?>" method="POST" role="form">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="name" id="name" placeholder="Ad-Soyad">
												</div>
											</div>
											<div class="col-md-12"> 
												<div class="form-group">
													<input type="email" class="form-control" name="mail" id="mail" placeholder="Email">
													<input  type="hidden" name="date" value="<?php echo $zaman ; ?>" >
													<input  type="hidden" name="time" value="<?php echo $saat ; ?>" >
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Konu">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<textarea name="message" class="form-control" id="message" cols="30" rows="6" placeholder="Mesaj"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Mesaj Gönder" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-6 d-flex align-items-stretch">
								<div class="info-wrap w-100 p-lg-5 p-4 img">
									<h3>İletişim Bilgileri</h3>
									<p class="mb-4"><?php echo $contact[0]->iletisimaciklama; ?></p>
									<div class="dbox w-100 d-flex align-items-start">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-map-marker"></span>
										</div>
										<div class="text pl-3">
											<p><span>Adres:</span><?php echo $contact[0]->adres; ?></p>
										</div>
									</div>
									<div class="dbox w-100 d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-phone"></span>
										</div>
										<div class="text pl-3">
											<p><span>Telefon:</span> <a href="tel://1234567920"><?php echo $contact[0]->telefon; ?></a></p>
										</div>
									</div>
									<div class="dbox w-100 d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-paper-plane"></span>
										</div>
										<div class="text pl-3">
											<p><span>Email:</span> <a href="mailto:info@yoursite.com"><?php echo $contact[0]->email; ?></a></p>
										</div>
									</div>
									<div class="dbox w-100 d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-globe"></span>
										</div>
										<div class="text pl-3">
											<p><span>Website:</span> <a href="#"><?php echo $contact[0]->website; ?></a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<br><br><br>

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
                                        <a href="https://www.technolobal.com/tr">
                                            İletişim
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
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
                                    <div class="col-lg-2 col-md-4">
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

	<script src="<?php echo base_url('assets/frontend/contact/'); ?>js/jquery.min.js"></script>
	<script src="<?php echo base_url('assets/frontend/contact/'); ?>js/popper.js"></script>
	<script src="<?php echo base_url('assets/frontend/contact/'); ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url('assets/frontend/contact/'); ?>js/jquery.validate.min.js"></script>
	<script src="<?php echo base_url('assets/frontend/contact/'); ?>js/main.js"></script>

</body>
</html>

