@extends('client.layouts.app')
@section('content')
				
        <!-- Page Body -->
        <div class="invoice-body">
								<div data-simplebar class="nicescroll-bar">
									<div class="invoice-list-view">
										<table id="datable_1" class="table nowrap w-100 mb-5">
											<thead>
												<tr>
													<th><span class="form-check mb-0">
														<input type="checkbox" class="form-check-input check-select-all" id="customCheck1">
														<label class="form-check-label" for="customCheck1"></label>
													</span></th>
													<th>Invoice #</th>
													<th>Date</th>
													<th>Reciplent</th>
													<th>Status</th>
													<th>Activity</th>
													<th>Amount</th>
													<th>Actions</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td></td>
													<td><a href="#" class="table-link-text link-high-em">11234</a></td>
													<td>13 Jan, 2020</td>
													<td>
														<div class="text-dark">Patrik Schelton</div>
														<div class="fs-7">morgan@jampack.com</div>
													</td>
													<td><span class="badge badge-light">draft</span></td>
													<td>-</td>
													<td>$ 2,300.00 USD</td>
													<td>
														<div class="d-flex align-items-center">
															<div class="btn-group selectable-split-dropdown">
																<button type="button" class="btn btn-outline-light btn-dyn-text w-100p">Edit</button>
																<button type="button" class="btn btn-outline-light dropdown-toggle dropdown-toggle-split me-3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<span class="sr-only">Toggle Dropdown</span>
																</button>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item" href="#">Remind</a>
																	<a class="dropdown-item" href="#">Sent</a>
																	<a class="dropdown-item" href="#">Active</a>
																	<div class="dropdown-divider"></div>
																	<a class="dropdown-item" href="#">Edit</a>
																</div>
															</div>
															<div class="d-flex">
																<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Archive" href="#"><span class="btn-icon-wrap"><span class="feather-icon"><i data-feather="archive"></i></span></span></a>
																<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit" href="contact-details.html"><span class="btn-icon-wrap"><span class="feather-icon"><i data-feather="edit"></i></span></span></a>
																<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete" href="#"><span class="btn-icon-wrap"><span class="feather-icon"><i data-feather="trash-2"></i></span></span></a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td></td>
													<td><a href="#" class="table-link-text link-high-em">11235</a></td>
													<td>13 Jan, 2020</td>
													<td>
														<div class="text-dark">Huma Therman</div>
														<div class="fs-7">huma@clariesup.au</div>
													</td>
													<td>
														<span class="badge badge-danger">Unpaid</span>
														<div class="fs-8 mt-1">Due 25 Apr 2020</div>
													</td>
													<td>Sent</td>
													<td>$ 780.00 USD</td>
													<td>
														<div class="d-flex align-items-center">
															<div class="btn-group selectable-split-dropdown">
																<button type="button" class="btn btn-outline-light btn-dyn-text w-100p">Remind</button>
																<button type="button" class="btn btn-outline-light dropdown-toggle dropdown-toggle-split me-3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<span class="sr-only">Toggle Dropdown</span>
																</button>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item" href="#">Remind</a>
																	<a class="dropdown-item" href="#">Sent</a>
																	<a class="dropdown-item" href="#">Active</a>
																	<div class="dropdown-divider"></div>
																	<a class="dropdown-item" href="#">Edit</a>
																</div>
															</div>
															<div class="d-flex">
																<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Archive" href="#"><span class="btn-icon-wrap"><span class="feather-icon"><i data-feather="archive"></i></span></span></a>
																<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit" href="contact-details.html"><span class="btn-icon-wrap"><span class="feather-icon"><i data-feather="edit"></i></span></span></a>
																<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete" href="#"><span class="btn-icon-wrap"><span class="feather-icon"><i data-feather="trash-2"></i></span></span></a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td></td>
													<td><a href="#" class="table-link-text link-high-em">11236</a></td>
													<td>13 Jan, 2020</td>
													<td>
														<div class="text-dark">Charlie Chaplin</div>
														<div class="fs-7">charlie@leernoca.monster</div>
													</td>
													<td>
														<span class="badge badge-primary">Paid</span>
													</td>
													<td>Done</td>
													<td>$ 567.00 USD</td>
													<td>
														<div class="d-flex align-items-center">
															<div class="btn-group selectable-split-dropdown">
																<button type="button" class="btn btn-outline-light btn-dyn-text w-100p">Active</button>
																<button type="button" class="btn btn-outline-light dropdown-toggle dropdown-toggle-split me-3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<span class="sr-only">Toggle Dropdown</span>
																</button>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item" href="#">Remind</a>
																	<a class="dropdown-item" href="#">Sent</a>
																	<a class="dropdown-item" href="#">Active</a>
																	<div class="dropdown-divider"></div>
																	<a class="dropdown-item" href="#">Edit</a>
																</div>
															</div>
															<div class="d-flex">
																<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Archive" href="#"><span class="btn-icon-wrap"><span class="feather-icon"><i data-feather="archive"></i></span></span></a>
																<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit" href="contact-details.html"><span class="btn-icon-wrap"><span class="feather-icon"><i data-feather="edit"></i></span></span></a>
																<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete" href="#"><span class="btn-icon-wrap"><span class="feather-icon"><i data-feather="trash-2"></i></span></span></a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td></td>
													<td><a href="#" class="table-link-text link-high-em">11237</a></td>
													<td>13 Jan, 2020</td>
													<td>
														<div class="text-dark">Winston Churchil</div>
														<div class="fs-7">winston@worthniza.ga</div>
													</td>
													<td>
														<span class="badge badge-danger">Unpaid</span>
														<div class="fs-8 mt-1">Due 12 Sep 2020</div>
													</td>
													<td>-</td>
													<td>$ 1,500.00 USD</td>
													<td>
														<div class="d-flex align-items-center">
															<div class="btn-group selectable-split-dropdown">
																<button type="button" class="btn btn-outline-light btn-dyn-text w-100p">Sent</button>
																<button type="button" class="btn btn-outline-light dropdown-toggle dropdown-toggle-split me-3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<span class="sr-only">Toggle Dropdown</span>
																</button>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item" href="#">Remind</a>
																	<a class="dropdown-item" href="#">Sent</a>
																	<a class="dropdown-item" href="#">Active</a>
																	<div class="dropdown-divider"></div>
																	<a class="dropdown-item" href="#">Edit</a>
																</div>
															</div>
															<div class="d-flex">
																<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Archive" href="#"><span class="btn-icon-wrap"><span class="feather-icon"><i data-feather="archive"></i></span></span></a>
																<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit" href="contact-details.html"><span class="btn-icon-wrap"><span class="feather-icon"><i data-feather="edit"></i></span></span></a>
																<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete" href="#"><span class="btn-icon-wrap"><span class="feather-icon"><i data-feather="trash-2"></i></span></span></a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td></td>
													<td><a href="#" class="table-link-text link-high-em">11238</a></td>
													<td>13 Jan, 2020</td>
													<td>
														<div class="text-dark">Jaquiline Joker</div>
														<div class="fs-7">jaquljoker@jampack.com</div>
													</td>
													<td>
														<span class="badge badge-danger">Unpaid</span>
														<div class="fs-8 mt-1">Due 18 Oct 2020</div>
													</td>
													<td>Sent</td>
													<td>$ 900.00 USD</td>
													<td>
														<div class="d-flex align-items-center">
															<div class="btn-group selectable-split-dropdown">
																<button type="button" class="btn btn-outline-light btn-dyn-text w-100p">Remind</button>
																<button type="button" class="btn btn-outline-light dropdown-toggle dropdown-toggle-split me-3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<span class="sr-only">Toggle Dropdown</span>
																</button>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item" href="#">Remind</a>
																	<a class="dropdown-item" href="#">Sent</a>
																	<a class="dropdown-item" href="#">Active</a>
																	<div class="dropdown-divider"></div>
																	<a class="dropdown-item" href="#">Edit</a>
																</div>
															</div>
															<div class="d-flex">
																<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Archive" href="#"><span class="btn-icon-wrap"><span class="feather-icon"><i data-feather="archive"></i></span></span></a>
																<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit" href="contact-details.html"><span class="btn-icon-wrap"><span class="feather-icon"><i data-feather="edit"></i></span></span></a>
																<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete" href="#"><span class="btn-icon-wrap"><span class="feather-icon"><i data-feather="trash-2"></i></span></span></a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td></td>
													<td><a href="#" class="table-link-text link-high-em">11239</a></td>
													<td>3 July, 2020</td>
													<td>
														<div class="text-dark">Tom Cruz</div>
														<div class="fs-7">tomcz@jampack.com</div>
													</td>
													<td>
														<span class="badge badge-primary">Paid</span>
													</td>
													<td>Done</td>
													<td>$ 4,750.00 USD</td>
													<td>
														<div class="d-flex align-items-center">
															<div class="btn-group selectable-split-dropdown">
																<button type="button" class="btn btn-outline-light btn-dyn-text w-100p">Active</button>
																<button type="button" class="btn btn-outline-light dropdown-toggle dropdown-toggle-split me-3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<span class="sr-only">Toggle Dropdown</span>
																</button>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item" href="#">Remind</a>
																	<a class="dropdown-item" href="#">Sent</a>
																	<a class="dropdown-item" href="#">Active</a>
																	<div class="dropdown-divider"></div>
																	<a class="dropdown-item" href="#">Edit</a>
																</div>
															</div>
															<div class="d-flex">
																<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Archive" href="#"><span class="btn-icon-wrap"><span class="feather-icon"><i data-feather="archive"></i></span></span></a>
																<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit" href="contact-details.html"><span class="btn-icon-wrap"><span class="feather-icon"><i data-feather="edit"></i></span></span></a>
																<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete" href="#"><span class="btn-icon-wrap"><span class="feather-icon"><i data-feather="trash-2"></i></span></span></a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td></td>
													<td><a href="#" class="table-link-text link-high-em">11240</a></td>
													<td>24 Jun, 2019</td>
													<td>
														<div class="text-dark">Danial Craig</div>
														<div class="fs-7">danialc@jampack.com</div>
													</td>
													<td>
														<span class="badge badge-primary">Paid</span>
														<div class="fs-8 mt-1">Due 25 Apr 2020</div>
													</td>
													<td>Done</td>
													<td>$ 2,300.00 USD</td>
													<td>
														<div class="d-flex align-items-center">
															<div class="btn-group selectable-split-dropdown">
																<button type="button" class="btn btn-outline-light btn-dyn-text w-100p">Active</button>
																<button type="button" class="btn btn-outline-light dropdown-toggle dropdown-toggle-split me-3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<span class="sr-only">Toggle Dropdown</span>
																</button>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item" href="#">Remind</a>
																	<a class="dropdown-item" href="#">Sent</a>
																	<a class="dropdown-item" href="#">Active</a>
																	<div class="dropdown-divider"></div>
																	<a class="dropdown-item" href="#">Edit</a>
																</div>
															</div>
															<div class="d-flex">
																<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Archive" href="#"><span class="btn-icon-wrap"><span class="feather-icon"><i data-feather="archive"></i></span></span></a>
																<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit" href="contact-details.html"><span class="btn-icon-wrap"><span class="feather-icon"><i data-feather="edit"></i></span></span></a>
																<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete" href="#"><span class="btn-icon-wrap"><span class="feather-icon"><i data-feather="trash-2"></i></span></span></a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td></td>
													<td><a href="#" class="table-link-text link-high-em">11241</a></td>
													<td>24 Jun, 2019</td>
													<td>
														<div class="text-dark">Katharine Jones</div>
														<div class="fs-7">joneskath@jampack.com</div>
													</td>
													<td>
														<span class="badge badge-primary">Paid</span>
													</td>
													<td>Done</td>
													<td>$ 7,650.00 USD</td>
													<td>
														<div class="d-flex align-items-center">
															<div class="btn-group selectable-split-dropdown">
																<button type="button" class="btn btn-outline-light btn-dyn-text w-100p">Active</button>
																<button type="button" class="btn btn-outline-light dropdown-toggle dropdown-toggle-split me-3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<span class="sr-only">Toggle Dropdown</span>
																</button>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item" href="#">Remind</a>
																	<a class="dropdown-item" href="#">Sent</a>
																	<a class="dropdown-item" href="#">Active</a>
																	<div class="dropdown-divider"></div>
																	<a class="dropdown-item" href="#">Edit</a>
																</div>
															</div>
															<div class="d-flex">
																<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Archive" href="#"><span class="btn-icon-wrap"><span class="feather-icon"><i data-feather="archive"></i></span></span></a>
																<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit" href="contact-details.html"><span class="btn-icon-wrap"><span class="feather-icon"><i data-feather="edit"></i></span></span></a>
																<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete" href="#"><span class="btn-icon-wrap"><span class="feather-icon"><i data-feather="trash-2"></i></span></span></a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td></td>
													<td><a href="#" class="table-link-text link-high-em">11242</a></td>
													<td>24 Jun, 2019</td>
													<td>
														<div class="text-dark">Hence Work</div>
														<div class="fs-7">contact@hencework.com</div>
													</td>
													<td>
														<span class="badge badge-light">Draft</span>
													</td>
													<td>-</td>
													<td>$ 4,500.00 USD</td>
													<td>
														<div class="d-flex align-items-center">
															<div class="btn-group selectable-split-dropdown">
																<button type="button" class="btn btn-outline-light btn-dyn-text w-100p">Sent</button>
																<button type="button" class="btn btn-outline-light dropdown-toggle dropdown-toggle-split me-3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<span class="sr-only">Toggle Dropdown</span>
																</button>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item" href="#">Remind</a>
																	<a class="dropdown-item" href="#">Sent</a>
																	<a class="dropdown-item" href="#">Active</a>
																	<div class="dropdown-divider"></div>
																	<a class="dropdown-item" href="#">Edit</a>
																</div>
															</div>
															<div class="d-flex">
																<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Archive" href="#"><span class="btn-icon-wrap"><span class="feather-icon"><i data-feather="archive"></i></span></span></a>
																<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit" href="contact-details.html"><span class="btn-icon-wrap"><span class="feather-icon"><i data-feather="edit"></i></span></span></a>
																<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete" href="#"><span class="btn-icon-wrap"><span class="feather-icon"><i data-feather="trash-2"></i></span></span></a>
															</div>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									
									</div>
								
								</div>
							</div>
			<!-- /Page Body -->
@endsection