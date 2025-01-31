<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Autobot - Memberdayakan masa depan dengan AI</title>
    <meta name="description" content="Autobot Wijaya Solution Memberdayakan masa depan dengan AI"/>
    
	<!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
	
	<!-- CSS -->
    <link href="{{ asset ('html/dist/css/style.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
   	<!-- Wrapper -->
	<div class="hk-wrapper hk-pg-auth" data-footer="simple">
		<!-- Top Navbar -->
		<nav class="hk-navbar navbar navbar-expand-xl navbar-light fixed-top">
			<div class="container-xxl">
				<!-- Start Nav -->
				<div class="nav-start-wrap">
					<a class="navbar-brand" href="index.html">
						<img class="brand-img d-inline-block" src="{{ asset ('html/dist/img/logo-light.png" alt="brand" />
					</a>
				</div>
				<!-- /Start Nav -->

				<!-- End Nav -->
				<div class="nav-end-wrap">
					<ul class="navbar-nav flex-row">
						<li class="nav-item nav-link py-0">
							<button class="btn btn-sm btn-outline-light"><span><span class="icon"><span class="feather-icon"><i data-feather="help-circle"></i></span></span><span>Get Help</span></span></button>
						</li>
					</ul>	
				</div>
				<!-- /End Nav -->
			</div>
		
		</nav>
		<!-- /Top Navbar -->

		<!-- Main Content -->
		<div class="hk-pg-wrapper">
			<!-- Page Body -->
			<div class="hk-pg-body">
				<!-- Container -->
				<div class="container-xxl">
					<!-- Row -->
					<div class="row">
						<div class="col-xl-7 col-lg-6 d-lg-block d-none v-separator separator-sm">
							<div class="auth-content py-md-0 py-8">
								<div class="row">
									<div class="col-xxl-9 col-xl-8 col-lg-11 text-center mx-auto">
										<img src="{{ asset ('html/dist/img/macaroni-logged-out.png"  class="img-fluid w-sm-40 w-50 mb-3" alt="login"/>
										<h3 class="mb-2">Dig into festive savings, Go Premium</h3>
										<p class="w-xxl-65 w-100 mx-auto">Save 20% on the premium membership plan by using the promo code "JAMPACK20"</p>
										<a href="#" class="btn btn-sm btn-primary btn-uppercase mt-4">Upgrade Now</a>
										<p class="p-xs mt-5 text-light">All illustration are powered by <a href="https://icons8.com/ouch/" target="_blank" class="text-light"><u>Icons8</u></a></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-5 col-lg-6 col-md-7 col-sm-10 position-relative mx-auto">
							<div class="auth-content py-md-0 py-8">
								<form class="w-100">
									<div class="row">
										<div class="col-lg-10 mx-auto">
											<h4 class="mb-4">Sign in to your account</h4>
											<div class="row gx-3">
												<div class="form-group col-lg-12">
													<div class="form-label-group">
														<label>User Name</label>
													</div>
													<input class="form-control" placeholder="Enter username or email ID" value="" type="text">
												</div>
												<div class="form-group col-lg-12">
													<div class="form-label-group">
														<label>Password</label>
														<a href="#" class="fs-7 fw-medium">Forgot Password ?</a>
													</div>
													<div class="input-group password-check">
														<span class="input-affix-wrapper">
															<input class="form-control" placeholder="Enter your password" value="" type="password">
															<a href="#" class="input-suffix text-muted">
																<span class="feather-icon"><i class="form-icon" data-feather="eye"></i></span>
																<span class="feather-icon d-none"><i class="form-icon" data-feather="eye-off"></i></span>
															</a>
														</span>
													</div>
												</div>
											</div>
											<div class="d-flex justify-content-center">
												<div class="form-check form-check-sm mb-3">
													<input type="checkbox" class="form-check-input" id="logged_in" checked>
													<label class="form-check-label text-muted fs-7" for="logged_in">Keep me logged in</label>
												</div>
											</div>
											<a href="#" class="btn btn-primary btn-uppercase btn-block">Login</a>
											<p class="p-xs mt-2 text-center">New to Jmapack ? <a href="#"><u>Create new account</u></a></p>	
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- /Row -->
				</div>
				<!-- /Container -->
			</div>
			<!-- /Page Body -->

			<!-- Page Footer -->
			<div class="hk-footer">
				<footer class="container-xxl footer">
					<div class="row">
						<div class="col-xl-8">
							<p class="footer-text"><span class="copy-text">Jampack © 2022 All rights reserved.</span> <a href="#" class="" target="_blank">Privacy Policy</a><span class="footer-link-sep">|</span><a href="#" class="" target="_blank">T&C</a><span class="footer-link-sep">|</span><a href="#" class="" target="_blank">System Status</a></p>
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
    <script src="vendors/jquery/{{ asset ('html/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JS -->
   	<script src="vendors/bootstrap/{{ asset ('html/dist/js/bootstrap.bundle.min.js"></script>

    <!-- FeatherIcons JS -->
    <script src="{{ asset ('html/dist/js/feather.min.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{ asset ('html/dist/js/dropdown-bootstrap-extended.js"></script>

	<!-- Simplebar JS -->
	<script src="vendors/simplebar/{{ asset ('html/dist/simplebar.min.js"></script>
	
	<!-- Init JS -->
	<script src="{{ asset ('html/dist/js/init.js"></script>
</body>
</html>