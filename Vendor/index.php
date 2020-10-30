<!DOCTYPE html>
<html lang="en">

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <meta property="og:title" content="Face Classification JS">
  <meta property="og:description" content="ตรวจจับอารมณ์และเพศของใบหน้าบนเว็บบราวเซอร">
  <meta property="og:url" content="https://tupleblog.github.io/face-classification-js/">
  <meta property="og:site_name" content="face-classification-js">
  <meta property="og:image" content="https://tupleblog.github.io/face-classification-js/images/face_classification_og.png">
  <title>Emotional Coffee Vendor manage System</title>

  <!-- CSS -->
  <link href="../css/style.css" rel="stylesheet">
  <link href="Vendor.css" rel="stylesheet">
  <!--ReactJS-->
  <script src="https://unpkg.com/react@16/umd/react.production.min.js"></script>
  <script src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js"></script>
  <script src="https://unpkg.com/babel-standalone@6.15.0/babel.min.js"></script>
</head>
<body id='body_vendor'>
  <!-- sticky footer -->
  <div class="wrapper" id=wrapper>
    <!-- top nav bar -->
    <div class='topnav'>
      <div class='centernav'>
        <a href="#home">店家管理系統</a>
      </div>
      <div class='rightnav'>
        <a href='../index.php'><i class="fas fa-coffee"></i></a>
      </div>
      <a href='#home'></a>
    </div>
    <!--Left navbar-->
    <div id='sidenav'>
        <a href="#"><i class="fa fa-home"></i> Home</a>
        <a href="#"><i class="fa fa-wrench"></i> Services</a>
        <a href="#"><i class="fa fa-user"></i> Clients</a>
        <a href="#"><i class="fa fa-envelope"></i> Contact</a>
    </div>
    <!-- main container -->
    <div class='container'>
      <!-- made a chart about account customer today-->
      <div>
        <span class='today_view'>
          今日總覽</span>
      </div>
      <!--  -->
      <div class='row'id='today-view'>
        <div class='col-4 col-s-3'>
          <div class='visitors-card'style='background-color:#0275d8;padding:10px;'>
            <i class="fas fa-user fa-5x" style='color:white;'></i>
              <span>Visitor</span>
          </div>
        </div>
        <div class='col-4 col-s-3'>
          <div class='revenue-card'style='background-color:#f0ad4e;padding:10px;'>
          <i class="fas fa-money-check-alt fa-5x"style='color:white;'></i>
            <span>Revenue</span>
          </div>
          
        </div>
        <div class='col-3 col-s-3'>
          <div class='sales-card'style='background-color:#5cb85c;padding:10px;'>
          <i class="fas fa-coffee fa-5x"style='color:white;'></i>
            <span>sales</span>
          </div>
        </div>

      </div>
    </div>

      <!-- image viewer -->

    <!-- footer pusher -->

  </div>

  <footer class="footer flex-container">
    <div class="footer-copyright">
      <div class="flex-item" id="footer">
        
        <i class="fas fa-heart"></i> by
        <a class="orange-text text-lighten-3" target="_BLANK" href="#">情感咖啡攤</a>
        &nbsp; | &nbsp;
        <a class="orange-text text-lighten-3" target="_BLANK" href="https://github.com/tupleblog/face-classification-js">
          <i class="fab fa-github"></i> </a>
      </div>
    </div>
  </footer>

  <!-- UI scripts -->
  <script src="../jquery/jquery-2.1.1.min.js"></script>
  <script src="../jquery/materialize.min.js"></script>
  <script type="text/javascript" src="../jquery/adapter.min.js"></script>
  <script type="text/javascript" src="../jquery/vue.min.js"></script>
  <script type="text/javascript" src="../iconJS/all.min.js"></script>
  <!-- tf -->
  <script src="Tensorflow/tfjs@0.9.js"></script>
  <!-- utils -->
  <script src="js/tracking-min.js"></script>
  <script src="js/face-min.js"></script>
  <script src="jquery/Chart.bundle.min.js"></script>
  <script src="jquery/sweetalert2.all.min.js"></script>
  <!--Local js-->
  <script src="js/util.js"></script>
  <script src="js/model_emotion.js"></script>
  <script src="js/model_gender.js"></script>
  <script src="js/webcam.js"></script>
  <script src="js/jquery.qrcode.min.js"></script>
  <script src='js/QRcodeToSQL.js'></script>

  <script type="text/javascript">
    flag=0;
    $(function() {
      flag=0;
  // Handler for .ready() called.
  $("#show_Price").hide(500)

});

function btnc(argument) {
  // body...
  if(flag==0) 
    {
      flag=1;
    $("#show_Price").show(500)
  }
  else
  {
    flag=0;
    $("#show_Price").hide(500)
    location.reload();

  }
}
function ToQRcodeScanner(){
  //window.location = "QRcodeScanner.php";
  window.open('QRcodeScanner.php','QRcodeScanner',config='height=850,width=1280,left=280')
}
function QRcodeWindow(){
  window.open('QRcode.html','QRcode',config='height=540,width=540,left=720,top=250')
}
</script>
  <style>
  #card-item-container {
    visibility: visible;
  }
  #image-container {
    position: relative;
  }
  </style>
</body>

</html>
