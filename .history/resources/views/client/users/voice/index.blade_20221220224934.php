@extends('client.layouts.app')
@section('content')
<section id="section">
    <div class="container">
        <div class="row no-gutters">
            <div id="outer-wrapper" class="pt-0 card-border">
                <form id="standard-synthesis">
                    <div id="textarea-outer-wrapper">
                        <div id="textarea-box">

                            <grammarly-extension data-grammarly-shadow-root="true"
                                style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="cGcvT">
                            </grammarly-extension>

                            <grammarly-extension data-grammarly-shadow-root="true"
                                style="mix-blend-mode: darken; position: absolute; top: 0px; left: 0px; pointer-events: none;"
                                class="cGcvT"></grammarly-extension>

                            
                            <div class="d-flex align-items-center justify-content-between">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" id="text-tab" data-toggle="tab"
                                            href="#text" role="tab" aria-controls="text" aria-selected="true">TEXT</a>
                                    </li>
                                </ul>
                                <div class="btn-group mr-2 mb-2"><i class="fas fa-save fa-lg mr-4"
                                        style="cursor: pointer" data-toggle="modal" data-target="#voiceProfileModal"
                                        title="Voice Profile"></i> <i class="fas fa-cog fa-lg" style="cursor: pointer"
                                        data-toggle="modal" data-target="#editor_settingsModal"
                                        title="Enable slider on pause, pitch, speed textarea buttons and set Favorite Language &amp; Regions."></i>
                                </div>
                            </div>
                        </div>
                        <div class="text-center pl-2 pr-2 d-none">
                            <p class="jQTAreaExt"></p>
                        </div>
                        <div id="textarea-settings">
                            <div class="character-counter"><span><em class="jQTAreaCount">0</em>/<em
                                        class="jQTAreaValue">3000</em> characters used</span> <span class="ml-2"><a
                                        href="/pricing" class="text-info"><i class="fa fa-long-arrow-alt-right"
                                            aria-hidden="true"></i> Get more characters</a></span></div>
                            <div class="clear-button"><button type="button" id="clear-main-text">Clear Text</button>
                            </div><br>
                            <div id="not-subscribe-error"></div><br>
                            <div class="textarea-error"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection