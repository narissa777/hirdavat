<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{


	public function index()
	{
		$data['slider'] = slider::select();
		$data['hizmetlerimiz'] = hizmetlerimiz::query("SELECT * FROM hizmetlerimiz LIMIT 20;");
		$data['hakkimizda'] = hakkimizda::select();
		$data['urunler'] = urunler::query("SELECT * FROM urunler LIMIT 3;");
		$data['galeri'] = galeri::select();
		$data['baslik'] = baslik::select();

		$this->load->view('anasayfa',$data);
	}
	
	public function login()
	{
		$this->load->view('Admin/login');
	}

	public function anasayfa()
	{
		$this->load->view('admin/anasayfa');
	}

	public function hakkimizda()
	{
		$data['hizmetlerimiz'] = hizmetlerimiz::select();
		$data['hakkimizda'] = hakkimizda::select();
		$data['baslik'] = baslik::select();
		$this->load->view('about',$data);

	}

	public function urunler()
	{
		$data['hizmetlerimiz'] = hizmetlerimiz::select();
		$data['hakkimizda'] = hakkimizda::select();
		$data['urunler'] = urunler::select();
		$data['baslik'] = baslik::select();
		$this->load->view('urunlerimiz',$data);
	}

	public function hizmetler()
	{
		$data['hakkimizda'] = hakkimizda::select();
		$data['hizmetlerimizz'] = hizmetlerkart::select();
		$data['hizmetlerimiz'] = hizmetlerimiz::select();
		$data['baslik'] = baslik::select();
		$this->load->view('service',$data);
	}

	
	public function hizmetler1($id)
	{
		$data['hizmetlerimiz'] = hizmetlerimiz::select();
		$data['hakkimizda'] = hakkimizda::select();
		$data['hizmetlerimizz'] = hizmetlerkart::select(['id'=>$id]);
		$data['baslik'] = baslik::select();
		$this->load->view('hizmetler1',$data);

	}
	public function contact2()
	{
		$data['baslik'] = baslik::select();
		$data['hizmetlerimiz'] = hizmetlerimiz::select();
		$data['hakkimizda'] = hakkimizda::select();
		$data['mesajlar'] = mesajlar::select();
		$data['contact'] = contact::select();
		$this->load->view('contact2',$data);
	}



	//adminpanel tarafi

	public function slider()
	{
		$this->load->view('admin/sliderekle');
	}
	

	//slider görünntüle

	public function slidergoruntule()
	{
		$slider['slider'] = Slider::select();
		
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/slidergoruntule',$slider);
		}else{

			redirect('admin/login');
		}
	}

	

		//slider görüntüle bitiş
	//sliderekle
	public function sliderekle()
	{
		if (isPost())
		{
			$config['upload_path']          = '.assets/upload/';
			$config['allowed_types']        = '*';
			$this->load->library('upload', $config);

			
			$data = [
				
				'sliderbaslik' => postvalue('sliderbaslik'),
				'slideryazi' => postvalue('slideryazi'),
				'resimyol' => imageupload('resimyol','slider/'),
			];

			
			
			Slider::insert($data);
			
			
			flash('success','check','Başarılı','Slider Başarıyla Eklenmiştir...');
		}

		back();
	}

	//slidereklebitis




	//slider sil
	public function slidersil($id)
	{
		$isExist=Slider::find($id);
		if($isExist)
		{
			Slider::delete($id);
			flash('success','check','Başarılı','Slider Başarıyla Silindi');
			back();
		}
	}
	//slider sil bitiş







	//hakkimda
	public function hakkimizdaduzenle()
	{
		
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/hakkimizdaduzenle',);
		}else{

			redirect('admin/login');
		}
	}
	public function hakkimda()
	{
		if (isPost())
		{
			$config['upload_path']          = '.assets/upload/';
			$config['allowed_types']        = '*';
			$this->load->library('upload', $config);
			$id = 1;
			
			$data = [
				'hakkimda_aciklama1' => postvalue('hakkimda_aciklama1'),
				'yangorsel1' => imageupload('yangorsel1','hakkimizda/'),
			];

			
			
			Hakkimizda::update($id,$data);
			
			
			flash('success','check','Başarılı','Hakkımızda Başarıyla Güncellenmiştir...');
		}
		back();
	}
		//hakkimda bitis





		//ürun ekle
	public function urunadd()
	{
		
		$this->load->view('admin/urunekle');
	}

	public function urunekle()
	{
		$config['upload_path']          = '.assets/upload/';
		$config['allowed_types']        = '*';
		$this->load->library('upload', $config);
		$checkbox = postvalue('checkbox');
		if ($checkbox == 'on') {
			$data = [
				'baslik'=>postvalue('baslik'),
				'aciklama'=>postvalue('aciklama'),
				'resim'=>imageupload('resim','urunler/')
			];
		}else{
			$data = [
				'baslik'=>postvalue('baslik'),
				'aciklama'=>postvalue('aciklama'),
				'resim'=>imageupload('resim','urunler/'),
				'fiyat'=>postvalue('fiyat')
			];
		}
		urunler::insert($data);
		flash('success','check','Başarılı','Ürün Başarıyla Eklenmiştir...');
		back();
	}

	//urun göster
	public function urungoruntule()
	{
		$urun['urunler'] = urunler::select();
		
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/urungoruntule',$urun);
		}else{

			redirect('admin/login');
		}

	}

	public function urungoster()
	{
		$data['urunler']=Urunler::select();
		
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/urungoruntule',$data);
		}else{

			redirect('admin/login');
		}
	}






		//ürün göster bitis

	//urun düzenle
	public function urunduzenle($id)
	{
		
		$data['urunler']=urunler::find($id);
		

		$this->load->view('admin/urunduzenle',$data);
		
		
	}
	public function urunduzenlee()
	{
		if(isset($_POST['kaydett']))
		{
			$data=[

				'baslik' 	=> postvalue('baslik'),
				'aciklama' 		=> postvalue('aciklama'),
				'fiyat' 		=> postvalue('fiyat')

				

				

			];
			$id = postvalue('id');
			
			urunler::update($id,$data);
			redirect('admin/urungoruntule');
		}
		if(isset($_POST['kaydet']))
		{
			$config['upload_path']          = '.assets/upload/';
			$config['allowed_types']      = '*';


			$this->load->library('upload', $config);
			
			
			$data=[

				
				'resim'  	=> imageupload('resim','urunler/')
				

			];
			$id = postvalue('id');
			
			urunler::update($id,$data);
			
			redirect('admin/urungoruntule');
		}

		back();
	}

	public function urunsil($id)
	{
		$isExist=urunler::find($id);
		if($isExist)
		{
			urunler::delete($id);
			flash('success','check','Başarılı','Ürün Başarıyla Silindi');
			back();
		}
	}
	
	

	//urundüzenle bitis

	public function hakkimizdagorsel()
	{
		$id = 1 ;
		if(isset($_POST['anagorsel']))
		{
			$config['upload_path']          = '.assets/upload/';
			$config['allowed_types']        = '*';


			$this->load->library('upload', $config);
			
			$data['anagorsel']=imageupload('yangorsel1','hakkimizda/');

			hakkimda::update($id,$data);
			flash('success','check','Başarılı','Hakkımızda Başarıyla Güncellendi');
			back();
		}
		if(isset($_POST['yangorsel']))
		{
			$config['upload_path']          = '.assets/uploads/';
			$config['allowed_types']        = '*';


			$this->load->library('upload', $config);
			
			$data['yangorsel']=imageupload('yangorsel1','hakkimizda/');

			hakkimda::update($id,$data);
			flash('success','check','Başarılı','Hakkımızda Başarıyla Güncellendi');
			back();
		}
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/pages/adminpanel/hakkimizdagorsel');
		}else{

			redirect('admin/login');
		}
		
	}
	
    //galeri ekle
	public function galeri()
	{
		
		$this->load->view('admin/galeriekle');
	}
	public function galeriekle()
	{
		if (isPost())
		{
			$config['upload_path']          = '.upload/';
			$config['allowed_types']        = '*';
			$this->load->library('upload', $config);

			
			$data = [
				'resimadi' => postvalue('resimadi'),
				'resimurl' => imageupload('resimurl','galeri/'),
			];

			
			
			Galeri::insert($data);
			
			
			flash('success','check','Başarılı','Galeri Fotoğrafı Başarıyla Eklenmiştir...');
		}
		back();
	}
	//galeri görüntüle
	public function galerigoruntule()
	{
		$data['galeri']=galeri::select();
		

		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/galerigoruntule',$data);
		}else{

			redirect('admin/login');
		}
	}

	
	// galeri görüntüle bitis


	// galeri resim sil
	public function galerifotosil($id)
	{
		$isExist=Galeri::find($id);
		if($isExist)
		{
			Galeri::delete($id);
			flash('success','check','Başarılı','Galeri Fotoğrafı Başarıyla Silindi');
			back();
		}
	}





	//galeri resim sil bitiş



	//hizmetler goruntule
	
	

	//hizmetler goruntule bitiş

	//hizmetler ekle 


	public function hizmetlerindex()
	{
		$this->load->view('admin/hizmetlerekle');
	}
	

	

	public function hizmetlergoruntule()
	{
		$hizmetler['hizmetler'] = Hizmetlerimiz::select();
		
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/hizmetlergoruntule',$hizmetler);
		}else{

			redirect('admin/login');
		}
	}

	


	public function hizmetlerekle()
	{
		if (isPost())
		{
			$config['upload_path']          = '.assets/upload/';
			$config['allowed_types']        = '*';
			$this->load->library('upload', $config);

			
			$data = [
				
				'hizmetlerimiz_baslik' => postvalue('hizmetlerbaslikekle'),
				'hizmetlerimiz_aciklama1' => postvalue('hizmetleraciklamaekle'),
				'logo' => imageupload('logo','hizmetlerimiz/'),
			];

			
			
			Hizmetlerimiz::insert($data);
			
			
			flash('success','check','Başarılı','Hizmetler Başarıyla Eklenmiştir...');
		}
		back();
	}

	//hizmetler duzenle
	public function hizmetlerduzenle($id)
	{
		
		$data['hizmetlerimiz']=Hizmetlerimiz::find($id);
		

		$this->load->view('admin/hizmetlerduzenle',$data);
		
		
	}

	public function hizmetlerduzenlee()
	{
		if(isset($_POST['kaydett']))
		{
			$data=[

				'hizmetlerimiz_baslik'=> postvalue('hizmetlerbaslikduzenle'),
				'hizmetlerimiz_aciklama1'=> postvalue('hizmetleraciklamaduzenle'),
				'logo'=> imageupload('logo','hizmetlerimiz/')

				

				

			];
			$id = postvalue('id');
			
			Hizmetlerimiz::update($id,$data);
			redirect('admin/hizmetlergoruntule');
		}
		if(isset($_POST['kaydet']))
		{
			$config['upload_path']          = '.assets/upload/';
			$config['allowed_types']      = '*';


			$this->load->library('upload', $config);
			
			
			$data=[

				
				'logo'=> imageupload('logo','hizmetlerimiz/')
				

			];
			$id = postvalue('id');
			
			Hizmetlerimiz::update($id,$data);
			
			redirect('admin/hizmetlergoruntule');
		}

		back();
	}

//baslık açıklama
	
	public function baslikaciklamaduzenle()
	{
		
		$data['baslik'] = Baslik::select();
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/baslikaciklama',$data);
		}else{

			redirect('admin/login');
		}

	}
	public function baslik()
	{
		if (isPost())
		{

			$config['upload_path']          = '.assets/upload/';
			$config['allowed_types']        = '*';
			$this->load->library('upload', $config);
			$id = 1;
			
			$data = [
				'hizmetlerbaslik' => postvalue('hizmetlerbaslikduzenle'),
				'urunlerbaslik' => postvalue('urunlerbaslikduzenle'),
				'siparisbaslik' => postvalue('siparisbaslikduzenle'),

				
			];

			
			
			Baslik::update($id,$data);
			

			flash('success','check','Başarılı','Açıklamalar Başarıyla Güncellenmiştir...');
		}
		back();
	}

	public function cikis()
	{
		$this->session->sess_destroy();
		redirect('admin/login');
	}

	public function hizmetlerkartgoruntule()
	{
		$hizmetlerkart['hizmetlerkart'] = Hizmetlerkart::select();
		
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/hizmetlerkartgoruntule',$hizmetlerkart);
		}else{

			redirect('admin/login');
		}
	}
	public function hizmetlerkartekleindex()
	{
		$this->load->view('admin/hizmetlerkartekle');
	}
	public function hizmetlerkartekle()
	{
		if (isPost())
		{
			$config['upload_path']          = '.assets/upload/';
			$config['allowed_types']        = '*';
			$this->load->library('upload', $config);

			
			$data = [
				
				'kartaciklama' => postvalue('kartaciklamaekle'),
				'kartbaslik' => postvalue('kartbaslikekle'),
				'kartonsoz' => postvalue('kartonsozekle'),
				'resimyol' => imageupload('resimyol','hizmetlericon/'),
			];

			
			
			Hizmetlerkart::insert($data);
			
			
			flash('success','check','Başarılı','Hizmetler Kart Başarıyla Eklenmiştir...');
		}

		back();
	}
	public function hizmetlerkartduzenle($id)
	{
		
		$data['hizmetlerkart']=Hizmetlerkart::find($id);
		

		$this->load->view('admin/hizmetlerkartduzenle',$data);
		
		
	}

	public function hizmetlerkartduzenlee()
	{
		if(isset($_POST['kaydett']))
		{   
			$config['upload_path']          = '.assets/upload/';
			$config['allowed_types']      = '*';
			$data=[


				'kartaciklama' => postvalue('kartaciklamaduzenle'),
				'kartbaslik' => postvalue('kartbaslikduzenle'),
				'kartonsoz' => postvalue('kartonsozduzenle')
			];
			$id = postvalue('id');
			
			Hizmetlerkart::update($id,$data);
			redirect('admin/hizmetlerkartgoruntule');
		}
		if(isset($_POST['kaydet']))
		{
			$config['upload_path']          = '.assets/upload/';
			$config['allowed_types']      = '*';



			$this->load->library('upload', $config);
			
			
			$data=[

				
				'resimyol'=> imageupload('resimyol','hizmetlericon/')
			];
			$id = postvalue('id');
			
			Hizmetlerkart::update($id,$data);
			
			redirect('admin/hizmetlerkartgoruntule');
		}

	}
	public function hizmetlerkartsil($id)
	{
		$isExist=Hizmetlerkart::find($id);
		if($isExist)
		{
			Hizmetlerkart::delete($id);
			
			back();
		}
	}

	public function contactduzenle()
	{
		$data['contact'] = contact::select();

		$this->load->view('admin/iletisimduzenle',$data);
	}

	public function contactduzenlee()
	{
		if (isPost())
		{
			$data = [

				'iletisimaciklama' => postvalue('iletisimaciklamaduzenle'),
				'adres' => postvalue('adresduzenle'),
				'telefon' => postvalue('telefonduzenle'),
				'email' => postvalue('emailduzenle'),
				'website' => postvalue('websiteduzenle')


				
			];
			$id = 1;

			
			
			Contact::update($id,$data);
			

			flash('success','check','Başarılı','Değişiklikleriniz Başarıyla Uygulanmıştır...');
		}
		back();
	}
	public function message()
	{
		if (isPost())
		{



			$data=[

				'name'   	=> postvalue('name'),
				'subject' 	=> postvalue('subject'),
				'mail' 	    => postvalue('mail'),
				'message' 	=> postvalue('message'),
				'date'		=> postvalue('date'),
				'time'		=> postvalue('time')
				
			];

			Mesajlar::insert($data);
			flash('success','check','Başarılı','Mesajınız İletildi,En Kısa Sürede Dönüş Yapılacaktır.');
			
			back();
		}
		
	}
	public function mesajlar()
	{
		$data['mesajlar']=mesajlar::select();
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/mesajlar',$data);
		}else{

			redirect('admin/login');
		}
		
	}
	public function mesajsil($id)
	{
		$isExist=Mesajlar::find($id);
		if($isExist)
		{
			mesajlar::delete($id);
			
			back();
		}
	}


	public function loginislem()
	{

		$password = postvalue('sifre');
		$username = postvalue('kadi');
		
		$exist=users::find([

			'username'=>$username,
			'password'=>$password
		]);

		if ($exist) {
			session_start();
			$this->session->set_userdata('adminlogin', true);
			$this->session->set_userdata('admininfo', $exist);


			redirect('admin/slidergoruntule');
		} else {
			$hata = "Email adresi veya şifre hatalı.";
			$this->session->set_flashdata('error', $hata);
			redirect('Admin/login');
		}
	}




}