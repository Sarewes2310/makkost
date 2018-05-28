<html>
  <head>
    <title>smartLock</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('CSS/node_modules/bootstrap/dist/css/bootstrap.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('CSS/node_modules/bootstrap/dist/css/bootstrap-grid.css');?>">
    <script type="text/javascript" src="<?php echo base_url('JS/node_modules/jquery/dist/jquery.min.js');?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('CSS/node_modules/bootstrap/dist/js/bootstrap.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('CSS/node_modules/bootstrap/js/dist/modal.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('CSS/node_modules/bootstrap/js/dist/index.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('CSS/node_modules/bootstrap/js/dist/util.js');?>"></script>
    <style type="text/css">
      #tengah{
        margin-top: 10%;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: auto;
        width: 75%;
        padding: 10px;
      }
      .form-control{
        margin-bottom: 1%;
      }
      select{
        margin-bottom: 1%;
        width:100%;
      }
      #btnReset{
        margin: auto;
        width:100%;
      }
      @media (min-width: 320px) {
        .img-fluid {
          width: 100%;
          height: 23%;
          margin-right: auto;
          margin-left: auto;
          margin-bottom: 15%;
          padding-top: 1%;
        }
        #tengah{
          margin-top: 10%;
          margin-left: auto;
          margin-right: auto;
          margin-bottom: auto;
          width: 75%;
          padding: 10px;
        }
        .inLog{
          margin-bottom: 3%
        }
        .btn.btn-primary{
          width: 100%;
          padding: 4%;
        }
        .garis{
          text-align: center;
        }
        .garis tbn{
          text-align: center;
          margin: 40%;
        }
        .garis btn{
          text-align: center;
          margin: 14%;
        }
      }
      @media (min-width: 768px) {
        .img-fluid {
          margin-top: 0%;
          width:50%;
          height:25%;
          margin-right: auto;
          margin-left: auto;
          margin-bottom: 10%;
          padding-top: 1%;
        }
        #tengah{
          margin-top: 10%;
          margin-left: auto;
          margin-right: auto;
          margin-bottom: auto;
          width: 75%;
          padding: 10px;
        }
      }
      @media (min-width: 1024px) {
        .img-fluid {
          margin-top: 0%;
          width:37%;
          height:30%;
          margin-right: auto;
          margin-left: auto;
          margin-bottom: 10%;
          padding-top: 1%;
        }
        #tengah{
          margin-top: 10%;
          margin-left: auto;
          margin-right: auto;
          margin-bottom: auto;
          width: 75%;
          padding: 10px;
        }
      }
      @media (min-width: 1200px) {
        .img-fluid {
          margin-top: 0%;
          width: 10%;
          margin-right: auto;
          margin-left: auto;
          margin-bottom: 10%;
          padding-top: 1%;
        }
        #tengah{
          margin-top: 10%;
          margin-left: auto;
          margin-right: auto;
          margin-bottom: auto;
          width: 75%;
          padding: 10px;
        }
      }
      @media (min-width: 1400px) {
        .img-fluid {
          margin-top: 0%;
          width: 10%;
          margin-right: auto;
          margin-left: auto;
          margin-bottom: 10%;
          padding-top: 1%;
        }
        #tengah{
          margin-top: 10%;
          margin-left: auto;
          margin-right: auto;
          margin-bottom: auto;
          width: 75%;
          padding: 10px;
        }
      }
    </style>
    <script type="text/javascript">
      $(document).ready(function(){
        //$("#MsignUP").on("shown.bs.modal",function(){
        //  $("#BsignUP").trigger("click");
        //});
        $("#BforgotPass").click(function(){
          $("#MforgotPass").modal('show');
        });
        $("#BsignUP").click(function(e){
          window.location = "<?php echo base_url('index.php/LoginController/signup');?>"
          //alert("<?php echo base_url('index.php/LoginController/signup');?>");
          event.preventDefault();
        });
      });
      /*function Login(){
        var status = $("#statusLogin").val();
        alert(status);
        if(status == "pk"){
          //window.location = "<?php echo base_url('index.php/PKController');?>"
          $.post("<?php echo base_url('index.php/PKController');?>",{
            emailLogin    : $("#emailLogin").val();
            passwordLogin : $("#passwordLogin").val();
          });
        }
        else if(status == "ak")window.location = "<?php echo base_url('index.php/AKController');?>"
        return false;
      }*/
    </script>
  </head>
  <body>
    <div id="tengah">
      <img class="img-fluid mx-auto d-block" src="<?php echo base_url('ICON/edgetech(2).png');?>"/>
      <form method="post" id="login" action="<?php echo base_url('index.php/LoginController/sendDataLogIN');?>">
        <input type="email" class="form-control inLog" id="emailLogin" name="emailLogin" placeholder="Email" required></input>
        <input type="password" class="form-control inLog" id="passwordLogin" name="passwordLogin" placeholder="Password" required></input>
        <!--<select class="custom-select" id="statusLogin" name="statusLogin" required>
          <option>Choose your status</option>
          <option value="pk">Pemilik Kost</option>
          <option value="ak">Anak Kost</option>
        </select>-->
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
      <div class="garis">OR</div>
      <div>
        <button type="button" id="BsignUP" data-toggle="modal" class="btn btn-link garis">
          <tbn>
            SignUp LockKos
          </tbn>
        </button>
      </div>
      <div>
        <button type="button" id="BforgotPass" class="btn btn-link garis">
          <btn>
            Forgot your password ?
          </btn>
        </button>
      </div>
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
  </body>
</html>
