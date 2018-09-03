@extends('master')

@section('content')

    <style>
        /* This style is Cause i use 1 page of style and 1 class of the 2 pages */
        .errors-report,
        .share {
            top: 800px;
        }
        .feedback-share p {
            margin: 4px 160px;
        }
        .heart_give_feedback {
            position: relative;
            bottom: 15px;
            right: 40px;
        }
        footer {
            width: 100vw;
            position: absolute;
            right: 0;
        }
    </style>

    <div class="slider">
        <!--  Carousel  -->

        <div class="carousel">
            <img class="logo-youtube" src="{{asset('imgs/youtube-logo.png')}}" alt="youtube logo">

            <iframe class="img-slide" width="560" height="315" src="https://www.youtube.com/embed/{{$play->Youtube_url}}?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> <h4 class="trailler-title">{{$play->Film_title}} | OFFICIEL TRAILER</h4>
        </div>

        <img src="{{asset('imgs/adset.png')}}" class="adsetonleft" alt="adset">
    <div class="container player-container">
        <div class="row">
            <div class="infos-film">
                <img src='{{$play->Film_poster}}' alt="content-poster" class="film-img">
                <div class="title-desc">
                    <h1>
                        <span class="production_years">({{$play->Film_productionYears}})</span>
                        {{$play->Film_title}}
                    </h1>
                    <p>{{ str_limit($play->Film_Description, 220, '...') }}</p>
                </div>
                <div class="actors-info">
                    <div class="maker">
                        <span>المخرج</span>
                        <a href="">{{$play->Film_Actor}}</a>
                    </div>
                    <div class="heros">
                        <span>الأبطال</span>
                        <a href="">{{$play->Film_Hero}}</a>
                        <a href="">{{$play->Film_Hero}}</a>
                        <a href="">{{$play->Film_Hero}}</a>
                    </div>
                    <div class="season">
                        <span>المواسم</span>
                        <a href="">{{$play->Film_season}}</a>
                    </div>
                    <div class="ring">
                        <span>الحلقات</span>
                        <a href="">{{$play->Film_ring}}</a>
                    </div>
                </div>
                <div class="type-time">
                    <div class="type">
                        <button>{{$play->Film_types}}</button>
                        <button>{{$play->Film_types}}</button>
                        <button>{{$play->Film_types}}</button>
                        <div class="film-time">
                            <span><b>{{$play->Film_times}}</b>دق</span>
                        </div>
                        <div class="imdb-stars">
                            imdb
                        </div>
                    </div>

                </div>
            </div>

            <hr class="player-hr">

            <div class="feedback-share">

                <div class="feedback">
                <span class="givefeed">
                    <p>قيم <p/>
                    <p> هذا</p>
                </span>

                </div>
                <div class="heart_give_feedback">
                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                    <span>4.5</span>
                    <i class="fa fa-heart" aria-hidden="true"></i>
                </div>
                <div class="errors-report">
                    <a href="">
                        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                        ابلغ عن خطأ
                    </a>
                </div>
                <div class="share">
                    <button>
                        <i class="fa fa-share" aria-hidden="true"></i>
                        شارك
                    </button>
                    <a href="">
                        <!--<div data-href="https://developers.facebook.com/docs/plugins/">
                            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">
                            </a>
                        </div>-->
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a class="twitter-share-button"
                       href="https://twitter.com/share"
                       data-size="large"
                       data-text="custom share text"
                       data-url="https://dev.twitter.com/web/tweet-button"
                       data-hashtags="example,demo"
                       data-via="twitterdev"
                       data-related="twitterapi,twitter">
                        Tweet
                    </a>
                    <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a>

                </div>
            </div>
        </div>
    <div class="watch_video">
        <div class="player-v">
            <iframe src="{{$play->Film_link}}" scrolling="no" frameborder="0" width="700" height="430" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>

        </div>
        <div class="quality">
            <div class="for-watching">
             <span>الجودة المتوفرة للمشاهدة</span><br><br>
             <a href="{{$play->Film_quality}}"><button class="btn btn-danger">1080p HD</button></a><br>
             <a href="{{$play->Film_quality}}"><button class="btn btn-danger">720p HD</button></a><br>
             <a href="{{$play->Film_quality}}"><button class="btn btn-danger">480p HD</button></a><br>
             <a href="{{$play->Film_quality}}"><button class="btn btn-danger">360p HD</button></a><br>
            </div><br>
            <div class="for-download">
               <span> الجودة المتوفرة للتحميل</span><br><br>
               <a href="{{$play->Film_download}}"><button class="btn btn-success">1080p HD</button></a><br>
                <a href="{{$play->Film_download}}"><button class="btn btn-success">720p HD</button></a><br>
                <a href="{{$play->Film_download}}"><button class="btn btn-success">480p HD</button></a><br>
                <a href="{{$play->Film_download}}"><button class="btn btn-success">360p HD</button></a><br>
            </div>
        </div>
        <div class="night_mode">
            {{-- <button onclick="night();">اطفئ الأنوار</button> --}}
        </div>
        <script>
          /** var body = document.getAnonymousElementByAttribute('body');
          var body = document.body;
          function night () {
              body.style.backgroundColor = "black";
          }**/
        </script>
        <div class="season-offilms"><br>
            <span class="lead">المواسم</span><br>
            <ul class="list-unstyled">
            <li class="season-one">
                <img src="{{asset('imgs/blindspot-s1.jpg')}}" alt="season-one"><br>
                الموسم الاول
            </li>
            <li class="season-tow">
                <img src="{{asset('imgs/blindspot-s2.jpg')}}" alt="season-tow"><br>
                الموسم الثاني
            </li>
            <li class="season-three">
                <img src="{{asset('imgs/blindspot-s3.png')}}" alt="season-three"><br>
                الموسم الثالت
            </li>
            </ul>
        </div>
        <div class="films-ring"><br>
            <span class="lead">الحلقات</span><br>
            <button class="btn btn-primary">الحلقة الاولى</button>
            <button class="btn btn-primary">الحلقة الثانية</button>
            <button class="btn btn-primary">الحلقة الثالثة</button>
            <button class="btn btn-primary">الحلقة الرابعة</button>
            <button class="btn btn-primary">الحلقة الخامسة</button>
            <button class="btn btn-primary">الحلقة السادسة</button>
        </div>
    </div>
    </div>

{{-- The Comments Of Facebook users --}}
      {{--    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=2082307348716756&autoLogAppEvents=1';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="520" data-numposts="5">
    </div>   --}}
        {{-- Start Comments Section --}}



        <div class="comment-users"><hr>
            <h3>التعليقات</h3>
            <hr>
            @guest
                <h5 class="text-center">قم بتسجيل الدخول للتفاعل و وضع تعليق</h5>
                <div class="social-login text-center">
                    <h6>: أو قم بالتسجيل عبر</h6>
                    <a href="../login/facebook">
                        <button class="btn btn-success facebook">
                            <span>باستخدام فيسبوك</span>
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </button>
                    </a>

                    <a href="{{route('google.login')}}">
                        <button class="btn btn-danger google">
                            <span>باستخدام جوجل</span>
                            <i class="fa fa-google" aria-hidden="true"></i>
                        </button>
                    </a>
                </div>
            @else
                <span class="n-comment">
                <b>{{\App\Comments::count()}}</b>
                <i>تعليق</i>
            </span>

                <span class="username_comment">{{Auth::user()->username}}</span>
                <form action="{{route('comments.store',  $film->id)}}" method="post">
                    @csrf
                    <div class="write_comment">
                        <button type="submit"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
                        <input name="comment" type="text" placeholder="أكتب تعليق">
                        <img class="responsive-img user-img-comment" src="{{url('imgs/avatars/') . '/' . Auth::user()->avatar}}" alt="">
                    </div>
                </form>

                @foreach($film->comments as $comment)
                    <div class="all_comment">
                        <span class="auther-username_comment">{{$comment->user->username}}</span>
                        <input disabled type="text" value="{{str_limit($comment->comment, 60, ".")}}">
                        <img class="responsive-img auther-user-img-comment" src="{{url('imgs/avatars/') . '/' .$comment->user->avatar}}" alt="avatar">
                        <i class="fa fa-heart-o eart-comment" aria-hidden="true"></i>
                        <i class="time-comment">{{$comment->created_at->diffForHumans()}}</i>
                    </div>
                @endforeach

                <br>
                <button class="btn btn-primary more-comment">
                    <i class="fa fa-arrow-down" aria-hidden="true"></i>باقي التعليقات
                </button>
        </div>
    </div>

    @endguest

    @endsection
