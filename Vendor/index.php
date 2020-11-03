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
    <!-- main container -->
    <main>
      <div class='container'>
      <!-- made a chart about account customer today-->
        <div>
        <span class='today_view'>
            今日總覽</span> 
        </div>
        <!--  -->
        <div class='main_cards'id='today-view'>
          <div class='card'>
            <div class='visitors-card'>
              <div class='card_left'>
                <i class="fas fa-user fa-5x"></i>
                <p>Visitors</p>
              </div>
              <div class="card_inner">
                <span id='VisitorNumber'>123</span><span> 人</span>
              </div>
            </div>
          </div>
          <div class='card'>
            <div class='revenue-card'>
              <div class=card_left>
                <i class="fas fa-money-check-alt fa-5x"></i>
                <p>Revenue</p>
              </div>
            <div class="card_inner">
              <span id='RevenueNumber'>10,000</span><span> $</span>
            </div>
            </div>
            
          </div>
          <div class='card'>
            <div class='sales-card'>
              <div class='card_left'>
                <i class="fas fa-coffee fa-5x"></i>
                <p>Sales</p>
              </div>
              <div class="card_inner">
                <span id='SalesNumber'>789</span><span> 杯</span>
              </div>
            </div>
          </div>

        </div>
        <div class="charts">
          <canvas id='chart'></canvas>
        </div>
      </div>
    </main>
    <div id='sidenav'>
        <a href="#"><i class="fa fa-home"></i> Home</a>
        <a href="#"><i class="fa fa-wrench"></i> Services</a>
        <a href="#"><i class="fa fa-user"></i> Clients</a>
        <a href="#"><i class="fa fa-envelope"></i> Contact</a>
    </div>

    <!-- image viewer -->

    <!-- footer pusher -->
    <!--<footer class="footer flex-container">
    <div class="footer-copyright">
      <div class="flex-item" id="footer">
        
        <i class="fas fa-heart"></i> by
        <a class="orange-text text-lighten-3" target="_BLANK" href="#">情感咖啡攤</a>
        &nbsp; | &nbsp;
        <a class="orange-text text-lighten-3" target="_BLANK" href="https://github.com/tupleblog/face-classification-js">
          <i class="fab fa-github"></i> </a>
      </div>
    </div>
  </footer>-->
  </div>

  

  <!-- UI scripts -->
  <script src="../jquery/jquery-2.1.1.min.js"></script>
  <script src="../jquery/materialize.min.js"></script>
  <script type="text/javascript" src="../jquery/adapter.min.js"></script>
  <script type="text/javascript" src="../jquery/vue.min.js"></script>
  <script type="text/javascript" src="../iconJS/all.min.js"></script>
  <!-- tf -->
  <!-- utils -->
  <script src="../jquery/Chart.bundle.min.js"></script>
  <script src="../jquery/sweetalert2.all.min.js"></script>
  <!--Local js-->
  <script src="../js/util.js"></script>
  <!-- chart -->
  <script src='VendorReact.js'></script>

  <script type="text/javascript">
    $(function() {
      sales_chart();
});
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
