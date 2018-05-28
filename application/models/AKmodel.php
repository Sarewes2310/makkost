<?php
defined('BASEPATH') OR DIE("No Direct Access Allowed");
class AKmodel extends CI_Model{
  //mengecek yang menggunakan kamar pada hari ini
  public function searchUseKamar($data){
    return $this->db->query('SELECT anakKost.nama,historyAtur.IDAK FROM historyAtur
    INNER JOIN anakKost ON historyAtur.IDAK = anakKost.IDAK WHERE IDD IN(SELECT IDD FROM access WHERE IDAK='.$data->IDAK.')
    AND DATE(historyAtur.tgl)=DATE("'.$data->yNow.'-'.$data->mNow.'-'.$data->dNow.'")')->result_object();
  }

  public function checkUseKamar($data){
    return $this->db->query('SELECT anakKost.nama,historyAtur.IDAK FROM historyAtur
    INNER JOIN anakKost ON historyAtur.IDAK = anakKost.IDAK WHERE IDD IN(SELECT IDD FROM access WHERE IDAK='.$data->IDAK.')
    AND DATE(historyAtur.tgl) = DATE("'.$data->yNow.'-'.$data->mNow.'-'.$data->dNow.'")')->result_object();
  }
  //mengirimkan perintah kunci pintu
  public function KunciPintu($data){
    return $this->db->query('UPDATE device SET status='.$data['status'].' WHERE IDD IN(SELECT IDD FROM access WHERE IDAK='.$data['IDAK'].')');
  }
  //mengecek status kunci pintu
  public function checkKunciPintu($data){
    return $this->db->query('SELECT status FROM device WHERE IDD IN(SELECT IDD FROM access WHERE IDAK='.$data.')')->result_object();
  }
  //menghitung sudah mendapatkan kos atau belum
  public function checkKosAwal($data){
    return $this->db->count_all('sewa');
  }
  //meminta data verifikasi user kamar
  public function getDataAccesAKVerifikasi($data){
    //print_r($data);
    return $this->db->query('SELECT anakKost.nama AS NanakKost,foto,rumahKost.nama AS Rkost,access.status, access.IDAK AS IDAK,access.IDAC AS IDAC FROM access
    INNER JOIN anakKost ON access.IDAK = anakKost.IDAK
    INNER JOIN device ON access.IDD = device.IDD
    INNER JOIN kamarKost ON device.IDKK = kamarKost.IDKK
    INNER JOIN rumahKost ON kamarKost.IDRK = rumahKost.IDRK
    WHERE access.IDD IN(SELECT IDD FROM access WHERE IDAK='.$data.') AND access.status=1')->result_object();
  }
  //meminta data yang belum diverifikasi user kamar
  public function getDataAccesAKbelumVerifikasi($data){
    $hasil['data'] = $this->db->query('SELECT anakKost.nama AS NanakKost,foto,rumahKost.nama AS Rkost,access.status,access.IDAC AS IDAC FROM access
    INNER JOIN anakKost ON access.IDAK = anakKost.IDAK
    INNER JOIN device ON access.IDD = device.IDD
    INNER JOIN kamarKost ON device.IDKK = kamarKost.IDKK
    INNER JOIN rumahKost ON kamarKost.IDRK = rumahKost.IDRK
    WHERE access.IDD IN(SELECT IDD FROM access WHERE IDAK='.$data.') AND access.status=0')->result_object();
    $data = $this->db->query('SELECT IDD FROM access WHERE IDAK='.$data.'')->result_object();
    //print_r($data);
    $search = array(
      'status' => 0,
      'IDD'   => $data[0]->IDD
    );
    $this->db->where($search);
    $this->db->from('access');
    $hasil['count'] = $this->db->count_all_results();
    return $hasil;
  }
  //menambahkan hak akses KunciPintu
  public function addKunciKK($data){
    /*$hasil = $this->db->query('SELECT IDD FROM device WHERE IDAK="'.$data.'"')->result_object();
    print_r($hasil);
    return $this->db->query('insert into access(IDAC,IDD,IDAK,status) values()');*/
    $hasil=$this->db->query('SELECT IDD FROM device
      INNER JOIN sewa ON device.IDKK = sewa.IDKK WHERE sewa.IDAK ='.$data['IDSession'])->result_object();
    //print_r($hasil);
    return $this->db->query('UPDATE access SET status=1 WHERE IDAK='.$data['IDAK'].' AND IDD='.$hasil[0]->IDD);
  }
  //mengurangi hak akses KunciPintu
  public function removeKunciKK($data){
    //$hasil=$this->db->query('SELECT IDD FROM device
    //INNER JOIN sewa ON device.IDKK = sewa.IDKK WHERE sewa.IDAK ='.$data['IDSession'])->result_object();
    //print_r($hasil);
    //return $this->db->query('DELETE FROM access WHERE IDAK='.$data['IDAK'].' AND IDD='.$hasil[0]->IDD);
    return $this->db->query('DELETE FROM access WHERE IDAC='.$data['IDAK']);
  }
  public function listRK(){
    return $this->db->query('SELECT nama,IDRK FROM rumahKost')->result_object();
  }
  public function listKK($data){
    return $this->db->query('SELECT tipe,isi,IDKK FROM kamarKost WHERE IDRK='.$data)->result_object();
  }
  public function addMintaAccess($data){
    $hasil = $this->db->query('SELECT IDD FROM device WHERE IDKK='.$data['IDKK'])->result_object();
    return $this->db->query('INSERT INTO access (`IDD`, `IDAK`, `status`) VALUES('.$hasil[0]->IDD.','.$data['IDAK'].',0)');
  }
  public function dataEditDiri($id){
    return $this->db->query('SELECT * FROM anakKost WHERE IDAK='.$id)->result_object();
  }
}
 ?>
