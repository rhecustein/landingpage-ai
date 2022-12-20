@extends('client.layouts.app')
@section('content')
			<div class="container-xxl">
				<!-- Page Header -->
				<div class="hk-pg-header pg-header-wth-tab pt-7">
					<div class="d-flex">
						<div class="flex-1">
							<h1 class="pg-title">Penggunaan</h1>
							<p class="p-lg col-lg-8">Di bawah ini Anda akan menemukan ringkasan penggunaan API untuk organisasi Anda. Semua tanggal dan waktu berbasis UTC, dan data mungkin tertunda hingga 5 menit.</p>
						</div>
					</div>
					<ul class="nav nav-line nav-light nav-tabs">
						<li class="nav-item">
							<a class="nav-link active" data-bs-toggle="tab" href="#tab_block_1">
								<span class="nav-link-text">Penggunaan ChatBot</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#tab_block_2">
								<span class="nav-link-text">Social Profiles</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#tab_block_3">
								<span class="nav-link-text">Integrations</span>
							</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Billing Info</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#tab_block_4" data-bs-toggle="tab">Saved Cards</a>
								<a class="dropdown-item" href="#tab_block_5" data-bs-toggle="tab">My Addresses</a>
							</div>
						</li>
					</ul>
				</div>
				<!-- /Page Header -->

				<!-- Page Body -->
				<div class="hk-pg-body">
					<div class="tab-content">
						<div class="tab-pane fade show active" id="tab_block_1">
							<div class="row">
								<div class="col-xl-8">
									<div class="title-lg fs-5"><span>Customize Interests</span></div>
									<p class="mb-4">Customizing interests will help you get the personalised experience.</p>
									<div class="row gx-2 filter-block-wrap mt-5">
										<div class="col-sm-3 col-6">
											<div class="card text-white filter-block h-120p mb-2">
												<input class="form-check-input" type="checkbox">
												<img src="dist/img/interests/interest-1.png" class="card-img h-100 img-fluid" alt="img-desc">
												<div class="card-img-overlay bg-opacity-75 d-flex align-items-center justify-content-center">
												  <h5 class="card-title text-white">Infrastructure</h5>
												</div>
											</div>
										</div>
										<div class="col-sm-3 col-6">
											<div class="card text-white filter-block h-120p mb-2">
												<input class="form-check-input" type="checkbox" checked>
												<img src="dist/img/interests/interest-2.png" class="card-img h-100 img-fluid" alt="img-desc">
												<div class="card-img-overlay bg-opacity-75 d-flex align-items-center justify-content-center">
												  <h5 class="card-title text-white">Science</h5>
												</div>
											</div>
										</div>
										<div class="col-sm-3 col-6">
											<div class="card text-white filter-block h-120p mb-2">
												<input class="form-check-input" type="checkbox">
												<img src="dist/img/interests/interest-3.png" class="card-img h-100 img-fluid" alt="img-desc">
												<div class="card-img-overlay bg-opacity-75 d-flex align-items-center justify-content-center">
												  <h5 class="card-title text-white">World Politics</h5>
												</div>
											</div>
										</div>
										<div class="col-sm-3 col-6">
											<div class="card text-white filter-block h-120p mb-2">
												<input class="form-check-input" type="checkbox">
												<img src="dist/img/interests/interest-4.png" class="card-img h-100 img-fluid" alt="img-desc">
												<div class="card-img-overlay bg-opacity-75 d-flex align-items-center justify-content-center">
												  <h5 class="card-title text-white">Technology</h5>
												</div>
											</div>
										</div>
										<div class="col-sm-3 col-6">
											<div class="card text-white filter-block h-120p mb-2">
												<input class="form-check-input" type="checkbox">
												<img src="dist/img/interests/interest-5.png" class="card-img h-100 img-fluid" alt="img-desc">
												<div class="card-img-overlay bg-opacity-75 d-flex align-items-center justify-content-center">
												  <h5 class="card-title text-white">Travel</h5>
												</div>
											</div>
										</div>
										<div class="col-sm-3 col-6">
											<div class="card text-white filter-block h-120p mb-2">
												<input class="form-check-input" type="checkbox" checked>
												<img src="dist/img/interests/interest-6.png" class="card-img h-100 img-fluid" alt="img-desc">
												<div class="card-img-overlay bg-opacity-75 d-flex align-items-center justify-content-center">
												  <h5 class="card-title text-white">Literature</h5>
												</div>
											</div>
										</div>
										<div class="col-sm-3 col-6">
											<div class="card text-white filter-block h-120p mb-2">
												<input class="form-check-input" type="checkbox" checked>
												<img src="dist/img/interests/interest-7.png" class="card-img h-100 img-fluid" alt="img-desc">
												<div class="card-img-overlay bg-opacity-75 d-flex align-items-center justify-content-center">
												  <h5 class="card-title text-white">Healthcare</h5>
												</div>
											</div>
										</div>
										<div class="col-sm-3 col-6">
											<div class="card text-white filter-block h-120p mb-2">
												<input class="form-check-input" type="checkbox">
												<img src="dist/img/interests/interest-8.png" class="card-img h-100 img-fluid" alt="img-desc">
												<div class="card-img-overlay bg-opacity-75 d-flex align-items-center justify-content-center">
												  <h5 class="card-title text-white">Marketing</h5>
												</div>
											</div>
										</div>
										<div class="col-sm-3 col-6">
											<div class="card text-white filter-block h-120p mb-2">
												<input class="form-check-input" type="checkbox">
												<img src="dist/img/interests/interest-9.png" class="card-img h-100 img-fluid" alt="img-desc">
												<div class="card-img-overlay bg-opacity-75 d-flex align-items-center justify-content-center">
												  <h5 class="card-title text-white">Music</h5>
												</div>
											</div>
										</div>
										<div class="col-sm-3 col-6">
											<div class="card text-white filter-block h-120p mb-2">
												<input class="form-check-input" type="checkbox" checked>
												<img src="dist/img/interests/interest-10.png" class="card-img h-100 img-fluid" alt="img-desc">
												<div class="card-img-overlay bg-opacity-75 d-flex align-items-center justify-content-center">
												  <h5 class="card-title text-white">Spirituality</h5>
												</div>
											</div>
										</div>
										<div class="col-sm-3 col-6">
											<div class="card text-white filter-block h-120p mb-2">
												<input class="form-check-input" type="checkbox" checked>
												<img src="dist/img/interests/interest-11.png" class="card-img h-100 img-fluid" alt="img-desc">
												<div class="card-img-overlay bg-opacity-75 d-flex align-items-center justify-content-center">
												  <h5 class="card-title text-white">Lifestyle</h5>
												</div>
											</div>
										</div>
										<div class="col-sm-3 col-6">
											<div class="card text-white filter-block h-120p mb-2">
												<input class="form-check-input" type="checkbox">
												<img src="dist/img/interests/interest-12.png" class="card-img h-100 img-fluid" alt="img-desc">
												<div class="card-img-overlay bg-opacity-75 d-flex align-items-center justify-content-center">
												  <h5 class="card-title text-white">Adventure</h5>
												</div>
											</div>
										</div>
									</div>
									<div class="text-end mt-5">
										<button class="btn btn-primary btn-rounded">
											Save changes
										</button>
									</div>
								</div>
							</div>	
						</div>
						<div class="tab-pane fade" id="tab_block_2">
							<div class="row">
								<div class="col-md-8">
									<div class="title-lg fs-5"><span>Social profile links</span></div>
									<p class="mb-4">Connect your social media accounts for one-click sharing.</p>
									<form>
										<div class="form-group">
											<label class="form-label">Facebook</label>
											<div class="input-group">
												<span class="input-affix-wrapper">
													<span class="input-prefix">
														<span class="avatar avatar-logo avatar-xs">
															<span class="initial-wrap">
																<img src="dist/img/symbol-avatar-17.png" alt="logo">
															</span>
														</span>
													</span>
													<input type="text" class="form-control form-control-lg ps-8" placeholder="Username" value="Hencework">
													<a href="#" class="input-suffix text-muted"><span class="feather-icon"><i data-feather="edit-3"></i></span></a>
												</span>
											</div>
											<small class="form-text text-muted">
												One-click sign in
											</small>
										</div>
										<div class="form-group">
											<label class="form-label">Twitter</label>
											<div class="input-group">
												<span class="input-affix-wrapper">
													<span class="input-prefix">
														<span class="avatar avatar-logo avatar-xs">
															<span class="initial-wrap">
																<img src="dist/img/symbol-avatar-18.png" alt="logo">
															</span>
														</span>
													</span>
													<input type="text" class="form-control form-control-lg ps-8" placeholder="Username">
													<a href="#" class="input-suffix text-muted"><span class="feather-icon"><i data-feather="edit-3"></i></span></a>
												</span>
											</div>
											<small class="form-text text-muted">
												One-click sign in
											</small>
										</div>
										<div class="form-group mb-5">
											<label class="form-label">Linkedin</label>
											<div class="input-group">
												<span class="input-affix-wrapper">
													<span class="input-prefix">
														<span class="avatar avatar-logo avatar-xs">
															<span class="initial-wrap">
																<img src="dist/img/symbol-avatar-19.png" alt="logo">
															</span>
														</span>
													</span>
													<input type="text" class="form-control form-control-lg ps-8" placeholder="Username">
													<a href="#" class="input-suffix text-muted"><span class="feather-icon"><i data-feather="edit-3"></i></span></a>
												</span>
											</div>
											<div class="form-check form-check-sm mt-2">
												<input type="checkbox" class="form-check-input" id="customCheckList4" checked>
												<label class="form-check-label" for="customCheckList4">
													This is a company account
												</label>
											</div>
										</div>
										<div class="form-group">
											<label class="form-label">Connect</label>
											<div class="input-group mb-3">
												<span class="input-affix-wrapper">
													<span class="input-prefix">
														<span class="avatar avatar-logo avatar-xs">
															<span class="initial-wrap">
																<img src="dist/img/symbol-avatar-6.png" alt="logo">
															</span>
														</span>
													</span>
													<input type="text" class="form-control form-control-lg ps-8 pe-15" placeholder="Behance">
													<span class="input-suffix"><button class="btn btn-sm btn-outline-primary">
														connect
													</button></span>
												</span>
											</div>
											<div class="input-group">
												<span class="input-affix-wrapper">
													<span class="input-prefix">
														<span class="avatar avatar-logo avatar-xs">
															<span class="initial-wrap">
																<img src="dist/img/symbol-avatar-5.png" alt="logo">
															</span>
														</span>
													</span>
													<input type="text" class="form-control form-control-lg ps-8 pe-15" placeholder="Dribbble">
													<span class="input-suffix"><button class="btn btn-sm btn-outline-primary">
														connect
													</button></span>
												</span>
											</div>
										</div>
									</form>
									<div class="text-end mt-6">
										<button class="btn btn-primary btn-rounded">
											Save changes
										</button>
									</div>
								</div>
							</div>	
						</div>
						<div class="tab-pane fade" id="tab_block_3">
							<div class="row">
								<div class="col-md-8">
									<div class="title-lg fs-5"><span>App Integrations</span></div>
									<p class="mb-4">Connect suitable apps with your app and get notifications wherever you go</p>
									<ul class="advance-list">
										<li class="advance-list-item transform-none shadow-none">
											<div class="d-flex align-items-center justify-content-between">
												<div class="media align-items-center">
													<div class="media-head me-3">
														<div class="avatar">
															<img src="dist/img/symbol-avatar-6.png" alt="user" class="avatar-img">
														</div>
													</div>
													<div class="media-body">
														<div class="text-dark fw-medium">Behance</div>
														<div class="fs-7">Design Platform</div>
													</div>
												</div>
												<button class="btn mnw-125p btn-outline-primary">
													Connect
												</button>
											</div>
										</li>
										<li class="advance-list-item transform-none shadow-none">
											<div class="d-flex align-items-center justify-content-between">
												<div class="media align-items-center">
													<div class="media-head me-3">
														<div class="avatar">
															<img src="dist/img/symbol-avatar-5.png" alt="user" class="avatar-img">
														</div>
													</div>
													<div class="media-body">
														<div class="text-dark fw-medium">Dribble</div>
														<div class="fs-7">Portfolio</div>
													</div>
												</div>
												<button class="btn mnw-125p btn-outline-danger">
													Disconnect
												</button>
											</div>
										</li>
										<li class="advance-list-item transform-none shadow-none">
											<div class="d-flex align-items-center justify-content-between">
												<div class="media align-items-center">
													<div class="media-head me-3">
														<div class="avatar">
															<img src="dist/img/symbol-avatar-14.png" alt="user" class="avatar-img">
														</div>
													</div>
													<div class="media-body">
														<div class="text-dark fw-medium">Intercom</div>
														<div class="fs-7">Chat Integrations</div>
													</div>
												</div>
												<button class="btn mnw-125p btn-outline-primary">
													Connect
												</button>
											</div>
										</li>
										<li class="advance-list-item transform-none shadow-none">
											<div class="d-flex align-items-center justify-content-between">
												<div class="media align-items-center">
													<div class="media-head me-3">
														<div class="avatar">
															<img src="dist/img/symbol-avatar-16.png" alt="user" class="avatar-img">
														</div>
													</div>
													<div class="media-body">
														<div class="text-dark fw-medium">Gitlab</div>
														<div class="fs-7">Developer Platform</div>
													</div>
												</div>
												<button class="btn mnw-125p btn-outline-primary">
													Connect
												</button>
											</div>
										</li>
									</ul>
									<div class="text-end mt-6">
										<button class="btn btn-primary btn-rounded">
											Save changes
										</button>
									</div>
								</div>
							</div>	
						</div>
						<div class="tab-pane fade" id="tab_block_4">
							<div class="row">
								<div class="col-lg-8">
									<div class="title-lg fs-5 justify-content-between mb-5"><span>Saved Cards</span>
										<button class="btn btn-outline-light">
											+ Add new card
										</button>
									</div>
									
									<ul class="advance-list">
										<li class="advance-list-item transform-none shadow-none py-3">
											<div class="d-flex align-items-center justify-content-between">
												<div class="media align-items-center">
													<div class="media-head me-5">
														<img src="dist/img/card-visa.png" alt="user" class="img-fluid">
													</div>
													<div class="media-body">
														<div>
															<span class="text-dark fw-medium">****4213</span>
															<span class="badge badge-soft-primary rounded-0 ms-3">Primary</span>
														</div>
													</div>
												</div>
												<div  class="d-lg-inline d-none">
													<span class="fs-7 text-muted me-5 d-xl-inline d-none">Last updated 12/03/2022</span>
													<button class="btn mnw-100p btn-outline-danger me-2">
														Delete
													</button>
													<button class="btn mnw-100p btn-light">
														Edit
													</button>
												</div>
											</div>
										</li>
										<li class="advance-list-item transform-none shadow-none py-3">
											<div class="d-flex align-items-center justify-content-between">
												<div class="media align-items-center">
													<div class="media-head me-5">
														<img src="dist/img/mastercard.png" alt="user" class="img-fluid">
													</div>
													<div class="media-body">
														<div>
															<span class="text-dark fw-medium">****1214</span>
														</div>
													</div>
												</div>
												<div class="d-lg-inline d-none">
													<span class="fs-7 text-muted me-5 d-xl-inline d-none">Last updated 25/04/2022</span>
													<button class="btn mnw-100p btn-outline-danger me-2">
														Delete
													</button>
													<button class="btn mnw-100p btn-light">
														Edit
													</button>
												</div>
											</div>
										</li>
									</ul>
									<div class="text-end mt-6">
										<button class="btn btn-primary btn-rounded">
											Save changes
										</button>
									</div>
								</div>
							</div>	
						</div>
						<div class="tab-pane fade" id="tab_block_5">
							<div class="row">
								<div class="col-lg-8">
									<div class="title-lg fs-5"><span>My Addresses</span></div>
									<div class="row gx-3">
										<div class="col-md-4">
											<div class="card card-border mnh-250p">
												<div class="card-body">
													<div class="card-action-wrap">
														<a class="btn btn-sm btn-icon btn-rounded btn-flush-danger flush-soft-hover card-close"  href="#"><span class="icon"><span class="feather-icon"><i data-feather="trash-2"></i></span><span class="feather-icon d-none"><i data-feather="minimize"></i></span></span></a>
														<a class="btn btn-sm btn-icon btn-rounded btn-flush-dark flush-soft-hover"><span class="icon"><span class="feather-icon"><i data-feather="edit-2"></i></span></span></a>
													</div>
													<i class="bi bi-house-door-fill fs-3 d-block mb-1 text-primary"></i>
													<h5>Home</h5>
													<p class="card-text">3421 Central Ave NE, Albuquerque, New York - 87106
														</p>
													<span class="badge badge-soft-primary">Primary</span>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="card card-border mnh-250p">
												<div class="card-body">
													<div class="card-action-wrap">
														<a class="btn btn-sm btn-icon btn-rounded btn-flush-danger flush-soft-hover card-close"  href="#"><span class="icon"><span class="feather-icon"><i data-feather="trash-2"></i></span><span class="feather-icon d-none"><i data-feather="minimize"></i></span></span></a>
														<a class="btn btn-sm btn-icon btn-rounded btn-flush-dark flush-soft-hover"><span class="icon"><span class="feather-icon"><i data-feather="edit-2"></i></span></span></a>
													</div>
													<i class="bi bi-shield-fill-check fs-3 d-block mb-1 text-primary"></i>
													<h5>Office</h5>
													<p class="card-text">2035 7th St, Clanton, Alaska, 35045</p>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="card card-border border-dashed mnh-250p">
												<div class="card-body d-flex align-items-center justify-content-center">
													<button class="btn btn-outline-light btn-block" data-bs-toggle="modal" data-bs-target="#add_new_board"><span data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add New Address"><span class="icon"><span class="feather-icon"><i data-feather="plus"></i></span></span></span></button>
												</div>
											</div>
										</div>
									</div>
									<div class="text-end mt-6">
										<button class="btn btn-primary btn-rounded">
											Save changes
										</button>
									</div>
								</div>
							</div>	
						</div>
						
					</div>
				</div>
				<!-- /Page Body -->		
			</div>
@endsection