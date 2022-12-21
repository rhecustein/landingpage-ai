@extends('client.layouts.app')
@section('content')
<div class="hk-pg-body py-0">
    <div class="chatapp-wrap chatapp-info-active">
        <div class="chatapp-content">
            <div class="chatapp-single-chat">
                <header class="chat-header">
                    <a id="back_user_list"
                        class="btn btn-sm btn-icon btn-flush-dark btn-rounded flush-soft-hover back-user-list" href="#">
                        <span class="icon"><span class="feather-icon"><i data-feather="chevron-left"></i></span></span>
                    </a>
                    <div class="media">
                        <div class="media-head">
                            <div class="avatar avatar-sm avatar-rounded position-relative">
                                <img src="{{ asset('html/classic/dist/img/avatar8.jpg') }}" alt="user" class="avatar-img">
                                <span
                                    class="badge badge-success badge-indicator badge-indicator-lg position-bottom-end-overflow-1"></span>
                            </div>
                        </div>
                        <div class="media-body">
                            <div class="user-name">Aiden</div>
                            <!-- setelah respon -->
                            <div class="user-status">Menulis<span class="one">.</span><span class="two">.</span><span
                                    class="three">.</span>
                            </div>
                        </div>
                    </div>
                    <div class="chat-options-wrap">
                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover hk-navbar-togglable d-none d-xl-block"
                            href="#" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                            data-bs-original-title="Collapse">
                            <span class="icon">
                                <span class="feather-icon"><i data-feather="chevron-up"></i></span>
                                <span class="feather-icon d-none"><i data-feather="chevron-down"></i></span>
                            </span>
                        </a>
                    </div>
                </header>
                <div data-simplebar id="chat_body" class="chat-body">
                    <ul id="dummy_avatar" class="list-unstyled chat-single-list">
                    <div class="card-body">
<h5 class="card-title text-uppercase">Help Centre</h5>
<p class="card-text">This is a wider card with supporting text.</p>
</div>
                        <li class="day-sep">
                            <span>Today</span>
                        </li>
                        <li class="media sent">
                            <div class="media-body">
                                <div class="msg-box">
                                    <div>
                                        <p>Anyways, I am working on something that you would like to know. This project
                                            is based on angular js and you are the keeda in it. I need you help in it.
                                        </p>
                                        <span class="chat-time">11:52 PM</span>
                                    </div>
                                    <div class="msg-action">
                                        <a href="#"
                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret"><span
                                                class="icon"><span class="feather-icon"><i
                                                        data-feather="corner-up-right"></i></span></span></a>
                                        <a href="#"
                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret"
                                            data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i
                                                        data-feather="more-horizontal"></i></span></span></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Forward</a>
                                            <a class="dropdown-item" href="#">Copy</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="media received">
                            <div class="avatar avatar-xs avatar-rounded">
                                <img src="{{ asset('html/classic/dist/img/avatar8.jpg') }}" alt="user" class="avatar-img">
                            </div>
                            <div class="media-body">
                                <div class="msg-box">
                                    <div>
                                        <p>Hey Ben, just a reminder that you are coming for the meeting today in the
                                            conference. We are proposing a change in the client briefing.</p>
                                        <span class="chat-time">9:20 AM</span>
                                    </div>
                                    <div class="msg-action">
                                        <a href="#"
                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret"><span
                                                class="icon"><span class="feather-icon"><i
                                                        data-feather="corner-up-right"></i></span></span></a>
                                        <a href="#"
                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret"
                                            data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i
                                                        data-feather="more-horizontal"></i></span></span></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Forward</a>
                                            <a class="dropdown-item" href="#">Copy</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <footer class="chat-footer">
                    <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover flex-shrink-0"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <div class="input-group">
                        <span class="input-affix-wrapper">
                            <input type="text" id="input_msg_send_chatapp" name="send-msg"
                                class="input-msg-send form-control rounded-input" placeholder="Type your message...">
                            <span class="input-suffix">
                                <button class="btn btn-icon btn-flush-primary btn-rounded btn-send">
                                    <span class="icon"><span class="feather-icon"><i
                                                data-feather="arrow-right"></i></span></span>
                                </button>
                            </span>
                        </span>
                    </div>
                    <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover">
                        <span class="icon"><span class="feather-icon"><i data-feather="smile"></i></span></span>
                    </button>
                </footer>
                <div class="chat-info">
                    <div data-simplebar class="nicescroll-bar">
                        <button type="button" class="info-close btn-close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <div class="text-center">
                            <div class="avatar avatar-xxl avatar-rounded">
                                <img src="{{asset ('img/Mascot-03.png') }}" alt="user" class="avatar-img">
                            </div>
                            <div class="cp-name text-truncate mt-2">Aiden</div>
                            <p class="text-truncate">Personal Assisten </p>
                        </div>

                        <ul class="nav nav-justified nav-light nav-tabs nav-segmented-tabs active-theme mt-4">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#tab_info">
                                    <span class="nav-link-text">Info</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab_files">
                                    <span class="nav-link-text">Files</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content mt-4">
                            <div class="tab-pane fade show active" id="tab_info">
                                <form role="search">
                                    <input type="text" class="form-control" placeholder="Cari dalam percakapan">
                                </form>
                                <div class="collapse-simple mt-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <a role="button" data-bs-toggle="collapse" href="#gn_info"
                                                aria-expanded="true">Info Umum</a>
                                        </div>
                                        <div id="gn_info" class="collapse show">
                                            <div class="card-body">
                                                <ul class="cp-info">
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            <span class="cp-icon-wrap"><span class="feather-icon"><i
                                                                        data-feather="mail"></i></span></span>
                                                            <span class="text-primary">contact@autobot.co.id</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            <span class="cp-icon-wrap"><span class="feather-icon"><i
                                                                        data-feather="phone"></i></span></span>
                                                            +62 821-1990-8751
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            <span class="cp-icon-wrap"><span class="feather-icon"><i
                                                                        data-feather="map-pin"></i></span></span>
                                                            Jakarta, Indonesia
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab_files">
                                <form role="search">
                                    <input type="text" class="form-control search-files" placeholder="Search files">
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection