<?php
class boots  extends Controller{
	public function __construct(){
		parent::__construct();
	}
public function boots(){
		$this->anasayfa();
	}
	public function anasayfa(){
		$kayitlarabak = $this->load->model("Ana_model");
		$veri = $kayitlarabak->kayitlarigetir();
		$this->load->view("anasayfa", $veri);
	}

	public function babasayfa()
	{
		$kayitlarabak = $this->load->model("Ana_model");
		$veri = $kayitlarabak->kayitlarigetir();
		$this->load->view("babasayfa", $veri);
	}

	public function kayitlarigetir()
	{
		$kayitlarabak = $this->load->model("Ana_model");
		$veri = $kayitlarabak->kayitlarigetir();
		$this->load->view("anasayfa", $veri);
	}

	public function kayitekle(){
		$this->load->view("kayitform");
	}


	public function kayitson(){
		$form = $this->load->form("Form");
		$baslik = $form->get("baslik")->bosmu();
		$icerik = $form->get("icerik")->bosmu();
		if (!empty($form->error)) :
			$hata = $form->error;
			$this->load->view("kayitekle", $hata);
		else :
			$kayitlarabak = $this->load->model("Ana_model");
			$veri = $kayitlarabak->kayitekle(array($baslik, $icerik));
			$this->load->view("kayitekle", $veri);
		endif;
	}

	public function kayitsil($id){
		$kayitlarabak = $this->load->model("Ana_model");
		$veri = $kayitlarabak->kayitsil($id);
		$this->load->view("kayitekle", $veri);
	}

	public function kayitguncelle($id){
		$kayitlarabak = $this->load->model("Ana_model");
		$veri = $kayitlarabak->idyegorekayitgetir($id);
		$this->load->view("guncelleform", $veri);
	}


	public function kayitguncelleson()
	{
		$form = $this->load->form("Form");
		$baslik = $form->get("baslik")->bosmu();
		$icerik = $form->get("icerik")->bosmu();
		$id = $_POST["kayitid"];

		if (!empty($form->error)) :
			$hata = $form->error;
			$this->load->view("kayitekle", $hata);

		else :
			$kayitlarabak = $this->load->model("Ana_model");
			$veri = $kayitlarabak->kayitguncelle(array($baslik, $icerik), $id);
			$this->load->view("kayitekle", $veri);
		endif;
	}
}
