<?php
defined('BASEPATH') OR exit("No Direct Access Allowed");
class PenKController extends CI_Controller{
  //halaman index file
  public function index(){
      $this->load->view('indexAK');
  }
  //melihat status kamar hari ini
  public function AKStatusKamar(){
    $data = json_decode($this->input->post("data"));
    $this->load->model('AKmodel');
    //print_r($this->AKmodel->searchUseKamar($data));
    $hasil = $this->AKmodel->searchUseKamar($data);
    if($hasil == NULL){
      $tampil = '
        <div id="statusKamar" role="tablist">
          <div class="card">
            <div class="card-header bg-success text-white" role="tab" id="headingOne">
              <h5 class="mb-0">
                STATUS KAMAR
              </h5>
            </div>
            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                Kamar anda dalam keadaan kosong.
              </div>
            </div>
          </div>
        </div>
      ';
    }else{
      $tampil = '
        <div id="statusKamar" role="tablist">
          <div class="card">
            <div class="card-header bg-success text-white" role="tab" id="headingOne">
              <h5 class="mb-0">
                STATUS KAMAR
              </h5>
            </div>
            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                Kamar anda dalam keadaan kosong.
              </div>
            </div>
          </div>
        </div>
      ';
    }
    echo json_encode($tampil,JSON_HEX_TAG | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_HEX_APOS);
  }
  //melihat status kunci kamar
  public function AKKunciPintu(){
    $this->load->model('AKmodel');
    $data = $this->session->IDAK;
    //print_r($_SESSION['IDAK']);
    $hasil = $this->AKmodel->checkKunciPintu($data);
    //print_r($hasil);
    if($hasil[0]->status == 1){
      $data = array('IDAK' => $data, 'status' => '0');
      $hasil = $this->AKmodel->KunciPintu($data);
      if($hasil == 1){
        //$tampil['buttonLock'] = '<span class=".pulse-button-danger" id="KunciPintu"><span class="oi oi-lock-locked"></span></span>';
        $tampil['notfikasi'] = '
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Pemberitahuan!</strong>
            <div>
              Pintu kos dibuka.
            </div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        ';
        echo json_encode($tampil,JSON_HEX_TAG | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_HEX_APOS);
      }
      else{
        //$tampil['buttonLock'] = '<span class="pulse-button" id="KunciPintu"><span class="oi oi-lock-locked"></span></span>';
        $tampil['notfikasi'] = '
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Pemberitahuan!</strong>
            <div>
              Pintu kos gagal dibuka.
            </div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        ';
        echo json_encode($tampil,JSON_HEX_TAG | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_HEX_APOS);
      }
    }
    else {
      $data = array('IDAK' => $data, 'status' => '1');
      $hasil = $this->AKmodel->KunciPintu($data);
      if($hasil == 1){
        //$tampil['buttonLock'] = '<span class="pulse-button" id="KunciPintu"><span class="oi oi-lock-locked"></span></span>';
        $tampil['notfikasi'] = '
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Pemberitahuan!</strong>
            <div>
              Pintu kos ditutup.
            </div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        echo json_encode($tampil,JSON_HEX_TAG | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_HEX_APOS);
      }
      else{
        //$tampil['buttonLock'] = '<span class="pulse-button" id="KunciPintu"><span class="oi oi-lock-locked"></span></span>';
        $tampil['notfikasi'] = '
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Pemberitahuan!</strong>
            <div>
              Pintu kos gagal ditutup.
            </div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        echo json_encode($tampil,JSON_HEX_TAG | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_HEX_APOS);
      }
    }
    //print_r($data);
    //print_r($hasil);
  }
  //mengecek sudah punya kos atau belum
  public function CekKosAwal(){
    $this->load->model('AKmodel');
    $hasil = $this->AKmodel->checkKosAwal($this->session->IDAK);
    //print_r($_POST['data']);
    if($hasil > 0){
      if($_POST['data']=='"IKK"'){
        //echo "coeg";
        $tampil = '<li class="nav-item active">';
      }
      else $tampil = '<li class="nav-item">';
      $tampil .= '
        <a class="nav-link" href="'.base_url('index.php/AKController').'">Home</a>
      </li>';
      if($_POST['data']=='"AKK"')$tampil .= '<li class="nav-item active">';
      else $tampil .= '<li class="nav-item">';
      $tampil .= '
        <a class="nav-link" href="'.base_url('index.php/AKController/accessAKIndex').'">Acces Kamar Kost</a>
      </li>';
    }else{
      $tampil = '
        <li class="nav-item">
          <a class="nav-link" href="'.base_url('index.php/AKController/addKKAKIndex').'">Tambah Kost</a>
        </li>
      ';
    }
    echo json_encode($tampil,JSON_HEX_TAG | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_HEX_APOS);
  }
  //menampilkan halaman index dari access pintu kost
  public function accessAKIndex(){
    $this->load->view('accesKKAK');
  }
  //menampilkan data meminta access pintu kost yang sudah diverifikasi
  public function getaccesAKVerifikasi(){
    $this->load->model('AKmodel');
    $hasil = $this->AKmodel->getDataAccesAKVerifikasi($this->session->IDAK);
    //print_r($hasil);
    $i = 1;
    $tampil ='<table class="table"><tbody>';
    foreach($hasil as $key => $isi ){
      $tampil.= '
          <tr>
            <td class="listFoto"><img src="'.$isi->foto.'" style="width:40px;height:40px" class="rounded-circle"/></td>
            <td class="listIsiVerifikasi">
              <div>
                <b>'.$isi->NanakKost.'</b>
              </div>
              <div>
                '.$isi->Rkost.'
              </div>
            </td>
            <td>
              <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#MAccesRejected" data-rejected="'.$isi->NanakKost.'" data-idrejected="'.$isi->IDAC.'" data-mode="v"><span class="oi oi-circle-x"></span></button>
            </td>
          </tr>';
    }
    $tampil.='</tbody></table>';
    echo json_encode($tampil,JSON_HEX_TAG | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_HEX_APOS);
  }
  //menampilkan data meminta access pintu kos yang belum diverifikasi
  public function getaccesAKbelumVerifikasi(){
    $this->load->model('AKmodel');
    $hasil = $this->AKmodel->getDataAccesAKbelumVerifikasi($this->session->IDAK);
    //print_r($hasil);
    $i = 1;
    $tampil['data'] ='
    <table class="table">
      <tbody>';
    foreach($hasil['data'] as $key => $isi ){
      $tampil['data'].= '
          <tr>
            <td class="listFoto"><img src="'.$isi->foto.'" style="width:40px;height:40px" class="rounded-circle"/></td>
            <td class="listIsiBelumVerifikasi">
              <div>
                <b>'.$isi->NanakKost.'</b>
              </div>
              <div>
                '.$isi->Rkost.'
              </div>
            </td>
            <td>
              <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#MAccesAccepted" data-accepted="'.$isi->NanakKost.'" data-idaccepted="'.$isi->IDAC.'"><span class="oi oi-circle-check"></span></button>
              <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#MAccesRejected" data-rejected="'.$isi->NanakKost.'" data-idrejected="'.$isi->IDAC.'" data-mode="bv"><span class="oi oi-circle-x"></span></button>
            </td>
          </tr>';
    }
    $tampil['data'].='
      </tbody>
    </table>';
    $tampil['count']=$hasil['count'];
    //print_r($tampil);
    echo json_encode($tampil,JSON_HEX_TAG | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_HEX_APOS);
  }
  //menampilkan halaman index dari rumah Kost
  public function EditDiriIndex(){
    $this->load->view('EditDiriAK');
  }
  public function dataEditDiri(){
    $this->load->model('AKmodel');
    $hasil = $this->AKmodel->dataEditDiri($this->session->IDAK);
    echo json_encode($hasil,JSON_HEX_TAG | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_HEX_APOS);
  }
  public function addDataEditDiri(){

  }
  public function historyAturIndex(){

  }
  //menambah kamar kost untuk anak kost
  public function addKKAKIndex(){

  }
  //menambah access kunci kost
  public function addKunciKK(){
    //$_POST['data'];
    $this->load->model('AKmodel');
    $data = array(
      'IDAK'       => $_POST['data'],
      'IDSession'  => $this->session->IDAK
    );
    $this->AKmodel->addKunciKK($data);
  }
  //menghapus access kunci kost
  public function removeKunciKK(){
    //$_POST['data'];
    $this->load->model('AKmodel');
    $data = array(
      'IDAK'       => $_POST['data'],
      'IDSession'  => $this->session->IDAK
    );
    $hasil = $this->AKmodel->removeKunciKK($data);
    print_r($hasil);
  }
  //minta access kunci kost
  public function DataMintaKKRK(){
    $hasil = '
    <select class="custom-select" id="ListRumKost" name="ListRumKost" required>
      <option>Choose Rumah Kost</option>';
    $this->load->model('AKmodel');
    $data = $this->AKmodel->listRK();
    //print_r($data);
    foreach ($data as $key => $value) {
      $hasil.='
        <option value="'.$value->IDRK.'">'.$value->nama.'</option>
      ';
    }
    $hasil .= '</select>';
    //print_r($hasil);
    echo json_encode($hasil,JSON_HEX_TAG | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_HEX_APOS);
  }
  //minta access kunci kost
  public function DataMintaKK(){
    $hasil = '
    <select class="custom-select" id="ListKamKost" name="ListKamKost" required>
      <option>Choose Kamar Kost</option>';
    $this->load->model('AKmodel');
    $data = $this->AKmodel->listKK($_POST['data']);
    //print_r($_POST);
    foreach ($data as $key => $value) {
      $hasil.='
        <option value="'.$value->IDKK.'">'.$value->tipe.' ('. $value->isi.')</option>
      ';
    }
    $hasil .= '</select>';
    //print_r($hasil);
    echo json_encode($hasil,JSON_HEX_TAG | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_HEX_APOS);
  }
  // menambah Access kunci kost
  public function addMintaAccess(){
      //print_r(json_decode($_POST['data'],true));
      $this->load->model('AKmodel');
      $post = json_decode($_POST['data'],true);
      $data = array(
        'IDKK' => (int)$post['KK'],
        'IDAK' => (int)$this->session->IDAK
      );
      //print_r($data);
      $data = $this->AKmodel->addMintaAccess($data);
  }
  public function logOut(){
    session_destroy();
    $this->load->view('login');
  }
}
?>
