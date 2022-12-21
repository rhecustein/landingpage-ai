@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')

<section class="bg-stone-900 mb-20">
    <div class="container mx-auto flex px-1 sm:px-20 py-20 md:flex-row flex-col items-center">
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
        <div class="container">
            <div class="row">
                <p> <b>Visit github repository for latest version <a
                            href="https://github.com/lsyk4/Bubble-Chat-Animation">Here</a></b></p>
                <div class="chat-bubbles-container">
                    <div class="col-xs-12 col-md-4 col-md-push-4">

                        <div class="chat-bubble left">
                            Hi Frank. How are you?
                        </div>
                        <div class="chat-bubble right">
                            I'm Fine, and you?.
                            <br>
                            <img src="images/infographbc1.png">
                        </div>
                        <div class="chat-bubble left">
                            I'm Fine too!
                        </div>
                        <div class="chat-bubble right">
                            Great! &#128077;
                        </div>

                        <div class="chat-bubble writing">
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="lg:flex-grow md:w-1/2 px-4 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
            <h1 class="title-font sm:text-8xl text-5xl mb-4 font-medium text-neutral-50">
               ChatBot AI
            </h1>
            <p class="mb-8 sm:text-4xl text-3xl text-neutral-50">
                papa
            </p>
            <div class="flex justify-center">
                <a href="https://github.com/nasirkhan" class="inline-flex text-white bg-gray-700 border-0 py-2 px-6 focus:outline-none hover:bg-gray-800 rounded text-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="w-8 h-8" viewBox="0 0 18 18">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                    </svg>
                    Github
                </a>
            </div>
        </div>
    </div>
</section>

@endsection