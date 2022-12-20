@extends('client.layouts.app')
@section('content')
<link href="{{ asset('css/voice/voice.css') }}" rel="stylesheet" type="text/css" />
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
                            <div class="tab-content mt-3" id="myTabContent">
                                <div class="tab-pane fade show active" id="text" role="tabpanel"
                                    aria-labelledby="text-tab">
                                    <div class="editor-box align-items-center">
                                        <div class="btn-group mr-3 mt-1"><button id="main-undo" type="button"
                                                class="btn btn-undo text-muted mb-2"><i
                                                    class="fas fa-undo"></i></button> <button id="main-redo"
                                                type="button" class="btn btn-undo text-muted mb-2"><i
                                                    class="fas fa-redo"></i></button></div>
                                        <div class="btn-group mr-2 mb-2" id="editor_effect" style="display: none;">
                                            <button class="btn dropdown-toggle" type="button" id="dropdownMenu8"
                                                data-toggle="dropdown" data-toggle-second="tooltip" data-placement="top"
                                                title="Tag words at textarea" aria-haspopup="true"
                                                aria-expanded="false"><span class="english">Voice Effect</span></button>
                                            <div class="dropdown-menu scrollable-menu" aria-labelledby="dropdownMenu8">
                                                <button class="dropdown-item" type="button" id="breathing_effect"
                                                    style="display: none;">Breathing</button> <button
                                                    class="dropdown-item" type="button" id="softer_effect"
                                                    style="display: none;">Soft</button> <button class="dropdown-item"
                                                    type="button" id="whispered_effect"
                                                    style="display: none;">Whispered</button> <button
                                                    style="display:none;" class="dropdown-item" type="button"
                                                    id="conversational_effect">Conversational</button> <button
                                                    style="display:none;" class="dropdown-item" type="button"
                                                    id="news_effect">Newscaster</button> <button style="display:none;"
                                                    class="dropdown-item" type="button" id="happy_effect">Happy</button>
                                                <button style="display:none;" class="dropdown-item" type="button"
                                                    id="support_effect">Customer Support</button> <button
                                                    style="display:none;" class="dropdown-item" type="button"
                                                    id="digital_effect">Digital Assistant</button> <button
                                                    style="display:none;" class="dropdown-item" type="button"
                                                    id="empathic_effect">Empathic</button> <button style="display:none;"
                                                    class="dropdown-item" type="button" id="calm_effect">Calm</button>
                                                <button style="display:none;" class="dropdown-item" type="button"
                                                    id="sad_effect">Sad</button> <button style="display:none;"
                                                    class="dropdown-item" type="button" id="angry_effect">Angry</button>
                                                <button style="display:none;" class="dropdown-item" type="button"
                                                    id="fearful_effect">Fearful</button> <button style="display:none;"
                                                    class="dropdown-item" type="button"
                                                    id="serious_effect">Serious</button> <button style="display:none;"
                                                    class="dropdown-item" type="button"
                                                    id="embarrassed_effect">Embarrassed</button> <button
                                                    style="display:none;" class="dropdown-item" type="button"
                                                    id="gentle_effect">Gentle</button> <button style="display:none;"
                                                    class="dropdown-item" type="button"
                                                    id="excited_effect">Excited</button> <button style="display:none;"
                                                    class="dropdown-item" type="button"
                                                    id="friendly_effect">Friendly</button> <button style="display:none;"
                                                    class="dropdown-item" type="button"
                                                    id="hopeful_effect">Hopeful</button> <button style="display:none;"
                                                    class="dropdown-item" type="button"
                                                    id="shouting_effect">Shouting</button> <button style="display:none;"
                                                    class="dropdown-item" type="button"
                                                    id="feared_effect">Feared</button> <button style="display:none;"
                                                    class="dropdown-item" type="button"
                                                    id="terrified_effect">Terrified</button> <button
                                                    style="display:none;" class="dropdown-item" type="button"
                                                    id="unfriendly_effect">Unfriendly</button></div>
                                        </div>
                                        <div class="btn-group mr-2 mb-2">
                                            <div class="audiobook-nonslider"><button class="btn dropdown-toggle"
                                                    type="button" id="dropdownMenu" data-toggle="dropdown"
                                                    data-toggle-second="tooltip" data-placement="top"
                                                    title="Insert pause on cursor place" aria-haspopup="true"
                                                    aria-expanded="false"><span class="english">Pauses</span></button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenu"><button
                                                        class="dropdown-item" type="button"
                                                        id="half_pause">0.5s</button> <button class="dropdown-item"
                                                        type="button" id="one_pause">1s</button> <button
                                                        class="dropdown-item" type="button" id="two_pause">2s</button>
                                                    <button class="dropdown-item" type="button"
                                                        id="three_pause">3s</button> <button class="dropdown-item"
                                                        type="button" id="four_pause">4s</button> <button
                                                        class="dropdown-item" type="button" id="five_pause">5s</button>
                                                    <button class="dropdown-item" type="button"
                                                        id="six_pause">6s</button></div>
                                            </div>
                                            <div class="audiobook-sliders" style="display: none;"><button
                                                    class="btn dropdown-toggle" id="pause-btn" type="button"><span
                                                        class="english">Pauses</span></button>
                                                <div class="pauses-dropdown" style="display: none;">
                                                    <h6>Pause</h6><span class="irs js-irs-3"><span class="irs"><span
                                                                class="irs-line" tabindex="0"><span
                                                                    class="irs-line-left"></span><span
                                                                    class="irs-line-mid"></span><span
                                                                    class="irs-line-right"></span></span><span
                                                                class="irs-min">0s</span><span
                                                                class="irs-max">6s</span><span class="irs-from"
                                                                style="visibility: hidden;">0</span><span class="irs-to"
                                                                style="visibility: hidden;">0</span><span
                                                                class="irs-single">0</span></span><span
                                                            class="irs-grid"></span><span class="irs-bar"></span><span
                                                            class="irs-bar-edge"></span><span
                                                            class="irs-shadow shadow-single"></span><span
                                                            class="irs-slider single"></span></span><input type="text"
                                                        class="form-control irs-hidden-input" id="ion_pause"
                                                        placeholder="Pause" tabindex="-1" readonly=""> <button
                                                        type="button"
                                                        class="btn btn-primary btn-sm mt-3 submit">Submit</button>
                                                    <button type="button"
                                                        class="btn btn-cancel btn-sm mt-3 cancel">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-group mr-2 mb-2" id="editor_emphasis" style=""><button
                                                class="btn dropdown-toggle" type="button" id="dropdownMenu3"
                                                data-toggle="dropdown" data-toggle-second="tooltip" data-placement="top"
                                                title="Tag words or sentence at textarea" aria-haspopup="true"
                                                aria-expanded="false"><span class="english">Emphasis</span></button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenu3"><button
                                                    class="dropdown-item" type="button" id="strong">Strong</button>
                                                <button class="dropdown-item" type="button"
                                                    id="moderate">Moderate</button> <button class="dropdown-item"
                                                    type="button" id="reduced">Reduced</button></div>
                                        </div>
                                        <div class="btn-group mr-2 mb-2">
                                            <div class="audiobook-nonslider"><button class="btn dropdown-toggle"
                                                    type="button" id="dropdownMenu4" data-toggle="dropdown"
                                                    data-toggle-second="tooltip" data-placement="top"
                                                    title="Tag words or sentence at textarea" aria-haspopup="true"
                                                    aria-expanded="false"><span class="english">Speed</span></button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenu4"><button
                                                        class="dropdown-item" type="button"
                                                        id="x-slow_speed">x-slow</button> <button class="dropdown-item"
                                                        type="button" id="slow_speed">Slow</button> <button
                                                        class="dropdown-item" type="button"
                                                        id="medium_speed">Medium</button> <button class="dropdown-item"
                                                        type="button" id="fast_speed">Fast</button> <button
                                                        class="dropdown-item" type="button"
                                                        id="x-fast_speed">x-fast</button></div>
                                            </div>
                                            <div class="audiobook-sliders" style="display: none;"><button
                                                    class="btn dropdown-toggle" type="button" id="speed-btn"><span
                                                        class="english">Speed</span></button>
                                                <div class="speed-dropdown" style="display: none;">
                                                    <h6>Speed</h6><span class="irs js-irs-4"><span class="irs"><span
                                                                class="irs-line" tabindex="0"><span
                                                                    class="irs-line-left"></span><span
                                                                    class="irs-line-mid"></span><span
                                                                    class="irs-line-right"></span></span><span
                                                                class="irs-min">-100%</span><span
                                                                class="irs-max">100%</span><span class="irs-from"
                                                                style="visibility: hidden;">0</span><span class="irs-to"
                                                                style="visibility: hidden;">0</span><span
                                                                class="irs-single">0</span></span><span
                                                            class="irs-grid"></span><span class="irs-bar"></span><span
                                                            class="irs-bar-edge"></span><span
                                                            class="irs-shadow shadow-single"></span><span
                                                            class="irs-slider single"></span></span><input type="text"
                                                        class="form-control irs-hidden-input" id="ion_textarea_speed"
                                                        placeholder="Speed" tabindex="-1" readonly=""> <button
                                                        type="button"
                                                        class="btn btn-primary btn-sm mt-3 submit">Submit</button>
                                                    <button type="button"
                                                        class="btn btn-cancel btn-sm mt-3 cancel">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-group mr-2 mb-2" id="editor_pitch" style="">
                                            <div class="audiobook-nonslider"><button class="btn dropdown-toggle"
                                                    type="button" id="dropdownMenu5" data-toggle="dropdown"
                                                    data-toggle-second="tooltip" data-placement="top"
                                                    title="Tag words or sentence at textarea" aria-haspopup="true"
                                                    aria-expanded="false"><span class="english">Pitch</span></button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenu5"><button
                                                        class="dropdown-item" type="button"
                                                        id="x-low_pitch">x-low</button> <button class="dropdown-item"
                                                        type="button" id="low_pitch">Low</button> <button
                                                        class="dropdown-item" type="button"
                                                        id="medium_pitch">Medium</button> <button class="dropdown-item"
                                                        type="button" id="default_pitch">Default</button> <button
                                                        class="dropdown-item" type="button"
                                                        id="high_pitch">High</button> <button class="dropdown-item"
                                                        type="button" id="x-high_pitch">x-High</button></div>
                                            </div>
                                            <div class="audiobook-sliders" style="display: none;"><button
                                                    class="btn dropdown-toggle" type="button" id="pitch-btn"><span
                                                        class="english">Pitch</span></button>
                                                <div class="pitch-dropdown" style="display: none;">
                                                    <h6>Pitch</h6><span class="irs js-irs-5"><span class="irs"><span
                                                                class="irs-line" tabindex="0"><span
                                                                    class="irs-line-left"></span><span
                                                                    class="irs-line-mid"></span><span
                                                                    class="irs-line-right"></span></span><span
                                                                class="irs-min">-100%</span><span
                                                                class="irs-max">100%</span><span class="irs-from"
                                                                style="visibility: hidden;">0</span><span class="irs-to"
                                                                style="visibility: hidden;">0</span><span
                                                                class="irs-single">0</span></span><span
                                                            class="irs-grid"></span><span class="irs-bar"></span><span
                                                            class="irs-bar-edge"></span><span
                                                            class="irs-shadow shadow-single"></span><span
                                                            class="irs-slider single"></span></span><input type="text"
                                                        class="form-control irs-hidden-input" id="ion_textarea_pitch"
                                                        placeholder="Pitch" tabindex="-1" readonly=""> <button
                                                        type="button"
                                                        class="btn btn-primary btn-sm mt-3 submit">Submit</button>
                                                    <button type="button"
                                                        class="btn btn-cancel btn-sm mt-3 cancel">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-group mr-2 mb-2" id="editor_volume">
                                            <div class="audiobook-nonslider"><button class="btn dropdown-toggle"
                                                    type="button" id="dropdownMenu6" data-toggle="dropdown"
                                                    data-toggle-second="tooltip" data-placement="top"
                                                    title="Tag words or sentence at textarea" aria-haspopup="true"
                                                    aria-expanded="false"><span class="english">Volume</span></button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenu6"><button
                                                        class="dropdown-item" type="button" id="x-soft">x-soft</button>
                                                    <button class="dropdown-item" type="button" id="soft">Soft</button>
                                                    <button class="dropdown-item" type="button"
                                                        id="medium">Medium</button> <button class="dropdown-item"
                                                        type="button" id="loud">Loud</button> <button
                                                        class="dropdown-item" type="button" id="x-loud">x-Loud</button>
                                                </div>
                                            </div>
                                            <div class="audiobook-sliders" style="display: none;"><button
                                                    class="btn btn-secondary dropdown-toggle" id="volume-btn"
                                                    type="button"><span class="english">Volume</span></button>
                                                <div class="volume-dropdown" style="display: none;">
                                                    <h6>Volume</h6><span class="irs js-irs-6"><span class="irs"><span
                                                                class="irs-line" tabindex="0"><span
                                                                    class="irs-line-left"></span><span
                                                                    class="irs-line-mid"></span><span
                                                                    class="irs-line-right"></span></span><span
                                                                class="irs-min">-20dB</span><span
                                                                class="irs-max">20dB</span><span class="irs-from"
                                                                style="visibility: hidden;">0</span><span class="irs-to"
                                                                style="visibility: hidden;">0</span><span
                                                                class="irs-single">0</span></span><span
                                                            class="irs-grid"></span><span class="irs-bar"></span><span
                                                            class="irs-bar-edge"></span><span
                                                            class="irs-shadow shadow-single"></span><span
                                                            class="irs-slider single"></span></span><input type="text"
                                                        class="form-control irs-hidden-input" id="ion_textarea_volume"
                                                        placeholder="Volume" tabindex="-1" readonly=""> <button
                                                        type="button"
                                                        class="btn btn-primary mt-3 submit">Submit</button> <button
                                                        type="button" class="btn btn-cancel mt-3 cancel">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-group mr-2 mb-2"><button class="btn dropdown-toggle"
                                                type="button" id="dropdownMenu7" data-toggle="dropdown"
                                                data-toggle-second="tooltip" data-placement="top"
                                                title="Tag words at textarea" aria-haspopup="true"
                                                aria-expanded="false"><span class="english">Say as</span></button>
                                            <div class="dropdown-menu scrollable-menu" aria-labelledby="dropdownMenu7">
                                                <button class="dropdown-item" type="button" id="date_ssml">Date</button>
                                                <button class="dropdown-item" type="button" id="time_ssml">Time</button>
                                                <button class="dropdown-item" type="button"
                                                    id="address">Address</button> <button class="dropdown-item"
                                                    type="button" id="telephone">Telephone</button> <button
                                                    class="dropdown-item" type="button"
                                                    id="spell-out">Spell-out</button> <button class="dropdown-item"
                                                    type="button" id="expletive">Expletive</button> <button
                                                    class="dropdown-item" type="button" id="cardinal">Cardinal</button>
                                                <button class="dropdown-item" type="button"
                                                    id="ordinal">Ordinal</button> <button class="dropdown-item"
                                                    type="button" id="characters">Characters</button> <button
                                                    class="dropdown-item" type="button" id="unit_ssml">Unit</button>
                                                <button class="dropdown-item" type="button" id="digits">Digits</button>
                                                <button class="dropdown-item" type="button"
                                                    id="fraction">Fraction</button></div>
                                        </div>
                                    </div><textarea class="form-control input-field" id="main-textarea" rows="12"
                                        name="main-textarea" maxlength="3000" placeholder=""
                                        spellcheck="true"></textarea>
                                </div>
                                <div class="tab-pane fade" id="ssml" role="tabpanel" aria-labelledby="ssml-tab">
                                    <textarea class="form-control input-field" id="ssml-main-textarea" rows="15"
                                        name="ssml-main-textarea" maxlength="3000"
                                        placeholder="<speak>Hello, This is VoiceMaker</speak>"></textarea></div>
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