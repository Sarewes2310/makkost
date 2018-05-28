<html>
  <head>
    <title>smartLock</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('CSS/node_modules/bootstrap/dist/css/bootstrap.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('CSS/node_modules/bootstrap/dist/css/bootstrap-grid.css');?>">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css" />
    <script type="text/javascript" src="<?php echo base_url('JS/node_modules/jquery/dist/jquery.min.js');?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('CSS/node_modules/bootstrap/dist/js/bootstrap.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('CSS/node_modules/bootstrap/js/dist/modal.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('CSS/node_modules/bootstrap/js/dist/index.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('CSS/node_modules/bootstrap/js/dist/util.js');?>"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('CSS/node_modules/bootstrap/js/dist/button.js');?>"></script>
    <style type="text/css">
      #tengah{
        margin-top: 10%;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: auto;
        width: 75%;
        padding: 10px;
      }
      .btn.btn-success{
        width: 100%;
        margin-bottom: 6%;
      }
      #btnReset{
        margin: auto;
        width:100%;
      }
      .img-fluid {
        width: 30%;
        margin-bottom: 10%;
        padding-top: 1%;
      }
    </style>
    <script type="text/javascript">
      $(document).ready(function(){
        $.ajax({
          url:"<?php echo base_url('index.php/LoginController/signUPMenu');?>",
          type:"GET",
          dataType:"json",
          success: function(result){
              $("#menuIsi").html(result);
              //alert(jQuery.parseJSON(result));
              $("#P").click(function(){
                console.log("coba P");
                $("#W").prop('checked',false);
              });
              $("#W").click(function(){
                $("#P").prop('checked',false);
              });
              $('#tglSignup').datepicker();
        }});
      });
      function Signup(){
        //$("#signup")
      }
      function P(){
        $("#W").prop('checked',false);
      }
    </script>
  </head>
  <body>
    <div id="menuIsi">
      <!--<form method="post" id="signup" action="#" onsubmit="return Signup()">
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
        <fieldset class="form-group" id="JK">
          <div class="row">
            <legend class="col-form-legend col-4 col-md-2 col-lg-1">Jenis Kelamin</legend>
            <div class="col-4 col-md-4 col-lg-4 ">
              <div class="form-check">
                <label class="custom-control custom-radio">
                  <input id="" name="" type="radio" class="custom-control-input" />
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description">Pria</span>
                </label>
              </div>
              <div class="form-check">
                <label class="custom-control custom-radio">
                  <input id="" name="" type="radio" class="custom-control-input">
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description">Wanita</span>
                </label>
              </div>
            </div>
          </div>
        </fieldset>
        <button type="button" class="btn btn-success">Sign UP</button>
      </form>-->
    </div>
    <div class="modal fade" id="MforgotPass" tabindex="-1" role="dialog" aria-labelledby="">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Forgot Password</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" id="forgotPass" action="#" onsubmit="return ForgotPass()">
              <input type="email" class="form-control" id="emailforgotPass" placeholder="Email"></input>
              <button type="button" class="btn btn-success">SEND</button>
              <p>Silahkan masukan email anda untuk mendapatkan password</p>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div id="coba"></div>
  </body>
</html>
