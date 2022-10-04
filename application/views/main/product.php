<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>OTOP | Product</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assest/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assest/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assest/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assest/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- my style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assest/dist/style/css/style.css">
  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini sidebar-collapse layout-fixed layout-navbar-fixed">
<!-- Site wrapper -->
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light" style="background:	#ff851b;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url() ?>" class="nav-link text-white">OTOP</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link text-white">ติดต่อ</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3 elevation-1" action="<?php echo base_url();?>Product" method="post">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" name="keyword" type="search" placeholder="ค้นหา" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-light btn-navbar text-white " type="submit">
            <i class="fas fa-search" style="color:#ff851b;"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Notifications Dropdown Menu -->
          <?php if (isset($_SESSION['buyer_id']) && $_SESSION['display_name_buy'] != "") { ?>
          <li class="nav-item dropdown">
            <a class="nav-link text-white" data-toggle="dropdown" href="#">
              <i class="far fa-bell"></i>
              <span class="badge badge-danger navbar-badge">2</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <a href="<?php echo base_url();?>Member/Alertorderadmin">
                <span class="dropdown-item dropdown-header">ดูข้อความทั้งหมด</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="<?php echo base_url() ?>Member/Alertorder" class="dropdown-item">
                <i class="fas fa-user-tag mr-2"></i> ผู้ขาย 1 ข้อค้วาม
              </a>
              <a href="<?php echo base_url() ?>Member/Alertorderadmin" class="dropdown-item">
                <i class="fas fa-user-tie mr-2"></i> ระบบ 1 ข้อค้วาม
              </a>
            </div>
          </li>
        <?php } else { ?>

        <?php } ?>

      <li class="nav-item">
        <a class="nav-link text-white" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-shopping-cart"></i>
					<span class="badge badge-success navbar-badge"><?php echo count($showbasket);?></span>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?php echo base_url() ?>Home" class="brand-link">
        <img src="<?php echo base_url() ?>assest/dist/img/logo/logo-otop.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">OTOP นวัตวิถี</span>
      </a>

      <?php if (isset($_SESSION['buyer_id']) && $_SESSION['display_name_buy'] != "") { ?>
        <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url() ?>assest/dist/img/admin-icon-png-1.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?php echo base_url(); ?>Member" class="d-block"><?php echo $buyer->display_name_buy ;?> (ผู้ซื้อ)</a>
        </div>
      </div>
      <?php } else { ?>
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url() ?>assest/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="<?php echo base_url(); ?>login2/member" class="d-block">เข้าสู่ระบบ</a>
        </div>
      </div>
      <?php } ?>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="https://www.the-qrcode-generator.com/scan" class="nav-link">
                <i class="nav-icon fas fa-qrcode"></i>
                <p>
                  QRCODE
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>News" class="nav-link">
                <i class="nav-icon fas fa-audio-description"></i>
                <p>
                  ข่าวสาร
                </p>
              </a>
            </li>


            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Product" class="nav-link">
                <i class="nav-icon fas fa-shopping-bag"></i>
                <p>
                  สินค้า
                  <span class="right badge badge-info"><?php echo count($showproduct);?></span>
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Store" class="nav-link">
                <i class="nav-icon fas fa-store"></i>
                <p>
                  ร้านค้า
                  <span class="right badge badge-info"><?php echo count($showsell);?></span>
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Status" class="nav-link">
                <i class="nav-icon fas fa-truck"></i>
                <p>
                  ติดตามสินค้า
                  <span class="right badge badge-warning">Kerry Express</span>
                </p>
              </a>
            </li>
            <?php if (isset($_SESSION['buyer_id']) && $_SESSION['display_name_buy'] != "") { ?>
            <li class="nav-item">
            <a href="<?php echo base_url('login2/logout'); ?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                ออกจากระบบ
              </p>
            </a>
          </li>
            <?php } else { ?>

            <?php } ?>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- หมวดหมู่ -->
    <section class="content mt-1">
      <!-- เเทบรายการ -->
      <div class="row">
        <div class="col-sm-12 mt-1">
          <h3><i class="fas text-info fa-store mx-2"></i>หมวดหมู่สินค้า</h3>
          <hr style="border: 1px solid #000;">
        </div>
      </div>

      <div class="col-12">
        <div class="d-flex flex-nowrap overflow-auto">

        <div class="col-6 col-lg-2">
          <div class="text-center">
            <a href="#All+?"  onclick="openCity(event, 'one')" id="defaultOpen" class="tablinks">
              <p class="py-2 rounded text-white text-center" style="background:#ff851b;">
                <i class="fas fa-border-all mr-1" style="font-size:2em;"></i><br>
                ทั้งหมด</p>
            </a>
          </div>
        </div>


        <?php foreach ($showgrop as $item) { ?>
              <div class="col-6 col-lg-2">
                <div class="text-center">
                  <a href="#Groube<?php echo $item->id_grop; ?>+?" onclick="openCity(event, 'T<?php echo $item->id_grop; ?>') " class="tablinks">
                    <p class="py-2 rounded text-white text-center" style="background:#ff851b;">
                      <i class="<?php echo $item->grop_logo_img; ?>" style="font-size:2em;"></i><br>
                      <?php echo $item->grop_name; ?></p>
                  </a>
                </div>
              </div>
            <?php } ?>

    </section>
    <!-- /.content -->

      <div id="one" class="tabcontent">
      <section class="content mt-1">

        <div class="row">
          <?php foreach ($showproduct as $show) { ?>
            <?php if ($show->number == 0) { ?>
              <div class="col-lg-2 col-md-3 col-sm-4 col-6 mt-3">
                <a href="<?php echo base_url('Product/Product_view/') . $show->id_product; ?>">
                  <div class="card bg-white rounded-lg elevation-4" data-aos="zoom-in" style="width: 100%;">
                    <div class="ribbon-wrapper ribbon-lg">
                      <div class="ribbon bg-danger text-lg">
                        ของหมด
                      </div>
                    </div>
                    <img src="<?php echo base_url('assest/img/otop'); ?>/<?php echo $show->img_otop; ?>" class="card-img-top rounded-top" style="height:9rem;object-fit:cover;" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $show->name_product; ?></h5>
                      <p class="card-text"><?php echo $show->price; ?> <i class="fab text-warning text-lg fa-bitcoin ml-2"></i></p>
                      <p class="card-text">จำนวนที่ลงขาย <?php echo $show->number; ?> ชิ้น</p>
                    </div>
                  </div>
                </a>
              </div><!-- ส่วนกล่องสินค้า -->
              <?php } else { ?>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mt-3">
                  <a href="<?php echo base_url('Product/Product_view/') . $show->id_product; ?>">
                    <div class="card bg-white rounded-lg elevation-4" data-aos="zoom-in" style="width: 100%;">
                      <img src="<?php echo base_url('assest/img/otop'); ?>/<?php echo $show->img_otop; ?>" class="card-img-top rounded-top" style="height:9rem;object-fit:cover;" alt="...">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $show->name_product; ?></h5>
                        <p class="card-text"><?php echo $show->price; ?> <i class="fab text-warning text-lg fa-bitcoin ml-2"></i></p>
                        <p class="card-text">จำนวนที่ลงขาย <?php echo $show->number; ?> ชิ้น</p>
                      </div>
                    </div>
                  </a>
                </div><!-- ส่วนกล่องสินค้า -->
                <?php } ?>
          <?php } ?>
          </div>

        </section>
        </div>

    <?php foreach ($showgrop as $get) { ?>
    <div id="T<?php echo $get->id_grop; ?>" class="tabcontent">
      <section class="content mt-1">
      <div class="row">
      <?php foreach ($showproduct as $show) { ?>

        <?php if ($show->id_grop == $get->id_grop) { ?>
          <?php if ($show->number == 0) { ?>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mt-3">
              <a href="<?php echo base_url('Product/Product_view/') . $show->id_product; ?>">
                <div class="card bg-white rounded-lg elevation-4" data-aos="zoom-in" style="width: 100%;">
                  <div class="ribbon-wrapper ribbon-xl">
                    <div class="ribbon text-lg bg-danger">
                      ของหมด
                    </div>
                  </div>
                  <img src="<?php echo base_url('assest/img/otop'); ?>/<?php echo $show->img_otop; ?>" class="card-img-top rounded-top" style="height:9rem;object-fit:cover;" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $show->name_product; ?></h5>
                    <p class="card-text"><?php echo $show->price; ?> <i class="fab text-warning text-lg fa-bitcoin ml-2"></i></p>
                    <p class="card-text">จำนวนที่ลงขาย <?php echo $show->number; ?> ชิ้น</p>
                  </div>
                </div>
              </a>
            </div><!-- ส่วนกล่องสินค้า -->
            <?php } else { ?>
              <div class="col-lg-2 col-md-3 col-sm-4 col-6 mt-3">
                <a href="<?php echo base_url('Product/Product_view/') . $show->id_product; ?>">
                  <div class="card bg-white rounded-lg elevation-4" data-aos="zoom-in" style="width: 100%;">
                    <img src="<?php echo base_url('assest/img/otop'); ?>/<?php echo $show->img_otop; ?>" class="card-img-top rounded-top" style="height:9rem;object-fit:cover;" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $show->name_product; ?></h5>
                      <p class="card-text"><?php echo $show->price; ?> <i class="fab text-warning text-lg fa-bitcoin ml-2"></i></p>
                      <p class="card-text">จำนวนที่ลงขาย <?php echo $show->number; ?> ชิ้น</p>
                    </div>
                  </div>
                </a>
              </div><!-- ส่วนกล่องสินค้า -->
              <?php } ?>
      <?php } else { ?>

        <?php } ?>
      <?php } ?>

      </div>
      </section>
    </div>
  <?php } ?>


  </div>
  <!-- /.content-wrapper -->

   <!-- ตระกล้าสินค้า -->
    <aside class="control-sidebar control-sidebar-light">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>ตระกล้าสินค้า <span class="right badge badge-success"><?php echo count($showbasket);  ?></span> </h5>
        <hr style="border:1px solid #000;">
        <div class="row">
          <!-- สินค้า -->

          <?php $totell= 0; foreach ($showbasket as $show) {

            $totel1 = $show->number_basket;
            $totel2 = $show->price;
            $totel3 = $totel1 * $totel2;
            $kerrybatket = $show->kerry_price_basket;
            $totellkerrybasket = $totel3 + $kerrybatket;
            $totell = $totellkerrybasket + $totell;?>

            <div class="col-4">
              <img src="<?php echo base_url('assest/img/otop'); ?>/<?php echo $show->img_otop; ?>" style="height:4.5rem;object-fit:cover;" alt="...">
            </div>
            <div class="col-5">
              <?php echo $show->name_product; ?><br>
              <?php echo $show->number_basket; ?> รายการ<br>
              <?php echo $show->kerry_price_basket;?> ราคาส่ง
              <?php echo $show->price; ?>.-
            </div>
            <div class="col-3">
              <a href="<?php echo base_url('Cart/delbasket/') . $show->id_basket; ?>" type="button" class="btn btn-danger"><i class="fas fa-times"></i></a>
            </div>
          <?php } ?>
        </div>
        <hr style="border:1px solid #000;">
        <div class="row">
          <div class="col-6">
            <a href="<?php echo base_url() ?>Cart" class="btn btn-success">ชำระสินค้า</a>
          </div>
          <div class="col-6">
            <p class="py-1">รวม :<?php echo $totell; ?> .-<p>
          </div>
        </div>
      </div>
    </aside>
    <!-- /.control-sidebar -->


  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="http://adminlte.io">CPE-Project</a>.</strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url() ?>assest/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url() ?>assest/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>assest/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url() ?>assest/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url() ?>assest/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url() ?>assest/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assest/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url() ?>assest/dist/js/pages/dashboard.js"></script>
<!-- AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init({
  duration:1000
});

function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
// เอา element ใน id="defaultOpen" ขึ้นก่อน
document.getElementById("defaultOpen").click();
</script>
</body>
</html>
