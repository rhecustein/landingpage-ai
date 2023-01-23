@extends('frontend.layouts.appi')

@section('title') {{app_name()}} @endsection

@section('content')

<section class="page-title">
        <div class="swiper-container slider-main">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slider-st1">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="box-slider">
                                        <div class="content-box">
                                            <h1 class="title">Whatsapp <br>Open AI + AIDEN</h1>
                                            <p class="sub-title">Lebih dari 20+ Tools tersedia untuk membantu pekerjaan kamu, dan buat hal hal yang menyenangkan dengan Whatsapp Open AI.</p>
                                            <div class="wrap-btn">
                                                <a href="#" class="tf-button-st2 btn-effect" data-toggle="modal" data-target="#popup_bid"><span class="effect">Fitur Whatsapp AI</span></a>
                                                <a href="https://wa.me/6285806262388" class="tf-button btn-effect popup-youtube">
                                                    <span class="boder-fade"></span>                                     
                                                    <span class="effect">Chat AIDEN</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="image">
                                            <img src="{{ asset('cybox/cybox/assets/images/common/itemslider.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- <div class="btn-next-main"><i class="far fa-angle-right"></i></div>
            <div class="btn-prev-main"><i class="far fa-angle-left"></i></div>
            <div class="swiper-pagination"></div> -->
        </div>
    </section>

    <section class="tf-section tf-about pb-mobie">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="content-about mobie-40" data-aos="fade-up" data-aos-duration="800">
                        <div class="tf-title st2">
                            <p class="h8 sub-title">Tentang Kami</p>
                            <h4 class="title">Apa itu AIDEN?</h4>
                        </div>
                        <p>AIDEN merupakan layanan dari Open AI, yang dimasukan kedalam Whatsapp, sehingga dapat melakukan interaksi terkait tanya jawab, oleh kecerdasan buatan dari Open AI, serta dilengkapi tools yang berguna untuk productivitas lainnya. seperti sosial media downloader, dan converter media.</p>
                            <a class="tf-button st2 btn-effect" href="https://wa.me/6285806262388">   
                                <span class="boder-fade"></span>                                     
                                <span class="effect">Coba AIDEN</span>
                            </a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="wrap-about p-l70" data-aos="fade-up" data-aos-duration="800">
                        <div class="box-text corner-box active">
                            <div class="h7">Server ON 24 Jam</div>
                            <p>Kami memastikan layanan AIDEN akan terus aktif selama 24 Jam, untuk melayani permintaan anda.</p>
                        </div>
                        <div class="box-text corner-box">
                            <div class="h7">Support Tim 7/24</div>
                            <p>Kami menyediakan Layanan Support dari tim kami untuk membantu anda, dalam penggunaan AIDEN secara maksimal.</p>
                        </div>
                        <div class="box-text corner-box mb-0">
                            <div class="h7">Data Privasi Aman.</div>
                            <p>Data Privasi kami aman. Kami menggunakan teknologi terkini untuk menjaga data Anda aman dan terlindungi. Kami memiliki sistem keamanan yang ketat untuk memastikan bahwa data Anda tidak dapat diakses oleh pihak ketiga tanpa izin Anda. Kami juga menggunakan enkripsi untuk melindungi data Anda dari akses yang tidak sah. Kami juga menggunakan firewall dan sistem deteksi ancaman untuk melindungi data Anda dari serangan luar. Kami juga menggunakan prosedur keamanan yang ketat untuk memastikan bahwa data Anda tetap aman dan terlindungi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="tf-section tf-project pb-mobie">
        <div class="container-fluid">
            <div class="swiper-container swiper mySwiper swiper-h">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="swiper mySwiper1 swiper-v">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="img-box">
                                        <img src="assets/images/common/img1.jpg" alt="">
                                        <div class="content">
                                         <a href="item.html">Taiyo Robotics</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="img-box">
                                        <img src="assets/images/common/img2.jpg" alt="">
                                        <div class="content">
                                         <a href="item.html">Pesky Penguins</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="img-box">
                                        <img src="assets/images/common/img3.jpg" alt="">
                                        <div class="content">
                                         <a href="item.html">Aurory</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="img-box">
                                        <img src="assets/images/common/img4.jpg" alt="">
                                        <div class="content">
                                         <a href="item.html">Taiyo Robotics</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="img-box">
                                        <img src="assets/images/common/img5.jpg" alt="">
                                        <div class="content">
                                         <a href="item.html">Portals</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="img-box">
                                        <img src="assets/images/common/img6.jpg" alt="">
                                        <div class="content">
                                         <a href="item.html">Grim Syndicate</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="img-box">
                                        <img src="assets/images/common/img7.jpg" alt="">
                                        <div class="content">
                                           <a href="item.html">Jelly Beasts</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="img-box">
                                        <img src="assets/images/common/img1.jpg" alt="">
                                        <div class="content">
                                         <a href="item.html">Jungle Cats</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-container swiper mySwiper swiper-h">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="swiper mySwiper2 swiper-v">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="img-box">
                                        <img src="assets/images/common/img7.jpg" alt="">
                                        <div class="content">
                                         <a href="item.html">Taiyo Robotics</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="img-box">
                                        <img src="assets/images/common/img6.jpg" alt="">
                                        <div class="content">
                                         <a href="item.html">Jungle Cats</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="img-box">
                                        <img src="assets/images/common/img5.jpg" alt="">
                                        <div class="content">
                                         <a href="item.html">Jelly Beasts</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="img-box">
                                        <img src="assets/images/common/img4.jpg" alt="">
                                        <div class="content">
                                         <a href="item.html"> Grim Syndicate</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="img-box">
                                        <img src="assets/images/common/img3.jpg" alt="">
                                        <div class="content">
                                         <a href="item.html">Portals</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="img-box">
                                        <img src="assets/images/common/img2.jpg" alt="">
                                        <div class="content">
                                         <a href="item.html">Taiyo Robotics</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="img-box">
                                        <img src="assets/images/common/img1.jpg" alt="">
                                        <div class="content">
                                           <a href="item.html">Pesky Penguins</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="img-box">
                                        <img src="assets/images/common/img5.jpg" alt="">
                                        <div class="content">
                                         <a href="item.html">Aurory</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="tf-section tf-roadmap">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tf-title m-b30" data-aos="fade-up" data-aos-duration="800">
                        <p class="h8 sub-title">ROADMAP</p>
                        <h4 class="title">AIDEN Timeline</h4>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="roadmap scrol">
                        <div class="box box-left">
                            <div class="rm-box style" data-aos="fade-right" data-aos-duration="1200">
                                <div class="corner-box">
                                    <h5>Desember v1 2022</h5>
                                    <ul>
                                        <li>Rilis V.1</li>
                                        <li>Stiker Whatsapp</li>
                                        <li>Open AI Integrated</li>
                                        <li>AI Generator Image</li>
                                        <li>Jadi Anime Generator</li>
                                        <li>Youtube Search</li>
                                        <li>Screen Shoot Web</li>
                                        <li>Anime Scene Search Engine</li>
                                        <li>Images upload Link</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="rm-box" data-aos="fade-right" data-aos-duration="1200">
                                <div class="corner-box">
                                    <h5>Januari V2 2023</h5>
                                    <ul>
                                        <li>Update Web AIDEN V.2</li>
                                        <li>Youtube Downloader MP3/Mp4</li>
                                        <li>Instagram Downloader</li>
                                        <li>Convert JPG TO PDF</li>
                                        <li>Convert JPG TO PNG</li>
                                        <li>Convert PNG TO JPG</li>
                                        <li>MS WORD TO PDF</li>
                                        <li>MS PPT TO MS WORDS</li>
                                        <li>MS EXCELS TO PDF</li>
                                        <li>PDF TO MS WORDS</li>
                                        <li>Text to QR Code</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- <div class="rm-box" data-aos="fade-right" data-aos-duration="1200">
                                <div class="corner-box">
                                    <h5>Q2 2021</h5>
                                    <ul>
                                        <li>Aenean tempor</li>
                                        <li>Fusce arcu maecenas</li>
                                        <li>Malesuada felis sem elementum</li>
                                        <li>Risus eu metus</li>
                                    </ul>
                                </div>
                            </div> -->
                        </div>
                        <div class="box box-right">
                            <div class="rm-box style" data-aos="fade-left" data-aos-duration="1200">
                                <div class="corner-box">
                                    <h5>AWS V.1.1</h5>
                                    <ul>
                                        <li>Upgrade VPS</li>
                                        <li>vCPU/s: 2</li>
                                        <li>RAM:4096.00 MB</li>
                                        <li>Storage:100 GB NVMe</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- <div class="rm-box" data-aos="fade-left" data-aos-duration="1200">
                                <div class="corner-box">
                                    <h5>Q3 2021</h5>
                                    <ul>
                                        <li>Update Web AIDEN V.2</li>
                                        <li>Youtube Downloader MP3/Mp4</li>
                                        <li>Instagram Downloader</li>
                                        <li>Convert JPG TO PDF</li>
                                        <li>Convert JPG TO PNG</li>
                                        <li>Convert PNG TO JPG</li>
                                        <li>MS WORD TO PDF</li>
                                        <li>MS PPT TO MS WORDS</li>
                                        <li>MS EXCELS TO PDF</li>
                                        <li>PDF TO MS WORDS</li>
                                        <li>Text to QR Code</li>
                                    </ul>
                                </div>
                            </div> -->
                            <div class="mb-0 rm-box" data-aos="fade-left" data-aos-duration="1200">
                                <div class="corner-box">
                                    <h5>Q1 2021</h5>
                                    <ul>
                                        <li>Aenean tempor</li>
                                        <li>Fusce arcu maecenas</li>
                                        <li>Malesuada felis sem elementum</li>
                                        <li>Risus eu metus</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tf-section how-we-work">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tf-title st2 m-b60" data-aos="fade-up" data-aos-duration="800">
                        <p class="h8 sub-title">How we work</p>
                        <h4 class="title m-b17">BECOME OUR MEMBER</h4>
                        <p class="p-r60">Maecenas sit pretium, cras in. In quisque sem id eget. In vel gravida ut adipiscing integer felis. </p>
                    </div>
                   
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                    <div class="box-text st2 corner-box active">
                        <div class="number">01</div>
                        <div class="h7">Set up your wallet</div>
                        <p>Arcu morbi sit laoreet semper ultrices maecenas auctor amet. 
                            Donec tortor facilisis risus, neque sit aliquet orci, malesuada.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                    <div class="box-text st2 corner-box">
                        <div class="number">02</div>
                        <div class="h7">Buy your collection</div>
                        <p>Arcu morbi sit laoreet semper ultrices maecenas auctor amet. 
                            Donec tortor facilisis risus, neque sit aliquet orci, malesuada.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
                    <div class="box-text st2 corner-box">
                        <div class="number">03</div>
                        <div class="h7">Add your NFT's</div>
                        <p>Arcu morbi sit laoreet semper ultrices maecenas auctor amet. 
                            Donec tortor facilisis risus, neque sit aliquet orci, malesuada.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
                    <div class="box-text st2 mobie-mb-0 corner-box">
                        <div class="number">04</div>
                        <div class="h7">Sell Your NFT's</div>
                        <p>Arcu morbi sit laoreet semper ultrices maecenas auctor amet. 
                            Donec tortor facilisis risus, neque sit aliquet orci, malesuada.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- 
    <section class="tf-section tf-team">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-6 col-12">
                    <div class="tf-title st2 m-b61" data-aos="fade-up" data-aos-duration="800">
                        <p class="h8 sub-title">Our team</p>
                        <h4 class="title">Meet our TEAM</h4>
                    </div>
                    <div class="content mobie-30" data-aos="fade-up" data-aos-duration="800">
                        <div class="h7 txt-tranf-cap m-b16">
                            Who we are
                        </div>
                        <p>Purus, laoreet dui augue ut euismod. Elementum ante sociis volutpat tellus enim, nisl consectetur mauris. 
                            Venenatis congue id quis eget viverra. 
                            Vestibulum, justo, euismod congue feugiat eget fames gravida posuere. </p>
                    </div>
                    <div class="button-fx m-t60" data-aos="fade-in" data-aos-duration="800">
                        <div class="btn-prev button-prev-team">
                            <span class="boder-fade"></span>  
                            <span class="effect"><i class="far fa-chevron-left"></i></span>
                        </div>
                        <div class="btn-next button-next-team">
                            <i class="far fa-chevron-right"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6 col-12"> 
                    <div class="wrap-team" data-aos="fade-up" data-aos-duration="800">
                        <div class="swiper-container sl-team">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="team-box">
                                        <div class="image">
                                            <img src="assets/images/common/team6.png" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="h8">Esther Howard</div>
                                            <p>Co-founder & COO</p>
                                            <ul class="social">
                                                <li><a href="#">
                                                    <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.3509 1.92618C12.9509 1.55086 13.3998 0.959866 13.6138 0.263552C13.0501 0.613589 12.4332 0.860164 11.79 0.992617C10.8983 0.00549142 9.48538 -0.23473 8.34084 0.406182C7.19629 1.04709 6.60345 2.41047 6.89359 3.73449C4.58431 3.61317 2.43281 2.4717 0.974472 0.594117C0.213393 1.9678 0.60232 3.72383 1.86328 4.60713C1.4073 4.59179 0.961439 4.4626 0.562865 4.23034C0.562865 4.24295 0.562865 4.25555 0.562865 4.26816C0.563128 5.69908 1.52688 6.93165 2.8672 7.21523C2.44425 7.33564 2.00062 7.35337 1.57013 7.26706C1.94707 8.49076 3.02485 9.3291 4.25328 9.35411C3.23586 10.1897 1.97938 10.6429 0.686012 10.6407C0.456764 10.641 0.227696 10.6272 0 10.5993C1.31339 11.4825 2.84201 11.9513 4.40319 11.9496C6.57518 11.9652 8.66251 11.0692 10.1983 9.46197C11.7341 7.85475 12.5902 5.67043 12.5751 3.39762C12.5751 3.26736 12.5722 3.13779 12.5664 3.00893C13.1289 2.58354 13.6144 2.05655 14 1.45275C13.476 1.69581 12.9201 1.8554 12.3509 1.92618Z" fill="white"/>
                                                    </svg>
                                                </a></li>
                                                <li><a href="#">
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0 7.04213C0.000814479 10.5069 2.50488 13.457 5.9059 14V9.07758H4.13V7.04213H5.908V5.49265C5.82852 4.75843 6.07776 4.02669 6.58815 3.49588C7.09853 2.96507 7.81715 2.69021 8.5491 2.74584C9.07447 2.75438 9.59853 2.80146 10.1171 2.8867V4.6186H9.2323C8.92769 4.57846 8.62145 4.67968 8.39984 4.89375C8.17823 5.10782 8.06524 5.41157 8.0927 5.71943V7.04213H10.0324L9.7223 9.07829H8.0927V14C11.7708 13.4151 14.3501 10.0353 13.9619 6.30899C13.5736 2.5827 10.3539 -0.185546 6.63518 0.00972283C2.91645 0.204992 0.000591134 3.29542 0 7.04213Z" fill="white"/>
                                                    </svg>
                                                </a></li>
                                                <li><a href="#">
                                                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.0824 0.50766C16.7958 0.267252 16.3457 0.232854 15.8803 0.417696H15.8795C15.3901 0.611989 2.02437 6.28352 1.48027 6.51523C1.3813 6.54925 0.517004 6.86829 0.606032 7.57893C0.685508 8.21964 1.38016 8.485 1.46498 8.51561L4.86296 9.66663C5.08839 10.409 5.91945 13.148 6.10324 13.7332C6.21787 14.0979 6.40471 14.5772 6.73217 14.6759C7.0195 14.7855 7.30531 14.6853 7.49024 14.5417L9.5677 12.6354L12.9213 15.2229L13.0012 15.2701C13.2289 15.3699 13.4471 15.4198 13.6554 15.4198C13.8162 15.4198 13.9706 15.3899 14.1181 15.3302C14.6205 15.1261 14.8215 14.6525 14.8425 14.5988L17.3475 1.71764C17.5004 1.02968 17.2879 0.679651 17.0824 0.50766ZM7.85973 10.127L6.71344 13.151L5.56716 9.37103L14.3554 2.94501L7.85973 10.127Z" fill="white"/>
                                                    </svg>
                                                </a></li>
                                                <li><a href="#">
                                                    <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.0713 2.07726C13.6176 0.907426 11.3179 0.709125 11.2194 0.701991C11.0668 0.689152 10.9213 0.77475 10.8585 0.915986C10.8528 0.924546 10.8029 1.0401 10.7472 1.21986C11.7088 1.38249 12.89 1.70919 13.9586 2.37258C14.1298 2.47815 14.1826 2.70355 14.077 2.87475C14.0071 2.98745 13.8887 3.0488 13.766 3.0488C13.7004 3.0488 13.6333 3.03025 13.5734 2.99316C11.7359 1.85328 9.44187 1.79622 8.99961 1.79622C8.55735 1.79622 6.26191 1.85328 4.42583 2.99316C4.25464 3.10016 4.02923 3.04737 3.92366 2.87618C3.81666 2.70355 3.86945 2.47957 4.04064 2.37258C5.10919 1.71062 6.29044 1.38249 7.25199 1.22128C7.19635 1.0401 7.14642 0.925973 7.14214 0.915986C7.07794 0.77475 6.93385 0.686299 6.77977 0.701991C6.68134 0.709125 4.38161 0.907426 2.9079 2.09296C2.13894 2.80484 0.599609 6.9649 0.599609 10.5614C0.599609 10.6256 0.616729 10.687 0.648115 10.7426C1.70953 12.6086 4.60701 13.0966 5.26754 13.118C5.2704 13.118 5.27468 13.118 5.27896 13.118C5.39594 13.118 5.50579 13.0623 5.57427 12.9682L6.24193 12.0494C4.4401 11.5843 3.51992 10.794 3.46714 10.7469C3.31591 10.6142 3.30165 10.3831 3.43575 10.2319C3.56843 10.0807 3.79954 10.0664 3.95076 10.1991C3.97216 10.219 5.667 11.6571 8.99961 11.6571C12.3379 11.6571 14.0328 10.2133 14.0499 10.1991C14.2011 10.0678 14.4308 10.0807 14.5649 10.2333C14.6976 10.3845 14.6833 10.6142 14.5321 10.7469C14.4793 10.794 13.5591 11.5843 11.7573 12.0494L12.4249 12.9682C12.4934 13.0623 12.6033 13.118 12.7203 13.118C12.7245 13.118 12.7288 13.118 12.7317 13.118C13.3922 13.0966 16.2897 12.6086 17.3511 10.7426C17.3825 10.687 17.3996 10.6256 17.3996 10.5614C17.3996 6.9649 15.8603 2.80485 15.0713 2.07726ZM6.6257 9.10056C5.91951 9.10056 5.34744 8.44717 5.34744 7.6397C5.34744 6.83222 5.91951 6.17883 6.6257 6.17883C7.33188 6.17883 7.90396 6.83222 7.90396 7.6397C7.90396 8.44717 7.33188 9.10056 6.6257 9.10056ZM11.3735 9.10056C10.6673 9.10056 10.0953 8.44717 10.0953 7.6397C10.0953 6.83222 10.6673 6.17883 11.3735 6.17883C12.0797 6.17883 12.6518 6.83222 12.6518 7.6397C12.6518 8.44717 12.0797 9.10056 11.3735 9.10056Z" fill="white"/>
                                                    </svg>
                                                </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team-box">
                                        <div class="image">
                                            <img src="assets/images/common/team7.png" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="h8">Devon Lane</div>
                                            <p>Blockchain Developer</p>
                                            <ul class="social">
                                                <li><a href="#">
                                                    <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.3509 1.92618C12.9509 1.55086 13.3998 0.959866 13.6138 0.263552C13.0501 0.613589 12.4332 0.860164 11.79 0.992617C10.8983 0.00549142 9.48538 -0.23473 8.34084 0.406182C7.19629 1.04709 6.60345 2.41047 6.89359 3.73449C4.58431 3.61317 2.43281 2.4717 0.974472 0.594117C0.213393 1.9678 0.60232 3.72383 1.86328 4.60713C1.4073 4.59179 0.961439 4.4626 0.562865 4.23034C0.562865 4.24295 0.562865 4.25555 0.562865 4.26816C0.563128 5.69908 1.52688 6.93165 2.8672 7.21523C2.44425 7.33564 2.00062 7.35337 1.57013 7.26706C1.94707 8.49076 3.02485 9.3291 4.25328 9.35411C3.23586 10.1897 1.97938 10.6429 0.686012 10.6407C0.456764 10.641 0.227696 10.6272 0 10.5993C1.31339 11.4825 2.84201 11.9513 4.40319 11.9496C6.57518 11.9652 8.66251 11.0692 10.1983 9.46197C11.7341 7.85475 12.5902 5.67043 12.5751 3.39762C12.5751 3.26736 12.5722 3.13779 12.5664 3.00893C13.1289 2.58354 13.6144 2.05655 14 1.45275C13.476 1.69581 12.9201 1.8554 12.3509 1.92618Z" fill="white"/>
                                                    </svg>
                                                </a></li>
                                                <li><a href="#">
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0 7.04213C0.000814479 10.5069 2.50488 13.457 5.9059 14V9.07758H4.13V7.04213H5.908V5.49265C5.82852 4.75843 6.07776 4.02669 6.58815 3.49588C7.09853 2.96507 7.81715 2.69021 8.5491 2.74584C9.07447 2.75438 9.59853 2.80146 10.1171 2.8867V4.6186H9.2323C8.92769 4.57846 8.62145 4.67968 8.39984 4.89375C8.17823 5.10782 8.06524 5.41157 8.0927 5.71943V7.04213H10.0324L9.7223 9.07829H8.0927V14C11.7708 13.4151 14.3501 10.0353 13.9619 6.30899C13.5736 2.5827 10.3539 -0.185546 6.63518 0.00972283C2.91645 0.204992 0.000591134 3.29542 0 7.04213Z" fill="white"/>
                                                    </svg>
                                                </a></li>
                                                <li><a href="#">
                                                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.0824 0.50766C16.7958 0.267252 16.3457 0.232854 15.8803 0.417696H15.8795C15.3901 0.611989 2.02437 6.28352 1.48027 6.51523C1.3813 6.54925 0.517004 6.86829 0.606032 7.57893C0.685508 8.21964 1.38016 8.485 1.46498 8.51561L4.86296 9.66663C5.08839 10.409 5.91945 13.148 6.10324 13.7332C6.21787 14.0979 6.40471 14.5772 6.73217 14.6759C7.0195 14.7855 7.30531 14.6853 7.49024 14.5417L9.5677 12.6354L12.9213 15.2229L13.0012 15.2701C13.2289 15.3699 13.4471 15.4198 13.6554 15.4198C13.8162 15.4198 13.9706 15.3899 14.1181 15.3302C14.6205 15.1261 14.8215 14.6525 14.8425 14.5988L17.3475 1.71764C17.5004 1.02968 17.2879 0.679651 17.0824 0.50766ZM7.85973 10.127L6.71344 13.151L5.56716 9.37103L14.3554 2.94501L7.85973 10.127Z" fill="white"/>
                                                    </svg>
                                                </a></li>
                                                <li><a href="#">
                                                    <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.0713 2.07726C13.6176 0.907426 11.3179 0.709125 11.2194 0.701991C11.0668 0.689152 10.9213 0.77475 10.8585 0.915986C10.8528 0.924546 10.8029 1.0401 10.7472 1.21986C11.7088 1.38249 12.89 1.70919 13.9586 2.37258C14.1298 2.47815 14.1826 2.70355 14.077 2.87475C14.0071 2.98745 13.8887 3.0488 13.766 3.0488C13.7004 3.0488 13.6333 3.03025 13.5734 2.99316C11.7359 1.85328 9.44187 1.79622 8.99961 1.79622C8.55735 1.79622 6.26191 1.85328 4.42583 2.99316C4.25464 3.10016 4.02923 3.04737 3.92366 2.87618C3.81666 2.70355 3.86945 2.47957 4.04064 2.37258C5.10919 1.71062 6.29044 1.38249 7.25199 1.22128C7.19635 1.0401 7.14642 0.925973 7.14214 0.915986C7.07794 0.77475 6.93385 0.686299 6.77977 0.701991C6.68134 0.709125 4.38161 0.907426 2.9079 2.09296C2.13894 2.80484 0.599609 6.9649 0.599609 10.5614C0.599609 10.6256 0.616729 10.687 0.648115 10.7426C1.70953 12.6086 4.60701 13.0966 5.26754 13.118C5.2704 13.118 5.27468 13.118 5.27896 13.118C5.39594 13.118 5.50579 13.0623 5.57427 12.9682L6.24193 12.0494C4.4401 11.5843 3.51992 10.794 3.46714 10.7469C3.31591 10.6142 3.30165 10.3831 3.43575 10.2319C3.56843 10.0807 3.79954 10.0664 3.95076 10.1991C3.97216 10.219 5.667 11.6571 8.99961 11.6571C12.3379 11.6571 14.0328 10.2133 14.0499 10.1991C14.2011 10.0678 14.4308 10.0807 14.5649 10.2333C14.6976 10.3845 14.6833 10.6142 14.5321 10.7469C14.4793 10.794 13.5591 11.5843 11.7573 12.0494L12.4249 12.9682C12.4934 13.0623 12.6033 13.118 12.7203 13.118C12.7245 13.118 12.7288 13.118 12.7317 13.118C13.3922 13.0966 16.2897 12.6086 17.3511 10.7426C17.3825 10.687 17.3996 10.6256 17.3996 10.5614C17.3996 6.9649 15.8603 2.80485 15.0713 2.07726ZM6.6257 9.10056C5.91951 9.10056 5.34744 8.44717 5.34744 7.6397C5.34744 6.83222 5.91951 6.17883 6.6257 6.17883C7.33188 6.17883 7.90396 6.83222 7.90396 7.6397C7.90396 8.44717 7.33188 9.10056 6.6257 9.10056ZM11.3735 9.10056C10.6673 9.10056 10.0953 8.44717 10.0953 7.6397C10.0953 6.83222 10.6673 6.17883 11.3735 6.17883C12.0797 6.17883 12.6518 6.83222 12.6518 7.6397C12.6518 8.44717 12.0797 9.10056 11.3735 9.10056Z" fill="white"/>
                                                    </svg>
                                                </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team-box">
                                        <div class="image">
                                            <img src="assets/images/common/team8.png" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="h8">Ralph Edwards</div>
                                            <p>Backend Engineer</p>
                                            <ul class="social">
                                                <li><a href="#">
                                                    <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.3509 1.92618C12.9509 1.55086 13.3998 0.959866 13.6138 0.263552C13.0501 0.613589 12.4332 0.860164 11.79 0.992617C10.8983 0.00549142 9.48538 -0.23473 8.34084 0.406182C7.19629 1.04709 6.60345 2.41047 6.89359 3.73449C4.58431 3.61317 2.43281 2.4717 0.974472 0.594117C0.213393 1.9678 0.60232 3.72383 1.86328 4.60713C1.4073 4.59179 0.961439 4.4626 0.562865 4.23034C0.562865 4.24295 0.562865 4.25555 0.562865 4.26816C0.563128 5.69908 1.52688 6.93165 2.8672 7.21523C2.44425 7.33564 2.00062 7.35337 1.57013 7.26706C1.94707 8.49076 3.02485 9.3291 4.25328 9.35411C3.23586 10.1897 1.97938 10.6429 0.686012 10.6407C0.456764 10.641 0.227696 10.6272 0 10.5993C1.31339 11.4825 2.84201 11.9513 4.40319 11.9496C6.57518 11.9652 8.66251 11.0692 10.1983 9.46197C11.7341 7.85475 12.5902 5.67043 12.5751 3.39762C12.5751 3.26736 12.5722 3.13779 12.5664 3.00893C13.1289 2.58354 13.6144 2.05655 14 1.45275C13.476 1.69581 12.9201 1.8554 12.3509 1.92618Z" fill="white"/>
                                                    </svg>
                                                </a></li>
                                                <li><a href="#">
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0 7.04213C0.000814479 10.5069 2.50488 13.457 5.9059 14V9.07758H4.13V7.04213H5.908V5.49265C5.82852 4.75843 6.07776 4.02669 6.58815 3.49588C7.09853 2.96507 7.81715 2.69021 8.5491 2.74584C9.07447 2.75438 9.59853 2.80146 10.1171 2.8867V4.6186H9.2323C8.92769 4.57846 8.62145 4.67968 8.39984 4.89375C8.17823 5.10782 8.06524 5.41157 8.0927 5.71943V7.04213H10.0324L9.7223 9.07829H8.0927V14C11.7708 13.4151 14.3501 10.0353 13.9619 6.30899C13.5736 2.5827 10.3539 -0.185546 6.63518 0.00972283C2.91645 0.204992 0.000591134 3.29542 0 7.04213Z" fill="white"/>
                                                    </svg>
                                                </a></li>
                                                <li><a href="#">
                                                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.0824 0.50766C16.7958 0.267252 16.3457 0.232854 15.8803 0.417696H15.8795C15.3901 0.611989 2.02437 6.28352 1.48027 6.51523C1.3813 6.54925 0.517004 6.86829 0.606032 7.57893C0.685508 8.21964 1.38016 8.485 1.46498 8.51561L4.86296 9.66663C5.08839 10.409 5.91945 13.148 6.10324 13.7332C6.21787 14.0979 6.40471 14.5772 6.73217 14.6759C7.0195 14.7855 7.30531 14.6853 7.49024 14.5417L9.5677 12.6354L12.9213 15.2229L13.0012 15.2701C13.2289 15.3699 13.4471 15.4198 13.6554 15.4198C13.8162 15.4198 13.9706 15.3899 14.1181 15.3302C14.6205 15.1261 14.8215 14.6525 14.8425 14.5988L17.3475 1.71764C17.5004 1.02968 17.2879 0.679651 17.0824 0.50766ZM7.85973 10.127L6.71344 13.151L5.56716 9.37103L14.3554 2.94501L7.85973 10.127Z" fill="white"/>
                                                    </svg>
                                                </a></li>
                                                <li><a href="#">
                                                    <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.0713 2.07726C13.6176 0.907426 11.3179 0.709125 11.2194 0.701991C11.0668 0.689152 10.9213 0.77475 10.8585 0.915986C10.8528 0.924546 10.8029 1.0401 10.7472 1.21986C11.7088 1.38249 12.89 1.70919 13.9586 2.37258C14.1298 2.47815 14.1826 2.70355 14.077 2.87475C14.0071 2.98745 13.8887 3.0488 13.766 3.0488C13.7004 3.0488 13.6333 3.03025 13.5734 2.99316C11.7359 1.85328 9.44187 1.79622 8.99961 1.79622C8.55735 1.79622 6.26191 1.85328 4.42583 2.99316C4.25464 3.10016 4.02923 3.04737 3.92366 2.87618C3.81666 2.70355 3.86945 2.47957 4.04064 2.37258C5.10919 1.71062 6.29044 1.38249 7.25199 1.22128C7.19635 1.0401 7.14642 0.925973 7.14214 0.915986C7.07794 0.77475 6.93385 0.686299 6.77977 0.701991C6.68134 0.709125 4.38161 0.907426 2.9079 2.09296C2.13894 2.80484 0.599609 6.9649 0.599609 10.5614C0.599609 10.6256 0.616729 10.687 0.648115 10.7426C1.70953 12.6086 4.60701 13.0966 5.26754 13.118C5.2704 13.118 5.27468 13.118 5.27896 13.118C5.39594 13.118 5.50579 13.0623 5.57427 12.9682L6.24193 12.0494C4.4401 11.5843 3.51992 10.794 3.46714 10.7469C3.31591 10.6142 3.30165 10.3831 3.43575 10.2319C3.56843 10.0807 3.79954 10.0664 3.95076 10.1991C3.97216 10.219 5.667 11.6571 8.99961 11.6571C12.3379 11.6571 14.0328 10.2133 14.0499 10.1991C14.2011 10.0678 14.4308 10.0807 14.5649 10.2333C14.6976 10.3845 14.6833 10.6142 14.5321 10.7469C14.4793 10.794 13.5591 11.5843 11.7573 12.0494L12.4249 12.9682C12.4934 13.0623 12.6033 13.118 12.7203 13.118C12.7245 13.118 12.7288 13.118 12.7317 13.118C13.3922 13.0966 16.2897 12.6086 17.3511 10.7426C17.3825 10.687 17.3996 10.6256 17.3996 10.5614C17.3996 6.9649 15.8603 2.80485 15.0713 2.07726ZM6.6257 9.10056C5.91951 9.10056 5.34744 8.44717 5.34744 7.6397C5.34744 6.83222 5.91951 6.17883 6.6257 6.17883C7.33188 6.17883 7.90396 6.83222 7.90396 7.6397C7.90396 8.44717 7.33188 9.10056 6.6257 9.10056ZM11.3735 9.10056C10.6673 9.10056 10.0953 8.44717 10.0953 7.6397C10.0953 6.83222 10.6673 6.17883 11.3735 6.17883C12.0797 6.17883 12.6518 6.83222 12.6518 7.6397C12.6518 8.44717 12.0797 9.10056 11.3735 9.10056Z" fill="white"/>
                                                    </svg>
                                                </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team-box">
                                        <div class="image">
                                            <img src="assets/images/common/team9.png" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="h8">Esther Howard</div>
                                            <p>Co-founder & COO</p>
                                            <ul class="social">
                                                <li><a href="#">
                                                    <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.3509 1.92618C12.9509 1.55086 13.3998 0.959866 13.6138 0.263552C13.0501 0.613589 12.4332 0.860164 11.79 0.992617C10.8983 0.00549142 9.48538 -0.23473 8.34084 0.406182C7.19629 1.04709 6.60345 2.41047 6.89359 3.73449C4.58431 3.61317 2.43281 2.4717 0.974472 0.594117C0.213393 1.9678 0.60232 3.72383 1.86328 4.60713C1.4073 4.59179 0.961439 4.4626 0.562865 4.23034C0.562865 4.24295 0.562865 4.25555 0.562865 4.26816C0.563128 5.69908 1.52688 6.93165 2.8672 7.21523C2.44425 7.33564 2.00062 7.35337 1.57013 7.26706C1.94707 8.49076 3.02485 9.3291 4.25328 9.35411C3.23586 10.1897 1.97938 10.6429 0.686012 10.6407C0.456764 10.641 0.227696 10.6272 0 10.5993C1.31339 11.4825 2.84201 11.9513 4.40319 11.9496C6.57518 11.9652 8.66251 11.0692 10.1983 9.46197C11.7341 7.85475 12.5902 5.67043 12.5751 3.39762C12.5751 3.26736 12.5722 3.13779 12.5664 3.00893C13.1289 2.58354 13.6144 2.05655 14 1.45275C13.476 1.69581 12.9201 1.8554 12.3509 1.92618Z" fill="white"/>
                                                    </svg>
                                                </a></li>
                                                <li><a href="#">
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0 7.04213C0.000814479 10.5069 2.50488 13.457 5.9059 14V9.07758H4.13V7.04213H5.908V5.49265C5.82852 4.75843 6.07776 4.02669 6.58815 3.49588C7.09853 2.96507 7.81715 2.69021 8.5491 2.74584C9.07447 2.75438 9.59853 2.80146 10.1171 2.8867V4.6186H9.2323C8.92769 4.57846 8.62145 4.67968 8.39984 4.89375C8.17823 5.10782 8.06524 5.41157 8.0927 5.71943V7.04213H10.0324L9.7223 9.07829H8.0927V14C11.7708 13.4151 14.3501 10.0353 13.9619 6.30899C13.5736 2.5827 10.3539 -0.185546 6.63518 0.00972283C2.91645 0.204992 0.000591134 3.29542 0 7.04213Z" fill="white"/>
                                                    </svg>
                                                </a></li>
                                                <li><a href="#">
                                                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.0824 0.50766C16.7958 0.267252 16.3457 0.232854 15.8803 0.417696H15.8795C15.3901 0.611989 2.02437 6.28352 1.48027 6.51523C1.3813 6.54925 0.517004 6.86829 0.606032 7.57893C0.685508 8.21964 1.38016 8.485 1.46498 8.51561L4.86296 9.66663C5.08839 10.409 5.91945 13.148 6.10324 13.7332C6.21787 14.0979 6.40471 14.5772 6.73217 14.6759C7.0195 14.7855 7.30531 14.6853 7.49024 14.5417L9.5677 12.6354L12.9213 15.2229L13.0012 15.2701C13.2289 15.3699 13.4471 15.4198 13.6554 15.4198C13.8162 15.4198 13.9706 15.3899 14.1181 15.3302C14.6205 15.1261 14.8215 14.6525 14.8425 14.5988L17.3475 1.71764C17.5004 1.02968 17.2879 0.679651 17.0824 0.50766ZM7.85973 10.127L6.71344 13.151L5.56716 9.37103L14.3554 2.94501L7.85973 10.127Z" fill="white"/>
                                                    </svg>
                                                </a></li>
                                                <li><a href="#">
                                                    <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.0713 2.07726C13.6176 0.907426 11.3179 0.709125 11.2194 0.701991C11.0668 0.689152 10.9213 0.77475 10.8585 0.915986C10.8528 0.924546 10.8029 1.0401 10.7472 1.21986C11.7088 1.38249 12.89 1.70919 13.9586 2.37258C14.1298 2.47815 14.1826 2.70355 14.077 2.87475C14.0071 2.98745 13.8887 3.0488 13.766 3.0488C13.7004 3.0488 13.6333 3.03025 13.5734 2.99316C11.7359 1.85328 9.44187 1.79622 8.99961 1.79622C8.55735 1.79622 6.26191 1.85328 4.42583 2.99316C4.25464 3.10016 4.02923 3.04737 3.92366 2.87618C3.81666 2.70355 3.86945 2.47957 4.04064 2.37258C5.10919 1.71062 6.29044 1.38249 7.25199 1.22128C7.19635 1.0401 7.14642 0.925973 7.14214 0.915986C7.07794 0.77475 6.93385 0.686299 6.77977 0.701991C6.68134 0.709125 4.38161 0.907426 2.9079 2.09296C2.13894 2.80484 0.599609 6.9649 0.599609 10.5614C0.599609 10.6256 0.616729 10.687 0.648115 10.7426C1.70953 12.6086 4.60701 13.0966 5.26754 13.118C5.2704 13.118 5.27468 13.118 5.27896 13.118C5.39594 13.118 5.50579 13.0623 5.57427 12.9682L6.24193 12.0494C4.4401 11.5843 3.51992 10.794 3.46714 10.7469C3.31591 10.6142 3.30165 10.3831 3.43575 10.2319C3.56843 10.0807 3.79954 10.0664 3.95076 10.1991C3.97216 10.219 5.667 11.6571 8.99961 11.6571C12.3379 11.6571 14.0328 10.2133 14.0499 10.1991C14.2011 10.0678 14.4308 10.0807 14.5649 10.2333C14.6976 10.3845 14.6833 10.6142 14.5321 10.7469C14.4793 10.794 13.5591 11.5843 11.7573 12.0494L12.4249 12.9682C12.4934 13.0623 12.6033 13.118 12.7203 13.118C12.7245 13.118 12.7288 13.118 12.7317 13.118C13.3922 13.0966 16.2897 12.6086 17.3511 10.7426C17.3825 10.687 17.3996 10.6256 17.3996 10.5614C17.3996 6.9649 15.8603 2.80485 15.0713 2.07726ZM6.6257 9.10056C5.91951 9.10056 5.34744 8.44717 5.34744 7.6397C5.34744 6.83222 5.91951 6.17883 6.6257 6.17883C7.33188 6.17883 7.90396 6.83222 7.90396 7.6397C7.90396 8.44717 7.33188 9.10056 6.6257 9.10056ZM11.3735 9.10056C10.6673 9.10056 10.0953 8.44717 10.0953 7.6397C10.0953 6.83222 10.6673 6.17883 11.3735 6.17883C12.0797 6.17883 12.6518 6.83222 12.6518 7.6397C12.6518 8.44717 12.0797 9.10056 11.3735 9.10056Z" fill="white"/>
                                                    </svg>
                                                </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team-box">
                                        <div class="image">
                                            <img src="assets/images/common/team10.png" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="h8">Devon Lane</div>
                                            <p>Blockchain Developer</p>
                                            <ul class="social">
                                                <li><a href="#">
                                                    <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.3509 1.92618C12.9509 1.55086 13.3998 0.959866 13.6138 0.263552C13.0501 0.613589 12.4332 0.860164 11.79 0.992617C10.8983 0.00549142 9.48538 -0.23473 8.34084 0.406182C7.19629 1.04709 6.60345 2.41047 6.89359 3.73449C4.58431 3.61317 2.43281 2.4717 0.974472 0.594117C0.213393 1.9678 0.60232 3.72383 1.86328 4.60713C1.4073 4.59179 0.961439 4.4626 0.562865 4.23034C0.562865 4.24295 0.562865 4.25555 0.562865 4.26816C0.563128 5.69908 1.52688 6.93165 2.8672 7.21523C2.44425 7.33564 2.00062 7.35337 1.57013 7.26706C1.94707 8.49076 3.02485 9.3291 4.25328 9.35411C3.23586 10.1897 1.97938 10.6429 0.686012 10.6407C0.456764 10.641 0.227696 10.6272 0 10.5993C1.31339 11.4825 2.84201 11.9513 4.40319 11.9496C6.57518 11.9652 8.66251 11.0692 10.1983 9.46197C11.7341 7.85475 12.5902 5.67043 12.5751 3.39762C12.5751 3.26736 12.5722 3.13779 12.5664 3.00893C13.1289 2.58354 13.6144 2.05655 14 1.45275C13.476 1.69581 12.9201 1.8554 12.3509 1.92618Z" fill="white"/>
                                                    </svg>
                                                </a></li>
                                                <li><a href="#">
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0 7.04213C0.000814479 10.5069 2.50488 13.457 5.9059 14V9.07758H4.13V7.04213H5.908V5.49265C5.82852 4.75843 6.07776 4.02669 6.58815 3.49588C7.09853 2.96507 7.81715 2.69021 8.5491 2.74584C9.07447 2.75438 9.59853 2.80146 10.1171 2.8867V4.6186H9.2323C8.92769 4.57846 8.62145 4.67968 8.39984 4.89375C8.17823 5.10782 8.06524 5.41157 8.0927 5.71943V7.04213H10.0324L9.7223 9.07829H8.0927V14C11.7708 13.4151 14.3501 10.0353 13.9619 6.30899C13.5736 2.5827 10.3539 -0.185546 6.63518 0.00972283C2.91645 0.204992 0.000591134 3.29542 0 7.04213Z" fill="white"/>
                                                    </svg>
                                                </a></li>
                                                <li><a href="#">
                                                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.0824 0.50766C16.7958 0.267252 16.3457 0.232854 15.8803 0.417696H15.8795C15.3901 0.611989 2.02437 6.28352 1.48027 6.51523C1.3813 6.54925 0.517004 6.86829 0.606032 7.57893C0.685508 8.21964 1.38016 8.485 1.46498 8.51561L4.86296 9.66663C5.08839 10.409 5.91945 13.148 6.10324 13.7332C6.21787 14.0979 6.40471 14.5772 6.73217 14.6759C7.0195 14.7855 7.30531 14.6853 7.49024 14.5417L9.5677 12.6354L12.9213 15.2229L13.0012 15.2701C13.2289 15.3699 13.4471 15.4198 13.6554 15.4198C13.8162 15.4198 13.9706 15.3899 14.1181 15.3302C14.6205 15.1261 14.8215 14.6525 14.8425 14.5988L17.3475 1.71764C17.5004 1.02968 17.2879 0.679651 17.0824 0.50766ZM7.85973 10.127L6.71344 13.151L5.56716 9.37103L14.3554 2.94501L7.85973 10.127Z" fill="white"/>
                                                    </svg>
                                                </a></li>
                                                <li><a href="#">
                                                    <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.0713 2.07726C13.6176 0.907426 11.3179 0.709125 11.2194 0.701991C11.0668 0.689152 10.9213 0.77475 10.8585 0.915986C10.8528 0.924546 10.8029 1.0401 10.7472 1.21986C11.7088 1.38249 12.89 1.70919 13.9586 2.37258C14.1298 2.47815 14.1826 2.70355 14.077 2.87475C14.0071 2.98745 13.8887 3.0488 13.766 3.0488C13.7004 3.0488 13.6333 3.03025 13.5734 2.99316C11.7359 1.85328 9.44187 1.79622 8.99961 1.79622C8.55735 1.79622 6.26191 1.85328 4.42583 2.99316C4.25464 3.10016 4.02923 3.04737 3.92366 2.87618C3.81666 2.70355 3.86945 2.47957 4.04064 2.37258C5.10919 1.71062 6.29044 1.38249 7.25199 1.22128C7.19635 1.0401 7.14642 0.925973 7.14214 0.915986C7.07794 0.77475 6.93385 0.686299 6.77977 0.701991C6.68134 0.709125 4.38161 0.907426 2.9079 2.09296C2.13894 2.80484 0.599609 6.9649 0.599609 10.5614C0.599609 10.6256 0.616729 10.687 0.648115 10.7426C1.70953 12.6086 4.60701 13.0966 5.26754 13.118C5.2704 13.118 5.27468 13.118 5.27896 13.118C5.39594 13.118 5.50579 13.0623 5.57427 12.9682L6.24193 12.0494C4.4401 11.5843 3.51992 10.794 3.46714 10.7469C3.31591 10.6142 3.30165 10.3831 3.43575 10.2319C3.56843 10.0807 3.79954 10.0664 3.95076 10.1991C3.97216 10.219 5.667 11.6571 8.99961 11.6571C12.3379 11.6571 14.0328 10.2133 14.0499 10.1991C14.2011 10.0678 14.4308 10.0807 14.5649 10.2333C14.6976 10.3845 14.6833 10.6142 14.5321 10.7469C14.4793 10.794 13.5591 11.5843 11.7573 12.0494L12.4249 12.9682C12.4934 13.0623 12.6033 13.118 12.7203 13.118C12.7245 13.118 12.7288 13.118 12.7317 13.118C13.3922 13.0966 16.2897 12.6086 17.3511 10.7426C17.3825 10.687 17.3996 10.6256 17.3996 10.5614C17.3996 6.9649 15.8603 2.80485 15.0713 2.07726ZM6.6257 9.10056C5.91951 9.10056 5.34744 8.44717 5.34744 7.6397C5.34744 6.83222 5.91951 6.17883 6.6257 6.17883C7.33188 6.17883 7.90396 6.83222 7.90396 7.6397C7.90396 8.44717 7.33188 9.10056 6.6257 9.10056ZM11.3735 9.10056C10.6673 9.10056 10.0953 8.44717 10.0953 7.6397C10.0953 6.83222 10.6673 6.17883 11.3735 6.17883C12.0797 6.17883 12.6518 6.83222 12.6518 7.6397C12.6518 8.44717 12.0797 9.10056 11.3735 9.10056Z" fill="white"/>
                                                    </svg>
                                                </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team-box">
                                        <div class="image">
                                            <img src="assets/images/common/team11.png" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="h8">Ralph Edwards</div>
                                            <p>Backend Engineer</p>
                                            <ul class="social">
                                                <li><a href="#">
                                                    <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.3509 1.92618C12.9509 1.55086 13.3998 0.959866 13.6138 0.263552C13.0501 0.613589 12.4332 0.860164 11.79 0.992617C10.8983 0.00549142 9.48538 -0.23473 8.34084 0.406182C7.19629 1.04709 6.60345 2.41047 6.89359 3.73449C4.58431 3.61317 2.43281 2.4717 0.974472 0.594117C0.213393 1.9678 0.60232 3.72383 1.86328 4.60713C1.4073 4.59179 0.961439 4.4626 0.562865 4.23034C0.562865 4.24295 0.562865 4.25555 0.562865 4.26816C0.563128 5.69908 1.52688 6.93165 2.8672 7.21523C2.44425 7.33564 2.00062 7.35337 1.57013 7.26706C1.94707 8.49076 3.02485 9.3291 4.25328 9.35411C3.23586 10.1897 1.97938 10.6429 0.686012 10.6407C0.456764 10.641 0.227696 10.6272 0 10.5993C1.31339 11.4825 2.84201 11.9513 4.40319 11.9496C6.57518 11.9652 8.66251 11.0692 10.1983 9.46197C11.7341 7.85475 12.5902 5.67043 12.5751 3.39762C12.5751 3.26736 12.5722 3.13779 12.5664 3.00893C13.1289 2.58354 13.6144 2.05655 14 1.45275C13.476 1.69581 12.9201 1.8554 12.3509 1.92618Z" fill="white"/>
                                                    </svg>
                                                </a></li>
                                                <li><a href="#">
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0 7.04213C0.000814479 10.5069 2.50488 13.457 5.9059 14V9.07758H4.13V7.04213H5.908V5.49265C5.82852 4.75843 6.07776 4.02669 6.58815 3.49588C7.09853 2.96507 7.81715 2.69021 8.5491 2.74584C9.07447 2.75438 9.59853 2.80146 10.1171 2.8867V4.6186H9.2323C8.92769 4.57846 8.62145 4.67968 8.39984 4.89375C8.17823 5.10782 8.06524 5.41157 8.0927 5.71943V7.04213H10.0324L9.7223 9.07829H8.0927V14C11.7708 13.4151 14.3501 10.0353 13.9619 6.30899C13.5736 2.5827 10.3539 -0.185546 6.63518 0.00972283C2.91645 0.204992 0.000591134 3.29542 0 7.04213Z" fill="white"/>
                                                    </svg>
                                                </a></li>
                                                <li><a href="#">
                                                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.0824 0.50766C16.7958 0.267252 16.3457 0.232854 15.8803 0.417696H15.8795C15.3901 0.611989 2.02437 6.28352 1.48027 6.51523C1.3813 6.54925 0.517004 6.86829 0.606032 7.57893C0.685508 8.21964 1.38016 8.485 1.46498 8.51561L4.86296 9.66663C5.08839 10.409 5.91945 13.148 6.10324 13.7332C6.21787 14.0979 6.40471 14.5772 6.73217 14.6759C7.0195 14.7855 7.30531 14.6853 7.49024 14.5417L9.5677 12.6354L12.9213 15.2229L13.0012 15.2701C13.2289 15.3699 13.4471 15.4198 13.6554 15.4198C13.8162 15.4198 13.9706 15.3899 14.1181 15.3302C14.6205 15.1261 14.8215 14.6525 14.8425 14.5988L17.3475 1.71764C17.5004 1.02968 17.2879 0.679651 17.0824 0.50766ZM7.85973 10.127L6.71344 13.151L5.56716 9.37103L14.3554 2.94501L7.85973 10.127Z" fill="white"/>
                                                    </svg>
                                                </a></li>
                                                <li><a href="#">
                                                    <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.0713 2.07726C13.6176 0.907426 11.3179 0.709125 11.2194 0.701991C11.0668 0.689152 10.9213 0.77475 10.8585 0.915986C10.8528 0.924546 10.8029 1.0401 10.7472 1.21986C11.7088 1.38249 12.89 1.70919 13.9586 2.37258C14.1298 2.47815 14.1826 2.70355 14.077 2.87475C14.0071 2.98745 13.8887 3.0488 13.766 3.0488C13.7004 3.0488 13.6333 3.03025 13.5734 2.99316C11.7359 1.85328 9.44187 1.79622 8.99961 1.79622C8.55735 1.79622 6.26191 1.85328 4.42583 2.99316C4.25464 3.10016 4.02923 3.04737 3.92366 2.87618C3.81666 2.70355 3.86945 2.47957 4.04064 2.37258C5.10919 1.71062 6.29044 1.38249 7.25199 1.22128C7.19635 1.0401 7.14642 0.925973 7.14214 0.915986C7.07794 0.77475 6.93385 0.686299 6.77977 0.701991C6.68134 0.709125 4.38161 0.907426 2.9079 2.09296C2.13894 2.80484 0.599609 6.9649 0.599609 10.5614C0.599609 10.6256 0.616729 10.687 0.648115 10.7426C1.70953 12.6086 4.60701 13.0966 5.26754 13.118C5.2704 13.118 5.27468 13.118 5.27896 13.118C5.39594 13.118 5.50579 13.0623 5.57427 12.9682L6.24193 12.0494C4.4401 11.5843 3.51992 10.794 3.46714 10.7469C3.31591 10.6142 3.30165 10.3831 3.43575 10.2319C3.56843 10.0807 3.79954 10.0664 3.95076 10.1991C3.97216 10.219 5.667 11.6571 8.99961 11.6571C12.3379 11.6571 14.0328 10.2133 14.0499 10.1991C14.2011 10.0678 14.4308 10.0807 14.5649 10.2333C14.6976 10.3845 14.6833 10.6142 14.5321 10.7469C14.4793 10.794 13.5591 11.5843 11.7573 12.0494L12.4249 12.9682C12.4934 13.0623 12.6033 13.118 12.7203 13.118C12.7245 13.118 12.7288 13.118 12.7317 13.118C13.3922 13.0966 16.2897 12.6086 17.3511 10.7426C17.3825 10.687 17.3996 10.6256 17.3996 10.5614C17.3996 6.9649 15.8603 2.80485 15.0713 2.07726ZM6.6257 9.10056C5.91951 9.10056 5.34744 8.44717 5.34744 7.6397C5.34744 6.83222 5.91951 6.17883 6.6257 6.17883C7.33188 6.17883 7.90396 6.83222 7.90396 7.6397C7.90396 8.44717 7.33188 9.10056 6.6257 9.10056ZM11.3735 9.10056C10.6673 9.10056 10.0953 8.44717 10.0953 7.6397C10.0953 6.83222 10.6673 6.17883 11.3735 6.17883C12.0797 6.17883 12.6518 6.83222 12.6518 7.6397C12.6518 8.44717 12.0797 9.10056 11.3735 9.10056Z" fill="white"/>
                                                    </svg>
                                                </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                   
                </div>
                <div class="col-md-12">
                    <div class="swiper-button-next btn-slide-next"></div>
                    <div class="swiper-button-prev btn-slide-prev"></div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section class="tf-section item-post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tf-title m-b26">
                        <p class="h8 sub-title" data-aos="zoom-in" data-aos-duration="800">BLOGS</p>
                        <h4 class="title">Lastest News</h4>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="swiper-container hv2 sl-post2" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="post-item active">
                                    <div class="wrap">
                                        <div class="tag">digitalart</div>
                                        <div class="image">
                                            <img src="assets/images/post/imgpost11.jpg" alt="">
                                        </div>
                                        <div class="content-item">
                                            <div class="content">
                                                <div class="meta-post">
                                                    <a href="blog-grid.html">20 Jun 2022</a>
                                                </div>
                                                <div class="h7 title"><a href="blog-grid.html">NFT Guide: Why They Matter For Music?</a></div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="post-item">
                                    <div class="tag">nftartwork</div>
                                    <div class="wrap">
                                        <div class="image">
                                            <img src="assets/images/post/imgpost13.jpg" alt="">
                                        </div>
                                        <div class="content-item">
                                            <div class="content">
                                                <div class="meta-post">
                                                    <a href="blog-grid.html">20 Jun 2022</a>
                                                </div>
                                                <div class="h7 title st"><a href="blog-grid.html">Max Live X Tacnocde NFT Music </a></div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="post-item">
                                    <div class="tag">digitalart</div>
                                    <div class="wrap">
                                        <div class="image">
                                            <img src="assets/images/post/imgpost12.jpg" alt="">
                                        </div>
                                        <div class="content-item">
                                            <div class="content">
                                                <div class="meta-post">
                                                    <a href="blog-grid.html">20 Jun 2022</a>
                                                </div>
                                                <div class="h7 title"><a href="blog-grid.html">NFT Guide: Why They Matter For Music?</a></div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="post-item ">
                                    <div class="wrap">
                                        <div class="tag">digitalart</div>
                                        <div class="image">
                                            <img src="assets/images/post/imgpost11.jpg" alt="">
                                        </div>
                                        <div class="content-item">
                                            <div class="content">
                                                <div class="meta-post">
                                                    <a href="blog-grid.html">20 Jun 2022</a>
                                                </div>
                                                <div class="h7 title"><a href="blog-grid.html">NFT Guide: Why They Matter For Music?</a></div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="text-center m-t12">
                        <a class="tf-button st3 btn-effect" href="blog-grid.html">   
                            <span class="boder-fade"></span>                                     
                            <span class="effect">Explore more</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section class="tf-section partner bg-st1 pb-mobie-40">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tf-title" data-aos="fade-up" data-aos-duration="800">
                        <p class="h8 sub-title">partnerS</p>
                        <h4 class="title">CYBOX INVESTORS</h4>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="item-parner" data-aos="fade-up" data-aos-duration="800">
                        <div class="swiper-container sl-parner">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img src="assets/images/logo/logo1.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img src="assets/images/logo/logo2.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img src="assets/images/logo/logo3.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img src="assets/images/logo/logo4.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img src="assets/images/logo/logo5.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img src="assets/images/logo/logo6.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img src="assets/images/logo/logo7.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img src="assets/images/logo/logo8.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img src="assets/images/logo/logo9.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="swiper-container sl-parner">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img src="assets/images/logo/logo7.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img src="assets/images/logo/logo8.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img src="assets/images/logo/logo9.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img src="assets/images/logo/logo10.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img src="assets/images/logo/logo11.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img src="assets/images/logo/logo12.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img src="assets/images/logo/logo13.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img src="assets/images/logo/logo14.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img src="assets/images/logo/logo15.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="swiper-container sl-parner">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img src="assets/images/logo/logo13.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img src="assets/images/logo/logo14.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img src="assets/images/logo/logo15.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img src="assets/images/logo/logo16.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img src="assets/images/logo/logo17.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img src="assets/images/logo/logo18.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img src="assets/images/logo/logo1.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img src="assets/images/logo/logo2.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img src="assets/images/logo/logo3.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="tf-section faq">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tf-title m-b60" data-aos="fade-up" data-aos-duration="800">
                        <p class="h8 sub-title">FAQs</p>
                        <h4 class="title">Looking for answers?</h4>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="flat-accordion" data-aos="fade-up" data-aos-duration="800">
                        <div class="flat-toggle box-text corner-box active">
                            <div class="h7 toggle-title active">What are the NFTs?</div>
                            <p class="toggle-content">Urna vitae erat et lacus, consectetur ac nulla vestibulum lobortis. 
                                Nulla dapibus urna volutpat venenatis, risus faucibus.</p>
                        </div>
                        <div class="flat-toggle box-text corner-box">
                            <div class="h7 toggle-title">How do i get NFTs?</div>
                            <p class="toggle-content">Gravida viverra dui aliquet eu tortor lorem et gravida. Sed amet phasellus tellus mauris auctor rhoncus. 
                                Malesuada nisl at mauris cursus lorem mattis arcu.</p>
                        </div>
                        <div class="flat-toggle box-text corner-box">
                            <div class="h7 toggle-title">How can we buy your NFTs?</div>
                            <p class="toggle-content">Gravida viverra dui aliquet eu tortor lorem et gravida. Sed amet phasellus tellus mauris auctor rhoncus. 
                                Malesuada nisl at mauris cursus lorem mattis arcu.</p>
                        </div>
                        <div class="flat-toggle box-text corner-box">
                            <div class="h7 toggle-title">Who are the team behind the project?</div>
                            <p class="toggle-content">Gravida viverra dui aliquet eu tortor lorem et gravida. Sed amet phasellus tellus mauris auctor rhoncus. 
                                Malesuada nisl at mauris cursus lorem mattis arcu.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
@endsection