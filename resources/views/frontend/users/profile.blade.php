@extends('client.layouts.app')
@section('content')
    <div class="hk-pg-body">
        <div class="container-xxl">
            <div class="profile-wrap">
                <div class="profile-img-wrap">
                    <img class="img-fluid rounded-5" src="{{ asset('html/classic/dist/img/profile-bg.jpg') }}"
                        alt="Image Description">
                </div>
                <div class="profile-intro">
                    <div class="card card-flush mw-400p bg-transparent">
                        <div class="card-body">
                            <div class="avatar avatar-xxl avatar-rounded position-relative mb-2">
                                <img src="{{ asset($user->avatar) }}" alt="user"
                                    class="avatar-img border border-4 border-white">
                                <span
                                    class="badge badge-indicator badge-success  badge-indicator-xl position-bottom-end-overflow-1 me-1"></span>
                            </div>
                            <h4>
                                {{ $user->userprofile->name }}
                                <i class="bi-check-circle-fill fs-6 text-blue" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="" data-bs-original-title="Top endorsed"></i>
                            </h4>
                            <p>
                                Member sejak {{ $user->userprofile->created_at->diffForHumans() }}
                            </p>
                        </div>
                    </div>
                </div>
                <header class="profile-header">
                    <ul class="nav nav-line nav-tabs nav-icon nav-light h-100 d-md-flex d-none">
                        <li class="nav-item">
                            <a class="d-flex align-items-center nav-link active h-100" data-bs-toggle="tab" href="#">
                                <span class="nav-link-text">Profile</span>
                            </a>
                        </li>
                    </ul>

                </header>
                <div class="row mt-7">
                    <div class="col-lg-4 mb-lg-0 mb-3">
                        <div class="card card-border mb-lg-4 mb-3">
                            <div class="card-body">
                                <div class="d-flex text-center">
                                    <div class="flex-1 border-end">
                                        <div>
                                            <span class="d-block fs-4 text-dark mb-1">-</span>
                                            <span class="d-block text-capitalize fs-7">Request</span>
                                        </div>
                                    </div>
                                    <div class="flex-1 border-end">
                                        <div>
                                            <span class="d-block fs-4 text-dark mb-1">-</span>
                                            <span class="d-block text-capitalize fs-7">Text</span>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <div>
                                            <span class="d-block fs-4 text-dark mb-1">-</span>
                                            <span class="d-block text-capitalize fs-7">Images</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item border-0"><span><i
                                            class="bi bi-calendar-check-fill text-disabled me-2"></i><span
                                            class="text-muted">Tanggal Bergabung :</span></span><span
                                        class="ms-2">{{ $user->userprofile->created_at->isoFormat('D-MMMM-Y') }}</span>
                                </li>
                                <li class="list-group-item border-0"><span><i
                                            class="bi bi-briefcase-fill text-disabled me-2"></i><span
                                            class="text-muted">Status :</span></span><span class="ms-2">-</span>
                                </li>
                                <li class="list-group-item border-0"><span><i
                                            class="bi bi-house-door-fill text-disabled me-2"></i><span
                                            class="text-muted">Kota :</span></span><span class="ms-2">-</span></li>
                                <li class="list-group-item border-0"><span><i
                                            class="bi bi-geo-alt-fill text-disabled me-2"></i><span class="text-muted">Motto
                                            :</span></span><span class="ms-2">-</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card card-border card-profile-feed mb-lg-4 mb-3">
                            <div class="card-header card-header-action">

                                <div class="fw-medium text-dark">Change profile</div>

                            </div>
                            <div class="card-body">

                                <div class="card card-border">
                                    <div class="position-relative">

                                    </div>
                                    <div class="card-body">
                                        <form class="row g-3" action="{{ route('user.profile.update') }}"
                                            enctype="multipart/form-data" method="POST">
                                            @method('put')
                                            @csrf
                                            <div class="col-md-6">
                                                <label for="first_name" class="form-label">Nama Depan</label>
                                                <input type="text" class="form-control" id="first_name" name="first_name"
                                                    value="{{ $user->userprofile->first_name }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="last_name" class="form-label">nama Belakang</label>
                                                <input type="text" class="form-control" id="last_name" name="last_name"
                                                    value="{{ $user->userprofile->last_name }}">
                                            </div>
                                            <div class="col-12">
                                                <label for="bio" class="form-label">Bio</label>
                                                <textarea id="bio" name="bio" class="form-control" rows="3" placeholder="Textarea">{{ $user->userprofile->bio }}</textarea>
                                            </div>
                                            <div class="col-12">
                                                <label for="address" class="form-label">Alamat</label>
                                                <input type="text" class="form-control" id="address" name="address"
                                                    value="{{ $user->userprofile->address }}">
                                            </div>
                                            <div class="col-12">
                                                <label for="url_website" class="form-label">Url website</label>
                                                <input type="text" class="form-control"
                                                    id="url_website"name="url_website"
                                                    value="{{ $user->userprofile->url_website }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="url_facebook" class="form-label">Url Facebook</label>
                                                <input type="text" class="form-control" id="url_facebook"
                                                    name="url_facebook" value="{{ $user->userprofile->url_facebook }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="url_twitter" class="form-label">Url Twitter</label>
                                                <input type="text" class="form-control" id="url_twitter"
                                                    name="url_twitter" value="{{ $user->userprofile->url_twitter }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="url_linkedin" class="form-label">Url Linkedin </label>
                                                <input type="text" class="form-control" id="url_linkedin"
                                                    name="url_linkedin" value="{{ $user->userprofile->url_linkedin }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="url_instagram" class="form-label">Url Instagram</label>
                                                <input type="text" class="form-control" id="url_instagram"
                                                    name="url_instagram" value="{{ $user->userprofile->url_instagram }}">
                                            </div>
                                            <div class="col-12">
                                                <label for="avatar" class="form-label">Photo</label>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="avatar avatar-rounded position-relative">
                                                            <img src="{{ asset($user->avatar) }}"
                                                                alt="{{ $user->name }}" class="avatar-img">
                                                            <span
                                                                class="badge badge-success badge-indicator badge-indicator-xl position-top-end-overflow-1"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input class="form-control" type="file" id="avatar"
                                                            name="avatar">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    value="{{ $user->email }}" readonly>
                                            </div>
                                            <div class="col-12">
                                                <label for="mobile" class="form-label">phone</label>
                                                <input type="text" class="form-control" id="mobile" name="mobile"
                                                    value="{{ $user->mobile }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="date_of_birth" class="form-label">Tanggal Lahir</label>
                                                <input type="date" class="form-control" id="date_of_birth"
                                                    name="date_of_birth"
                                                    value="{{ $user->userprofile->date_of_birth?->toDateString() }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="gender" class="form-label">Jenis Kelamin</label>
                                                <select class="form-select mb-3" id="gender" name="gender">
                                                    <option value="" selected>jenis kelamin</option>
                                                    <option value="l"
                                                        {{ $user->userprofile->gender == 'l' ? 'selected' : '' }}>Laki-laki
                                                    </option>
                                                    <option value="p"
                                                        {{ $user->userprofile->gender == 'p' ? 'selected' : '' }}>perempuan
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary w-100">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-border card-profile-feed mb-lg-4 mb-3">
                            <div class="card-header card-header-action">

                                <div class="fw-medium text-dark">Change Password</div>

                            </div>
                            <div class="card-body">
                                <p class="card-text mb-5">Ganti kata sandi Anda secara berkala untuk meningkatkan keamanan
                                    akun Anda.</p>
                                <div class="card card-border">
                                    <div class="position-relative">
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->only(['old_password', 'password']) as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="card-body">
                                        <h5>Ubah kata sandi Anda untuk keamanan yang lebih baik.</h5>
                                        <form action="{{ route('user.profile.change_password') }}" method="post">
                                            @method('put')
                                            @csrf
                                            <div class="mb-3">
                                                <label for="old_password" class="form-label">Password Lama</label>
                                                <input type="text" class="form-control" id="old_password"
                                                    name="old_password">
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password Baru</label>
                                                <input type="text" class="form-control" id="password"
                                                    name="password">
                                            </div>
                                            <div class="mb-3">
                                                <label for="password_confirmation" class="form-label">Konfirmasi
                                                    Password</label>
                                                <input type="text" class="form-control" id="password_confirmation"
                                                    name="password_confirmation">
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-rounded">
                                                Save changes
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
