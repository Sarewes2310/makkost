<?php
defined('BASEPATH') OR exit("No Direct Access Allowed");
class LoginController extends CI_Controller
{
  //halaman index
  public function index(){
    //if(isset())
    $this->load->view('FB');
  }
  //untuk mengecek session data
  public function check(){
    //$this->load->library("../controllers/AKController");
    //echo "string";
    //$this->AKController->index();
    print_r($_SESSION['nama']);
  }
  //mengirimkan data login ke server
  public function sendDataLogIN(){
    //print_r($_POST);
    $this->load->model('Loginmodel');
    if($_POST['statusLogin'] == "ak"){
      $data['email'] = $_POST['emailLogin'];
      $data['password'] = $_POST['passwordLogin'];
      $hasil = $this->Loginmodel->checkLoginAK($data);
      //print_r($hasil);
      if($hasil!=NULL){
        $session = array(
          "nama"   => $hasil[0]->nama,
          "IDAK"   => $hasil[0]->IDAK,
          "foto"   => $hasil[0]->foto
        );
        $this->session->set_userdata($session);
        //$this->session->mark_as_temp($session,360); //Expired 6 minutes
        //print_r($_SESSION);
        $this->load->view('indexAK');
      }else $this->load->view('login');
    }else{
      $data['email'] = $this->input->post('emailLogin');
      $data['password'] = $this->input->post('passwordLogin');
      $this->Login->checkLoginPK();
      if($hasil!=NULL){
        $session = array(
          "nama"   => $hasil[0]->nama,
          "IDPK"   => $hasil[0]->IDPK,
          "foto"   => $hasil[0]->foto
        );
        $this->session->set_userdata($session);
        $this->session->mark_as_temp($session,360); //Expired 6 minutes
        $this->load->view('indexPK');
      }else $this->load->view('login');
    }
  }
  //menampilkan halaman signup
  public function signup(){
    $this->load->view('signup');
  }
  //memilih tampilan menu signup sesuai dengan device
  public function signUPMenu(){
    $this->load->library('user_agent');
    if($this->agent->mobile()!=NULL){
      //echo $this->agent->browser().":".$this->agent->version();
      $data = '
        <div id="tengah">
        <img src="'.base_url('ICON/edgetech(2).png').'" class="img-fluid rounded mx-auto d-block"/>
        <form method="post" id="signup" action="#" onsubmit="return Signup()">
          <div class="form-row">
            <label class="col-form-label col-4 col-xs-3 col-sm-3 col-md-2 col-lg-1 col-xl-1" for="namaSignup">Nama</label>
            <div class="form-group col-8 col-xs-4 col-sm-9 col-md-10 col-lg-11 col-xl-11">
              <input type="text" class="form-control" id="namaSignup" placeholder="Nama"></input>
            </div>
          </div>
          <div class="form-row">
            <label class="col-form-label col-4 col-xs-3 col-sm-3 col-md-2 col-lg-1 col-xl-1" for="emailSignup">Email</label>
            <div class="form-group col-8 col-xs-4 col-sm-9 col-md-10 col-lg-11 col-xl-11">
              <input type="email" class="form-control" id="emailSignup" placeholder="Email"></input>
            </div>
          </div>
          <div class="form-row">
            <label class="col-form-label col-4 col-xs-3 col-sm-3 col-md-2 col-lg-1 col-xl-1" for="passwordSignup">Password</label>
            <div class="form-group col-8 col-xs-4 col-sm-9 col-md-10 col-lg-11 col-xl-11">
              <input type="password" class="form-control" id="passwordSignup" placeholder="Password" aria-describedy="passSignUP"></input>
              <small id="textPassSignUp" class="form-text text-muted">
                Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
              </small>
            </div>
          </div>
          <div class="form-row">
            <label class="col-form-label col-4 col-xs-3 col-sm-3 col-md-2 col-lg-1 col-xl-1" for="alamatSignup">Alamat</label>
            <div class="form-group col-8 col-xs-4 col-sm-9 col-md-10 col-lg-11 col-xl-11">
              <input type="text" class="form-control" id="alamatSignup" placeholder="Alamat"></input>
            </div>
          </div>
          <div class="form-row">
            <label class="col-form-label col-4 col-xs-3 col-sm-3 col-md-2 col-lg-1 col-xl-1" for="statusSignup">Status</label>
            <div class="form-group col-8 col-xs-4 col-sm-9 col-md-10 col-lg-11 col-xl-11">
              <select class="custom-select" id="statusSignup" name="statusSignup">
                <option selected>Choose your status</option>
                <option value="pk">Pemilik Kost</option>
                <option value="ak">Anak Kost</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <label class="col-form-label col-4 col-xs-3 col-sm-3 col-md-2 col-lg-1 col-xl-1" for="tglSignup">Tanggal</label>
            <div class="form-group col-8 col-xs-4 col-sm-9 col-md-10 col-lg-11 col-xl-11 input-group date">
              <input type="text" class="form-control" id="tglSignup" name="tglSignup" placeholder="Tanggal Lahir"></input>
            </div>
          </div>
          <fieldset class="form-group">
            <div class="row">
              <legend class="col-form-legend col-4 col-md-2 col-lg-1">Jenis Kelamin</legend>
              <div class="col-4 col-md-4 col-lg-4 custom-controls-stacked">
                <div class="form-check">
                  <label class="custom-control custom-radio">
                    <input id="P" name="jenisK" type="radio" class="custom-control-input" />
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Pria</span>
                  </label>
                </div>
                <div class="form-check">
                  <label class="custom-control custom-radio">
                    <input id="W" name="jenisK" type="radio" class="custom-control-input"/>
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Wanita</span>
                  </label>
                </div>
              </div>
            </div>
          </fieldset>
          <button type="button" class="btn btn-success">Sign UP</button>
        </form>
      </div>';
      echo json_encode($data,JSON_HEX_TAG | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_HEX_APOS);
    }else{
      echo json_encode($this->agent->browser().":".$this->agent->version().":".$this->agent->browser());
    }
  }
  //mengirimkan data signup ke server
  public function sendDataSignUP(){

  }
}
