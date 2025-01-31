<!DOCTYPE html>
<html lang="en">
<head>
   @include('client.include.head')
</head>
<body>
   	<!-- Wrapper -->
	<div class="hk-wrapper" data-layout="vertical" data-layout-style="default" data-menu="light" data-footer="simple">
    @include('client.include.nav')
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
			<div data-simplebar class="nicescroll-bar">
				<div class="menu-content-wrap">
					<div class="menu-group">
						<ul class="navbar-nav flex-column">
							<li class="nav-item active">
								<a class="nav-link" href="index.html">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-template" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<rect x="4" y="4" width="16" height="4" rx="1" />
												<rect x="4" y="12" width="6" height="8" rx="1" />
												<line x1="14" y1="12" x2="20" y2="12" />
												<line x1="14" y1="16" x2="20" y2="16" />
												<line x1="14" y1="20" x2="20" y2="20" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Dashboard</span>
									<span class="badge badge-sm badge-soft-pink ms-auto">Hot</span>
								</a>
							</li>
						</ul>	
					</div>
					<div class="menu-gap"></div>
					<div class="menu-group">
						<div class="nav-header">
							<span>Apps</span>
						</div>
						<ul class="navbar-nav flex-column">
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_chat">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-dots" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />
												<line x1="12" y1="11" x2="12" y2="11.01" />
												<line x1="8" y1="11" x2="8" y2="11.01" />
												<line x1="16" y1="11" x2="16" y2="11.01" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Chat</span>
								</a>
								<ul id="dash_chat" class="nav flex-column collapse  nav-children">
									<li class="nav-item">
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="chats.html"><span class="nav-link-text">Chats</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="chats-group.html"><span class="nav-link-text">Groups</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="chats-contact.html"><span class="nav-link-text">Contacts</span></a>
											</li>
										</ul>	
									</li>	
								</ul>	
							</li>	
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_chatpop">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-circle-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M3 20l1.3 -3.9a9 8 0 1 1 3.4 2.9l-4.7 1" />
												<line x1="12" y1="12" x2="12" y2="12.01" />
												<line x1="8" y1="12" x2="8" y2="12.01" />
												<line x1="16" y1="12" x2="16" y2="12.01" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Chat Popup</span>
									
								</a>
								<ul id="dash_chatpop" class="nav flex-column collapse  nav-children">
									<li class="nav-item">
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="chatpopup.html"><span class="nav-link-text">Direct Message</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="chatbot.html"><span class="nav-link-text">Chatbot</span></a>
											</li>
										</ul>	
									</li>	
								</ul>	
							</li>	
							<li class="nav-item">
								<a class="nav-link" href="calendar.html">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-time" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M11.795 21h-6.795a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4" />
												<circle cx="18" cy="18" r="4" />
												<path d="M15 3v4" />
												<path d="M7 3v4" />
												<path d="M3 11h16" />
												<path d="M18 16.496v1.504l1 1" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Calendar</span>
								</a>
							</li>	
							<li class="nav-item">
								<a class="nav-link" href="email.html">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-inbox" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<rect x="4" y="4" width="16" height="16" rx="2" />
												<path d="M4 13h3l3 3h4l3 -3h3" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Email</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_scrumboard">
									<span class="nav-icon-wrap position-relative">
										<span class="badge badge-sm badge-primary badge-sm badge-pill position-top-end-overflow">3</span>
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-kanban" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<line x1="4" y1="4" x2="10" y2="4" />
												<line x1="14" y1="4" x2="20" y2="4" />
												<rect x="4" y="8" width="6" height="12" rx="2" />
												<rect x="14" y="8" width="6" height="6" rx="2" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Scrumboard</span>
								</a>
								<ul id="dash_scrumboard" class="nav flex-column collapse  nav-children">
									<li class="nav-item">
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="projects-board.html"><span class="nav-link-text">All Boards</span></a>
											</li>
											
											<li class="nav-item">
												<a class="nav-link" href="kanban-board.html"><span class="nav-link-text">Project Kanban</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="pipeline.html"><span class="nav-link-text">Pipeline Kanban</span></a>
											</li>
										</ul>	
									</li>	
								</ul>	
							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_contact">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-notebook" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M6 4h11a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-11a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1m3 0v18" />
												<line x1="13" y1="8" x2="15" y2="8" />
												<line x1="13" y1="12" x2="15" y2="12" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Contact</span>
								</a>
								<ul id="dash_contact" class="nav flex-column collapse  nav-children">
									<li class="nav-item">
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="contact.html"><span class="nav-link-text">Contact List</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="contact-cards.html"><span class="nav-link-text">Contact Cards</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="edit-contact.html"><span class="nav-link-text">Edit Contact</span></a>
											</li>
										</ul>	
									</li>	
								</ul>	
							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_file">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M14 3v4a1 1 0 0 0 1 1h4" />
												<path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
												<path d="M9 15l2 2l4 -4" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">File Manager</span>
								</a>
								<ul id="dash_file" class="nav flex-column collapse  nav-children">
									<li class="nav-item">
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="file-manager-list.html"><span class="nav-link-text">List View</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="file-manager-grid.html"><span class="nav-link-text">Grid View</span></a>
											</li>
										</ul>	
									</li>	
								</ul>	
							</li>
							<li class="nav-item">
								<a class="nav-link" href="gallery.html">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-photo" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<line x1="15" y1="8" x2="15.01" y2="8" />
												<rect x="4" y="4" width="16" height="16" rx="3" />
												<path d="M4 15l4 -4a3 5 0 0 1 3 0l5 5" />
												<path d="M14 14l1 -1a3 5 0 0 1 3 0l2 2" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Gallery</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_task">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-list-details" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M13 5h8" />
												<path d="M13 9h5" />
												<path d="M13 15h8" />
												<path d="M13 19h5" />
												<rect x="3" y="4" width="6" height="6" rx="1" />
												<rect x="3" y="14" width="6" height="6" rx="1" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Todo</span>
									<span class="badge badge-soft-success ms-2">2</span>
								</a>
								<ul id="dash_task" class="nav flex-column collapse  nav-children">
									<li class="nav-item">
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="tasklist.html"><span class="nav-link-text">Tasklist</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="gantt.html"><span class="nav-link-text">Gantt</span></a>
											</li>
										</ul>	
									</li>	
								</ul>	
							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_blog">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-browser" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<rect x="4" y="4" width="16" height="16" rx="1" />
												<line x1="4" y1="8" x2="20" y2="8" />
												<line x1="8" y1="4" x2="8" y2="8" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Blog</span>
								</a>
								<ul id="dash_blog" class="nav flex-column collapse  nav-children">
									<li class="nav-item">
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="posts.html"><span class="nav-link-text">Posts</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="add-new-post.html"><span class="nav-link-text">Add New Post</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="post-detail.html"><span class="nav-link-text">Post Detail</span></a>
											</li>
										</ul>	
									</li>	
								</ul>	
							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_invoice">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-digit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M14 3v4a1 1 0 0 0 1 1h4" />
												<rect x="9" y="12" width="3" height="5" rx="1" />
												<path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
												<path d="M15 12v5" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Invoices</span>
								</a>
								<ul id="dash_invoice" class="nav flex-column collapse  nav-children">
									<li class="nav-item">
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="invoice-list.html"><span class="nav-link-text">Invoice List</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="invoice-templates.html"><span class="nav-link-text">Invoice Templates</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="create-invoice.html"><span class="nav-link-text">Create Invoice</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="invoice-preview.html"><span class="nav-link-text">Invoice Preview</span></a>
											</li>
										</ul>	
									</li>	
								</ul>	
							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_integ">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-code" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<polyline points="7 8 3 12 7 16" />
												<polyline points="17 8 21 12 17 16" />
												<line x1="14" y1="4" x2="10" y2="20" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Integrations</span>
								</a>
								<ul id="dash_integ" class="nav flex-column collapse  nav-children">
									<li class="nav-item">
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="all-apps.html"><span class="nav-link-text">All Apps</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="integrations-detail.html"><span class="nav-link-text">App Detail</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="integrations.html"><span class="nav-link-text">Integrations</span></a>
											</li>
										</ul>	
									</li>	
								</ul>	
							</li>
						</ul>
					</div>
					<div class="menu-gap"></div>
					<div class="menu-group">
						<div class="nav-header">
							<span>Pages</span>
						</div>
						<ul class="navbar-nav flex-column">
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_pages">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<circle cx="9" cy="7" r="4" />
												<path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
												<path d="M16 11h6m-3 -3v6" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Authentication</span>
								</a>
								<ul id="dash_pages" class="nav flex-column collapse  nav-children">
									<li class="nav-item">
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_log">
													<span class="nav-link-text">Log In</span> 
												</a>
												<ul id="dash_log" class="nav flex-column collapse  nav-children">
													<li class="nav-item">
														<ul class="nav flex-column">
															<li class="nav-item">
																<a class="nav-link" href="login.html"><span class="nav-link-text">Login</span></a>
															</li>
															<li class="nav-item">
																<a class="nav-link" href="login-simple.html"><span class="nav-link-text">Login Simple</span></a>
															</li>
															<li class="nav-item">
																<a class="nav-link" href="login-classic.html"><span class="nav-link-text">Login Classic</span></a>
															</li>
														</ul>	
													</li>	
												</ul>	
											</li>
											<li class="nav-item">
												<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_sign">
													<span class="nav-link-text">Sign Up</span>
												</a>
												<ul id="dash_sign" class="nav flex-column collapse  nav-children">
													<li class="nav-item">
														<ul class="nav flex-column">
															<li class="nav-item">
																<a class="nav-link" href="signup.html"><span class="nav-link-text">Signup</span></a>
															</li>
															<li class="nav-item">
																<a class="nav-link" href="signup-simple.html"><span class="nav-link-text">Signup Simple</span></a>
															</li>
															<li class="nav-item">
																<a class="nav-link" href="signup-classic.html"><span class="nav-link-text">Signup Classic</span></a>
															</li>
														</ul>		
													</li>	
												</ul>	
											</li>
											<li class="nav-item">
												<a class="nav-link" href="lock-screen.html"><span class="nav-link-text">Lock Screen</span></a>
											</li>
											
											<li class="nav-item">
												<a class="nav-link" href="reset-password.html"><span class="nav-link-text">Reset Password</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="404.html"><span class="nav-link-text">Error 404</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="503.html"><span class="nav-link-text">Error 503</span></a>
											</li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_profile">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<circle cx="12" cy="7" r="4" />
												<path d="M6 21v-2a4 4 0 0 1 4 -4h1" />
												<circle cx="16.5" cy="17.5" r="2.5" />
												<path d="M18.5 19.5l2.5 2.5" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text position-relative">Profile
										<span class="badge badge-danger badge-indicator position-absolute top-0 start-100"></span>
									</span>
								</a>
								<ul id="dash_profile" class="nav flex-column collapse  nav-children">
									<li class="nav-item">
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="profile.html">
													<span class="nav-link-text">Profile</span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="edit-profile.html">
													<span class="nav-link-text">Edit Profile</span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="account.html">
													<span class="nav-link-text">Account</span>
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="menu-gap"></div>
					<div class="menu-group">
						<div class="nav-header">
							<span>Documentation</span>
						</div>
						<ul class="navbar-nav flex-column">
							<li class="nav-item">
								<a class="nav-link" href="https://nubra-ui.hencework.com/" target="_blank">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-code-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M10 12h-1v5h1" />
												<path d="M14 12h1v5h-1" />
												<path d="M14 3v4a1 1 0 0 0 1 1h4" />
												<path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Documentation</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="https://nubra-ui.hencework.com/avatar.html" target="_blank">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<rect x="4" y="4" width="6" height="5" rx="2" />
												<rect x="4" y="13" width="6" height="7" rx="2" />
												<rect x="14" y="4" width="6" height="16" rx="2" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Components</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="callout card card-flush bg-orange-light-5 text-center mt-5 w-220p mx-auto">
						<div class="card-body">
							<h5 class="h5">Quickly Build Applications</h5>
							<p class="p-sm card-text">Exclusively for webapps Based on Bootstrap</p>
							<a href="https://nubra-ui.hencework.com/" target="_blank" class="btn btn-primary btn-block">Go Nubra-UI</a>
						</div>
					</div>
				</div>
			</div>
			<!-- /Main Menu -->
		</div>
        <div id="hk_menu_backdrop" class="hk-menu-backdrop"></div>
        <!-- /Vertical Nav -->

		<!-- Chat Popup -->
		<div class="hk-chatbot-popup">
			<header>
				<div class="chatbot-head-top">
					<a class="btn btn-sm btn-icon btn-dark btn-rounded" href="javascript:void(0);" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span>
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-notifications-active"></i><span>Send push notifications</span></a>
						<a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-volume-off"></i><span>Mute Chat</span></a>
					</div>
					<span class="text-white">Chat with Us</span>
					<a id="minimize_chatbot" href="javascript:void(0);" class="btn btn-sm btn-icon btn-dark btn-rounded">
						<span class="icon"><span class="feather-icon"><i data-feather="minus"></i></span></span>
					</a>
				</div>
				<div class="separator-full separator-light mt-0 opacity-10"></div>
				<div class="media-wrap">
					<div class="media">
						<div class="media-head">
							<div class="avatar avatar-sm avatar-soft-primary avatar-icon avatar-rounded position-relative">
								<span class="initial-wrap">
									<i class="ri-customer-service-2-line"></i>
								</span>
								<span class="badge badge-success badge-indicator badge-indicator-lg badge-indicator-nobdr position-bottom-end-overflow-1"></span>
							</div>
						</div>
						<div class="media-body">
							<div class="user-name">Chat Robot</div>
							<div class="user-status">Online</div>
						</div>
					</div>
				</div>
			</header>
			<div class="chatbot-popup-body">
				<div data-simplebar class="nicescroll-bar">
					<div>
						<div class="init-content-wrap">
							<div class="card card-shadow">
								<div class="card-body">
									<p class="card-text">Hey I am chat robot 😈<br>Do yo have any question regarding our tools?<br><br>Select the topic or start chatting.</p>
									<button class="btn btn-block btn-primary text-nonecase start-conversation">Start a conversation</button>
								</div>
							</div>
							<div class="btn-wrap">
								<button class="btn btn-soft-primary text-nonecase btn-rounded start-conversation"><span><span class="icon"><span class="feather-icon"><i data-feather="eye"></i></span></span><span class="btn-text">Just browsing</span></span></button>
								<button class="btn btn-soft-danger text-nonecase btn-rounded start-conversation"><span><span class="icon"><span class="feather-icon"><i data-feather="credit-card"></i></span></span><span class="btn-text">I have a question regarding pricing</span></span></button>
								<button class="btn btn-soft-warning text-nonecase btn-rounded start-conversation"><span><span class="icon"><span class="feather-icon"><i data-feather="cpu"></i></span></span><span class="btn-text">Need help for technical query</span></span></button>
								<button class="btn btn-soft-success text-nonecase btn-rounded start-conversation"><span><span class="icon"><span class="feather-icon"><i data-feather="zap"></i></span></span><span class="btn-text">I have a pre purchase question</span></span></button>
							</div>
						</div>
						<ul class="list-unstyled d-none">
							<li class="media sent">
								<div class="media-body">
									<div class="msg-box">
										<div>
											<p>I have a plan regarding pricing</p>
										</div>
									</div>
								</div>
							</li>
							<li class="media received">
								<div class="avatar avatar-xs avatar-soft-primary avatar-icon avatar-rounded">
									<span class="initial-wrap">
										<i class="ri-customer-service-2-line"></i>
									</span>
								</div>
								<div class="media-body">
									<div class="msg-box">
										<div>
											<p>Welcome back!<br>Are you looking to upgrade your existing plan?</p>
										</div>
									</div>
									<div class="msg-box typing-wrap">
										<div>
											<div class="typing">
											  <div class="dot"></div>
											  <div class="dot"></div>
											  <div class="dot"></div>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<footer>
				<div class="chatbot-intro-text fs-7">
					<div class="separator-full separator-light"></div>
					<p class="mb-2">This is jampack's beta version please sign up now to get early access to our full version</p>
					<a class="d-block mb-2" href="#"><u>Give Feedback</u></a>		
				</div>
				<div class="input-group d-none">
					<div class="input-group-text overflow-show border-0">
						<button class="btn btn-icon btn-flush-dark flush-soft-hover btn-rounded dropdown-toggle no-caret" data-bs-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
							<span class="icon"><span class="feather-icon"><i data-feather="share"></i></span></span>
						</button>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="#">
								<div class="d-flex align-items-center">
									<div class="avatar avatar-icon avatar-xs avatar-soft-primary avatar-rounded me-3">
										<span class="initial-wrap">
											<i class="ri-image-line"></i>
										</span>
									</div>
									<div>
										<span class="h6 mb-0">Photo or Video Library</span>
									</div>
								</div>
							</a>
							<a class="dropdown-item" href="#">
								<div class="d-flex align-items-center">
									<div class="avatar avatar-icon avatar-xs avatar-soft-info avatar-rounded me-3">
										<span class="initial-wrap">
											<i class="ri-file-4-line"></i>
										</span>
									</div>
									<div>
										<span class="h6 mb-0">Documents</span>
									</div>
								</div>
							</a>
							<a class="dropdown-item" href="#">
								<div class="d-flex align-items-center">
									<div class="avatar avatar-icon avatar-xs avatar-soft-success avatar-rounded me-3">
										<span class="initial-wrap">
											<i class="ri-map-pin-line"></i>
										</span>
									</div>
									<div>
										<span class="h6 mb-0">Location</span>
									</div>
								</div>
							</a>
							<a class="dropdown-item" href="#">
								<div class="d-flex align-items-center">
									<div class="avatar avatar-icon avatar-xs avatar-soft-blue avatar-rounded me-3">
										<span class="initial-wrap">
											<i class="ri-contacts-line"></i>
										</span>
									</div>
									<div>
										<span class="h6 mb-0">Contact</span>
									</div>
								</div>
							</a>
						</div>
					</div>
					<input type="text" id="input_msg_chat_popup" name="send-msg" class="input-msg-send form-control border-0 shadow-none" placeholder="Type something...">
					<div class="input-group-text overflow-show border-0">
						<button class="btn btn-icon btn-flush-dark flush-soft-hover btn-rounded">
							<span class="icon"><span class="feather-icon"><i data-feather="smile"></i></span></span>
						</button>
					</div>
				</div>
				<div class="footer-copy-text">Powered by <a class="brand-link" href="#"><img src="dist/img/logo-light.png" alt="logo-brand"></a></div>
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
				<div class="hk-pg-body">
					<div class="tab-content">
						<div class="tab-pane fade show active" id="tab_block_1">
							<div class="row">
								<div class="col-xxl-9 col-lg-8 col-md-7 mb-md-4 mb-3">
									<div class="card card-border mb-0 h-100">
										<div class="card-header card-header-action">
											<h6>Audience Overview</h6>
											<div class="card-action-wrap">
												<div class="btn-group d-lg-flex d-none" role="group" aria-label="Basic outlined example">
													<button type="button" class="btn btn-outline-light active">All</button>
													<button type="button" class="btn btn-outline-light">Sessions</button>
													<button type="button" class="btn btn-outline-light">Source</button>
													<button type="button" class="btn btn-outline-light">Referrals</button>
												</div>
												<select class="form-select d-lg-none d-flex">
													<option  selected="" value="1">All</option>
													<option value="2">Sessions</option>
													<option value="3">Source</option>
													<option value="4">Referrals</option>
												</select>
											</div>
										</div>
										<div class="card-body">
											<div class="text-center">
												<div class="d-inline-block">
													<span class="badge-status">
														<span class="badge bg-primary badge-indicator badge-indicator-nobdr"></span>
														<span class="badge-label">Direct</span>
													</span>
												</div>
												<div class="d-inline-block ms-3">
													<span class="badge-status">
														<span class="badge bg-primary-light-2 badge-indicator badge-indicator-nobdr"></span>
														<span class="badge-label">Organic search</span>
													</span>
												</div>
												<div class="d-inline-block ms-3">
													<span class="badge-status">
														<span class="badge bg-primary-light-4 badge-indicator badge-indicator-nobdr"></span>
														<span class="badge-label">Referral</span>
													</span>
												</div>
											</div>
											<div id="column_chart_2"></div>
											<div class="separator-full mt-5"></div>
											<div class="flex-grow-1 ms-lg-3">
												<div class="row">
													<div class="col-xxl-3 col-sm-6 mb-xxl-0 mb-3">
														<span class="d-block fw-medium fs-7">Users</span>
														<div class="d-flex align-items-center">
															<span class="d-block fs-4 fw-medium text-dark mb-0">8.8k</span>
															<span class="badge badge-sm badge-soft-success ms-1">
																<i class="bi bi-arrow-up"></i> 7.5%
															</span>
														</div>
													</div>
													<div class="col-xxl-3 col-sm-6 mb-xxl-0 mb-3">
														<span class="d-block fw-medium fs-7">Sessions</span>
														<div class="d-flex align-items-center">
															<span class="d-block fs-4 fw-medium text-dark mb-0">18.2k</span>
															<span class="badge badge-sm badge-soft-success ms-1">
																<i class="bi bi-arrow-up"></i> 7.2%
															</span>
														</div>
													</div>
													<div class="col-xxl-3 col-sm-6 mb-xxl-0 mb-3">
														<span class="d-block fw-medium fs-7">Bounce rate</span>
														<div class="d-flex align-items-center">
															<span class="d-block fs-4 fw-medium text-dark mb-0">46.2%</span>
															<span class="badge badge-sm badge-soft-danger ms-1">
																<i class="bi bi-arrow-down"></i> 0.2%
															</span>
														</div>
													</div>
													<div class="col-xxl-3 col-sm-6">
														<span class="d-block fw-medium fs-7">Session duration</span>
														<div class="d-flex align-items-center">
															<span class="d-block fs-4 fw-medium text-dark mb-0">4m 24s</span>
															<span class="badge badge-sm badge-soft-success ms-1">
																<i class="bi bi-arrow-up"></i> 10.8%
															</span>
														</div>
													</div>
												</div>	
											</div>
										</div>
									</div>
								</div>
								<div class="col-xxl-3 col-lg-4 col-md-5 mb-md-4 mb-3">
									<div class="card card-border mb-0  h-100">
										<div class="card-header card-header-action">
											<h6>Returning Customers</h6>
											<div class="card-action-wrap">
												<a class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
												<div class="dropdown-menu dropdown-menu-end">
													<a class="dropdown-item" href="#">Action</a>
													<a class="dropdown-item" href="#">Another action</a>
													<a class="dropdown-item" href="#">Something else here</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#">Separated link</a>
												</div>
											</div>
										</div>
										<div class="card-body text-center">
											<div id="radial_chart_2"></div>
											<div class="d-inline-block mt-4">
												<div class="mb-4">
													<span class="d-block badge-status lh-1">
														<span class="badge bg-primary badge-indicator badge-indicator-nobdr d-inline-block"></span>
														<span class="badge-label d-inline-block">Organic</span>
													</span>
													<span class="d-block text-dark fs-5 fw-medium mb-0 mt-1">$243.50</span>
												</div>
												<div>
													<span class="badge-status lh-1">
														<span class="badge bg-primary-light-2 badge-indicator badge-indicator-nobdr"></span>
														<span class="badge-label">Marketing</span>
													</span>
													<span class="d-block text-dark fs-5 fw-medium mb-0 mt-1">$1469</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>	
							<div class="row">
								<div class="col-md-12 mb-md-4 mb-3">
									<div class="card card-border mb-0 h-100">
										<div class="card-header card-header-action">
											<h6>Active users</h6>
											<div class="card-action-wrap">
												<button type="button" class="btn btn-outline-light">Real time chart</button>
											</div>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-md-8">
													<div id="anim_map_2" class="h-300p"></div>
												</div>
												<div class="col-md-4">
													<div class="media align-items-center mb-3">
														<div class="media-head me-3">
															<div class="avatar avatar-xxs avatar-rounded">
																<img src="dist/fonts/flags/4x3/us.svg" alt="user" class="avatar-img">
															</div>
														</div>
														<div class="media-body">
															<div class="progress-lb-wrap">
																<label class="progress-label mb-0">United States</label>
																<div class="d-flex align-items-center">
																	<div class="progress progress-bar-rounded progress-bar-xs flex-1">
																		<div class="progress-bar bg-blue-dark-3 w-80" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																	<div class="fs-8 mnw-30p ms-3">80%</div>
																</div>
															</div>
															
														</div>
													</div>
													<div class="media align-items-center mb-3">
														<div class="media-head me-3">
															<div class="avatar avatar-xxs avatar-rounded">
																<img src="dist/fonts/flags/4x3/in.svg" alt="user" class="avatar-img">
															</div>
														</div>
														<div class="media-body">
															<div class="progress-lb-wrap">
																<label class="progress-label mb-0">India</label>
																<div class="d-flex align-items-center">
																	<div class="progress progress-bar-rounded progress-bar-xs flex-1">
																		<div class="progress-bar bg-blue w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																	<div class="fs-8 mnw-30p ms-3">50%</div>
																</div>
															</div>
															
														</div>
													</div>
													<div class="media align-items-center mb-3">
														<div class="media-head me-3">
															<div class="avatar avatar-xxs avatar-rounded">
																<img src="dist/fonts/flags/4x3/gb.svg" alt="user" class="avatar-img">
															</div>
														</div>
														<div class="media-body">
															<div class="progress-lb-wrap">
																<label class="progress-label mb-0">United Kingdom</label>
																<div class="d-flex align-items-center">
																	<div class="progress progress-bar-rounded progress-bar-xs flex-1">
																		<div class="progress-bar bg-primary w-30" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																	<div class="fs-8 mnw-30p ms-3">30%</div>
																</div>
															</div>
															
														</div>
													</div>
													<div class="media align-items-center mb-3">
														<div class="media-head me-3">
															<div class="avatar avatar-xxs avatar-rounded">
																<img src="dist/fonts/flags/4x3/au.svg" alt="user" class="avatar-img">
															</div>
														</div>
														<div class="media-body">
															<div class="progress-lb-wrap">
																<label class="progress-label mb-0">Australia</label>
																<div class="d-flex align-items-center">
																	<div class="progress progress-bar-rounded progress-bar-xs flex-1">
																		<div class="progress-bar bg-grey-dark-2 w-15" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																	<div class="fs-8 mnw-30p ms-3">15%</div>
																</div>
															</div>
															
														</div>
													</div>
													<div class="media align-items-center">
														<div class="media-head me-3">
															<div class="avatar avatar-xxs avatar-rounded">
																<img src="dist/fonts/flags/4x3/ca.svg" alt="user" class="avatar-img">
															</div>
														</div>
														<div class="media-body">
															<div class="progress-lb-wrap">
																<label class="progress-label mb-0">Canada</label>
																<div class="d-flex align-items-center">
																	<div class="progress progress-bar-rounded progress-bar-xs flex-1">
																		<div class="progress-bar bg-grey w-10" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																	<div class="fs-8 mnw-30p ms-3">10%</div>
																</div>
															</div>
															
														</div>
													</div>
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 mb-md-4 mb-3">
									<div class="card card-border mb-0 h-100">
										<div class="card-header card-header-action">
											<h6>New Customers
												<span class="badge badge-sm badge-light ms-1">240</span>
											</h6>
											<div class="card-action-wrap">
												<button class="btn btn-sm btn-outline-light"><span><span class="icon"><span class="feather-icon"><i data-feather="upload"></i></span></span><span class="btn-text">import</span></span></button>
												<button class="btn btn-sm btn-primary ms-3"><span><span class="icon"><span class="feather-icon"><i data-feather="plus"></i></span></span><span class="btn-text">Add new</span></span></button>
											</div>
										</div>
										<div class="card-body">
											<div class="contact-list-view">
												<table id="datable_1" class="table nowrap w-100 mb-5">
													<thead>
														<tr>
															<th><span class="form-check fs-6 mb-0">
																<input type="checkbox" class="form-check-input check-select-all" id="customCheck1">
																<label class="form-check-label" for="customCheck1"></label>
															</span></th>
															<th>Name</th>
															<th class="w-25">Usage</th>
															<th>Last Update</th>
															<th>Tags</th>
															<th></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
															</td>
															<td>
																<div class="media align-items-center">
																	<div class="media-head me-2">
																		<div class="avatar avatar-xs avatar-rounded">
																			<img src="dist/img/logo-avatar-1.png" alt="user" class="avatar-img">
																		</div>
																	</div>
																	<div class="media-body">
																		<div class="text-high-em">Phone Pay</div> 
																		<div class="fs-7"><a href="#" class="table-link-text link-medium-em">phonepay.in</a></div> 
																	</div>
																</div>
															</td>
															<td>
																<div class="progress-lb-wrap">
																	<div class="d-flex align-items-center">
																		<div class="progress progress-bar-rounded progress-bar-xs flex-1">
																			<div class="progress-bar bg-blue-dark-3 w-90" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
																		</div>
																		<div class="fs-8 ms-3">90%</div>
																	</div>
																</div>
															</td>
															<td>10 June, 2022</td>
															<td>
																<span class="badge badge-soft-secondary  my-1  me-2">admin</span>
																<span class="badge badge-soft-secondary my-1  me-2">Finance</span>
															</td>
															<td>
																<div class="d-flex align-items-center">
																	<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Edit" href="#"><span class="icon"><span class="feather-icon"><i data-feather="edit-2"></i></span></span></a>
																	<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Delete" href="#"><span class="icon"><span class="feather-icon"><i data-feather="trash"></i></span></span></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>
															</td>
															<td>
																<div class="media align-items-center">
																	<div class="media-head me-2">
																		<div class="avatar avatar-xs avatar-rounded">
																			<img src="dist/img/logo-avatar-2.png" alt="user" class="avatar-img">
																		</div>
																	</div>
																	<div class="media-body">
																		<div class="text-high-em">Swiggy</div> 
																		<div class="fs-7"><a href="#" class="table-link-text link-medium-em">swiggy.com</a></div> 
																	</div>
																</div>
															</td>
															<td>
																<div class="progress-lb-wrap">
																	<div class="d-flex align-items-center">
																		<div class="progress progress-bar-rounded progress-bar-xs flex-1">
																			<div class="progress-bar bg-blue w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
																		</div>
																		<div class="fs-8 ms-3">75%</div>
																	</div>
																</div>
															</td>
															<td>09 July, 2022</td>
															<td>
																<span class="badge badge-soft-secondary my-1  me-2">customer data</span>
																<span class="badge badge-soft-secondary  my-1  me-2">admin</span>
																<span class="badge badge-soft-secondary  my-1  me-2">+4</span>
															</td>
															<td>
																<div class="d-flex align-items-center">
																	<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Edit" href="#"><span class="icon"><span class="feather-icon"><i data-feather="edit-2"></i></span></span></a>
																	<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Delete" href="#"><span class="icon"><span class="feather-icon"><i data-feather="trash"></i></span></span></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>
															</td>
															<td>
																<div class="media align-items-center">
																	<div class="media-head me-2">
																		<div class="avatar avatar-xs avatar-rounded">
																			<img src="dist/img/logo-avatar-3.png" alt="user" class="avatar-img">
																		</div>
																	</div>
																	<div class="media-body">
																		<div class="text-high-em">Coursera</div> 
																		<div class="fs-7"><a href="#" class="table-link-text link-medium-em">coursera.com</a></div> 
																	</div>
																</div>
															</td>
															<td>
																<div class="progress-lb-wrap">
																	<div class="d-flex align-items-center">
																		<div class="progress progress-bar-rounded progress-bar-xs flex-1">
																			<div class="progress-bar bg-primary w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																		</div>
																		<div class="fs-8 ms-3">50%</div>
																	</div>
																</div>
															</td>
															<td>24 Aug, 2022</td>
															<td>
																<span class="badge badge-soft-secondary my-1  me-2">education</span>
																<span class="badge badge-soft-secondary  my-1  me-2">admin</span>
																<span class="badge badge-soft-secondary  my-1  me-2">+3</span>
															</td>
															<td>
																<div class="d-flex align-items-center">
																	<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Edit" href="#"><span class="icon"><span class="feather-icon"><i data-feather="edit-2"></i></span></span></a>
																	<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Delete" href="#"><span class="icon"><span class="feather-icon"><i data-feather="trash"></i></span></span></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>
															</td>
															<td>
																<div class="media align-items-center">
																	<div class="media-head me-2">
																		<div class="avatar avatar-xs avatar-rounded">
																			<img src="dist/img/logo-avatar-4.png" alt="user" class="avatar-img">
																		</div>
																	</div>
																	<div class="media-body">
																		<div class="text-high-em">Tinder</div> 
																		<div class="fs-7"><a href="#" class="table-link-text link-medium-em">tinder.com</a></div> 
																	</div>
																</div>
															</td>
															<td>
																<div class="progress-lb-wrap">
																	<div class="d-flex align-items-center">
																		<div class="progress progress-bar-rounded progress-bar-xs flex-1">
																			<div class="progress-bar bg-primary-dark-2 w-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
																		</div>
																		<div class="fs-8 ms-3">60%</div>
																	</div>
																</div>
															</td>
															<td>17 May, 2022</td>
															<td>
																<span class="badge badge-soft-secondary my-1  me-2">Social</span>
															</td>
															<td>
																<div class="d-flex align-items-center">
																	<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Edit" href="#"><span class="icon"><span class="feather-icon"><i data-feather="edit-2"></i></span></span></a>
																	<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Delete" href="#"><span class="icon"><span class="feather-icon"><i data-feather="trash"></i></span></span></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>
															</td>
															<td>
																<div class="media align-items-center">
																	<div class="media-head me-2">
																		<div class="avatar avatar-xs avatar-rounded">
																			<img src="dist/img/logo-avatar-5.png" alt="user" class="avatar-img">
																		</div>
																	</div>
																	<div class="media-body">
																		<div class="text-high-em">PCD</div> 
																		<div class="fs-7"><a href="#" class="table-link-text link-medium-em">pcdeals.com</a></div> 
																	</div>
																</div>
															</td>
															<td>
																<div class="progress-lb-wrap">
																	<div class="d-flex align-items-center">
																		<div class="progress progress-bar-rounded progress-bar-xs flex-1">
																			<div class="progress-bar bg-grey w-30" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
																		</div>
																		<div class="fs-8 ms-3">30%</div>
																	</div>
																</div>
															</td>
															<td>13 July, 2022</td>
															<td>
																<span class="badge badge-soft-secondary my-1  me-2">Portal</span>
																<span class="badge badge-soft-secondary  my-1  me-2">admin</span>
																<span class="badge badge-soft-secondary  my-1  me-2">+3</span>
															</td>
															<td>
																<div class="d-flex align-items-center">
																	<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Edit" href="#"><span class="icon"><span class="feather-icon"><i data-feather="edit-2"></i></span></span></a>
																	<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Delete" href="#"><span class="icon"><span class="feather-icon"><i data-feather="trash"></i></span></span></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>
															</td>
															<td>
																<div class="media align-items-center">
																	<div class="media-head me-2">
																		<div class="avatar avatar-xs avatar-rounded">
																			<img src="dist/img/logo-avatar-6.png" alt="user" class="avatar-img">
																		</div>
																	</div>
																	<div class="media-body">
																		<div class="text-high-em">Icons 8</div> 
																		<div class="fs-7"><a href="#" class="table-link-text link-medium-em">icons8.com</a></div> 
																	</div>
																</div>
															</td>
															<td>
																<div class="progress-lb-wrap">
																	<div class="d-flex align-items-center">
																		<div class="progress progress-bar-rounded progress-bar-xs flex-1">
																			<div class="progress-bar bg-green-dark-1 w-45" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
																		</div>
																		<div class="fs-8 ms-3">45%</div>
																	</div>
																</div>
															</td>
															<td>14 July, 2022</td>
															<td>
																<span class="badge badge-soft-secondary my-1  me-2">Library</span>
																<span class="badge badge-soft-secondary  my-1  me-2">Asset</span>
															</td>
															<td>
																<div class="d-flex align-items-center">
																	<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Edit" href="#"><span class="icon"><span class="feather-icon"><i data-feather="edit-2"></i></span></span></a>
																	<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Delete" href="#"><span class="icon"><span class="feather-icon"><i data-feather="trash"></i></span></span></a>
																</div>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>	
						</div>
					</div>
				</div>
				<!-- /Page Body -->		
			</div>
			
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