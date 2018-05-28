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
      #IDAKtambahAccess{
        visibility: hidden;
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
      .nav-tabs{
        border-bottom: 1px solid #7ebbff;
      }
      .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active{
        border-color: #7ebbff #7ebbff #fff;
      }
      .nav-tabs .nav-link{
        border: 1px solid #7ebbff;
      }
      a{
        color: #fff;
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
        .listFoto{
          width:5%;
        }
        .listIsiVerifikasi{
          width: 60%;
        }
        .listIsiBelumVerifikasi{
          width: 44%;
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
      var mstatus;
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
        $.ajax({
            url:"<?php echo base_url('index.php/AKController/getaccesAKVerifikasi');?>",
            type:"get",
            dataType:"json",
            success: function(result){
            //console.log(JSON.stringify(result));
            $('#nav-verfikasi').html(result);
          },
          error:function(er,err,xhr){
            console.log(er+'::'+err+'::'+xhr);
          }
        });
        $.ajax({
            url:"<?php echo base_url('index.php/AKController/getaccesAKbelumVerifikasi');?>",
            type:"get",
            dataType:"json",
            success: function(result){
            //console.log(JSON.stringify(result));
            //alert(result);
            $('#nav-bverfikasi').html(result['data']);
            $('#countBelumVerifikasi').html(result['count']);
          },
          error:function(er,err,xhr){
            console.log(er+'::'+err+'::'+xhr);
          }
        });
        $.ajax({
          url:"<?php echo base_url('index.php/AKController/CekKosAwalAA');?>",
          type:"post",
          data:"data="+JSON.stringify(data),
          dataType:"json",
          success: function(result){
            //$('#statusKamarKU').html(result);
            $('#menuAtur').append(result);
          },
          error:function(er,err,xhr){
            console.log(er+'::'+err+'::'+xhr);
          }
        });
        $('#MAccesAccepted').on('show.bs.modal',function (event) {
          var button = $(event.relatedTarget);
          var recipient = button.data('accepted');
          var idak = button.data('idaccepted');
          var modal = $(this);
          //alert(idak);
          //modal.find('.modal-title').text('New message to ' + recipient);
          //modal.find('.modal-body#nameAccepted').append(recipient);
          $('#nameAccepted').html(recipient);
          $('#IDAKtambahAccess').val(idak);
        });
        $('#MAccesRejected').on('show.bs.modal',function (event) {
          var button = $(event.relatedTarget);
          var recipient = button.data('rejected');
          var modal = $(this);
          var idak = button.data('idrejected');
          mstatus = button.data('mode');
          //modal.find('.modal-title').text('New message to ' + recipient);
          //modal.find('.modal-body#nameAccepted').append(recipient);
          $('#nameRejected').html(recipient);
        });
        $('#tambahAccessOrang').on('show.bs.modal',function (event) {
          $.ajax({
            url:"<?php echo base_url('index.php/AKController/addKunciKK')?>",
            type:"post",
            data:"data="+JSON.stringify($('#IDAKtambahAccess').val()),
            dataType:"json",
            success:function(result){
              setTimeout(function(){
                $('#MAccesAccepted').modal('hide');
              },4000);

            },
            error:function(er,err,xhr){

            }
          });
          //modal.find('.modal-title').text('New message to ' + recipient);
          //modal.find('.modal-body#nameAccepted').append(recipient);
          $('#nameRejected').html(recipient);
        });
      });
      function tambahAccessTeman(){
        alert($('#IDAKtambahAccess').val());
        $.ajax({
          url:"<?php echo base_url('index.php/AKController/addKunciKK')?>",
          type:"post",
          data:"data="+JSON.stringify($('#IDAKtambahAccess').val()),
          dataType:"json",
          success:function(result){
            setTimeout(function(){
              $('#MAccesAccepted').modal('hide');
            },4000);

          },
          error:function(er,err,xhr){

          }
        });
        return false;
      }
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
                <a class="dropdown-item" href="#">Edit Diri</a>
                <a class="dropdown-item" href="#">History Aktivitas</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Log Out</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="<?php echo base_url('index.php/AKController')?>">
                Home
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <div>
      <nav class="nav nav-tabs bg-primary" id="myTab" role="tablist">
        <a class="nav-item nav-link active" id="nav-verfikasi-tab" data-toggle="tab" href="#nav-verfikasi" role="tab" aria-controls="nav-verfikasi" aria-selected="true">Verfikasi</a>
        <a class="nav-item nav-link" id="nav-bverfikasi-tab" data-toggle="tab" href="#nav-bverfikasi" role="tab" aria-controls="nav-bverfikasi" aria-selected="false">
          Belum Verfikasi <span class="badge badge-light" id="countBelumVerifikasi"></span>
        </a>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-verfikasi" role="tabpanel" aria-labelledby="nav-verfikasi-tab">
        </div>
        <div class="tab-pane fade" id="nav-bverfikasi" role="tabpanel" aria-labelledby="nav-profile-tab"></div>
      </div>
    </div>
    <div class="modal fade" id="MAccesAccepted" tabindex="-1" role="dialog" aria-labelledby="">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"><b>Pemberitahuan</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" id="tambahAccessOrang" action="#" onsubmit="return tambahAccessTeman()">
            <div class="modal-body">
              <!--<input type="email" class="form-control" id="emailforgotPass" placeholder="Email"></input>
              <button type="button" class="btn btn-success">SEND</button>-->
              <p>Apakah anda yakin menambahkan <b id="nameAccepted"></b> ?</p>
            </div>
            <div class="modal-footer">
              <input type="text" id="IDAKtambahAccess"/>
              <button type="submit" class="btn btn-primary">Ya</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
            </div>
        </form>
        </div>
      </div>
    </div>
    <div class="modal fade" id="MAccesRejected" tabindex="-1" role="dialog" aria-labelledby="">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"><b>Pemberitahuan</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" id="forgotPass" action="#" onsubmit="return ForgotPass()">
              <p>Apakah anda yakin menghapus <b id="nameRejected"></b> ?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="mintaAccess" tabindex="-1" role="dialog" aria-labelledby="">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"><b>Pemberitahuans</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" id="tambahAccessOrang" action="#" onsubmit="return tambahAccessTeman()">
            <div class="modal-body">
              <div id="isiTambahAccess"></div>
            </div>
            <div class="modal-footer">
              <input type="text" id="IDAKtambahAccess"/>
              <button type="submit" class="btn btn-primary">Ya</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
            </div>
        </form>
        </div>
      </div>
    </div>
  </body>
</html>
