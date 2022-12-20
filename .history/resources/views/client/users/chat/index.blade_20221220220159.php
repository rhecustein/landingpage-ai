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
                            <div class="user-name">Huma Therman</div>
                            <div class="user-status">Typing<span class="one">.</span><span class="two">.</span><span
                                    class="three">.</span></div>
                        </div>
                    </div>
                </header>
                <div>
                    <ul id="dummy_avatar" class="list-unstyled chat-single-list">
                        <li class="media received">
                            <div class="avatar avatar-xs avatar-rounded">
                                <img src="{{ asset('html/classic/dist/img/avatar8.jpg') }}" alt="user" class="avatar-img">
                            </div>
                            <div class="media-body">
                                <div class="msg-box">
                                    <div>
                                        <p>Cool, lets talk about it tomorrow</p>
                                        <span class="chat-time">10:52 PM</span>
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
                                <div class="msg-box">
                                    <div>
                                        <p>Images for new marketing pages have been sent</p>
                                        <span class="chat-time">10:53 PM</span>
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
                        <li class="media media-attachment received">
                            <div class="avatar avatar-xs avatar-rounded">
                                <img src="dist/img/avatar8.jpg" alt="user" class="avatar-img">
                            </div>
                            <div class="media-body msg-docs">
                                <div class="msg-box">
                                    <div>
                                        <div class="media">
                                            <div class="avatar avatar-icon avatar-sm avatar-blue">
                                                <span class="initial-wrap fs-3">
                                                    <i class="ri-file-excel-2-fill"></i>
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <p class="file-name">Website_content.xls</p>
                                                <p class="file-size">2,635 KB</p>
                                            </div>
                                        </div>
                                        <div class="file-overlay">
                                            <button class="btn btn-sm btn-icon btn-rounded btn-primary"><span
                                                    class="icon"><span class="feather-icon"><i
                                                            data-feather="arrow-down"></i></span></span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="msg-box">
                                    <div>
                                        <div class="media">
                                            <div class="avatar avatar-icon avatar-sm avatar-warning">
                                                <span class="initial-wrap fs-3">
                                                    <i class="ri-file-zip-fill"></i>
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <p class="file-name">themeforest-pack.zip</p>
                                                <p class="file-size">2.45 GB</p>
                                            </div>
                                        </div>
                                        <div class="file-overlay">
                                            <button class="btn btn-sm btn-icon btn-rounded btn-primary"><span
                                                    class="icon"><span class="feather-icon"><i
                                                            data-feather="arrow-down"></i></span></span></button>
                                        </div>
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
                        <li class="media media-attachment received">
                            <div class="avatar avatar-xs avatar-rounded">
                                <img src="dist/img/avatar8.jpg" alt="user" class="avatar-img">
                            </div>
                            <div class="media-body msg-imgs">
                                <div class="msg-box">
                                    <div>
                                        <img class="d-block img-fluid" src="dist/img/giphy.gif" alt="gif">
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
                        <li class="media sent">
                            <div class="media-body">
                                <div class="msg-box">
                                    <div>
                                        <p>Haha, this joke is hilarious. Is it what your heart feel about the salary? 😍
                                        </p>
                                        <span class="chat-time">10:52 PM</span>
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
                                <img src="dist/img/avatar8.jpg" alt="user" class="avatar-img">
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
            </div>

        </div>
    </div>
</div>
@endsection