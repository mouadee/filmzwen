<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/imagehover.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://fontlibrary.org/face/droid-arabic-kufi">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Filmzwen</title>
</head>
<body>
<!-- Just a logo -->
<nav>
    <!-- The ButtonBar -->
    <div class="navbar">
    <span class="open-slide">
        <i id="open" class="fa fa-bars fa-lg" aria-hidden="true"></i>
        <i id="close" class="fa fa-times fa-lg" aria-hidden="true" style="display: none"></i>
    </span>
    </div>

    <!-- The Sidebar -->
    <div id="side-menu" class="side-nav">
        @auth
        <div class="infos-perso">
            <img src="imgs/avatars/{{ Auth::user()->avatar }}" alt="avatar">
            <h6 class="user-name-navbar">{{ Auth::user()->username }}</h6>
            <i class="fa fa-star" aria-hidden="true"></i><span class="user-privilidge">عضو</span>
            <div class="update-action">
                <a href="profile">تعديل الملف الشخصي<i class="fa fa-cog" aria-hidden="true"></i></a>
                <a href="{{ route('logout') }}" class="side_logout">تسجيل الخروج<i class="fa fa-sign-out" aria-hidden="true"></i>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </a>
            </div>
            <hr class="after-update-action">
        </div>
        @endauth


        <div class="liste-option">
            <a href="#">
                <span class="hidden">الرئيسية</span>
                <i class="fa fa-home" aria-hidden="true"></i>
            </a>
            <a href="#">
                <span class="hidden">شائع</span>
                <svg fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.5.67s.74 2.65.74 4.8c0 2.06-1.35 3.73-3.41 3.73-2.07 0-3.63-1.67-3.63-3.73l.03-.36C5.21 7.51 4 10.62 4 14c0 4.42 3.58 8 8 8s8-3.58 8-8C20 8.61 17.41 3.8 13.5.67zM11.71 19c-1.78 0-3.22-1.4-3.22-3.14 0-1.62 1.05-2.76 2.81-3.12 1.77-.36 3.6-1.21 4.62-2.58.39 1.29.59 2.65.59 4.04 0 2.65-2.15 4.8-4.8 4.8z"/>
                    <path d="M0 0h24v24H0z" fill="none"/>
                </svg>
            </a>
            <a href="#">
                <span class="hidden">الأفلام</span>
                <svg enable-background="new 0 0 500 500" id="Layer_1" version="1.1" viewBox="0 0 500 500" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path clip-rule="evenodd" d="M36.992,281.798c0,102.851,83.406,186.253,186.251,186.253  c102.849,0,186.251-83.402,186.251-186.253c0-35.16-15.082-79.861-27.254-98.847c-10.543-16.263-14.181-26.712-14.181-41.976  c0-31.799,33.529-63.599,68.693-63.599h4.543c12.536,0,22.711-10.177,22.711-22.713c0-12.536-10.175-22.713-22.711-22.713h-4.543  c-55.881,0-103.669,29.803-115.024,90.853c-23.267-17.624-59.419-27.254-98.486-27.254  C120.398,95.548,36.992,178.953,36.992,281.798z M200.53,281.798c0-12.536,10.177-22.712,22.713-22.712s22.713,10.176,22.713,22.712  c0,12.54-10.177,22.715-22.713,22.715S200.53,294.338,200.53,281.798z M82.418,281.798c0-22.624,18.26-40.884,40.884-40.884  c22.625,0,40.886,18.26,40.886,40.884c0,22.627-18.26,40.887-40.886,40.887C100.679,322.685,82.418,304.425,82.418,281.798z   M282.298,281.798c0-22.624,18.26-40.884,40.887-40.884c22.624,0,40.885,18.26,40.885,40.884c0,22.627-18.261,40.887-40.885,40.887  C300.558,322.685,282.298,304.425,282.298,281.798z M182.358,381.741c0-22.628,18.26-40.889,40.886-40.889  s40.885,18.261,40.885,40.889c0,22.623-18.26,40.883-40.885,40.883S182.358,404.364,182.358,381.741z M182.358,181.858  c0-22.624,18.26-40.883,40.886-40.883s40.885,18.26,40.885,40.883c0,22.625-18.26,40.886-40.885,40.886  S182.358,204.483,182.358,181.858z" fill="#010101" fill-rule="evenodd"/></svg>
            </a>
            <a href="#">
                <span class="hidden">المسلسلات</span>
                <svg viewBox="0 0 24 24">
                    <path fill="#000000" d="M8.16,3L6.75,4.41L9.34,7H4C2.89,7 2,7.89 2,9V19C2,20.11 2.89,21 4,21H20C21.11,21 22,20.11 22,19V9C22,7.89 21.11,7 20,7H14.66L17.25,4.41L15.84,3L12,6.84L8.16,3M4,9H17V19H4V9M19.5,9A1,1 0 0,1 20.5,10A1,1 0 0,1 19.5,11A1,1 0 0,1 18.5,10A1,1 0 0,1 19.5,9M19.5,12A1,1 0 0,1 20.5,13A1,1 0 0,1 19.5,14A1,1 0 0,1 18.5,13A1,1 0 0,1 19.5,12Z" />
                </svg>
            </a>
            <a href="#">
                <span class="hidden">الأفلام العربية</span>
                <svg enable-background="new 0 0 500 500" height="500px" id="Layer_1" version="1.1" viewBox="0 0 500 500" width="500px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path clip-rule="evenodd" d="M36.992,281.798c0,102.851,83.406,186.253,186.251,186.253  c102.849,0,186.251-83.402,186.251-186.253c0-35.16-15.082-79.861-27.254-98.847c-10.543-16.263-14.181-26.712-14.181-41.976  c0-31.799,33.529-63.599,68.693-63.599h4.543c12.536,0,22.711-10.177,22.711-22.713c0-12.536-10.175-22.713-22.711-22.713h-4.543  c-55.881,0-103.669,29.803-115.024,90.853c-23.267-17.624-59.419-27.254-98.486-27.254  C120.398,95.548,36.992,178.953,36.992,281.798z M200.53,281.798c0-12.536,10.177-22.712,22.713-22.712s22.713,10.176,22.713,22.712  c0,12.54-10.177,22.715-22.713,22.715S200.53,294.338,200.53,281.798z M82.418,281.798c0-22.624,18.26-40.884,40.884-40.884  c22.625,0,40.886,18.26,40.886,40.884c0,22.627-18.26,40.887-40.886,40.887C100.679,322.685,82.418,304.425,82.418,281.798z   M282.298,281.798c0-22.624,18.26-40.884,40.887-40.884c22.624,0,40.885,18.26,40.885,40.884c0,22.627-18.261,40.887-40.885,40.887  C300.558,322.685,282.298,304.425,282.298,281.798z M182.358,381.741c0-22.628,18.26-40.889,40.886-40.889  s40.885,18.261,40.885,40.889c0,22.623-18.26,40.883-40.885,40.883S182.358,404.364,182.358,381.741z M182.358,181.858  c0-22.624,18.26-40.883,40.886-40.883s40.885,18.26,40.885,40.883c0,22.625-18.26,40.886-40.885,40.886  S182.358,204.483,182.358,181.858z" fill="#010101" fill-rule="evenodd"/></svg>
            </a>
        </div>
        <hr class="after-update-action">
        <ul class="sub-nav">
            <span>التصنيف</span>
            <li><a href="">افلام الأكشن</a></li>
            <li><a href="">افلام رومانسية</a></li>
            <li><a href="">افلام مغامرة</a></li>
            <li><a href="">افلام رعب</a></li>
        </ul>
        <hr class="after-update-action">
        <div class="years_production">
            <span>سنة الإصدار</span>
            <ul>
                <li><a href="">2017</a></li>
                <li><a href="">2016</a></li>
                <li><a href="">2015</a></li>
                <li><a href="">2014</a></li>
                <li><a href="">2013</a></li>
                <li><a href="">2012</a></li>
                <li><a href="">2011</a></li>
                <li><a href="">2010</a></li>
                <li><a href="">2009</a></li>
                <li><a href="">2008</a></li>
                <li><a href="">2007</a></li>
                <li><a href="">2006</a></li>
                <li><a href="">2005</a></li>
                <li><a href="">2004</a></li>
            </ul>
        </div>
    </div>


    <!-- The Logo Of The Website -->
    <a class="navbar-brand text-center" href="/">
        <img class="brand" src="https://www.gulf-up.com/12-2017/15137198111.png" alt="brand">
    </a>

    <!-- The Registration Page -->

    <ul class="nav">
        @guest

        <li>
            <a href="{{url('register')}}">إنشاء حساب
                <img src="https://www.gulf-up.com/12-2017/1513767298261.png" alt="new_account_icon">
            </a>
        </li>

        <li>
            <a href="#" id="loginform">تسجيل الدخول
                <img src="https://www.gulf-up.com/12-2017/1513767337961.png" alt="my_account_icon">
            </a>
            <form action="{{url('login')}}" method="POST" autocomplete="off">
                {{ csrf_field() }}
                <div class="login">
                    <div class="login_content">
                        <i class="fa fa-user-o fa-lg user_login" aria-hidden="true"></i>

                        <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="إسم المستخدم" required autofocus>
                        {{--@if ($errors->has('username'))--}}
                            {{--<script>--}}
                                {{--swal({--}}
                                    {{--title: "!خطأ",--}}
                                    {{--text: "!المرجو التأكد من صحة البيانات",--}}
                                    {{--icon: "error",--}}
                                    {{--button: "الرجوع",--}}
                                {{--});--}}
                            {{--</script>--}}
                        {{--@endif--}}

                        <i class="fa fa-unlock-alt fa-lg user_pass" aria-hidden="true"></i>
                        <input id="password" type="password" name="password" placeholder="كلمة المرور" required>
                        {{--@if ($errors->has('password'))--}}
                            {{--<script>--}}
                                {{--swal({--}}
                                    {{--title: "!خطأ",--}}
                                    {{--text: "!المرجو التأكد من صحة البيانات",--}}
                                    {{--icon: "error",--}}
                                    {{--button: "الرجوع",--}}
                                {{--});--}}
                            {{--</script>--}}
                        {{--@endif--}}
                        <button type="submit" class="btn btn-primary">
                            {{ __('دخول') }}
                        </button>
                        <span class="checkbox">&nbsp;حفظ البيانات؟&nbsp;
                        <a href="chPass" class="save-pass">نسيت كلمة السر؟</a>
                        <label class="custom-control custom-checkbox remember_login">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                        </label>
                        </span>
                        <div class="social">
                            <button class="btn btn-success facebook" type="submit">
                                <span>الدخول عبر فيسبوك</span>
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-danger google" type="submit">
                                <span><b>+</b>الدخول عبر جوجل </span>
                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </li>
        @else
            <li><a class="dropdown-item" href="{{ route('logout') }}">
                    {{ __('تسجيل الخروج') }}
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="{{url('profile')}}" title="حسابي" class="dropdown-item">
                    {{ Auth::user()->username }} <span class="caret"></span>
                    {{--<img src="imgs/avatars/{{ Auth::user()->avatar }}" style="width: 32px;height: 32px;position: absolute;top: 0px;border-radius: 50%;left: 90px;">--}}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>

            @endguest
    </ul>


</nav>

@yield('content')
@yield('register')
@yield('films')

<footer>
    <div class="social">
        <ul>
            <li><a href="http://facebook.com/filmzwen"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="https://www.instagram.com/filmzwen/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href="https://twitter.com/filmzwen/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="http://youtube.com/filmzwen/"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
        </ul>
    </div>
    <div class="droit_reserved">
        <span><img src="/imgs/logo.png" alt="logo">كافة الحقوق محفوظة لموقع</span>
    </div>



</footer>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script>-->
<script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('js/jquery.waterwheelCarousel.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.nice-select.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{ asset('js/materialize.min.js') }}"></script>
<!--<script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>-->
</body>
</html>