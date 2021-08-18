<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{$title ?? $setting->title}}" />
    <meta property="og:description" content="{{$description ?? $setting->descriptions}}" />
    <meta property="og:image" content="{{$imagePoster ?? asset('css/icons/logo.jpg')}}" />
    <meta name="description" content="{{$description ?? $setting->descriptions}}">
    <meta name="keywords" content="{{$keyword ?? $setting->keywords}}">
    <base href="{{url('')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link href="{{asset('css/video-js.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/swiper.min.css')}}">
    <script src="https://content.jwplatform.com/libraries/90pS7TYy.js"></script>
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/swiper.min.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    
    
    <title>{{$title ?? $setting->title}}</title>
    <link rel="shortcut icon" type="image/png" href="/hd.png"/>
</head>
<body id="root">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0&appId=640678337325006&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <header>
    <div class="header-logo">
    <a href="{{route('home')}}" title="Home">
        <img src="{{asset('css/icons/logo2.gif')}}" alt="LOGO"/>
    </a>
    </div>
    <div class="search-box">
        <button class="search-box_button">
            <i class="fa fa-search"></i>
        </button>
        <input type="text" placeholder="Tìm kiếm phim, diễn viên, đạo diễn..." class="search-box_input"/>
        <button class="search-box_button_open"><i class="fa fa-search"></i></button>
    </div>
    <button class="btn-toggle">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    </header>
    <div id="content">
        @include('slide')
        @yield('content')
    </div>
    <footer>
    <div class="fb-livechat">
    <div class="nvd fb-overlay"></div>
    <div class="fb-widget">
        <div class="nvd fb-close"></div>
        <div class="fb-page" data-href="https://www.facebook.com/Page-này-chia-sẻ-nhạc-101225998368878" data-tabs="messages" data-width="360" data-height="400" data-small-header="true" data-hide-cover="true" data-show-facepile="false"></div>
        <div id="fb-root"></div>
    </div>
    <a href="https://m.me/Page-này-chia-sẻ-nhạc-101225998368878" title="Gửi tin nhắn cho chúng tôi qua Facebook" class="nvd fb-button">
        <div class="bubble">1</div>
        <div class="bubble-msg">Bạn cần hỗ trợ?</div>
    </a>
    </div>

        <ul>
            <li>
                <img src="{{asset('css/icons/logo.png')}}" alt="LOGO"/>                
            </li>
            <li class="footer-inline">
                <a href="{{url('hoi-dap-huong-dan')}}">Hỏi đáp - Hướng dẫn</a>
            </li>
            <li class="footer-inline">
                <a href="{{url('dieu-khoan-su-dung')}}">Điều khoản sử dụng</a></li>
            <li class="footer-inline">
                <a href="https://facebook.com/messages/t/101225998368878">Liên hệ quảng cáo</a></li>
            <li>
                Copyright ©{{date('Y')}} PHIMHDPLUS. All Rights Reserved.
            </li>
        </ul>

        <div class="contact">
            <ul>
                <li class="fanpage"> <img src="https://icons-for-free.com/iconfiles/png/512/facebook+logo+logo+website+icon-1320190502625926346.png" alt=""><a href="https://www.facebook.com/Page-này-chia-sẻ-nhạc-101225998368878">Fanpage</a> </li>
                <li class="youtube"> <img src="https://icons-for-free.com/iconfiles/png/512/you+youtube+yt+icon-1320183903610647272.png" alt=""><a href="https://www.youtube.com/channel/UCHFSnV8B_IuBjO93-Xx4Cxg">Youtube</a></li>
         
        </ul>
        </div>
    </footer>
    <script>jQuery(document).ready(function($){function detectmob(){if( navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i) ){return true;}else{return false;}}var t={delay: 125, overlay: $(".fb-overlay"), widget: $(".fb-widget"), button: $(".fb-button")}; setTimeout(function(){$("div.fb-livechat").fadeIn()}, 8 * t.delay); if(!detectmob()){$(".nvd").on("click", function(e){e.preventDefault(), t.overlay.is(":visible") ? (t.overlay.fadeOut(t.delay), t.widget.stop().animate({bottom: 0, opacity: 0}, 2 * t.delay, function(){$(this).hide("slow"), t.button.show()})) : t.button.fadeOut("medium", function(){t.widget.stop().show().animate({bottom: "30px", opacity: 1}, 2 * t.delay), t.overlay.fadeIn(t.delay)})})}});</script>

    </body>
</html>

