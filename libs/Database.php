<?php 
class Database extends PDO{

    protected $veriler = array();
    protected $bilgi;

    public function __construct(){
        parent::__construct('mysql:dbname=mvcapp;host=localhost;charset=utf8',"root","");
        $this->bilgi= new Bilgi();

    }
    
    public function listele($tabloisim,$kosul=false) {
        if ($kosul==false) :
        $sorgum="select * from ".$tabloisim;			
        else:   
        $sorgum="select * from ".$tabloisim." ".$kosul;
        endif;
        $son=$this->prepare($sorgum);
        $son->execute();
        return $son->fetchAll();
    }
    
    public function ekle($tabloisim,$sutunadlari,$veriler){  
        $sorgum=$this->prepare("insert into ".$tabloisim." (".$sutunadlari.") VALUES(?,?)");	
        if ($sorgum->execute($veriler)):
            return $this->bilgi->basarili("EKLEME BAŞARILI",SİTE_URL."babasayfa");	
        else:
            return $this->bilgi->hata("HATA OLUŞTU",SİTE_URL."babasayfa");	
        endif;
    }
    
    public function silme($tabloisim,$kosul){       
        $sorgum=$this->prepare('delete from '.$tabloisim. ' where '.$kosul);
        if ($sorgum->execute()):
            return $this->bilgi->basarili("SİLME BAŞARILI",SİTE_URL."babasayfa");	
        else:
            return $this->bilgi->hata("HATA OLUŞTU",SİTE_URL."babasayfa");	
        endif;	
    }

    public function guncelle($tabloisim,$veriler,$kosul){
        $sorgum=$this->prepare("update ".$tabloisim." set baslik=?,icerik=?  where ".$kosul);
        if ($sorgum->execute($veriler)):
            return $this->bilgi->basarili("GÜNCELLEME BAŞARILI",SİTE_URL."babasayfa");	
        else:
            return $this->bilgi->hata("HATA OLUŞTU",SİTE_URL."babasayfa");	
        endif;	
    }
}

?>