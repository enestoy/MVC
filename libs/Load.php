<?php 
class Load{

	public function view ($dosyaadi,$data=null) {		
		include 'app/view/'.$dosyaadi.'_v.php';		
	}
	
	public function model ($dosyaadi) {
		include 'app/models/'.$dosyaadi.'.php';
		return new $dosyaadi();		
	}
	
	public function form ($dosyaadi) {
		include 'libs/'.$dosyaadi.'.php';
		return new $dosyaadi();	
	}
}

?>