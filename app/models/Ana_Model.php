<?php
class Ana_model  extends Model{
	
	public function __construct(){
		parent::__construct();
	}

	public function kayitlarigetir(){
		return $this->db->listele("makale", "order by id asc");
	}

	public function idyegorekayitgetir($id){
		return $this->db->listele("makale", "where id=" . $id);
	}

	public function kayitekle($veri){
		return $this->db->ekle("makale", "baslik,icerik", $veri);
	}

	public function kayitsil($id){
		return $this->db->silme("makale", 'id=' . $id);
	}

	public function kayitguncelle($veri, $id){
		return $this->db->guncelle("makale", $veri, 'id=' . $id);
	}
}
