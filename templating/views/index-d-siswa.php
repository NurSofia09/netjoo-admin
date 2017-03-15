<!DOCTYPE html>
<html class="backend">
<!-- START Head -->
<head>
 <!-- START META SECTION -->
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title><?=$judul_halaman;?></title>
 <meta name="author" content="pampersdry.info">
 <meta name="description" content="Adminre is a clean and flat backend and frontend theme build with twitter bootstrap 3.1.1">
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

 <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url('assets/image/touch/apple-touch-icon-144x144-precomposed.png') ?>">
 <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url('assets/image/touch/apple-touch-icon-114x114-precomposed.png') ?>">
 <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url('assets/image/touch/apple-touch-icon-72x72-precomposed.png') ?>">
 <link rel="apple-touch-icon-precomposed" href="<?= base_url('assets/image/touch/apple-touch-icon-57x57-precomposed.png') ?>">
 <link rel="shortcut icon" href="<?= base_url('assets/image/favicon.ico') ?>">
 <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables/css/jquery.datatables.min.css'); ?>">
 <script src="<?= base_url('assets/sal/sweetalert-dev.js');?>"></script>
 <link rel="stylesheet" href="<?= base_url('assets/sal/sweetalert.css');?>">

 <script type="text/javascript" src="<?= base_url('assets/library/jquery/js/jquery.min.js') ?>"></script>
 <script type="text/javascript" src="<?=base_url('assets/plugins/owl/js/owl.carousel.min.js');?>"></script>
 
 <script>var base_url = '<?php echo base_url() ?>';var halaman = false;</script>
 <!--/ END META SECTION -->

 <!-- START STYLESHEETS -->
 <!-- Plugins stylesheet : optional -->


 <!--/ Plugins stylesheet -->

 <!-- Application stylesheet : mandatory -->
 <link rel="stylesheet" href="<?= base_url('assets/library/bootstrap/css/bootstrap.min.css') ?>">
 <link rel="stylesheet" href="<?= base_url('assets/stylesheet/layout.min.css') ?>">
 <link rel="stylesheet" href="<?= base_url('assets/stylesheet/uielement.min.css') ?>">
 <!--/ Application stylesheet -->
 <!-- END STYLESHEETS -->

 <!-- START JAVASCRIPT SECTION - Load only modernizr script here -->
 <script src="<?= base_url('assets//library/modernizr/js/modernizr.min.js') ?>"></script>
 <!--/ END JAVASCRIPT SECTION -->
</head>
<!--/ END Head -->

<!-- START Body -->
<body>
  <!-- START Template Header -->
  <header id="header" class="navbar navbar-fixed-top">
    <!-- START navbar header -->
    <div class="navbar-header">
     <!-- Brand -->
     <a class="navbar-brand" href="javascript:void(0);">
      <span class="logo-figure"></span>
      <span class="logo-text"></span>
    </a>
    <!--/ Brand -->
  </div>
  <!--/ END navbar header -->

  <!-- START Toolbar -->
  <div class="navbar-toolbar clearfix">
   <!-- START Left nav -->
   <ul class="nav navbar-nav navbar-left">
    <!-- Sidebar shrink -->
    <li class="hidden-xs hidden-sm">
     <a href="javascript:void(0);" class="sidebar-minimize" data-toggle="minimize" title="Minimize sidebar">
      <span class="meta">
       <span class="icon"></span>
     </span>
   </a>
 </li>
 <!--/ Sidebar shrink -->

 <!-- Offcanvas left: This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
 <li class="navbar-main hidden-lg hidden-md hidden-sm">
   <a href="javascript:void(0);" data-toggle="sidebar" data-direction="ltr" rel="tooltip" title="Menu sidebar">
    <span class="meta">
     <span class="icon"><i class="ico-paragraph-justify3"></i></span>
   </span>
 </a>
</li>
<!--/ Offcanvas left -->

<!-- Notification dropdown -->
<li class="dropdown custom" id="header-dd-notification">
 <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
  <span class="meta">
   <span class="icon"><i class="ico-bell"></i></span>
   <span class="hasnotification hasnotification-danger"></span>
 </span>
</a>


<!-- Dropdown menu -->
<div class="dropdown-menu" role="menu">
  <div class="dropdown-header">
   <span class="title">Notification <span class="count"></span></span>
   <span class="option text-right"><a href="javascript:void(0);">Clear all</a></span>
 </div>
 <div class="dropdown-body slimscroll">
   <!-- indicator -->
   <div class="indicator inline"><span class="spinner"></span></div>
   <!--/ indicator -->

   <!-- Message list -->
   <div class="media-list">
    <a href="javascript:void(0);" class="media read border-dotted">
     <span class="media-object pull-left">
      <i class="ico-basket2 bgcolor-info"></i>
    </span>
    <span class="media-body">
      <span class="media-text">Duis aute irure dolor in <span class="text-primary semibold">reprehenderit</span> in voluptate.</span>
      <!-- meta icon -->
      <span class="media-meta pull-right">2d</span>
      <!--/ meta icon -->
    </span>
  </a>

  <a href="javascript:void(0);" class="media read border-dotted">
   <span class="media-object pull-left">
    <i class="ico-call-incoming"></i>
  </span>
  <span class="media-body">
    <span class="media-text">Aliquip ex ea commodo consequat.</span>
    <!-- meta icon -->
    <span class="media-meta pull-right">1w</span>
    <!--/ meta icon -->
  </span>
</a>

<a href="javascript:void(0);" class="media read border-dotted">
 <span class="media-object pull-left">
  <i class="ico-alarm2"></i>
</span>
<span class="media-body">
  <span class="media-text">Excepteur sint <span class="text-primary semibold">occaecat</span> cupidatat non.</span>
  <!-- meta icon -->
  <span class="media-meta pull-right">12w</span>
  <!--/ meta icon -->
</span>
</a>

<a href="javascript:void(0);" class="media read border-dotted">
 <span class="media-object pull-left">
  <i class="ico-checkmark3 bgcolor-success"></i>
</span>
<span class="media-body">
  <span class="media-text">Lorem ipsum dolor sit amet, <span class="text-primary semibold">consectetur</span> adipisicing elit.</span>
  <!-- meta icon -->
  <span class="media-meta pull-right">14w</span>
  <!--/ meta icon -->
</span>
</a>
</div>
<!--/ Message list -->
</div>
</div>
<!--/ Dropdown menu -->
</li>
<!--/ Notification dropdown -->


</ul>
<!--/ END Left nav -->

<!-- START navbar form -->
<div class="navbar-form navbar-left dropdown" id="dropdown-form">
  <form action="" role="search">
   <div class="has-icon">
    <input type="text" class="form-control" placeholder="Search application...">
    <i class="ico-search form-control-icon"></i>
  </div>
</form>
</div>
<!-- START navbar form -->

<!-- START Right nav -->
<ul class="nav navbar-nav navbar-right">
  <!-- Profile dropdown -->
  <li class="dropdown profile">
   <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
    <span class="meta">
     <span class="avatar"></span>
     <span class="text hidden-xs hidden-sm pl5">{namaDepan} {namaBelakang}</span>
     <span class="caret"></span>
   </span>
 </a>
 <ul class="dropdown-menu" role="menu">
  <li><a href="javascript:void(0);"><span class="icon"><i class="ico-user-plus2"></i></span> My Accounts</a></li>
  <li><a href="<?=base_url('index.php/guru/pengaturanProfileguru');?>"><span class="icon"><i class="ico-cog4"></i></span> Profile Setting</a></li>
  <li><a href="javascript:void(0);"><span class="icon"><i class="ico-question"></i></span> Help</a></li>
  <li class="divider"></li>
  <li><a href="<?=base_url('index.php/logout');?>"><span class="icon"><i class="ico-exit"></i></span> Sign Out</a></li>
</ul>
</li>
<!-- Profile dropdown -->


</ul>
<!--/ END Right nav -->
</div>
<!--/ END Toolbar -->
</header>
<!--/ END Template Header -->

<!-- START Template Sidebar (Left) -->
<aside class="sidebar sidebar-left sidebar-menu">
  <!-- START Sidebar Content -->
  <section class="content slimscroll">
   <h5 class="heading">Main Menu</h5>
   <!-- START MENU -->
   <ul class="topmenu topmenu-responsive" data-toggle="menu">
    <li >
     <a href="<?= base_url('index.php/siswa') ?>">
      <span class="figure"><i class="ico-trophy"></i></span>
      <span class="text">Dashboard</span>
    </a>
  </li>

  <li>
    <a href="<?= base_url('index.php/welcome') ?>">
      <span class="figure"><i class="ico-home7"></i></span>
      <span class="text">Home</span>
    </a>
  </li>

  <li>
   <a href="">
    <span class="figure"><i class="ico-bubble-video-chat"></i></span>
    <span class="text">Video</span>
  </a>
</li>

<li>
 <a href="<?= base_url('index.php/Konsultasi') ?>">
  <span class="figure"><i class="ico-bubbles8"></i></span>
  <span class="text">Konsultasi</span>
</a>
</li>

<li>
 <a href="<?= base_url('index.php/tryout') ?>">
  <span class="figure"><i class="ico-pencil5"></i></span>
  <span class="text">Tryout</span>
</a>
</li>
<li>
 <a href="<?= base_url('index.php/tesonline/daftarlatihan') ?>">
  <span class="figure"><i class="ico-notebook"></i></span>
  <span class="text">Latihan</span>
</a>
</li>

<li>
 <a data-target="#components" data-toggle="submenu" data-parent=".topmenu">
  <span class="figure"><i class="ico-stack"></i></span>
  <span class="text">Learning Line</span>
  <span class="arrow"></span>

  <ul id="components" class="submenu collapse in" style="height: auto;">
    <li>
      <a href="component-animation.html">
      <span class="text"><a href="<?=base_url("linetopik/lineMapel/1") ?>">SD</a></span>
      </a>
    </li>

        <li>
      <a href="component-animation.html">
      <span class="text"><a href="<?=base_url("linetopik/lineMapel/2") ?>">SMP</a></span>
      </a>
    </li>

        <li>
      <a href="component-animation.html">
      <span class="text"><a href="<?=base_url("linetopik/lineMapel/3") ?>">SMA IPS</a></span>
      </a>
    </li>

        <li>
      <a href="component-animation.html">
      <span class="text"><a href="<?=base_url("linetopik/lineMapel/4") ?>">SMA IPA</a></span>
      </a>
    </li>

  </ul>
</a>
</li>


<li>
 <a href="<?= base_url('index.php/modulonline/allmodul') ?>">
  <span class="figure"><i class="ico-download-alt"></i></span>
  <span class="text">Edu Drive</span>
</a>
</li>

</ul>
<!--/ END Template Navigation/Menu -->
</section>
<!--/ END Sidebar Container -->
</aside>
<!--/ END Template Sidebar (Left) -->

<!-- START Template Main -->
<section id="main" role="main">
  <!-- START Template Container -->
  <div class="container-fluid">
   <!-- Page Header -->
   <div class="page-header page-header-block">
    <div class="page-header-section">
     <h4 class="title semibold"><?=$judul_halaman;?></h4>
   </div>

 </div>

 <?php
 foreach ($files as $file) {
  include $file;
}
?>

<!-- Page Header -->
</div>
<!--/ END Template Container -->

<!-- START To Top Scroller -->
<a href="#" class="totop animation" data-toggle="waypoints totop" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="50%"><i class="ico-angle-up"></i></a>
<!--/ END To Top Scroller -->

</section>
<!--/ END Template Main -->



<!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
<!-- Library script : mandatory -->
<script type="text/javascript" src="<?= base_url('assets/library/jquery/js/jquery-migrate.min.j') ?>s"></script>
<script type="text/javascript" src="<?= base_url('assets/library/bootstrap/js/bootstrap.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/library/core/js/core.min.js') ?>"></script>
<!--/ Library script -->

<!-- App and page level script -->
<script type="text/javascript" src="<?= base_url('assets/plugins/sparkline/js/jquery.sparkline.min.js') ?>"></script><!-- will be use globaly as a summary on sidebar menu -->
<script type="text/javascript" src="<?= base_url('assets/javascript/app.min.js') ?>"></script>

<!--datatable-->
<script type="text/javascript" src="<?= base_url('assets/plugins/datatables/js/jquery.datatables.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/plugins/datatables/tabletools/js/tabletools.min.js') ?>"></script>
<!--<script type="text/javascript" src="<?= base_url('assets/plugins/datatables/tabletools/js/zeroclipboard.js') ?>"></script>-->
<script type="text/javascript" src="<?= base_url('assets/plugins/datatables/js/jquery.datatables-custom.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/javascript/tables/datatable.js') ?>"></script>

</body>
</htmlf>