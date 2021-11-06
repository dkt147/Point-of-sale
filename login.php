<!DOCTYPE html>
<html>
<head>
    <title>HnHPOS</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="assets/favicon.ico" rel="shortcut icon">
    <link href="assets/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" type="text/css">
    <link href="assets/bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="assets/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="assets/bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="assets/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="assets/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="assets/css/main1073.css" rel="stylesheet">
    <link href="assets/icon_fonts_assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href=assets/css/style.css>
    <!-- DATATABLE -->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<!--     <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.jqueryui.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.jqueryui.min.css"> -->

    <!-- Custom_Style -->
    <link rel="stylesheet" href="assets/css/CustomStyle.css">

</head>    

<body id="pages" class="full-layout no-nav-left no-nav-right  nav-top-fixed background-login     responsive remove-navbar login-layout   clearfix" data-active="pages "  data-smooth-scrolling="1">     
  <div class="vd_body">
    <div class="content">
      <div class="container"> 
        <!-- Middle Content Start -->
        <div class="vd_content-wrapper">
          <div class="vd_container">
            <div class="vd_content clearfix">
              <div class="vd_content-section clearfix">
                <div class="vd_login-page">
                  <div class="heading clearfix">
                  </div>
                  <div class="panel widget">
                    <div class="panel-body">
                      <div class="heading clearfix">
                        <div class="loginLogo">
                          <h2 class="mgbt-xs-5"><img src="assets/img/logo-big-white.png" alt="logo" style=""></h2>
                        </div>
                        <h4 class="text-center font-semibold text-white">LOGIN TO YOUR ACCOUNT</h4>
                      </div>
                      <div class="login-icon entypo-icon"> <i class="fa fa-key"></i> </div>
                      <form class="form-horizontal" id="login-form" action="#" role="form"> 
                        <div class="row">
                          <div class="col-md-12">
                              <div class="form-group text-white">
                                <label>Email</label>
                                <input id="email" name="email" placeholder="Email" value="" class="form-control">
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group text-white">
                                <label>Password</label>
                                <input type="password" id="password" placeholder="*********" value="" class="form-control">
                              </div>
                          </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-md-12 text-center mgbt-xs-5">
                            <a href="index_2.php" type="submit" id="save" name="save" value="Save" class="text-white btn btn-primary btn-block btn-flat my-3">Login</a>
                          </div>
                          <div class="col-md-12">
                            <div class="row">
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="vd_checkbox text-white">
                                  <input type="checkbox" id="checkbox-1" value="1">
                                  <label for="checkbox-1"> Remember me</label>
                                </div>
                              </div>
                              <div class="col-md-6 col-sm-6 col-xs-12 forgetPass text-right">
                                <div class=" text-white"> <a href="pages-forget-password.html">Forget Password? </a> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <!-- Panel Widget -->
                  <div class="register-panel text-center  text-white font-semibold"> 
                    <a href="pages-register.html">CREATE AN ACCOUNT<span class="menu-icon">
                      <i class="fa fa-angle-double-right fa-fw"></i></span>
                    </a> 
                  </div>
                </div> <!-- vd_login-page --> 
              </div> <!-- .vd_content-section --> 
            </div> <!-- .vd_content --> 
          </div> <!-- .vd_container --> 
        </div> <!-- .vd_content-wrapper --> 
        <!-- Middle Content End --> 
      </div> <!-- .container --> 
    </div> <!-- .content -->

    <!-- Footer Start -->
    <!-- <footer class="footer-2 p-2"  id="footer">      
      <div class="vd_bottom ">
        <div class="container">
          <div class="row">
            <div class=" col-xs-12">
              <div class="copyright text-center text-white">
                Copyright &copy; 2020 HnH Techs & Solutions. All Rights Reserved 
              </div>
            </div>
          </div>row
        </div>container
      </div>
    </footer> -->
    <!-- Footer END -->

  </div>

<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="assets/bower_components/moment/moment.js"></script>
<script src="assets/bower_components/chart.js/dist/Chart.min.js"></script>
<script src="assets/bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="assets/bower_components/ckeditor/ckeditor.js"></script>
<script src="assets/bower_components/bootstrap-validator/dist/validator.min.js"></script>
<script src="assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="assets/bower_components/dropzone/dist/dropzone.js"></script>
<script src="assets/bower_components/editable-table/mindmup-editabletable.js"></script>

<script src="assets/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="assets/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
<script src="assets/bower_components/tether/dist/js/tether.min.js"></script>
<script src="assets/bower_components/bootstrap/js/dist/util.js"></script>
<script src="assets/bower_components/bootstrap/js/dist/alert.js"></script>
<script src="assets/bower_components/bootstrap/js/dist/button.js"></script>
<script src="assets/bower_components/bootstrap/js/dist/carousel.js"></script>
<script src="assets/bower_components/bootstrap/js/dist/collapse.js"></script>
<script src="assets/bower_components/bootstrap/js/dist/dropdown.js"></script>
<script src="assets/bower_components/bootstrap/js/dist/modal.js"></script>
<script src="assets/bower_components/bootstrap/js/dist/tab.js"></script>

<script src="assets/bower_components/bootstrap/js/dist/tooltip.js"></script>
<script src="assets/bower_components/bootstrap/js/dist/popover.js"></script>
<script src="assets/js/main1073.js"></script>
<script type="text/javascript" src="assets/js/jquery.qrcode.js"></script>
<script type="text/javascript" src="assets/js/qrcode.js"></script>
<script src="assets/js/jszip.min.js"></script>
<script src="assets/js/pdfmake.js"></script>
<script src="assets/js/vfs.js"></script>

<!-- SALES -->
<script src="assets/js/sales/mousetrap.js"></script>
<script src="assets/js/sales/offline.js"></script>
<script src="assets/js/sales/locker.js"></script>
<!-- <script src="assets/js/sales/jquery-1.9.1.js"></script> -->
<!-- <script src="assets/js/sales/salesjs.js"></script> -->
<script src="assets/js/sales/jquery-ui.js"></script>
<script src="assets/js/sales/code39.js"></script>
<script src="assets/js/sales/jquery.scannerdetection.js"></script>
<script src="assets/js/sales/select2.js"></script>
<script src="assets/js/sales/pouchdb-6.4.3.js"></script>
<script src="assets/js/sales/items.js"></script>
<script src="assets/js/sales/categories.js"></script>
<script src="assets/js/sales/Order.js"></script>
<script src="assets/js/sales/last_info.js"></script>
<script src="assets/js/sales/promotions.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<!-- SALES -->
<!-- DATATABLE -->
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

</body>


</html>