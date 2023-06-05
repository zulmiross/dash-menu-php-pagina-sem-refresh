<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Meta -->
  <meta name="description" content="">
  <meta name="author" content="Themepixels">

  <!-- Favicon -->
  <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png"> -->

  <title>DashNav - Dashboard Sidebar Navigation</title>

  <!-- Vendor CSS -->
  <link href="lib/remixicon/fonts/remixicon.css" rel="stylesheet">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.min.css">
</head>

<body class="animate">
  <!-- sidebar -->
  <div class="sidebar">
    <div class="sidebar-header">
      <a href="#" class="sidebar-logo"><span></span></a>
      <a href="#" class="sidebar-logo-text">dash<span>nav</span></a>
    </div>
    <!-- sidebar -->
    <!-- sidebar-body -->
    <div class="sidebar-body">
      <ul class="nav-sidebar style-two">
        <li class="nav-item"><a href="" onclick="loadPage('home')" class="nav-link"><i data-feather="home"></i><span>Home</span></a></li>
      </ul>
      <hr>
      <ul class="nav-sidebar style-two">
        <li class="nav-item active show">
          <a href="" class="nav-link with-sub"><i data-feather="package"></i><span>Menu1</span></a>
          <nav class="nav-sub">
            <a href="" onclick="loadPage('SubMenu1_1')" class="sub-link active">SubMenu1_1</a>
            <a href="" onclick="loadPage('SubMenu1_2')" class="sub-link">SubMenu1_2</a>
            <a href="" onclick="loadPage('SubMenu1_3')" class="sub-link">SubMenu1_3</a>
            <a href="" onclick="loadPage('SubMenu1_4')" class="sub-link">SubMenu1_4</a>
          </nav>
        </li>
        <li class="nav-item"><a href="" onclick="loadPage('Menu2')" class="nav-link"><i data-feather="calendar"></i><span>Menu2</span></a></li>
      </ul>
      <hr>
      <ul class="nav-sidebar  style-two">
        <li class="nav-item">
          <a href="" class="nav-link with-sub"><i data-feather="users"></i><span>Menu3</span></a>
          <nav class="nav-sub">
            <a href="" onclick="loadPage('SubMenu3_1')" class="sub-link">SubMenu3_1</a>
            <a href="" onclick="loadPage('SubMenu3_2')" class="sub-link">SubMenu3_2</a>
          </nav>
        </li>
      </ul>
    </div>
    <!-- sidebar-body -->
    <div class="sidebar-footer">

      <a href="" id="btnSkin" class="footer-menu"><i class="ri-moon-fill"></i></a>

    </div><!-- avatar-body -->
  </div><!-- sidebar-footer -->

  </div>
  <!-- sidebar -->

  <!-- content -->
  <div class="content">
    <!-- content-header -->
    <div class="content-header">
      <a id="contentMenu" href="#" class="content-menu d-none d-lg-flex"><i data-feather="menu"></i></a>
      <a id="mobileMenu" href="#" class="content-menu d-lg-none"><i data-feather="menu"></i></a>
    </div>
    <!-- content-header -->
    <!-- content -->
    <div class="content-body">
      <label class="content-label">Título da página</label>
      <div id="loadPage">
      </div>
      <!-- <label class="content-label">Navigation Skins</label>
      <nav id="navigationSkins" class="nav">
        <a href="" data-skin="base" class="nav-link active">Base</a>
        <a href="" data-skin="dark" class="nav-link">Dark</a>
      </nav> -->
    </div>
  </div><!-- content -->


  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/feathericons/feather.min.js"></script>
  <script src="lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>

  <script src="assets/js/script.js"></script>


  <script>
    $(document).ready(function() {
      loadPage('home');
    })

    function loadPage(a) {

      var loadPage = document.querySelector('#loadPage');

      var pag = new XMLHttpRequest();

      pag.onreadystatechange = () => {
        if (pag.readyState == 4 && pag.status == 200)
          loadPage.innerHTML = pag.responseText;
      }
      pag.open('GET', `../pages/${a}.php`);
      pag.send();
    }
  </script>

</body>

</html>