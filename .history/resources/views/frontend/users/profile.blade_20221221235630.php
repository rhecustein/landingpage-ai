@extends('client.layouts.app')
@section('content')
<div class="hk-pg-body">
    <div class="container-xxl">
        <div class="profile-wrap">
            <div class="profile-img-wrap">
                <img class="img-fluid rounded-5" src="{{ asset('html/classic/dist/img/profile-bg.jpg') }}" alt="Image Description">
            </div>
            <div class="profile-intro">
                <div class="card card-flush mw-400p bg-transparent">
                    <div class="card-body">
                        <div class="avatar avatar-xxl avatar-rounded position-relative mb-2">
                            <img src="{{ asset('html/classic/dist/img/avatar3.jpg') }}" alt="user" class="avatar-img border border-4 border-white">
                            <span
                                class="badge badge-indicator badge-success  badge-indicator-xl position-bottom-end-overflow-1 me-1"></span>
                        </div>
                        <h4>Kate Jones
                            <i class="bi-check-circle-fill fs-6 text-blue" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="" data-bs-original-title="Top endorsed"></i>
                        </h4>
                        <p>
                            Venenatis tellus in metus vulputate
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
                <select class="form-select mw-200p d-md-none d-flex me-2">
                    <option selected="">Profile</option>
                    <option value="1">Teams</option>
                    <option value="2">Projects</option>
                    <option value="3">Connection</option>
                </select>
            </header>
            <div class="row mt-7">
                <div class="col-lg-4 mb-lg-0 mb-3">
                    <div class="card card-border mb-lg-4 mb-3">
                        <div class="card-header card-header-action">
                            <div class="media align-items-center">
                                <div class="media-head me-2">
                                    <div class="avatar avatar-sm avatar-rounded">
                                        <img src="{{ asset('html/classic/dist/img/avatar3.jpg') }}" alt="user" class="avatar-img">
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="fw-medium text-dark">Kate Jones</div>
                                    <div class="fs-7">Business Manager</div>
                                </div>
                            </div>
                            <div class="card-action-wrap">
                                <a class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover dropdown-toggle no-caret"
                                    href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i
                                                data-feather="settings"></i></span></span></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex text-center">
                                <div class="flex-1 border-end">
                                    <div>
                                        <span class="d-block fs-4 text-dark mb-1">154</span>
                                        <span class="d-block text-capitalize fs-7">photos</span>
                                    </div>
                                </div>
                                <div class="flex-1 border-end">
                                    <div>
                                        <span class="d-block fs-4 text-dark mb-1">65</span>
                                        <span class="d-block text-capitalize fs-7">followers</span>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <div>
                                        <span class="d-block fs-4 text-dark mb-1">433</span>
                                        <span class="d-block text-capitalize fs-7">views</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item border-0"><span><i
                                        class="bi bi-calendar-check-fill text-disabled me-2"></i><span
                                        class="text-muted">Went to:</span></span><span class="ms-2">Oh, Canada</span>
                            </li>
                            <li class="list-group-item border-0"><span><i
                                        class="bi bi-briefcase-fill text-disabled me-2"></i><span
                                        class="text-muted">Worked at:</span></span><span class="ms-2">Companey</span>
                            </li>
                            <li class="list-group-item border-0"><span><i
                                        class="bi bi-house-door-fill text-disabled me-2"></i><span
                                        class="text-muted">Lives in:</span></span><span class="ms-2">San Francisco,
                                    CA</span></li>
                            <li class="list-group-item border-0"><span><i
                                        class="bi bi-geo-alt-fill text-disabled me-2"></i><span
                                        class="text-muted">From:</span></span><span class="ms-2">Settle, WA</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card card-border card-profile-feed mb-lg-4 mb-3">
                        <div class="card-header card-header-action">
                            <div class="media align-items-center">
                                <div class="media-head me-2">
                                    <div class="avatar avatar-sm avatar-rounded">
                                        <img src="{{ asset('html/classic/dist/img/avatar3.jpg') }}" alt="user" class="avatar-img">
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="fw-medium text-dark">Change Password</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text mb-5">There was that time artists at Sequence opted to hand-Sharpie the
                                lorem ipsum passage on a line of paper bags they designed for Chipotle.</p>
                            <div class="card card-border">
                                <div class="position-relative">
                                    <a href="#" class="btn btn-dark btn-rounded btn-pg-link"><span><span
                                                class="icon"><span class="feather-icon"><i
                                                        data-feather="link-2"></i></span></span><span>Website</span></span></a>

                                </div>
                                <div class="card-body">
                                    <h5>Bacon chicken turducken spare ribs.</h5>
                                    <p class="card-text">Of course, we'd be remiss not to include the veritable cadre of
                                        lorem ipsum knock offs featuring: Bacon Ipsum, Hipster Ipsum, Corporate Ipsum,
                                        Legal Ipsum.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer justify-content-between">
                            <div>
                                <a href="#"><i class="bi bi-heart-fill text-primary"></i>30K</a>
                            </div>
                            <div>
                                <a href="#">1K comments</a>
                                <a href="#">12 shares</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection