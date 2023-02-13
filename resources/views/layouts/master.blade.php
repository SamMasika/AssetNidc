<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>Dashboard|AMS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('master/assets/images/favicon.ico')}}">
        <!-- plugin css -->
          <!-- choices css -->
          <link href="{{asset('master/assets/libs/choices.js/public/assets/styles/choices.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- CSS -->
      
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
      
          <!-- color picker css -->
          <link rel="stylesheet" href="{{asset('master/assets/libs/@simonwep/pickr/themes/classic.min.css')}}"/> <!-- 'classic' theme -->
          <link rel="stylesheet" href="{{asset('master/assets/libs/@simonwep/pickr/themes/monolith.min.css')}}"/> <!-- 'monolith' theme -->
          <link rel="stylesheet" href="{{asset('master/assets/libs/@simonwep/pickr/themes/nano.min.css')}}"/> <!-- 'nano' theme -->
  
          <!-- datepicker css -->
          <link rel="stylesheet" href="{{asset('master/assets/libs/flatpickr/flatpickr.min.css')}}">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <link href="{{asset('master/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />
        <!-- preloader css -->
        <link rel="stylesheet" href="{{asset('master/assets/css/preloader.min.css')}}" type="text/css" />
        <!-- Bootstrap Css -->
        <link href="{{asset('master/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('master/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('master/assets/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
           <!-- DataTables -->
           <link href="{{asset('master/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
           <link href="{{asset('master/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
   
           <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  
  
        <!-- Sweet Alert-->
        <link href="{{asset('master/assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
   
    {{-- <script src="/js/select2.min.js"></script> --}}
           <link href="{{asset('master/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('master/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
        {{-- <link href="{{asset('master/assets/css/material.css')}}" rel="stylesheet"> --}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body  data-sidebar="dark" class=" bg-soft-light">
    <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">  
           @include('layouts.admin.navbar')
            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                  @include('layouts.admin.sidebar')
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                  <a href="{{url('dashboard')}}"><h4 class="mb-sm-0 font-size-18 text-primary">Dashboard</h4></a> 

                                    {{-- <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div> --}}

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        @if(session()->has('success')) 
                        <div class="alert alert-success alert-border-left alert-dismissible fade show" role="alert">
                            {{ session()->get('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        @if(session()->has('error')) 
                        <div class="alert alert-danger alert-border-left alert-dismissible fade show" role="alert">
                            {{ session()->get('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                    @yield('content')
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


               @include('layouts.admin.footer')

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        
        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center p-3">

                    <h5 class="m-0 me-2">Theme Customizer</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="m-0" />

                <div class="p-4">
                    <h6 class="mb-3">Layout</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout"
                            id="layout-vertical" value="vertical">
                        <label class="form-check-label" for="layout-vertical">Vertical</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout"
                            id="layout-horizontal" value="horizontal">
                        <label class="form-check-label" for="layout-horizontal">Horizontal</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-mode"
                            id="layout-mode-light" value="light">
                        <label class="form-check-label" for="layout-mode-light">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-mode"
                            id="layout-mode-dark" value="dark">
                        <label class="form-check-label" for="layout-mode-dark">Dark</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-width"
                            id="layout-width-fuild" value="fuild" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                        <label class="form-check-label" for="layout-width-fuild">Fluid</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-width"
                            id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                        <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Layout Position</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-position"
                            id="layout-position-fixed" value="fixed" onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
                        <label class="form-check-label" for="layout-position-fixed">Fixed</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-position"
                            id="layout-position-scrollable" value="scrollable" onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
                        <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="topbar-color"
                            id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                        <label class="form-check-label" for="topbar-color-light">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="topbar-color"
                            id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                        <label class="form-check-label" for="topbar-color-dark">Dark</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>

                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-size"
                            id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                        <label class="form-check-label" for="sidebar-size-default">Default</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-size"
                            id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                        <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-size"
                            id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                        <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>

                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-color"
                            id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                        <label class="form-check-label" for="sidebar-color-light">Light</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-color"
                            id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                        <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-color"
                            id="sidebar-color-brand" value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                        <label class="form-check-label" for="sidebar-color-brand">Brand</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Direction</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-direction"
                            id="layout-direction-ltr" value="ltr">
                        <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-direction"
                            id="layout-direction-rtl" value="rtl">
                        <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                    </div>

                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>


       
        <script src="{{asset('master/assets/js/select.js')}}"></script>
        <!-- JAVASCRIPT -->
        <script src="{{asset('master/assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('master/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('master/assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('master/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('master/assets/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{asset('master/assets/libs/feather-icons/feather.min.js')}}"></script>
        <script>
            $("#asset_category").change(function() {
          if ($(this).val() == "furniture") {
            $('#furniture').show();
            $('#button').show();
            $('#building').hide();
            $('#buildings').hide();
            $('#electronics').hide();
            $('#transport').hide();
            $('#transports').hide();
            $('#furniture_type').attr('required', '');
            $('#furniture_type').attr('data-error', 'This field is required.');
            $('#model','#brand','#serial_no','#cheses_no','#engine_capacity',
            '#reg_no','#engine_no','#size','#floor_no','#no_of_rooms','#purpose','#transport_type','#modeli','#chapa',).val(1);
          } 
         if ($(this).val() == "electronic") {
            $('#electronics').show();
            $('#building').hide();
            $('#buildings').hide();
            $('#furniture').hide();
            $('#transport').hide();
            $('#transports').hide();
            $('#modeli','#chapa','#serial_no',).attr('required', '');
            $('#serial_no','#modeli','#chapa',).attr('data-error', 'This field is required.');
            $('#cheses_no','#engine_capacity', '#reg_no','#engine_no','#size','#floor_no','#no_of_rooms',
            '#purpose','#transport_type','#model','#brand').val(1);
          } 
         if ($(this).val() == "building") {
            $('#building').show();
            $('#buildings').show();
            $('#furniture').hide();
            $('#electronics').hide();
            $('#transport').hide();
            $('#transports').hide();
            $('#manufactured_year').hide();
            $('#btn').show();
            $('#size','#floor_no','#no_of_rooms','#purpose').attr('required', '');
            $('#size','#floor_no','#no_of_rooms','#purpose').attr('data-error', 'This field is required.');
            $('#model','#brand','#chapa','#modeli','#serial_no','#cheses_no','#engine_capacity',
            '#reg_no','#engine_no','#transport_type').val(1);
          } 
           if ($(this).val() == "transport") {
            $('#transport').show();
            $('#transports').show();
            $('#building').hide();
            $('#buildings').hide();
            $('#furniture').hide();
            $('#electronics').hide();
            $('#btn').show();
            $('#transport_type','#cheses_no','#engine_capacity','#reg_no','#engine_no','#model','#brand').attr('required', '');
            $('#transport_type','#cheses_no','#engine_capacity','#reg_no','#engine_no','#model','#brand',).attr('data-error', 'This field is required.');
            $('#serial_no',
            '#reg_no','#engine_no','#size','#floor_no','#no_of_rooms','#purpose','#chapa','#modeli',).val(1);
          } 
        });
        </script>
        <!-- pace js -->
        <script src="{{asset('master/assets/libs/pace-js/pace.min.js')}}"></script>

        <!-- apexcharts -->
        <script src="{{asset('master/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Plugins js-->
        <script src="{{asset('master/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
        <script src="{{asset('master/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js')}}"></script>
        <!-- dashboard init -->
        <script src="{{asset('master/assets/js/pages/dashboard.init.js')}}"></script>

         <!-- Required datatable js -->
         <script src="{{asset('master/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
         <script src="{{asset('master/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
         <!-- Buttons examples -->
         <script src="{{asset('master/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
         <script src="{{asset('master/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
         <script src="{{asset('master/assets/libs/jszip/jszip.min.js')}}"></script>
         <script src="{{asset('master/assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
         <script src="{{asset('master/assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
         <script src="{{asset('master/assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
         <script src="{{asset('master/assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
         <script src="{{asset('master/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
         <!-- Responsive examples -->
         <script src="{{asset('master/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
         <script src="{{asset('master/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
 
         <!-- Datatable init js -->
         <script src="{{asset('master/assets/js/pages/datatables.init.js')}}"></script>  

          <!-- Sweet Alerts js -->
        <script src="{{asset('master/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

        <!-- Sweet alert init js-->
        <script src="{{asset('master/assets/js/pages/sweetalert.init.js')}}"></script>

           <!-- choices js -->
        <script src="{{asset('master/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

        <!-- color picker js -->
        {{-- <script src="{{asset('master/assets/libs/@simonwep/pickr/pickr.min.js')}}"></script>
        <script src="{{asset('master/assets/libs/@simonwep/pickr/pickr.es5.min.js')}}"></script> --}}

        <!-- datepicker js -->
        <script src="{{asset('master/assets/libs/flatpickr/flatpickr.min.js')}}"></script>

        <!-- init js -->
        <script src="{{asset('master/assets/js/pages/form-advanced.init.js')}}"></script>

        <script src="{{asset('master/assets/js/app.js')}}"></script>
         {{-- toastr js --}}

    <script src="{{asset('master/assets/js/sweetalert.min.js')}}"></script>
    @if(session('status'))
     <script>
    swal("{{session('status')}}");
     </script>

     @endif

        {{-- Select2 --}}


        {{-- <script>
            jQuery(document).ready(function() {
                jQuery(".standardSelect").chosen({
                    disable_search_threshold: 10,
                    no_results_text: "Oops, nothing found!",
                    width: "100%"
                });
            });
        </script> --}}
        
        <script>
            $("#asset_cat").change(function() {
          if ($(this).val() == "furniture") {
            $('#furniture').show();
            $('#button').show();
            $('#building').hide();
            $('#buildings').hide();
            $('#electronics').hide();
            $('#transport').hide();
            $('#transports').hide();
            $('#furniture_type').attr('required', '');
            $('#furniture_type').attr('data-error', 'This field is required.');
            $('#model','#brand','#serial_no','#cheses_no','#engine_capacity',
            '#reg_no','#engine_no','#size','#floor_no','#no_of_rooms','#purpose','#transport_type','#modeli','#chapa',).val(1);
    
          } 
         if ($(this).val() == "electronic") {
            $('#electronics').show();
            $('#building').hide();
            $('#buildings').hide();
            $('#furniture').hide();
            $('#transport').hide();
            $('#transports').hide();
            $('#modeli','#chapa','#serial_no',).attr('required', '');
            $('#serial_no','#modeli','#chapa',).attr('data-error', 'This field is required.');
            $('#cheses_no','#engine_capacity', '#reg_no','#engine_no','#size','#floor_no','#no_of_rooms',
            '#purpose','#transport_type','#model','#brand').val(1);
          } 
         if ($(this).val() == "building") {
            $('#building').show();
            $('#buildings').show();
            $('#furniture').hide();
            $('#electronics').hide();
            $('#transport').hide();
            $('#transports').hide();
            $('#manufactured_year').hide();
            $('#btn').show();
            $('#size','#floor_no','#no_of_rooms','#purpose').attr('required', '');
            $('#size','#floor_no','#no_of_rooms','#purpose').attr('data-error', 'This field is required.');
            $('#model','#brand','#chapa','#modeli','#serial_no','#cheses_no','#engine_capacity',
            '#reg_no','#engine_no','#transport_type').val(1);
          } 
           if ($(this).val() == "transport") {
            $('#transport').show();
            $('#transports').show();
            $('#building').hide();
            $('#buildings').hide();
            $('#furniture').hide();
            $('#electronics').hide();
            $('#btn').show();
            $('#transport_type','#cheses_no','#engine_capacity','#reg_no','#engine_no','#model','#brand').attr('required', '');
            $('#transport_type','#cheses_no','#engine_capacity','#reg_no','#engine_no','#model','#brand',).attr('data-error', 'This field is required.');
            $('#serial_no',
            '#reg_no','#engine_no','#size','#floor_no','#no_of_rooms','#purpose','#chapa','#modeli',).val(1);
          } 
        });
        </script>
    </body>

</html>