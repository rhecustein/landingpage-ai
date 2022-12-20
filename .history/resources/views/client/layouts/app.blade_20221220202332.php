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
					<a class="navbar-brand" href="index.html">
						<img class="brand-img img-fluid" src="dist/img/brand-sm.svg" alt="brand" />
						<img class="brand-img img-fluid" src="dist/img/Jampack.svg" alt="brand" />
					</a>
					<button class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover navbar-toggle">
						<span class="icon">
							<span class="svg-icon fs-5">
								<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-bar-to-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
		<a href="#" class="btn btn-icon btn-floating btn-primary btn-lg btn-rounded btn-popup-open">
			<span class="icon">
				<span class="feather-icon"><i data-feather="message-circle"></i></span>
			</span>
		</a>
		<div class="chat-popover shadow-xl"><p>Try Jampack Chat for free and connect with your customers now!</p></div>
		<!-- /Chat Popup -->

		<!-- Main Content -->
		<div class="hk-pg-wrapper">
			<div class="container-xxl">
				<!-- Page Header -->
				<div class="hk-pg-header pg-header-wth-tab pt-7">
					<div class="d-flex">
						<div class="d-flex flex-wrap justify-content-between flex-1">
							<div class="mb-lg-0 mb-2 me-8">
								<h1 class="pg-title">Welcome back</h1>
								<p>Create pages using a variety of features that leverage jampack components</p>
							</div>
							<div class="pg-header-action-wrap">
								<div class="input-group w-300p">
									<span class="input-affix-wrapper">
										<span class="input-prefix"><span class="feather-icon"><i data-feather="calendar"></i></span></span>
										<input class="form-control form-wth-icon" name="datetimes" value="Aug 18,2020 - Aug 19, 2020">
									</span>
								</div>
							</div>
						</div>
					</div>
					<ul class="nav nav-line nav-light nav-tabs">
						<li class="nav-item">
							<a class="nav-link active" data-bs-toggle="tab" href="#">
								<span class="nav-link-text">Overview</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#">
								<span class="nav-link-text">Analytics</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#">
								<span class="nav-link-text">Operations</span>
							</a>
						</li>
					</ul>
				</div>
				<!-- /Page Header -->

				<!-- Page Body -->
				
				<!-- /Page Body -->		
			</div>
			
			<!-- Page Footer -->
			<div class="hk-footer">
				<footer class="container-xxl footer">
					<div class="row">
						<div class="col-xl-8">
							<p class="footer-text"><span class="copy-text">Autobot Ws © 2022 All rights reserved.</span> <a href="#" class="" target="_blank">Privacy Policy</a><span class="footer-link-sep">|</span><a href="#" class="" target="_blank">T&C</a><span class="footer-link-sep">|</span><a href="#" class="" target="_blank">System Status</a></p>
						</div>
						<div class="col-xl-4">
							<a href="#" class="footer-extr-link link-default"><span class="feather-icon"><i data-feather="external-link"></i></span><u>Send feedback to our help forum</u></a>
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
    <script src="vendors/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JS -->
   	<script src="vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- FeatherIcons JS -->
    <script src="dist/js/feather.min.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="dist/js/dropdown-bootstrap-extended.js"></script>

	<!-- Simplebar JS -->
	<script src="vendors/simplebar/dist/simplebar.min.js"></script>
	
	<!-- Data Table JS -->
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
	<script src="vendors/datatables.net-select/js/dataTables.select.min.js"></script>

	<!-- Daterangepicker JS -->
    <script src="vendors/moment/min/moment.min.js"></script>
	<script src="vendors/daterangepicker/daterangepicker.js"></script>
	<script src="dist/js/daterangepicker-data.js"></script>

	<!-- Amcharts Maps JS -->
	<script src="vendors/@amcharts/amcharts4/core.js"></script>
	<script src="vendors/@amcharts/amcharts4/maps.js"></script>
	<script src="vendors/@amcharts/amcharts4-geodata/worldLow.js"></script>
	<script src="vendors/@amcharts/amcharts4-geodata/worldHigh.js"></script>
	<script src="vendors/@amcharts/amcharts4/themes/animated.js"></script>

	<!-- Apex JS -->
	<script src="vendors/apexcharts/dist/apexcharts.min.js"></script>

	<!-- Init JS -->
	<script src="dist/js/init.js"></script>
	<script src="dist/js/chips-init.js"></script>
	<script src="dist/js/dashboard-data.js"></script>
</body>
</html>