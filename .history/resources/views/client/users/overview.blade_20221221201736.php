@extends('client.layouts.app')
@section('content')
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
                        <span class="input-prefix"><span class="feather-icon"><i
                                    data-feather="calendar"></i></span></span>
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
                            <h6>Penggunaan Harian</h6>
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <div class="d-inline-block">
                                    <span class="badge-status">
                                        <span class="badge bg-primary badge-indicator badge-indicator-nobdr"></span>
                                        <span class="badge-label">Text</span>
                                    </span>
                                </div>
                                <div class="d-inline-block ms-3">
                                    <span class="badge-status">
                                        <span
                                            class="badge bg-primary-light-2 badge-indicator badge-indicator-nobdr"></span>
                                        <span class="badge-label">Images</span>
                                    </span>
                                </div>
                                <div class="d-inline-block ms-3">
                                    <span class="badge-status">
                                        <span
                                            class="badge bg-primary-light-4 badge-indicator badge-indicator-nobdr"></span>
                                        <span class="badge-label">Voice</span>
                                    </span>
                                </div>
                            </div>
                            <div id="column_chart_2"></div>
                            <div class="separator-full mt-5"></div>
                            <div class="flex-grow-1 ms-lg-3">
                                <div class="row">
                                    <div class="col-xxl-3 col-sm-6 mb-xxl-0 mb-3">
                                        <span class="d-block fw-medium fs-7">Device</span>
                                        <div class="d-flex align-items-center">
                                            <span class="d-block fs-4 fw-medium text-dark mb-0">8.8k</span>
                                            <span class="badge badge-sm badge-soft-success ms-1">
                                                <i class="bi bi-arrow-up"></i> 7.5%
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-sm-6 mb-xxl-0 mb-3">
                                        <span class="d-block fw-medium fs-7">Request</span>
                                        <div class="d-flex align-items-center">
                                            <span class="d-block fs-4 fw-medium text-dark mb-0">18.2k</span>
                                            <span class="badge badge-sm badge-soft-success ms-1">
                                                <i class="bi bi-arrow-up"></i> 7.2%
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-sm-6 mb-xxl-0 mb-3">
                                        <span class="d-block fw-medium fs-7">Text</span>
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
                            <h6>Pemakaian bulan ini</h6>
                        </div>
                        <div class="card-body text-center">
                            <div id="radial_chart_2"></div>
                            <div class="d-inline-block mt-4">
                                <div class="mb-4">
                                    <span class="d-block badge-status lh-1">
                                        <span
                                            class="badge bg-primary badge-indicator badge-indicator-nobdr d-inline-block"></span>
                                        <span class="badge-label d-inline-block">Text</span>
                                    </span>
                                    <span class="d-block text-dark fs-5 fw-medium mb-0 mt-1">$243.50</span>
                                </div>
                                <div>
                                    <span class="badge-status lh-1">
                                        <span
                                            class="badge bg-primary-light-2 badge-indicator badge-indicator-nobdr"></span>
                                        <span class="badge-label">Images</span>
                                    </span>
                                    <span class="d-block text-dark fs-5 fw-medium mb-0 mt-1">$1469</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Page Body -->
@endsection