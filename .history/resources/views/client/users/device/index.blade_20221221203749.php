@extends('client.layouts.app')
@section('content')
<div class="container-xxl">												
<div class="table-responsive">
<table class="table nowrap table-advance">
	<thead>
		<tr>
			<th class="mnw-150p">Name</th>
			<th class="mnw-200p">Email address</th>
			<th class="mnw-150p">Phone</th>
			<th>Tags</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="text-truncate">
				<div class="media align-items-center">
					<div class="media-head me-3">
						<div class="avatar avatar-xs">
							<img src="dist/img/avatar1.jpg" alt="user" class="avatar-img">
						</div>
					</div>
					<div class="media-body mnw-0">
						<a href="#" class="table-link-text text-high-em text-truncate mb-0">Kim L. Gonzales</a>
					</div>
				</div>
			</td>
			<td class="text-truncate">JamesDJames@jourrapide.com</td>
			<td class="text-truncate">+91-24-3432-1567</td>
			<td><span class="badge badge-lg badge-light">Collaboration</span></td>
			<td>
				<div  class="d-flex align-items-center justify-content-end">
					<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Archive" href="#"><span class="icon"><span class="feather-icon"><i data-feather="archive"></i></span></span></a>
					<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit" href="#"><span class="icon"><span class="feather-icon"><i data-feather="edit-2"></i></span></span></a>
					<div class="dropdown" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="More">
						<button class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover dropdown-toggle no-caret" aria-expanded="false" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></button>
						<div role="menu" class="dropdown-menu dropdown-menu-right">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Separated link</a>
						</div>
					</div>
				</div>
			</td>
		</tr>
	</tbody>
</table>
</div>
</div>												

@endsection