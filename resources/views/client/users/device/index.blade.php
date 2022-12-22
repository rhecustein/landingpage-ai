@extends('client.layouts.app')
@section('content')
    <div class="container-xxl">
    <div class="d-flex mt-2">
						<div class="flex-1">
							<h1 class="pg-title">Device Manager</h1>
							<p class="p-lg col-lg-8">Untuk menambahkan device atau nomor telepon agar dapat membuka akses pada chat bot kami, anda dapat memperbolehkan device atau nomor telepon tersebut untuk membuka akses pada chat bot tanpa batas, dengan cara memasukkan nomor telepon yang dimulai dengan angka "62".</p>
						</div>
					</div>
        <hr>
        <div class="row mt-5">
            <div class="col-md-3 col-12">
                <a href="{{ route('user.devices.create') }}" class="btn btn-primary">
                    tambah device
                </a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table nowrap table-advance">
                <thead>
                    <tr>
                        <th class="mnw-150p">Name</th>
                        <th class="mnw-150p">Phone</th>
                        <th>Tags</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($devices as $device)
                        <tr>
                            <td class="text-truncate">
                                {{ $device->name }}
                            </td>
                            <td class="text-truncate">{{ $device->phone }}</td>
                            <td>
                                @foreach ($device->tags as $tag)
                                    <span class="badge badge-lg badge-light">{{ $tag->name }}</span>
                                @endforeach
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-end">
                                    <a href="{{ route('user.devices.edit', $device->id) }}"
                                        class="btn btn-icon btn-rounded btn-flush-primary flush-soft-hover"
                                        data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="icon"><span
                                                class="feather-icon"><i data-feather="edit-3"></i></span></span></a>
                                    <span>
                                        <form action="{{ route('user.devices.destroy', $device->id) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button onclick="return confirm('Are you sure you want to delete this item?');"
                                                type="submit"
                                                class="btn btn-icon btn-rounded btn-flush-danger flush-soft-hover"
                                                data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                <span class="icon">
                                                    <span class="feather-icon">
                                                        <i data-feather="trash-2"></i>
                                                    </span>
                                                </span>
                                            </button>
                                        </form>
                                    </span>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td rowspan="4">belum ada data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
