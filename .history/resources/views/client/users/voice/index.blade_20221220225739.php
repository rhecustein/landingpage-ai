@extends('client.layouts.app')
@section('content')
<link href="{{ asset('css/voice/voice.css') }}" rel="stylesheet" type="text/css" />
<section id="section">
    <div class="container">
        <div class="row no-gutters">
            <div id="outer-wrapper" class="pt-0">
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
                                    <li class="nav-item"><a class="nav-link" id="ssml-tab" data-toggle="tab"
                                            href="#ssml" role="tab" aria-controls="ssml" aria-selected="false">SSML</a>
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
                    <div class="player_top"></div>
                    <div class="row no-gutters text-center">
                        <div class="col-md-12" id="audio-box-container"><span class="text-left" id="audio-top-text">Play
                                the Text</span>
                            <div id="engine">
                                <div class="audioplayer audioplayer-stopped"><audio preload="auto" controls=""
                                        class="main-player" id="main"
                                        style="width: 0px; height: 0px; visibility: hidden;">
                                        <source src="/voices/intro.mp3"></audio>
                                    <div class="audioplayer-playpause" title="Play"><a href="#">Play</a></div>
                                    <div class="audioplayer-time audioplayer-time-current">00:00</div>
                                    <div class="audioplayer-bar">
                                        <div class="audioplayer-bar-loaded" style="width: 102%;"></div>
                                        <div class="audioplayer-bar-played"></div>
                                    </div>
                                    <div class="audioplayer-time audioplayer-time-duration">00:06</div>
                                    <div class="audioplayer-volume">
                                        <div class="audioplayer-volume-button" title="Volume"><a href="#">Volume</a>
                                        </div>
                                        <div class="audioplayer-volume-adjust">
                                            <div>
                                                <div style="height: 102%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><button id="one" type="button" data-toggle="tooltip" data-placement="top" title=""
                                data-original-title="Download Speech"><span class="fa fa-download"></span></button>
                            <button id="forth" type="button" class="float-right" data-toggle="modal"
                                data-target="#saveModal" data-placement="top" title="Save Speech"><span
                                    class="fa fa-upload"></span> Cloud Save</button>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-md-4" id="languages">
                            <h6>AI Engine</h6>
                            <div id="engine-radio-group" role="radiogroup" class="mb-4">
                                <div class="radio-control"><input class="input-control" type="radio" name="engine"
                                        id="standard" value="standard"><label class="label-control"
                                        for="standard">Standard TTS <i data-toggle="tooltip"
                                            data-original-title="Standard TTS AI engine will be retired by the end of 2023."><i
                                                class="fa fa-info-circle text-muted"></i></i></label></div>
                                <div class="radio-control"><input class="input-control" type="radio" name="engine"
                                        id="neural" value="neural" checked=""><label class="label-control"
                                        for="neural">Neural TTS <i data-toggle="tooltip"
                                            data-original-title="Neural TTS produces the most natural and human-like text-to-speech voices possible."><i
                                                class="fa fa-info-circle text-muted"></i></i></label></div>
                            </div>
                            <div class="mb-4">
                                <h6>Language and Regions</h6>
                                <div id="language-selector-div"><select id="language-selector" name="language"
                                        data-callback="changeLanguage" data-placeholder="Choose your Language:"
                                        style="display: none;">
                                        <option value="af-ZA">Afrikaans, South Africa</option>
                                        <option value="sq-AL">Albanian (Albania)</option>
                                        <option value="am-ET">Amharic (Ethiopia)</option>
                                        <option value="arb">Arabic</option>
                                        <option value="ar-DZ">Arabic (Algeria)</option>
                                        <option value="ar-BH">Arabic (Bahrain)</option>
                                        <option value="ar-IQ">Arabic (Iraq)</option>
                                        <option value="ar-JO">Arabic (Jordan)</option>
                                        <option value="ar-KW">Arabic (Kuwait)</option>
                                        <option value="ar-LB">Arabic (Lebanon)</option>
                                        <option value="ar-LY">Arabic (Libya)</option>
                                        <option value="ar-MA">Arabic (Morocco)</option>
                                        <option value="ar-OM">Arabic (Oman)</option>
                                        <option value="ar-QA">Arabic (Qatar)</option>
                                        <option value="ar-SA">Arabic (Saudi Arabia)</option>
                                        <option value="ar-SY">Arabic (Syria)</option>
                                        <option value="ar-TN">Arabic (Tunisia)</option>
                                        <option value="ar-AE">Arabic (United Arab Emirates)</option>
                                        <option value="ar-YE">Arabic (Yemen)</option>
                                        <option value="hy-AM">Armenian (Armenia)</option>
                                        <option value="az-AZ">Azerbaijani (Azerbaijan)</option>
                                        <option value="bn-BD">Bangla (Bangladesh)</option>
                                        <option value="eu-ES">Basque</option>
                                        <option value="bn-IN">Bengali (India)</option>
                                        <option value="bs-BA">Bosnian (Bosnia and Herzegovina)</option>
                                        <option value="bg-BG">Bulgarian, Bulgaria</option>
                                        <option value="my-MM">Burmese (Myanmar)</option>
                                        <option value="ca-ES">Catalan, Spain</option>
                                        <option value="yue-CN">Chinese (Cantonese, S)</option>
                                        <option value="wuu-CN">Chinese (Wu, S)</option>
                                        <option value="zh-HK">Chinese, Cantonese</option>
                                        <option value="cmn-CN">Chinese, Mandarin</option>
                                        <option value="cmn-TW">Chinese, Mandarin (Taiwan)</option>
                                        <option value="hr-HR">Croatian, Croatia</option>
                                        <option value="cs-CZ">Czech (Czech Republic)</option>
                                        <option value="da-DK">Danish (Denmark)</option>
                                        <option value="nl-BE">Dutch (Belgium)</option>
                                        <option value="nl-NL">Dutch (Netherlands)</option>
                                        <option value="en-AU">English, Australian</option>
                                        <option value="en-GB">English, British</option>
                                        <option value="en-CA">English, Canada</option>
                                        <option value="en-HK">English, Hong Kong</option>
                                        <option value="en-IN">English, Indian</option>
                                        <option value="en-IE">English, Ireland</option>
                                        <option value="en-KE">English, Kenya</option>
                                        <option value="en-NZ">English, New Zealand</option>
                                        <option value="en-NG">English, Nigeria</option>
                                        <option value="en-PH">English, Philippines</option>
                                        <option value="en-SG">English, Singapore</option>
                                        <option value="en-ZA">English, South Africa</option>
                                        <option value="en-TZ">English, Tanzania</option>
                                        <option value="en-US">English, US</option>
                                        <option value="et-EE">Estonian, Estonia</option>
                                        <option value="fil-PH">Filipino (Philippines)</option>
                                        <option value="fi-FI">Finnish (Finland)</option>
                                        <option value="fr-BE">French (Belgium)</option>
                                        <option value="fr-FR">French (France)</option>
                                        <option value="fr-CA">French, Canadian</option>
                                        <option value="fr-CH">French, Switzerland</option>
                                        <option value="gl-ES">Galician (Spain)</option>
                                        <option value="ka-GE">Georgian (Georgia)</option>
                                        <option value="de-DE">German</option>
                                        <option value="de-AT">German, Austria</option>
                                        <option value="de-CH">German, Switzerland</option>
                                        <option value="el-GR">Greek (Greece)</option>
                                        <option value="gu-IN">Gujarati (India)</option>
                                        <option value="he-IL">Hebrew, Israel</option>
                                        <option value="hi-IN">Hindi (India)</option>
                                        <option value="hu-HU">Hungarian</option>
                                        <option value="is-IS">Icelandic</option>
                                        <option value="id-ID">Indonesian</option>
                                        <option value="ga-IE">Irish, Ireland</option>
                                        <option value="it-IT">Italian</option>
                                        <option value="ja-JP">Japanese</option>
                                        <option value="jv-ID" selected="">Javanese (Indonesia)</option>
                                        <option value="kn-IN">Kannada (India)</option>
                                        <option value="kk-KZ">Kazakh (Kazakhstan)</option>
                                        <option value="km-KH">Khmer (Cambodia)</option>
                                        <option value="ko-KR">Korean</option>
                                        <option value="lo-LA">Lao (Laos)</option>
                                        <option value="lv-LV">Latvian, Latvia</option>
                                        <option value="lt-LT">Lithuanian</option>
                                        <option value="mk-MK">Macedonian (Republic of North Macedonia)</option>
                                        <option value="ms-MY">Malay, Malaysia</option>
                                        <option value="ml-IN">Malayalam (India)</option>
                                        <option value="mt-MT">Maltese, Malta</option>
                                        <option value="mr-IN">Marathi (India)</option>
                                        <option value="mn-MN">Mongolian (Mongolia)</option>
                                        <option value="ne-NP">Nepali (Nepal)</option>
                                        <option value="nb-NO">Norwegian</option>
                                        <option value="ps-AF">Pashto (Afghanistan)</option>
                                        <option value="fa-IR">Persian (Iran)</option>
                                        <option value="pl-PL">Polish</option>
                                        <option value="pt-PT">Portuguese</option>
                                        <option value="pt-BR">Portuguese, Brazilian</option>
                                        <option value="pa-IN">Punjabi (India)</option>
                                        <option value="ro-RO">Romanian</option>
                                        <option value="ru-RU">Russian</option>
                                        <option value="sr-RS">Serbian, Cyrillic</option>
                                        <option value="si-LK">Sinhala (Sri Lanka)</option>
                                        <option value="sk-SK">Slovak (Slovakia)</option>
                                        <option value="sl-SI">Slovenian (Slovenia)</option>
                                        <option value="so-SO">Somali (Somalia)</option>
                                        <option value="es-AR">Spanish, Argentina</option>
                                        <option value="es-BO">Spanish, Bolivia</option>
                                        <option value="es-ES">Spanish, Castilian (Spain)</option>
                                        <option value="es-CL">Spanish, Chile</option>
                                        <option value="es-CO">Spanish, Colombia</option>
                                        <option value="es-CR">Spanish, Costa Rica</option>
                                        <option value="es-CU">Spanish, Cuba</option>
                                        <option value="es-DO">Spanish, Dominican Republic</option>
                                        <option value="es-EC">Spanish, Ecuador</option>
                                        <option value="es-SV">Spanish, El Salvador</option>
                                        <option value="es-GQ">Spanish, Equatorial Guinea</option>
                                        <option value="es-GT">Spanish, Guatemala</option>
                                        <option value="es-HN">Spanish, Honduras</option>
                                        <option value="es-LA">Spanish, Latin American</option>
                                        <option value="es-MX">Spanish, Mexican</option>
                                        <option value="es-NI">Spanish, Nicaragua</option>
                                        <option value="es-PA">Spanish, Panama</option>
                                        <option value="es-PY">Spanish, Paraguay</option>
                                        <option value="es-PE">Spanish, Peru</option>
                                        <option value="es-PR">Spanish, Puerto Rico</option>
                                        <option value="es-US">Spanish, US</option>
                                        <option value="es-UY">Spanish, Uruguay</option>
                                        <option value="es-VE">Spanish, Venezuela</option>
                                        <option value="su-ID">Sundanese (Indonesia)</option>
                                        <option value="sw-KE">Swahili (Kenya)</option>
                                        <option value="sw-TZ">Swahili (Tanzania)</option>
                                        <option value="sv-SE">Swedish</option>
                                        <option value="ta-IN">Tamil (India)</option>
                                        <option value="ta-MY">Tamil (Malaysia)</option>
                                        <option value="ta-SG">Tamil (Singapore)</option>
                                        <option value="ta-LK">Tamil (Sri Lanka)</option>
                                        <option value="te-IN">Telugu (India)</option>
                                        <option value="th-TH">Thai (Thailand)</option>
                                        <option value="tr-TR">Turkish</option>
                                        <option value="uk-UA">Ukrainian (Ukraine)</option>
                                        <option value="ur-IN">Urdu, India</option>
                                        <option value="ur-PK">Urdu, Pakistan</option>
                                        <option value="uz-UZ">Uzbek (Uzbekistan)</option>
                                        <option value="vi-VN">Vietnamese (Vietnam)</option>
                                        <option value="cy-GB">Welsh</option>
                                        <option value="zu-ZA">Zulu (South Africa)</option>
                                    </select>
                                    <div data-immersive="false" id="awselect_language-selector"
                                        data-select="language-selector" class="awselect hasValue">
                                        <div style="background:#fff" class="bg"></div>
                                        <div style="padding:15px 40px" class="front_face">
                                            <div style="background:#e5e5e5" class="bg"></div>
                                            <div data-inactive-color="#000" style="color:#000" class="content"><span
                                                    class="current_value">Javanese (Indonesia)</span><span
                                                    class="placeholder">Choose your Language:</span><i class="icon"><svg
                                                        style="fill:#000" version="1.1" id="Chevron_thin_down"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        viewBox="0 0 20 20" enable-background="new 0 0 20 20"
                                                        xml:space="preserve">
                                                        <path
                                                            d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0c0.27,0.268,0.271,0.701,0,0.969l-7.908,7.83c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25L17.418,6.109z">
                                                        </path>
                                                    </svg></i></div>
                                        </div>
                                        <div style="padding:15px 0;" class="back_face">
                                            <ul style="color:#000">
                                                <li><a style="padding: 2px 40px">Afrikaans, South Africa</a></li>
                                                <li><a style="padding: 2px 40px">Albanian (Albania)</a></li>
                                                <li><a style="padding: 2px 40px">Amharic (Ethiopia)</a></li>
                                                <li><a style="padding: 2px 40px">Arabic</a></li>
                                                <li><a style="padding: 2px 40px">Arabic (Algeria)</a></li>
                                                <li><a style="padding: 2px 40px">Arabic (Bahrain)</a></li>
                                                <li><a style="padding: 2px 40px">Arabic (Iraq)</a></li>
                                                <li><a style="padding: 2px 40px">Arabic (Jordan)</a></li>
                                                <li><a style="padding: 2px 40px">Arabic (Kuwait)</a></li>
                                                <li><a style="padding: 2px 40px">Arabic (Lebanon)</a></li>
                                                <li><a style="padding: 2px 40px">Arabic (Libya)</a></li>
                                                <li><a style="padding: 2px 40px">Arabic (Morocco)</a></li>
                                                <li><a style="padding: 2px 40px">Arabic (Oman)</a></li>
                                                <li><a style="padding: 2px 40px">Arabic (Qatar)</a></li>
                                                <li><a style="padding: 2px 40px">Arabic (Saudi Arabia)</a></li>
                                                <li><a style="padding: 2px 40px">Arabic (Syria)</a></li>
                                                <li><a style="padding: 2px 40px">Arabic (Tunisia)</a></li>
                                                <li><a style="padding: 2px 40px">Arabic (United Arab Emirates)</a></li>
                                                <li><a style="padding: 2px 40px">Arabic (Yemen)</a></li>
                                                <li><a style="padding: 2px 40px">Armenian (Armenia)</a></li>
                                                <li><a style="padding: 2px 40px">Azerbaijani (Azerbaijan)</a></li>
                                                <li><a style="padding: 2px 40px">Bangla (Bangladesh)</a></li>
                                                <li><a style="padding: 2px 40px">Basque</a></li>
                                                <li><a style="padding: 2px 40px">Bengali (India)</a></li>
                                                <li><a style="padding: 2px 40px">Bosnian (Bosnia and Herzegovina)</a>
                                                </li>
                                                <li><a style="padding: 2px 40px">Bulgarian, Bulgaria</a></li>
                                                <li><a style="padding: 2px 40px">Burmese (Myanmar)</a></li>
                                                <li><a style="padding: 2px 40px">Catalan, Spain</a></li>
                                                <li><a style="padding: 2px 40px">Chinese (Cantonese, S)</a></li>
                                                <li><a style="padding: 2px 40px">Chinese (Wu, S)</a></li>
                                                <li><a style="padding: 2px 40px">Chinese, Cantonese</a></li>
                                                <li><a style="padding: 2px 40px">Chinese, Mandarin</a></li>
                                                <li><a style="padding: 2px 40px">Chinese, Mandarin (Taiwan)</a></li>
                                                <li><a style="padding: 2px 40px">Croatian, Croatia</a></li>
                                                <li><a style="padding: 2px 40px">Czech (Czech Republic)</a></li>
                                                <li><a style="padding: 2px 40px">Danish (Denmark)</a></li>
                                                <li><a style="padding: 2px 40px">Dutch (Belgium)</a></li>
                                                <li><a style="padding: 2px 40px">Dutch (Netherlands)</a></li>
                                                <li><a style="padding: 2px 40px">English, Australian</a></li>
                                                <li><a style="padding: 2px 40px">English, British</a></li>
                                                <li><a style="padding: 2px 40px">English, Canada</a></li>
                                                <li><a style="padding: 2px 40px">English, Hong Kong</a></li>
                                                <li><a style="padding: 2px 40px">English, Indian</a></li>
                                                <li><a style="padding: 2px 40px">English, Ireland</a></li>
                                                <li><a style="padding: 2px 40px">English, Kenya</a></li>
                                                <li><a style="padding: 2px 40px">English, New Zealand</a></li>
                                                <li><a style="padding: 2px 40px">English, Nigeria</a></li>
                                                <li><a style="padding: 2px 40px">English, Philippines</a></li>
                                                <li><a style="padding: 2px 40px">English, Singapore</a></li>
                                                <li><a style="padding: 2px 40px">English, South Africa</a></li>
                                                <li><a style="padding: 2px 40px">English, Tanzania</a></li>
                                                <li><a style="padding: 2px 40px">English, US</a></li>
                                                <li><a style="padding: 2px 40px">Estonian, Estonia</a></li>
                                                <li><a style="padding: 2px 40px">Filipino (Philippines)</a></li>
                                                <li><a style="padding: 2px 40px">Finnish (Finland)</a></li>
                                                <li><a style="padding: 2px 40px">French (Belgium)</a></li>
                                                <li><a style="padding: 2px 40px">French (France)</a></li>
                                                <li><a style="padding: 2px 40px">French, Canadian</a></li>
                                                <li><a style="padding: 2px 40px">French, Switzerland</a></li>
                                                <li><a style="padding: 2px 40px">Galician (Spain)</a></li>
                                                <li><a style="padding: 2px 40px">Georgian (Georgia)</a></li>
                                                <li><a style="padding: 2px 40px">German</a></li>
                                                <li><a style="padding: 2px 40px">German, Austria</a></li>
                                                <li><a style="padding: 2px 40px">German, Switzerland</a></li>
                                                <li><a style="padding: 2px 40px">Greek (Greece)</a></li>
                                                <li><a style="padding: 2px 40px">Gujarati (India)</a></li>
                                                <li><a style="padding: 2px 40px">Hebrew, Israel</a></li>
                                                <li><a style="padding: 2px 40px">Hindi (India)</a></li>
                                                <li><a style="padding: 2px 40px">Hungarian</a></li>
                                                <li><a style="padding: 2px 40px">Icelandic</a></li>
                                                <li><a style="padding: 2px 40px">Indonesian</a></li>
                                                <li><a style="padding: 2px 40px">Irish, Ireland</a></li>
                                                <li><a style="padding: 2px 40px">Italian</a></li>
                                                <li><a style="padding: 2px 40px">Japanese</a></li>
                                                <li><a style="padding: 2px 40px">Javanese (Indonesia)</a></li>
                                                <li><a style="padding: 2px 40px">Kannada (India)</a></li>
                                                <li><a style="padding: 2px 40px">Kazakh (Kazakhstan)</a></li>
                                                <li><a style="padding: 2px 40px">Khmer (Cambodia)</a></li>
                                                <li><a style="padding: 2px 40px">Korean</a></li>
                                                <li><a style="padding: 2px 40px">Lao (Laos)</a></li>
                                                <li><a style="padding: 2px 40px">Latvian, Latvia</a></li>
                                                <li><a style="padding: 2px 40px">Lithuanian</a></li>
                                                <li><a style="padding: 2px 40px">Macedonian (Republic of North
                                                        Macedonia)</a></li>
                                                <li><a style="padding: 2px 40px">Malay, Malaysia</a></li>
                                                <li><a style="padding: 2px 40px">Malayalam (India)</a></li>
                                                <li><a style="padding: 2px 40px">Maltese, Malta</a></li>
                                                <li><a style="padding: 2px 40px">Marathi (India)</a></li>
                                                <li><a style="padding: 2px 40px">Mongolian (Mongolia)</a></li>
                                                <li><a style="padding: 2px 40px">Nepali (Nepal)</a></li>
                                                <li><a style="padding: 2px 40px">Norwegian</a></li>
                                                <li><a style="padding: 2px 40px">Pashto (Afghanistan)</a></li>
                                                <li><a style="padding: 2px 40px">Persian (Iran)</a></li>
                                                <li><a style="padding: 2px 40px">Polish</a></li>
                                                <li><a style="padding: 2px 40px">Portuguese</a></li>
                                                <li><a style="padding: 2px 40px">Portuguese, Brazilian</a></li>
                                                <li><a style="padding: 2px 40px">Punjabi (India)</a></li>
                                                <li><a style="padding: 2px 40px">Romanian</a></li>
                                                <li><a style="padding: 2px 40px">Russian</a></li>
                                                <li><a style="padding: 2px 40px">Serbian, Cyrillic</a></li>
                                                <li><a style="padding: 2px 40px">Sinhala (Sri Lanka)</a></li>
                                                <li><a style="padding: 2px 40px">Slovak (Slovakia)</a></li>
                                                <li><a style="padding: 2px 40px">Slovenian (Slovenia)</a></li>
                                                <li><a style="padding: 2px 40px">Somali (Somalia)</a></li>
                                                <li><a style="padding: 2px 40px">Spanish, Argentina</a></li>
                                                <li><a style="padding: 2px 40px">Spanish, Bolivia</a></li>
                                                <li><a style="padding: 2px 40px">Spanish, Castilian (Spain)</a></li>
                                                <li><a style="padding: 2px 40px">Spanish, Chile</a></li>
                                                <li><a style="padding: 2px 40px">Spanish, Colombia</a></li>
                                                <li><a style="padding: 2px 40px">Spanish, Costa Rica</a></li>
                                                <li><a style="padding: 2px 40px">Spanish, Cuba</a></li>
                                                <li><a style="padding: 2px 40px">Spanish, Dominican Republic</a></li>
                                                <li><a style="padding: 2px 40px">Spanish, Ecuador</a></li>
                                                <li><a style="padding: 2px 40px">Spanish, El Salvador</a></li>
                                                <li><a style="padding: 2px 40px">Spanish, Equatorial Guinea</a></li>
                                                <li><a style="padding: 2px 40px">Spanish, Guatemala</a></li>
                                                <li><a style="padding: 2px 40px">Spanish, Honduras</a></li>
                                                <li><a style="padding: 2px 40px">Spanish, Latin American</a></li>
                                                <li><a style="padding: 2px 40px">Spanish, Mexican</a></li>
                                                <li><a style="padding: 2px 40px">Spanish, Nicaragua</a></li>
                                                <li><a style="padding: 2px 40px">Spanish, Panama</a></li>
                                                <li><a style="padding: 2px 40px">Spanish, Paraguay</a></li>
                                                <li><a style="padding: 2px 40px">Spanish, Peru</a></li>
                                                <li><a style="padding: 2px 40px">Spanish, Puerto Rico</a></li>
                                                <li><a style="padding: 2px 40px">Spanish, US</a></li>
                                                <li><a style="padding: 2px 40px">Spanish, Uruguay</a></li>
                                                <li><a style="padding: 2px 40px">Spanish, Venezuela</a></li>
                                                <li><a style="padding: 2px 40px">Sundanese (Indonesia)</a></li>
                                                <li><a style="padding: 2px 40px">Swahili (Kenya)</a></li>
                                                <li><a style="padding: 2px 40px">Swahili (Tanzania)</a></li>
                                                <li><a style="padding: 2px 40px">Swedish</a></li>
                                                <li><a style="padding: 2px 40px">Tamil (India)</a></li>
                                                <li><a style="padding: 2px 40px">Tamil (Malaysia)</a></li>
                                                <li><a style="padding: 2px 40px">Tamil (Singapore)</a></li>
                                                <li><a style="padding: 2px 40px">Tamil (Sri Lanka)</a></li>
                                                <li><a style="padding: 2px 40px">Telugu (India)</a></li>
                                                <li><a style="padding: 2px 40px">Thai (Thailand)</a></li>
                                                <li><a style="padding: 2px 40px">Turkish</a></li>
                                                <li><a style="padding: 2px 40px">Ukrainian (Ukraine)</a></li>
                                                <li><a style="padding: 2px 40px">Urdu, India</a></li>
                                                <li><a style="padding: 2px 40px">Urdu, Pakistan</a></li>
                                                <li><a style="padding: 2px 40px">Uzbek (Uzbekistan)</a></li>
                                                <li><a style="padding: 2px 40px">Vietnamese (Vietnam)</a></li>
                                                <li><a style="padding: 2px 40px">Welsh</a></li>
                                                <li><a style="padding: 2px 40px">Zulu (South Africa)</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" id="voices">
                            <h6 class="voices">Voices</h6>
                            <div class="custom-spinner voice-radio-spinner" style="display: none;">
                                <div class="double-bounce1"></div>
                                <div class="double-bounce2"></div>
                            </div>
                            <div id="voice-radio-group" role="radiogroup" style="">
                                <div class="radio-control">
                                    <input class="input-control" type="radio" name="voice" soundeffects="" effects=""
                                        provider="ai103" id="ai3-jv-ID-Angkasa" speechname="Angkasa"
                                        value="ai3-jv-ID-Angkasa" checked="">
                                    <label class="label-control" for="ai3-jv-ID-Angkasa">Angkasa, Female

                                        <span class="badge badge-success">AI3</span>

                                        <span class="badge badge-danger">Premium</span></label>
                                </div>
                                <div class="radio-control">
                                    <input class="input-control" type="radio" name="voice" soundeffects="" effects=""
                                        provider="ai103" id="ai3-jv-ID-Rimbo" speechname="Rimbo" value="ai3-jv-ID-Rimbo"
                                        checked="">
                                    <label class="label-control" for="ai3-jv-ID-Rimbo">Rimbo, Male

                                        <span class="badge badge-success">AI3</span>

                                        <span class="badge badge-danger">Premium</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" id="action-buttons">
                            <div id="buttons-box"><button class="ripple convert-button" type="submit" name="convert"><i
                                        class="fa fa-play"></i>Convert to Speech</button> <button
                                    class="ripple download-button download-button-actual"><i
                                        class="fa fa-download"></i>Download <span id="download-format">MP3</span> <i
                                        data-toggle="tooltip" data-original-title="Convert a Text to Speech First"><i
                                            class="fa fa-info-circle"></i></i></button>
                                <p>Sample Rate: <span id="sample-rate">24000Hz</span></p>
                            </div>
                            <div id="additional-settings">
                                <div id="accordionParent">
                                    <div class="card">
                                        <div class="card-header" id="headerOne"><a data-toggle="collapse"
                                                data-target="#audio-collapse" aria-expanded="false"
                                                aria-controls="audio-collapse" class="collapsed"><span
                                                    class="titles">Audio Settings</span></a></div>
                                        <div class="collapse" id="audio-collapse" aria-labelledby="headerOne"
                                            data-parent="#accordionParent">
                                            <div id="settings-box" class="d-flex">
                                                <div class="settings mr-auto" id="audio-format">
                                                    <h6>Audio Format</h6>
                                                    <div id="audio-format-group" role="radiogroup">
                                                        <div class="radio-control"><input class="input-control"
                                                                type="radio" name="format" id="mp3" value="mp3"
                                                                checked=""><label class="label-control"
                                                                for="mp3">MP3</label></div>
                                                        <div class="radio-control"><input class="input-control"
                                                                type="radio" name="format" id="ogg"
                                                                value="ogg_vorbis"><label class="label-control"
                                                                for="ogg">OGG</label></div>
                                                        <div class="radio-control"><input class="input-control"
                                                                type="radio" name="format" id="wav" value="wav"><label
                                                                class="label-control" for="wav">WAV <i
                                                                    data-toggle="tooltip" title=""
                                                                    data-original-title="WAV (Audio Format) will may take longer time to convert.">
                                                                    <div class="fa fa-info-circle"></div>
                                                                </i>&nbsp; <span
                                                                    class="badge badge-danger">P</span></label></div>
                                                    </div>
                                                </div>
                                                <div class="settings" id="audio-frequency">
                                                    <h6>Sample Rate</h6>
                                                    <div id="audio-frequency-group" role="radiogroup">
                                                        <div class="radio-control"><input class="input-control"
                                                                type="radio" name="frequency" id="48000"
                                                                value="48000"><label class="label-control"
                                                                for="48000">48,000Hz <span
                                                                    class="badge badge-danger">P</span></label></div>
                                                        <div class="radio-control"><input class="input-control"
                                                                type="radio" name="frequency" id="44100" value="44100"
                                                                disabled="disabled"><label class="label-control"
                                                                for="44100">44,100Hz <span
                                                                    class="badge badge-danger">P</span></label></div>
                                                        <div class="radio-control"><input class="input-control"
                                                                type="radio" name="frequency" id="24000" value="24000"
                                                                checked=""><label class="label-control"
                                                                for="24000">24000Hz</label></div>
                                                        <div class="radio-control"><input class="input-control"
                                                                type="radio" name="frequency" id="22050" value="22050"
                                                                disabled="disabled"><label class="label-control"
                                                                for="22050">22050Hz</label></div>
                                                        <div class="radio-control"><input class="input-control"
                                                                type="radio" name="frequency" id="16000"
                                                                value="16000"><label class="label-control"
                                                                for="16000">16000Hz</label></div>
                                                        <div class="radio-control"><input class="input-control"
                                                                type="radio" name="frequency" id="8000" value="8000"
                                                                disabled="disabled"><label class="label-control"
                                                                for="8000">8000Hz</label></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headerTwo"><a data-toggle="collapse"
                                                data-target="#voice-collapse" aria-expanded="true"
                                                aria-controls="voice-collapse" class="collapsed"><span
                                                    class="titles">Voice Settings</span></a></div>
                                        <div class="collapse show" id="voice-collapse" aria-labelledby="headerTwo"
                                            data-parent="#accordionParent">
                                            <div class="col-md-12 mt-2 mb-2" id="addional_vc">
                                                <div class="mb-4" id="master-voice-volume">
                                                    <h6>Voice Volume</h6><span class="irs js-irs-0 irs-with-grid"><span
                                                            class="irs"><span class="irs-line" tabindex="0"><span
                                                                    class="irs-line-left"></span><span
                                                                    class="irs-line-mid"></span><span
                                                                    class="irs-line-right"></span></span><span
                                                                class="irs-min"
                                                                style="visibility: visible;">-20dB</span><span
                                                                class="irs-max"
                                                                style="visibility: visible;">20dB</span><span
                                                                class="irs-from"
                                                                style="visibility: hidden;">0</span><span class="irs-to"
                                                                style="visibility: hidden;">0</span><span
                                                                class="irs-single"
                                                                style="left: 44.0735%;">0dB</span></span><span
                                                            class="irs-grid"
                                                            style="width: 95.2218%; left: 2.28908%;"><span
                                                                class="irs-grid-pol" style="left: 0%"></span><span
                                                                class="irs-grid-text js-grid-text-0"
                                                                style="left: 0%; margin-left: -3.65116%;">-20</span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 20%"></span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 15%"></span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 10%"></span><span
                                                                class="irs-grid-pol small" style="left: 5%"></span><span
                                                                class="irs-grid-pol" style="left: 25%"></span><span
                                                                class="irs-grid-text js-grid-text-1"
                                                                style="left: 25%; visibility: visible; margin-left: -3.65116%;">-10</span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 45%"></span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 40%"></span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 35%"></span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 30%"></span><span class="irs-grid-pol"
                                                                style="left: 50%"></span><span
                                                                class="irs-grid-text js-grid-text-2"
                                                                style="left: 50%; visibility: visible; margin-left: -2.078%;">0</span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 70%"></span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 65%"></span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 60%"></span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 55%"></span><span class="irs-grid-pol"
                                                                style="left: 75%"></span><span
                                                                class="irs-grid-text js-grid-text-3"
                                                                style="left: 75%; visibility: visible; margin-left: -3.13212%;">10</span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 95%"></span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 90%"></span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 85%"></span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 80%"></span><span class="irs-grid-pol"
                                                                style="left: 100%"></span><span
                                                                class="irs-grid-text js-grid-text-4"
                                                                style="left: 100%; margin-left: -3.13212%;">20</span></span><span
                                                            class="irs-bar"
                                                            style="left: 2.38908%; width: 47.6109%;"></span><span
                                                            class="irs-bar-edge"></span><span
                                                            class="irs-shadow shadow-single"
                                                            style="display: none;"></span><span
                                                            class="irs-slider single"
                                                            style="left: 47.6109%;"></span></span><input type="text"
                                                        class="form-control irs-hidden-input" id="ion_volume"
                                                        name="master_volume" placeholder="Voice Volume" tabindex="-1"
                                                        readonly="">
                                                </div>
                                                <div class="mb-45">
                                                    <h6 class="mb-2">Voice Speed</h6><span
                                                        class="irs js-irs-2 irs-with-grid"><span class="irs"><span
                                                                class="irs-line" tabindex="0"><span
                                                                    class="irs-line-left"></span><span
                                                                    class="irs-line-mid"></span><span
                                                                    class="irs-line-right"></span></span><span
                                                                class="irs-min"
                                                                style="visibility: visible;">-100%</span><span
                                                                class="irs-max"
                                                                style="visibility: visible;">100%</span><span
                                                                class="irs-from"
                                                                style="visibility: hidden;">0</span><span class="irs-to"
                                                                style="visibility: hidden;">0</span><span
                                                                class="irs-single"
                                                                style="left: 38.4627%;">-10%</span></span><span
                                                            class="irs-grid"
                                                            style="width: 95.2218%; left: 2.28908%;"><span
                                                                class="irs-grid-pol" style="left: 0%"></span><span
                                                                class="irs-grid-text js-grid-text-0"
                                                                style="left: 0%; margin-left: -4.70527%;">-100</span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 20%"></span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 15%"></span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 10%"></span><span
                                                                class="irs-grid-pol small" style="left: 5%"></span><span
                                                                class="irs-grid-pol" style="left: 25%"></span><span
                                                                class="irs-grid-text js-grid-text-1"
                                                                style="left: 25%; visibility: visible; margin-left: -3.65116%;">-50</span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 45%"></span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 40%"></span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 35%"></span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 30%"></span><span class="irs-grid-pol"
                                                                style="left: 50%"></span><span
                                                                class="irs-grid-text js-grid-text-2"
                                                                style="left: 50%; visibility: visible; margin-left: -2.078%;">0</span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 70%"></span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 65%"></span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 60%"></span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 55%"></span><span class="irs-grid-pol"
                                                                style="left: 75%"></span><span
                                                                class="irs-grid-text js-grid-text-3"
                                                                style="left: 75%; visibility: visible; margin-left: -3.13212%;">50</span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 95%"></span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 90%"></span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 85%"></span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 80%"></span><span class="irs-grid-pol"
                                                                style="left: 100%"></span><span
                                                                class="irs-grid-text js-grid-text-4"
                                                                style="left: 100%; margin-left: -4.18621%;">100</span></span><span
                                                            class="irs-bar"
                                                            style="left: 2.38908%; width: 42.8498%;"></span><span
                                                            class="irs-bar-edge"></span><span
                                                            class="irs-shadow shadow-single"
                                                            style="display: none;"></span><span
                                                            class="irs-slider single"
                                                            style="left: 42.8498%;"></span></span><input type="text"
                                                        class="form-control irs-hidden-input" id="ion_speed"
                                                        name="speed" placeholder="Voice Speed" tabindex="-1"
                                                        readonly="">
                                                </div>
                                                <div class="mb-2" id="voice-pitch" style="">
                                                    <h6>Voice Pitch</h6><span class="irs js-irs-1 irs-with-grid"><span
                                                            class="irs"><span class="irs-line" tabindex="0"><span
                                                                    class="irs-line-left"></span><span
                                                                    class="irs-line-mid"></span><span
                                                                    class="irs-line-right"></span></span><span
                                                                class="irs-min"
                                                                style="visibility: visible;">-100%</span><span
                                                                class="irs-max"
                                                                style="visibility: visible;">100%</span><span
                                                                class="irs-from"
                                                                style="visibility: hidden;">0</span><span class="irs-to"
                                                                style="visibility: hidden;">0</span><span
                                                                class="irs-single"
                                                                style="left: 42.5637%;">-4%</span></span><span
                                                            class="irs-grid"
                                                            style="width: 95.2218%; left: 2.28908%;"><span
                                                                class="irs-grid-pol" style="left: 0%"></span><span
                                                                class="irs-grid-text js-grid-text-0"
                                                                style="left: 0%; margin-left: -4.70527%;">-100</span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 20%"></span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 15%"></span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 10%"></span><span
                                                                class="irs-grid-pol small" style="left: 5%"></span><span
                                                                class="irs-grid-pol" style="left: 25%"></span><span
                                                                class="irs-grid-text js-grid-text-1"
                                                                style="left: 25%; visibility: visible; margin-left: -3.65116%;">-50</span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 45%"></span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 40%"></span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 35%"></span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 30%"></span><span class="irs-grid-pol"
                                                                style="left: 50%"></span><span
                                                                class="irs-grid-text js-grid-text-2"
                                                                style="left: 50%; visibility: visible; margin-left: -2.078%;">0</span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 70%"></span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 65%"></span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 60%"></span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 55%"></span><span class="irs-grid-pol"
                                                                style="left: 75%"></span><span
                                                                class="irs-grid-text js-grid-text-3"
                                                                style="left: 75%; visibility: visible; margin-left: -3.13212%;">50</span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 95%"></span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 90%"></span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 85%"></span><span
                                                                class="irs-grid-pol small"
                                                                style="left: 80%"></span><span class="irs-grid-pol"
                                                                style="left: 100%"></span><span
                                                                class="irs-grid-text js-grid-text-4"
                                                                style="left: 100%; margin-left: -4.18621%;">100</span></span><span
                                                            class="irs-bar"
                                                            style="left: 2.38908%; width: 45.7065%;"></span><span
                                                            class="irs-bar-edge"></span><span
                                                            class="irs-shadow shadow-single"
                                                            style="display: none;"></span><span
                                                            class="irs-slider single"
                                                            style="left: 45.7065%;"></span></span><input type="text"
                                                        class="form-control irs-hidden-input" id="ion_pitch"
                                                        name="pitch" placeholder="Voice Pitch" tabindex="-1"
                                                        readonly="">
                                                </div>
                                                <div class="clear-button"><button type="button"
                                                        data-target="t-basic-vc">Back to Basic</button><button
                                                        type="button" id="ion_clear">Reset</button></div>
                                            </div>
                                            <div id="basic-voice-settings" style="display: none;"
                                                class="col-md-12 mt-2 mb-2">
                                                <div id="settings-box" class="d-flex">
                                                    <div class="settings mr-auto" id="settings-left">
                                                        <h6>Voice Speed</h6>
                                                        <div class="voice-settings-group" role="radiogroup">
                                                            <div class="radio-control"><input class="input-control"
                                                                    type="radio" name="speed" id="x-fast"
                                                                    value="x-fast"><label class="label-control"
                                                                    for="x-fast">x-Fast</label></div>
                                                            <div class="radio-control"><input class="input-control"
                                                                    type="radio" name="speed" id="fast"
                                                                    value="fast"><label class="label-control"
                                                                    for="fast">Fast</label></div>
                                                            <div class="radio-control"><input class="input-control"
                                                                    type="radio" name="speed" id="normal" value="normal"
                                                                    checked=""><label class="label-control"
                                                                    for="normal">Normal</label></div>
                                                            <div class="radio-control"><input class="input-control"
                                                                    type="radio" name="speed" id="slow"
                                                                    value="slow"><label class="label-control"
                                                                    for="slow">Slow</label></div>
                                                            <div class="radio-control"><input class="input-control"
                                                                    type="radio" name="speed" id="x-slow"
                                                                    value="x-slow"><label class="label-control"
                                                                    for="x-slow">x-Slow</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="settings" id="basic-voice-volume">
                                                        <h6>Voice Volume</h6>
                                                        <div class="voice-settings-group" role="radiogroup">
                                                            <div class="radio-control"><input class="input-control"
                                                                    type="radio" name="master_volume"
                                                                    id="master_volume_x-soft" value="x-soft"><label
                                                                    class="label-control"
                                                                    for="master_volume_x-soft">x-Soft</label></div>
                                                            <div class="radio-control"><input class="input-control"
                                                                    type="radio" name="master_volume"
                                                                    id="master_volume_soft" value="soft"><label
                                                                    class="label-control"
                                                                    for="master_volume_soft">Soft</label></div>
                                                            <div class="radio-control"><input class="input-control"
                                                                    type="radio" name="master_volume"
                                                                    id="master_volume_medium" value="medium"
                                                                    checked=""><label class="label-control"
                                                                    for="master_volume_medium">Medium</label></div>
                                                            <div class="radio-control"><input class="input-control"
                                                                    type="radio" name="master_volume"
                                                                    id="master_volume_loud" value="loud"><label
                                                                    class="label-control"
                                                                    for="master_volume_loud">Loud</label></div>
                                                            <div class="radio-control"><input class="input-control"
                                                                    type="radio" name="master_volume"
                                                                    id="master_volume_x-loud" value="x-loud"><label
                                                                    class="label-control"
                                                                    for="master_volume_x-loud">x-Loud</label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="settings-box" class="pt-2">
                                                    <div class="settings" id="settings-left">
                                                        <h6>Voice Pitch <i data-toggle="tooltip" title=""
                                                                data-original-title="Supported only by Standard TTS (AI Engine)">
                                                                <div class="fa fa-info-circle"></div>
                                                            </i></h6>
                                                        <div class="voice-settings-group" role="radiogroup">
                                                            <div class="radio-control"><input class="input-control"
                                                                    type="radio" name="pitch" id="pitch_x-low"
                                                                    value="pitch_x-low"><label class="label-control"
                                                                    for="pitch_x-low">x-low</label></div>
                                                            <div class="radio-control"><input class="input-control"
                                                                    type="radio" name="pitch" id="pitch_low"
                                                                    value="pitch_low"><label class="label-control"
                                                                    for="pitch_low">Low</label></div>
                                                            <div class="radio-control"><input class="input-control"
                                                                    type="radio" name="pitch" id="pitch_medium"
                                                                    value="pitch_medium"><label class="label-control"
                                                                    for="pitch_medium">Medium</label></div>
                                                            <div class="radio-control"><input class="input-control"
                                                                    type="radio" name="pitch" id="pitch_default"
                                                                    value="pitch_default"><label class="label-control"
                                                                    for="pitch_default">Default</label></div>
                                                            <div class="radio-control"><input class="input-control"
                                                                    type="radio" name="pitch" id="pitch_high"
                                                                    value="pitch_high"><label class="label-control"
                                                                    for="pitch_high">High</label></div>
                                                            <div class="radio-control"><input class="input-control"
                                                                    type="radio" name="pitch" id="pitch_x-high"
                                                                    value="pitch_x-high"><label class="label-control"
                                                                    for="pitch_x-high">x-High</label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clear-button"><button type="button"
                                                        data-target="t-advanced-vc">Back to Advanced</button></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headerTwo"><a data-toggle="collapse"
                                                data-target="#effect-collapse" aria-expanded="false"
                                                aria-controls="effect-collapse" class="collapsed"><span
                                                    class="flex-center titles">Voice Effects <span
                                                        class="badge badge-black ml-1">E</span> <i data-toggle="tooltip"
                                                        data-html="true"
                                                        data-original-title="Voice Effects are only available for selected voices. Check <span class='badge badge-black'>E</span> sign near voice name."><i
                                                            class="ml-1 text-muted fa fa-info-circle"></i></i></span></a>
                                        </div>
                                        <div class="collapse" id="effect-collapse" aria-labelledby="headerTwo"
                                            data-parent="#accordionParent">
                                            <div id="settings-box">
                                                <div class="settings">
                                                    <h6>Voice Effect</h6>
                                                    <div class="voice-settings-group" role="radiogroup">
                                                        <div class="d-flex bd-highlight mb-3">
                                                            <div class="mr-auto bd-highlight">
                                                                <div class="radio-control"><input class="input-control"
                                                                        type="radio" name="effect" id="default"
                                                                        value="default" checked=""><label
                                                                        class="label-control"
                                                                        for="default">Default</label></div>
                                                                <div class="radio-control"><input class="input-control"
                                                                        type="radio" name="effect" id="breathing"
                                                                        value="breathing" disabled="disabled"><label
                                                                        class="label-control" for="breathing">Breathing
                                                                        <i data-toggle="tooltip"
                                                                            data-original-title="Supports only on Standard TTS and Free Voices."><i
                                                                                class="fa fa-info-circle"></i></i></label>
                                                                </div>
                                                                <div class="radio-control"><input class="input-control"
                                                                        type="radio" name="effect" id="softer"
                                                                        value="soft" disabled="disabled"><label
                                                                        class="label-control" for="softer">Soft <i
                                                                            data-toggle="tooltip"
                                                                            data-original-title="Supports only on Standard TTS and Free Voices."><i
                                                                                class="fa fa-info-circle"></i></i></label>
                                                                </div>
                                                                <div class="radio-control"><input class="input-control"
                                                                        type="radio" name="effect" id="whispered"
                                                                        value="whispered" disabled="disabled"><label
                                                                        class="label-control" for="whispered">Whispered
                                                                        <i data-toggle="tooltip"
                                                                            data-original-title="Supports only on Standard TTS and Free Voices."><i
                                                                                class="fa fa-info-circle"></i></i></label>
                                                                </div>
                                                                <div class="radio-control"><input class="input-control"
                                                                        type="radio" name="effect" id="conversational"
                                                                        value="conversational"
                                                                        disabled="disabled"><label class="label-control"
                                                                        for="conversational">Conversational</label>
                                                                </div>
                                                                <div class="radio-control"><input class="input-control"
                                                                        type="radio" name="effect" id="news"
                                                                        value="news" disabled="disabled"><label
                                                                        class="label-control"
                                                                        for="news">Newscaster</label></div>
                                                                <div class="radio-control"><input class="input-control"
                                                                        type="radio" name="effect" id="drc" value="drc"
                                                                        disabled="disabled"><label class="label-control"
                                                                        for="drc">DRC <i data-toggle="tooltip" title=""
                                                                            data-original-title="Dynamic Range Compression (Audio Normalize) **">
                                                                            <div class="fa fa-info-circle"></div>
                                                                        </i></label></div>
                                                                <div class="radio-control"><input class="input-control"
                                                                        type="radio" name="effect" id="customersupport"
                                                                        value="customersupport"
                                                                        disabled="disabled"><label class="label-control"
                                                                        for="customersupport">Customer Support</label>
                                                                </div>
                                                                <div class="radio-control"><input class="input-control"
                                                                        type="radio" name="effect" id="assistant"
                                                                        value="assistant" disabled="disabled"><label
                                                                        class="label-control" for="assistant">Digital
                                                                        Assistant</label></div>
                                                                <div class="radio-control"><input class="input-control"
                                                                        type="radio" name="effect" id="narration"
                                                                        value="narration" disabled="disabled"><label
                                                                        class="label-control"
                                                                        for="narration">Narration</label></div>
                                                                <div class="radio-control"><input class="input-control"
                                                                        type="radio" name="effect" id="happy"
                                                                        value="happy" disabled="disabled"><label
                                                                        class="label-control" for="happy">Happy</label>
                                                                </div>
                                                                <div class="radio-control"><input class="input-control"
                                                                        type="radio" name="effect" id="sad" value="sad"
                                                                        disabled="disabled"><label class="label-control"
                                                                        for="sad">Sad</label></div>
                                                            </div>
                                                            <div class="mr-auto bd-highlight">
                                                                <div class="radio-control"><input class="input-control"
                                                                        type="radio" name="effect" id="angry"
                                                                        value="angry" disabled="disabled"><label
                                                                        class="label-control" for="angry">Angry</label>
                                                                </div>
                                                                <div class="radio-control"><input class="input-control"
                                                                        type="radio" name="effect" id="empathic"
                                                                        value="empathic" disabled="disabled"><label
                                                                        class="label-control"
                                                                        for="empathic">Empathic</label></div>
                                                                <div class="radio-control"><input class="input-control"
                                                                        type="radio" name="effect" id="calm"
                                                                        value="calm" disabled="disabled"><label
                                                                        class="label-control" for="calm">Calm</label>
                                                                </div>
                                                                <div class="radio-control"><input class="input-control"
                                                                        type="radio" name="effect" id="excited"
                                                                        value="excited" disabled="disabled"><label
                                                                        class="label-control"
                                                                        for="excited">Excited</label></div>
                                                                <div class="radio-control"><input class="input-control"
                                                                        type="radio" name="effect" id="friendly"
                                                                        value="friendly" disabled="disabled"><label
                                                                        class="label-control"
                                                                        for="friendly">Friendly</label></div>
                                                                <div class="radio-control"><input class="input-control"
                                                                        type="radio" name="effect" id="hopeful"
                                                                        value="hopeful" disabled="disabled"><label
                                                                        class="label-control"
                                                                        for="hopeful">Hopeful</label></div>
                                                                <div class="radio-control"><input class="input-control"
                                                                        type="radio" name="effect" id="shouting"
                                                                        value="shouting" disabled="disabled"><label
                                                                        class="label-control"
                                                                        for="shouting">Shouting</label></div>
                                                                <div class="radio-control"><input class="input-control"
                                                                        type="radio" name="effect" id="feared"
                                                                        value="feared" disabled="disabled"><label
                                                                        class="label-control"
                                                                        for="feared">Feared</label></div>
                                                                <div class="radio-control"><input class="input-control"
                                                                        type="radio" name="effect" id="terrified"
                                                                        value="terrified" disabled="disabled"><label
                                                                        class="label-control"
                                                                        for="terrified">Terrified</label></div>
                                                                <div class="radio-control"><input class="input-control"
                                                                        type="radio" name="effect" id="unfriendly"
                                                                        value="unfriendly" disabled="disabled"><label
                                                                        class="label-control"
                                                                        for="unfriendly">Unfriendly</label></div>
                                                                <div class="radio-control"><input class="input-control"
                                                                        type="radio" name="effect" id="serious"
                                                                        value="serious" disabled="disabled"><label
                                                                        class="label-control"
                                                                        for="serious">Serious</label></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center mt-2">
                        <div class="col-12">
                            <hr class="mb-4">
                            <div class="homepage-coming-soon pl-3 pr-3"><span>Coming soon:</span><br>
                                <p>Pronunciation Editor, Payment Auto-pay feature and 50+ fresh new AI voices.</p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection