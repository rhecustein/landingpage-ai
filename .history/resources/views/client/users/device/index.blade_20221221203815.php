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
		</tr>
	</tbody>
</table>
</div>
</div>												

@endsection