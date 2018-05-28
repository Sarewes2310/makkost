<?php
class Loginmodel extends CI_Model{
    public function checkLoginAK($data){
      return $this->db->query('select nama,IDAK,foto from anakKost where email="'.$data['email'].'" AND password="'.$data['password'].'"')->result_object();
    }
    public function checkLoginPK($data){
      return $this->db->query('select nama,IDPK,foto  from anakKost where email="'.$data['email'].'" AND password="'.$data['password'].'"')->result_object();
    }
}
?>
