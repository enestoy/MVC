<?php 
class Model{

    protected $db=array();

    public function __construct(){
       $this->db = new Database();
       
    }


    
}

?>