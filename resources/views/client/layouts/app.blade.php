<!DOCTYPE html>
<html lang="en">

<head>
    @include('client.include.head')
</head>

<body>
    <!-- Wrapper -->
    <div class="hk-wrapper" data-layout="vertical" data-layout-style="default" data-menu="light" data-footer="simple">
        <!-- nav -->
        @include('client.include.nav')
        <!-- nav -->

        <!-- Vertical Nav -->
        <div class="hk-menu">
            <!-- Brand -->
            <div class="menu-header">
                <span>
                    <a class="navbar-brand" href="">
                        <img class="brand-img" src="{{ asset('img/logo-light-autobot.png') }}" alt="logo autobot"
                            height="40px" />
                    </a>
                    <button class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover navbar-toggle">
                        <span class="icon">
                            <span class="svg-icon fs-5">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-arrow-bar-to-left" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <line x1="10" y1="12" x2="20" y2="12"></line>
                                    <line x1="10" y1="12" x2="14" y2="16"></line>
                                    <line x1="10" y1="12" x2="14" y2="8"></line>
                                    <line x1="4" y1="4" x2="4" y2="20"></line>
                                </svg>
                            </span>
                        </span>
                    </button>
                </span>
            </div>
            <!-- /Brand -->

            <!-- Main Menu -->
            @include('client.include.menu')
            <!-- /Main Menu -->

        </div>
        <div id="hk_menu_backdrop" class="hk-menu-backdrop"></div>
        <!-- /Vertical Nav -->

        <!-- Chat Popup -->
        <div class="hk-chatbot-popup">
            <header>
                @include('client.include.bot')
            </header>
            @include('client.include.chatbot')
            <footer>
                @include('client.include.footer')
            </footer>
        </div>
        <!-- <a href="#" class="btn btn-icon btn-floating btn-primary btn-lg btn-rounded btn-popup-open">
   <span class="icon">
    <span class="feather-icon"><i data-feather="message-circle"></i></span>
   </span>
  </a>
  <div class="chat-popover shadow-xl"><p>Try Jampack Chat for free and connect with your customers now!</p></div> -->
        <!-- /Chat Popup -->

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <div class="container-xxl">
                @yield('content')
            </div>

            <!-- Page Footer -->
            <div class="hk-footer">
                <footer class="container-xxl footer">
                    <div class="row">
                        <div class="col-xl-8">
                            <p class="footer-text"><span class="copy-text">Autobot Ws © 2022 All rights reserved.</span>
                                <a href="#" class="" target="_blank">Privacy Policy</a><span
                                    class="footer-link-sep">|</span><a href="#" class=""
                                    target="_blank">T&C</a><span class="footer-link-sep">|</span><a href="#"
                                    class="" target="_blank">System Status</a>
                            </p>
                        </div>
                        <div class="col-xl-4">
                            <a href="#" class="footer-extr-link link-default"><span class="feather-icon"><i
                                        data-feather="external-link"></i></span><u>Send feedback to our help
                                    forum</u></a>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- / Page Footer -->

        </div>
        <!-- /Main Content -->
    </div>
    <!-- /Wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('html/classic/vendors/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('html/classic/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- FeatherIcons JS -->
    <script src="{{ asset('html/classic/dist/js/feather.min.js') }}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{ asset('html/classic/dist/js/dropdown-bootstrap-extended.js') }}"></script>

    <!-- Simplebar JS -->
    <script src="{{ asset('html/classic/vendors/simplebar/dist/simplebar.min.js') }}"></script>

    <!-- Data Table JS -->
    <script src="{{ asset('html/classic/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('html/classic/vendors/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('html/classic/vendors/datatables.net-select/js/dataTables.select.min.js') }}"></script>

    <!-- Daterangepicker JS -->
    <script src="{{ asset('html/classic/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('html/classic/vendors/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('html/classic/dist/js/daterangepicker-data.js') }}"></script>

    <!-- Amcharts Maps JS -->
    <script src="{{ asset('html/classic/vendors/@amcharts/amcharts4/core.js') }}"></script>
    <script src="{{ asset('html/classic/vendors/@amcharts/amcharts4/maps.js') }}"></script>
    <script src="{{ asset('html/classic/vendors/@amcharts/amcharts4-geodata/worldLow.js') }}"></script>
    <script src="{{ asset('html/classic/vendors/@amcharts/amcharts4-geodata/worldHigh.js') }}"></script>
    <script src="{{ asset('html/classic/vendors/@amcharts/amcharts4/themes/animated.js') }}"></script>

    <!-- Apex JS -->
    <script src="{{ asset('html/classic/vendors/apexcharts/dist/apexcharts.min.js') }}"></script>

    <!-- Init JS -->
    <script src="{{ asset('html/classic/dist/js/init.js') }}"></script>
    <script src="{{ asset('html/classic/dist/js/chips-init.js') }}"></script>
    {{-- <script src="{{ asset('html/classic/dist/js/dashboard-data.js') }}"></script> --}}
    @stack('after-scripts')

</body>

</html>
