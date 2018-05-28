<html>
  <head>
    <title>smartLock</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('CSS/node_modules/bootstrap/dist/css/bootstrap.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('CSS/node_modules/bootstrap/dist/css/bootstrap-grid.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('CSS/open-iconic-master/font/css/open-iconic-bootstrap.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('CSS/button/buttons.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('CSS/node_modules/bootstrap/scss/typeaheadjs.scss');?>">
    <script type="text/javascript" src="<?php echo base_url('JS/node_modules/jquery/dist/jquery.min.js');?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('CSS/node_modules/bootstrap/dist/js/bootstrap.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('CSS/node_modules/bootstrap/js/dist/modal.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('CSS/node_modules/bootstrap/js/dist/index.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('CSS/node_modules/bootstrap/js/dist/util.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('JS/Button/buttons.js');?>"></script>
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
      #IDACdeleteAccess{
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
        form{
          margin-top: 20px;
        }
        input{
          margin-top: 10px;
          margin-bottom: 10px;
        }
        textarea{
          margin-top: 10px;
          margin-bottom: 10px;
        }
        #MintaAccessButton{
          position:absolute;
          z-index:2;
          bottom: 10;
          right: 10;
          width: 70px;
          font-size: 25;
          height: 70px;
          padding-top: 20px;
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
      var data = {},dat = {};;
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
          url:"<?php echo base_url('index.php/AKController/dataEditDiri');?>",
          type:"post",
          dataType:"json",
          success: function(result){
            //result = json.parse(result);
            console.log(result[0]);
            $('#namaEdit').val(result[0].nama);
            $('#emailEdit').val(result[0].email);
            $('#passwordEdit').val(result[0].password);
            $('#alamatEdit').val(result[0].alamat);
            $('#fileFoto').val(result[0].foto);
            $('#tglEdit').val(result[0].tgl);
            $('#jkEdit selected').val(result[0].jk);
          },
          error:function(er,err,xhr){
            console.log(er+'::'+err+'::'+xhr);
          }
        });
        $.ajax({
          url:"<?php echo base_url('index.php/AKController/CekKosAwal');?>",
          type:"post",
          data:"data="+JSON.stringify('EKK'),
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
      function deleteAccessTeman(){
        alert($('#IDACdeleteAccess').val());
        $.ajax({
          url:"<?php echo base_url('index.php/AKController/removeKunciKK')?>",
          type:"post",
          data:"data="+JSON.stringify($('#IDACdeleteAccess').val()),
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
      function mintaAccess(){
        /*dat['RK'] = $('#ListRumKost:selected').val();
        dat['KK'] = $('#ListKamKost:selected').val();
        console.log(dat);*/
        $.ajax({
          url:"<?php echo base_url('index.php/AKController/addMintaAccess')?>",
          type:"post",
          data:"data="+JSON.stringify(dat),
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
                <a class="dropdown-item" href="<?php echo base_url('index.php/AKController/historyAturIndex')?>">History Aktivitas</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Log Out</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <div class="container">
      <form method="post" id="editDiriPost" action="<?php echo base_url('index.php/AKController/');?>">
        <input type="text" class="form-control" id="namaEdit" name="namaEdit" placeholder="Nama" required></input>
        <div class="row">
          <div class="col-6">
            <input type="email" class="form-control" id="emailEdit" name="emailEdit" placeholder="Email" required></input>
          </div>
          <div class="col-6">
            <input type="password" class="form-control" id="passwordEdit" name="passwordEdit" placeholder="Password" required></input>
          </div>
        </div>
        <textarea type="text" class="form-control" id="alamatEdit" name="alamatEdit" placeholder="Alamat" required></textarea>
        <select class="custom-select" id="jkEdit">
          <option selected>Open this select menu</option>
          <option value="1">Pria</option>
          <option value="0">Wanita</option>
        </select>
        <input type="file" class="form-control-file" id="fileFoto">
        <input type="date" class="form-control" id="tglEdit" name="tglEdit" placeholder="Email" required></input>
        <button type="submit" style="width:100%" class="btn btn-success">Save</button>
      </form>
    </div>
    <div class="modal fade" id="EditDiriModal" tabindex="-1" role="dialog" aria-labelledby="">
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
  </body>
</html>
