@extends('client.layouts.app')
@section('content')
    <div class="container-xxl">
        <div class="row mt-5">
            <div class="col-md-3 col-12">
                <a href="{{ route('frontend.users.device_create') }}" class="btn btn-primary">
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
                                    <a href="#" class="btn btn-icon btn-rounded btn-flush-primary flush-soft-hover"
                                        data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="icon"><span
                                                class="feather-icon"><i data-feather="edit-3"></i></span></span></a>
                                    <a href="#" class="btn btn-icon btn-rounded btn-flush-danger flush-soft-hover"
                                        data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="icon"><span
                                                class="feather-icon"><i data-feather="trash-2"></i></span></span></a>
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
