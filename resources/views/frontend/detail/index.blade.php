<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>One Music - Modern Music HTML5 Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('user/css/style.css') }}">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="oneMusic-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="oneMusicNav">

                        <!-- Nav brand -->
                        <a href="index.blade.php" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="{{ route('fr.home') }}">Home</a></li>
                                    <li><a href="{{ route('albums.index') }}">Albums</a></li>
                                   
                                    <li><a href="{{ route('events') }}">Events</a></li>
                                    <li><a href="{{ route('news') }}">News</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                </ul>

                                <!-- Login/Register & Cart Button -->
                                <div class="login-register-cart-button d-flex align-items-center">
                                    <!-- Login/Register -->
                                    @if(Session::has('username'))
                                    <div class="login-register-btn mr-50">
                                        <a href="{{ route('logout') }}" id="loginBtn">Logout</a>
                                    </div>
                                    @else
                                    <div class="login-register-btn mr-50">
                                        <a href="{{ route('login') }}" id="loginBtn">Login</a>
                                    </div>
                                    @endif

                                    <!-- Cart Button -->
                                    <div class="cart-btn">
                                        <p><span class="icon-shopping-cart"></span> <span class="quantity">1</span></p>
                                    </div>
                                </div>
                            </div>
                            <!-- Nav End -->

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay"
        style="background-image: url('{{ asset('img/bg-img/breadcumb3.jpg') }}');">
        <div class="bradcumbContent">
            <p>See what’s new</p>
            <h2>Latest Albums</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->



    

    <!-- ##### Song Area Start ##### -->
    <div class="one-music-songs-area mb-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                        <div class="song-thumbnail">
                            <img width="20%" class="img-fulid"
                                src="{{ URL::to('/uploads/images') }}/{{ $info->poster_music }}" />
                        </div>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>
                                    <a href="" style="color: white;">
                                        {{ $info->name }}
                                    </a>
                                </p>
                            </div>
                            <audio controls controlsList="nodownload">
                                <source src="{{ URL::to('/uploads/songs') }}/{{ $info->source }}" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                        <br>
                        @if (Session::has('username'))
                            <a href="{{ URL::to('/uploads/songs') }}/{{ $info->source }}" download>Download</a>
                        @else
                            <a href="{{ route('fr.download.song', ['id' => $info->id]) }}">Download</a>
                        @endif
                        <br>
                        @if (Session::has('error_download'))
                            <p class="text-danger">{{ Session::get('error_download') }}</p>
                            <a href="{{ route('login') }}"> Login</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Wait for the document to be ready
        document.addEventListener('DOMContentLoaded', function() {
            // Get the audio element
            var audioPlayer = document.getElementById('audioPlayer');

            // Set controlsList attribute to hide the download button
            audioPlayer.controlsList = 'nodownload';
        });
    </script>
    {{-- css search --}}
    <style>
        audio::-webkit-media-controls {

            background-color: #f5f5f5;
            /* Màu nền */
            border-radius: 5px;
            /* Góc bo tròn */
            overflow: hidden;
        }




        .song-play-area{
            margin-top: 50px;
        }

        .download {
            color: white;
            /* Màu trắng */
            /* Thêm các thuộc tính CSS khác nếu bạn muốn tùy chỉnh hơn */
        }

        audio {
            width: 100%;
            /* Kích thước thanh điều khiển chiều rộng 100% */
            margin-top: 10px;
            /* Khoảng cách từ phía trên */
        }

        audio::-webkit-media-controls-volume-slider,
        audio::-webkit-media-controls-timeline {
            width: 60%;
            /* Kích thước thanh trượt và thanh tiến trình */
        }

        /* CSS cho thanh tìm kiếm */
        .search-container {
            margin-top: 20px;
            /* Khoảng cách từ phía trên */
        }

        .search-container form {
            display: flex;
            align-items: center;
        }

        .search-container input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .search-container button {
            padding: 10px;
            background-color: #a6a7a9;
            /* Màu nền nút */
            color: #fff;
            /* Màu chữ nút */
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Hover effect cho nút tìm kiếm */
        .search-container button:hover {
            background-color: #0056b3;
            /* Màu nền khi hover */
        }
    </style>

    <!-- ##### Song Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img"
        style="background-image: url(img/bg-img/bg-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading white">
                        <p>See what’s new</p>
                        <h2>Get In Touch</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name"
                                            placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email"
                                            placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject"
                                            placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn oneMusic-btn mt-30" type="submit">Send <i
                                            class="fa fa-angle-double-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-12 col-md-6">
                    <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                    <p class="copywrite-text"><a
                            href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i
                                class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>

                <div class="col-12 col-md-6">
                    <div class="footer-nav">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Albums</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    {{-- <script src="{{ asset('user/js/jquery/jquery-2.2.4.min.js') }}"></script> --}}
    <!-- Popper js -->
    <script src="{{ asset('user/js/bootstrap/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('user/js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('user/js/plugins/plugins.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('user/js/active.js') }}"></script>
</body>

</html>

  

