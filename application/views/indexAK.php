<html>
  <head>
    <title>smartLock</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('CSS/node_modules/bootstrap/dist/css/bootstrap.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('CSS/node_modules/bootstrap/dist/css/bootstrap-grid.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('CSS/open-iconic-master/font/css/open-iconic-bootstrap.css');?>">
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
      select{
        margin-bottom: 1%;
        width:100%;
      }
      #btnReset{
        margin: auto;
        width:100%;
      }
      .card{
        border: 1px solid rgba(40,167,69,.125);
      }
      .card-header{
        border: 1px solid rgba(40,167,69,.125);
      }
      .oi-person{
        margin-top: 2px;
      }
      .oi-lock-locked{

      }
      @media (min-width: 320px) {
        .img-fluid {
          margin-top: 25%;
          width: 30%;
          margin-right: auto;
          margin-left: auto;
          margin-bottom: 10%;
          padding-top: 1%;
        }
        .oi.oi-lock-locked{
          top:25px;
          font-size: 40;
        }
        .pulse-button {
          position: relative;
          top: 50%;
          left: 50%;
          margin-left: -70px;
          margin-top: 30%;
          margin-bottom: 15%;
          padding: 28px;
          display: block;
          width: 150px;
          height: 150px;
          font-size: 1.3em;
          font-weight: light;
          font-family: 'Trebuchet MS', sans-serif;
          text-transform: uppercase;
          text-align: center;
          line-height: 100px;
          letter-spacing: -1px;
          color: #807eff;
          border: 1px solid #807eff;
          border-radius: 50%;
          cursor: pointer;
          box-shadow: 0 0 0 0 rgba(128, 126, 255, 0.5);
          -webkit-animation: pulss 1.5s infinite;
          -webkit-perspective: 1000;
          -webkit-backface-visibility: hidden;
        }
        .pulse-button:hover {
          -webkit-animation: none;
        }
        .pulse-button-danger {
          position: relative;
          top: 50%;
          left: 50%;
          margin-left: -70px;
          margin-top: 30%;
          margin-bottom: 15%;
          padding: 28px;
          display: block;
          width: 150px;
          height: 150px;
          font-size: 1.3em;
          font-weight: light;
          font-family: 'Trebuchet MS', sans-serif;
          text-transform: uppercase;
          text-align: center;
          line-height: 100px;
          letter-spacing: -1px;
          color: #dc3545;
          border: 1px solid #dc3545;
          border-radius: 50%;
          cursor: pointer;
          box-shadow: 0 0 0 0 rgba(#dc3545, 0.5);
          -webkit-animation: pulsedanger 1.5s infinite;
          -webkit-perspective: 1000;
          -webkit-backface-visibility: hidden;
        }
        .pulse-button-danger:hover {
          -webkit-animation: none;
        }
        @-webkit-keyframes pulsedanger{
          0% {
            -webkit-transform:scale(.9);
          }
          70% {
            -webkit-transform:scale(1);
            -webkit-box-shadow: 0px 0px 0px 20px rgba(128, 126, 255, 0.3);
          }
          100% {
            -webkit-transform:scale(.9);
            -webkit-box-shadow: 0px 0px 0px 0px rgba(128, 126, 255, 0.1);
          }
        }
        @-webkit-keyframes pulss {
          0% {
            -webkit-transform:scale(.9);
          }
          70% {
            -webkit-transform:scale(1);
            -webkit-box-shadow: 0px 0px 0px 20px rgba(128, 126, 255, 0.3);
          }
          100% {
            -webkit-transform:scale(.9);
            -webkit-box-shadow: 0px 0px 0px 0px rgba(128, 126, 255, 0.1);
          }
        }
      }
      @media (min-width: 768px) {
        .img-fluid {
          margin-top: 0%;
          width: 22%;
          margin-right: auto;
          margin-left: auto;
          margin-bottom: 10%;
          padding-top: 1%;
        }
        .pulse-button {
          position: relative;
          top: 50%;
          left: 50%;
          margin-left: -19%;
          margin-top: 20%;
          margin-bottom: 10%;
          padding: 28px;
          display: block;
          width: 250px;
          height: 250px;
          font-size: 1.3em;
          font-weight: light;
          font-family: 'Trebuchet MS', sans-serif;
          text-transform: uppercase;
          text-align: center;
          line-height: 100px;
          letter-spacing: -1px;
          color: white;
          border: none;
          border-radius: 50%;
          background: #5a99d4;
          cursor: pointer;
          box-shadow: 0 0 0 0 rgba(#5a99d4, .5);
          -webkit-animation: pulss 1.5s infinite;
          -webkit-perspective: 1000;
          -webkit-backface-visibility: hidden;
        }
        .pulse-button:hover {
          -webkit-animation: none;
        }
        @-webkit-keyframes pulss {
          0% {
            -webkit-transform:scale(.9);
          }
          70% {
            -webkit-transform:scale(1);
            -webkit-box-shadow: 0px 0px 0px 20px rgba(90, 153, 212, 0.3);
          }
          100% {
            -webkit-transform:scale(.9);
            -webkit-box-shadow: 0px 0px 0px 0px rgba(90, 153, 212, 0.1);
          }
        }

        .pulse-button-danger {
          position: relative;
          top: 50%;
          left: 50%;
          margin-left: -70px;
          margin-top: 30%;
          margin-bottom: 15%;
          padding: 28px;
          display: block;
          width: 150px;
          height: 150px;
          font-size: 1.3em;
          font-weight: light;
          font-family: 'Trebuchet MS', sans-serif;
          text-transform: uppercase;
          text-align: center;
          line-height: 100px;
          letter-spacing: -1px;
          color: #dc3545;
          border: 1px solid #dc3545;
          border-radius: 50%;
          cursor: pointer;
          box-shadow: 0 0 0 0 rgba(#dc3545, 0.5);
          -webkit-animation: pulsedanger 1.5s infinite;
          -webkit-perspective: 1000;
          -webkit-backface-visibility: hidden;
        }
        .pulse-button-danger:hover {
          -webkit-animation: none;
        }
        @-webkit-keyframes pulsedanger{
          0% {
            -webkit-transform:scale(.9);
          }
          70% {
            -webkit-transform:scale(1);
            -webkit-box-shadow: 0px 0px 0px 20px rgba(128, 126, 255, 0.3);
          }
          100% {
            -webkit-transform:scale(.9);
            -webkit-box-shadow: 0px 0px 0px 0px rgba(128, 126, 255, 0.1);
          }
        }
      }
      @media (min-width: 1024px) {
        .img-fluid {
          margin-top: 0%;
          width: 10%;
          margin-right: auto;
          margin-left: auto;
          margin-bottom: 10%;
          padding-top: 1%;
        }
        .pulse-button {
          position: relative;
          top: 50%;
          left: 50%;
          margin-left: -19%;
          margin-top: 20%;
          margin-bottom: 10%;
          padding: 28px;
          display: block;
          width: 250px;
          height: 250px;
          font-size: 1.3em;
          font-weight: light;
          font-family: 'Trebuchet MS', sans-serif;
          text-transform: uppercase;
          text-align: center;
          line-height: 100px;
          letter-spacing: -1px;
          color: white;
          border: none;
          border-radius: 50%;
          background: #5a99d4;
          cursor: pointer;
          box-shadow: 0 0 0 0 rgba(#5a99d4, .5);
          -webkit-animation: pulss 1.5s infinite;
          -webkit-perspective: 1000;
          -webkit-backface-visibility: hidden;
        }
        .pulse-button:hover {
          -webkit-animation: none;
        }
        @-webkit-keyframes pulss {
          0% {
            -webkit-transform:scale(.9);
          }
          70% {
            -webkit-transform:scale(1);
            -webkit-box-shadow: 0px 0px 0px 20px rgba(90, 153, 212, 0.3);
          }
          100% {
            -webkit-transform:scale(.9);
            -webkit-box-shadow: 0px 0px 0px 0px rgba(90, 153, 212, 0.1);
          }
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
        .pulse-button {
          position: relative;
          top: 50%;
          left: 50%;
          margin-left: -19%;
          margin-top: 20%;
          margin-bottom: 10%;
          padding: 28px;
          display: block;
          width: 250px;
          height: 250px;
          font-size: 1.3em;
          font-weight: light;
          font-family: 'Trebuchet MS', sans-serif;
          text-transform: uppercase;
          text-align: center;
          line-height: 100px;
          letter-spacing: -1px;
          color: white;
          border: none;
          border-radius: 50%;
          background: #5a99d4;
          cursor: pointer;
          box-shadow: 0 0 0 0 rgba(#5a99d4, .5);
          -webkit-animation: pulss 1.5s infinite;
          -webkit-perspective: 1000;
          -webkit-backface-visibility: hidden;
        }
        .pulse-button:hover {
          -webkit-animation: none;
        }
        @-webkit-keyframes pulss {
          0% {
            -webkit-transform:scale(.9);
          }
          70% {
            -webkit-transform:scale(1);
            -webkit-box-shadow: 0px 0px 0px 20px rgba(90, 153, 212, 0.3);
          }
          100% {
            -webkit-transform:scale(.9);
            -webkit-box-shadow: 0px 0px 0px 0px rgba(90, 153, 212, 0.1);
          }
        }
      }
    </style>
    <script type="text/javascript">
      var data = {};
      data['IDAK'] = "<?php echo $_SESSION['IDAK']?>";
      data['dNow'] = (new Date()).getDate();
      data['mNow'] = (new Date()).getMonth()+1;
      data['yNow'] = (new Date()).getFullYear();
      var cob = JSON.stringify(data);
      console.log(cob);
      $(document).ready(function(){
        $('#statusKamar').collapse();
        $.ajax({
          url:"<?php echo base_url('index.php/AKController/AKStatusKamar');?>",
          type:"post",
          data:"data="+JSON.stringify(data),
          dataType:"json",
          success: function(result){
            $('#statusKamarKU').html(result);
          },
          error:function(er,err,xhr){
            console.log(er+'::'+err+'::'+xhr);
          }
        });
        $('#KunciPintu').click(function(){
          $.ajax({
            url:"<?php echo base_url('index.php/AKController/AKKunciPintu');?>",
            type:"get",
            dataType:"json",
            success: function(result){
              console.log(result);
              $('#hasilPerintah').html(result['notfikasi']);
              //$('#pulseLock').html(result['buttonLock']);
            },
            error:function(er,err,xhr){
              console.log(er+'::'+err+'::'+xhr);
            }
          });
        });
        $.ajax({
          url:"<?php echo base_url('index.php/AKController/CekKosAwal');?>",
          type:"post",
          data:"data="+JSON.stringify('IKK'),
          dataType:"json",
          success: function(result){
            //$('#statusKamarKU').html(result);
            $('#menuAtur').append(result);
          },
          error:function(er,err,xhr){
            console.log(er+'::'+err+'::'+xhr);
          }
        });
      });
    </script>
  </head>
  <body>
    <div>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">
          <img src="<?php echo $this->session->foto;?>" style="width:30px;height:30px" class="rounded-circle"/>
          <?php echo $_SESSION['nama']?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto" id="menuAtur">
            <!--<form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>-->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Settings
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo base_url('index.php/AKController/EditDiriIndex')?>">Edit Diri</a>
                <a class="dropdown-item" href="<?php echo base_url('index.php/AKController/historyAturIndex')?>">History Aktivitas</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo base_url('index.php/AKController/logOut')?>">Log Out</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <div class="container">
      <div id="pulseLock"><span class="pulse-button" id="KunciPintu"><span class="oi oi-lock-locked"></span></span></div>
      <div id="hasilPerintah"></div>
      <div id="statusKamarKU"></div>
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
