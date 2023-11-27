<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Enzo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Enzo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('layanan/images/favicon/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('layanan/images/favicon/favicon.png')}}" type="image/x-icon">
    <title>Gerak Cepat | Digitalisasi Layanan Manajemen BMN</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('layanan/css/vendors/font-awesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('layanan/css/vendors/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('layanan/css/vendors/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('layanan/css/vendors/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('layanan/css/vendors/feather-icon.css')}}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{asset('layanan/css/vendors/scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('layanan/css/vendors/select2.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('layanan/css/vendors/scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('layanan/css/vendors/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('layanan/css/vendors/chartist.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('layanan/css/vendors/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('layanan/css/vendors/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('layanan/css/vendors/prism.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('layanan/css/vendors/date-picker.css')}}">
    
    @stack('style')
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('layanan/css/vendors/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('layanan/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('layanan/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('layanan/css/responsive.css')}}">
  </head>
  <body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="loader"></div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-header">
        <div class="header-wrapper row m-0">
          <form class="form-inline search-full col" action="#" method="get">
            <div class="form-group w-100">
              <div class="Typeahead Typeahead--twitterUsers">
                <div class="u-posRelative">
                  <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search In Enzo .." name="q" title="" autofocus>
                  <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
                </div>
                <div class="Typeahead-menu"></div>
              </div>
            </div>
          </form>
          <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="{{asset('layanan/images/logo/login.png')}}" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
          </div>
          <!-- <div class="left-header col horizontal-wrapper ps-0">
            <div class="input-group">
              <div class="input-group-prepend"><span class="input-group-text mobile-search"><i class="fa fa-search"></i></span></div>
              <input class="form-control" type="text" placeholder="Search Here........">
            </div>
          </div> -->
          <div class="nav-right col-8 pull-right right-header p-0">
            <ul class="nav-menus">             
              <li class="onhover-dropdown">
                <div class="notification-box"><i class="fa fa-bell-o"> </i><span class="badge rounded-pill badge-primary">4                                </span></div>
                <ul class="notification-dropdown onhover-show-div">
                  <li><i data-feather="bell">            </i>
                    <h6 class="f-18 mb-0">Notifications</h6>
                  </li>
                  <li><a href="email_read.html">
                      <p><i class="fa fa-circle-o me-3 font-primary"> </i>Delivery processing <span class="pull-right">10 min.</span></p></a></li>
                  <li><a href="email_read.html">
                      <p><i class="fa fa-circle-o me-3 font-success"></i>Order Complete<span class="pull-right">1 hr</span></p></a></li>
                  <li><a href="email_read.html">
                      <p><i class="fa fa-circle-o me-3 font-info"></i>Tickets Generated<span class="pull-right">3 hr</span></p></a></li>
                  <li><a href="email_read.html"> 
                      <p><i class="fa fa-circle-o me-3 font-danger"></i>Delivery Complete<span class="pull-right">6 hr</span></p></a></li>
                  <li><a class="btn btn-primary" href="email_read.html">Check all notification</a></li>
                </ul>
              </li>
              <li class="onhover-dropdown"><i class="fa fa-comment-o"></i>
                <ul class="chat-dropdown onhover-show-div">
                  <li><i data-feather="message-square"></i>
                    <h6 class="f-18 mb-0">Message Box                                    </h6>
                  </li>
                  <li>
                    <div class="d-flex"><img class="img-fluid rounded-circle me-3" src="{{asset('layanan/images/user/1.jpg')}}" alt="">
                      <div class="status-circle online"></div>
                      <div class="flex-grow-1"><a href="chat.html"> <span>Ain Chavez</span>
                          <p>Do you want to go see movie?</p></a></div>
                      <p class="f-12 font-success">1 mins ago</p>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex"><img class="img-fluid rounded-circle me-3" src="{{asset('layanan/images/user/2.png')}}" alt="">
                      <div class="status-circle online"></div>
                      <div class="flex-grow-1"><a href="chat.html"> <span>Kori Thomas</span>
                          <p>What`s the project report update?</p></a></div>
                      <p class="f-12 font-success">3 mins ago</p>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex"><img class="img-fluid rounded-circle me-3" src="../assets/images/dashboard/admins.png" alt="">
                      <div class="status-circle offline"></div>
                      <div class="flex-grow-1"><a href="chat.html"> <span>Ain Chavez</span>
                          <p>Thank you for rating us.</p></a></div>
                      <p class="f-12 font-danger">9 mins ago</p>
                    </div>
                  </li>
                  <li class="text-center"> <a class="btn btn-primary" href="chat.html">View All     </a></li>
                </ul>
              </li>
              <li>
                <div class="mode"><i class="fa fa-moon-o"></i></div>
              </li>
              <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li class="profile-nav onhover-dropdown p-0 me-0">
                <div class="d-flex profile-media"><img class="b-r-50" src="../assets/images/dashboard/profile.jpg" alt="">
                  <div class="flex-grow-1"><span>Budi</span>
                    <p class="mb-0 font-roboto">Kepala Subbagian Umum <i class="middle fa fa-angle-down"></i></p>
                  </div>
                </div>
                <ul class="profile-dropdown onhover-show-div">
                  <li><a href="user-profile.html"><i data-feather="user"></i><span>Account </span></a></li>
                  <li><a href="login.html"><i data-feather="log-in"> </i><span>Log out</span></a></li>
                </ul>
              </li>
            </ul>
          </div>
          <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">Iqbal Caraka</div>
            </div>
            </div>
          </script>
          <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper default-menu default-menu">
        <!-- Page Sidebar Start-->
            @include('partials.sidebarlayanankasubumum')
        <!-- Page Sidebar Ends-->
        <div class="page-body">
            @yield('content')
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 p-0 footer-left">
                <p class="mb-0">Copyright © 2023 Tim Hore Kelompok 6. All rights reserved.</p>
              </div>
              <div class="col-md-6 p-0 footer-right">
                <ul class="color-varient">
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                </ul>
                <p class="mb-0 ms-3">Hand-crafted & made with <i class="fa fa-heart font-danger"></i></p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="{{asset('layanan/js/jquery-3.6.0.min.js')}}"></script>
    <!-- Bootstrap js-->
    <script src="{{asset('layanan/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <!-- feather icon js-->
    <script src="{{asset('layanan/js/icons/feather-icon/feather.min.js')}}"></script>
    <script src="{{asset('layanan/js/icons/feather-icon/feather-icon.js')}}"></script>
    <!-- scrollbar js-->
    <script src="{{asset('layanan/js/scrollbar/simplebar.js')}}"></script>
    <script src="{{asset('layanan/js/scrollbar/custom.js')}}"></script>
    <!-- Sidebar jquery-->
    <script src="{{asset('layanan/js/config.js')}}"></script>
    <!-- Plugins JS start-->
    <script src="{{asset('layanan/js/sidebar-menu.js')}}"></script>
    <script src="{{asset('layanan/js/prism/prism.min.js')}}"></script>
    <script src="{{asset('layanan/js/clipboard/clipboard.min.js')}}"></script>
    <script src="{{asset('layanan/js/notify/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('layanan/js/custom-card/custom-card.js')}}"></script>
    <script src="{{asset('layanan/js/datepicker/date-picker/datepicker.js')}}"></script>
    <script src="{{asset('layanan/js/datepicker/date-picker/datepicker.en.js')}}"></script>
    <script src="{{asset('layanan/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
    <script src="{{asset('layanan/js/owlcarousel/owl.carousel.js')}}"></script>
    <script src="{{asset('layanan/js/general-widget.js')}}"></script>
    <script src="{{asset('layanan/js/custom-card/custom-card.js')}}"></script>
    <script src="{{asset('layanan/js/height-equal.js')}}"></script>
    <script src="{{asset('layanan/js/tooltip-init.js')}}"></script>
    <script src="{{asset('layanan/js/dashboard/default.js')}}"></script>
    <script src="{{asset('layanan/js/notify/index.js')}}"></script>
    <script src="{{asset('layanan/js/slick-slider/slick.min.js')}}"></script>
    <script src="{{asset('layanan/js/slick-slider/slick-theme.js')}}"></script>
    <script src="{{asset('layanan/js/typeahead/handlebars.js')}}"></script>
    <script src="{{asset('layanan/js/typeahead/typeahead.bundle.js')}}"></script>
    <script src="{{asset('layanan/js/typeahead/typeahead.custom.js')}}"></script>
    <script src="{{asset('layanan/js/typeahead-search/handlebars.js')}}"></script>
    <script src="{{asset('layanan/js/typeahead-search/typeahead-custom.js')}}"></script>
    <script src="{{asset('layanan/js/select2/select2.full.min.js')}} "></script>
    <script src="{{asset('layanan/js/select2/select2-custom.js')}}"></script>
    @stack('scripts')

    <!-- datatable -->
    <!-- <script src=" {{asset('layanan/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/dataTables.buttons.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/jszip.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/buttons.colVis.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/pdfmake.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/vfs_fonts.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/dataTables.autoFill.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/dataTables.select.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/buttons.bootstrap4.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/buttons.html5.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/buttons.print.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/dataTables.bootstrap4.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/dataTables.responsive.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/responsive.bootstrap.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/dataTables.keyTable.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/dataTables.colReorder.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/dataTables.fixedHeader.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/dataTables.rowReorder.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/dataTables.scroller.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/custom.js')}}"></script>
    <script src="{{asset('layanan/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('layanan/js/datatable/datatables/datatable.custom.js')}}"></script> -->
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{asset('layanan/js/script.js')}}"></script>
    <script src="{{asset('layanan/js/theme-customizer/customizer.js')}}"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>