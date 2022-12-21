@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
<style>
    @keyframes chatBubblesDots {
  0% {
    top: 0px;
  }
  50% {
    top: -4px;
  }
  100% {
    top: 0px;
  }
}
.chat-bubbles-container {
  padding: 40px;
  height: 500px;
  background: #f7f7f7;
  overflow: hidden;
}
.chat-bubbles-container .chat-bubble {
  top: 600px;
  opacity: 0;
  background: #DEDEDE;
  width: 62%;
  margin-bottom: 10px;
  padding: 2.5%;
  border-radius: 10px;
  position: relative;
  font-size: 12px;
}
.chat-bubbles-container .chat-bubble.left {
  float: left;
  clear: both;
}
.chat-bubbles-container .chat-bubble.right {
  float: right;
  clear: both;
}
.chat-bubbles-container .chat-bubble.writing {
  opacity: 0;
  top: inherit !important;
  bottom: 0px !important;
  width: 66.8px;
  float: left;
  clear: both;
  padding: 3% 3%;
}
.chat-bubbles-container .chat-bubble.writing .dot {
  position: relative;
  background: #000;
  width: 8px;
  height: 8px;
  border-radius: 100%;
  float: left;
  margin-right: 5px;
}
.chat-bubbles-container .chat-bubble.writing .dot:nth-child(1) {
  animation-name: chatBubblesDots;
  animation-duration: 1s;
  animation-iteration-count: infinite;
}
.chat-bubbles-container .chat-bubble.writing .dot:nth-child(2) {
  animation-name: chatBubblesDots;
  animation-duration: 1s;
  animation-iteration-count: infinite;
  animation-delay: 0.2s;
}
.chat-bubbles-container .chat-bubble.writing .dot:nth-child(3) {
  animation-name: chatBubblesDots;
  animation-duration: 1s;
  animation-iteration-count: infinite;
  animation-delay: 0.5s;
}
.chat-bubbles-container .chat-bubble img {
  width: 100%;
}
</style>

@section('content')

<section class="bg-stone-900 mb-20">
    <div class="container mx-auto flex px-1 sm:px-20 py-20 md:flex-row flex-col items-center">
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
        <div class="container">
            <div class="row">
                <div class="chat-bubbles-container" style="border-radius:15px;">
                    <div class="col-xs-12 col-md-4 col-md-push-4">
                        <div class="chat-bubble left">
                            <b>buat ide konten hari ini?</b>
                        </div>
                        <div class="chat-bubble right">
                            1. Cara Menggunakan Aplikasi Pembayaran Digital Terbaru
                            <br>
                            2. Tips Memilih Aplikasi Manajemen Keuangan Terbaik
                            <br>
                            3. Panduan Lengkap Membuat Aplikasi Mobile
                            <br>
                            4. 10 Aplikasi Mobile Terbaik untuk Bisnis
                            <br>
                            5. Cara Membuat Aplikasi Web yang Responsif
                            <br>
                            6. Cara Membuat Aplikasi Android dari Nol
                            <br>
                            7. Cara Membuat Aplikasi iOS dari Nol
                            <br>
                            8. 10 Aplikasi Mobile Terbaik untuk Pendidikan
                            <br>
                            9. Cara Membuat Aplikasi Mobile untuk Pembelajaran
                            <br>
                            10. Cara Membuat Aplikasi Mobile untuk Keuangan
                        </div>
                        <div class="chat-bubble left">
                            Bagus, saya akan membuatnya
                        </div>
                        <div class="chat-bubble right">
                            Semoga Membantu! &#128077;
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
            <p class="mb-8 text-sm text-neutral-50">
            Chat AI adalah sebuah teknologi yang menggunakan kecerdasan buatan untuk memungkinkan komunikasi secara langsung melalui chat atau pesan teks. 
            <br><br>
            Chat AI juga dapat membantu meningkatkan efisiensi dan produktivitas, karena dapat membantu menangani tugas-tugas yang rutin dan memberikan jawaban cepat kepada pelanggan atau pengguna.
            </p>
            <div class="flex justify-center">
                <a href="https://wa.me/6282119908751" class="inline-flex text-white bg-green-700 border-0 py-2 px-6 focus:outline-none hover:bg-gray-800 rounded text-lg">
                    Live Chat
                </a>
            </div>
        </div>
    </div>
</section>

<script>
    var chatBubbles = jQuery.noConflict();
function chatBubblesEnter(child){
  chatBubbles(".chat-bubble:nth-child("+child+")").animate({ top:"0px", opacity:"0.2" });
  chatBubbles(".chat-bubble:nth-child("+child+")").animate({ top:"0px", opacity:"1" });
}
function chatBubblesWriting(){
  chatBubbles(".chat-bubble.writing").animate({ opacity:"1" });
  chatBubbles(".chat-bubble.writing").animate({ opacity:"0" });
}
function chatBubblesOut(){
  chatBubbles(".chat-bubble").animate({ opacity:"0" });
  chatBubbles(".chat-bubble").animate({ top:"600px" });
}
function chatBubblesPlay(){
  setTimeout(function(){chatBubblesWriting();});
  setTimeout(function(){chatBubblesEnter(1);}, 1000);
  setTimeout(function(){chatBubblesEnter(2);}, 3000);
  setTimeout(function(){chatBubblesWriting();}, 4000);
  setTimeout(function(){chatBubblesEnter(3);}, 5000);
  setTimeout(function(){chatBubblesEnter(4);}, 7000);
  setTimeout(function(){chatBubblesOut();}, 9000);
}
chatBubbles(document).ready(function(){
  chatBubblesPlay();
  setInterval(function(){chatBubblesPlay();}, 9500);
});
</script>

@endsection