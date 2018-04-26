@extends('master')

@section('content')

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
                    <p>{{$play->Film_Description}}</p>
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
             <a href=""><button class="btn btn-danger">1080p HD</button></a><br>
             <a href=""><button class="btn btn-danger">1080p HD</button></a><br>
             <a href=""><button class="btn btn-danger">480p HD</button></a><br>
             <a href=""><button class="btn btn-danger">480p HD</button></a><br>
            </div><br>
            <div class="for-download">
               <span> الجودة المتوفرة للتحميل</span><br><br>
               <a href=""><button class="btn btn-success">1080p HD</button></a><br>
                <a href=""><button class="btn btn-success">1080p HD</button></a><br>
                <a href=""><button class="btn btn-success">480p HD</button></a><br>
                <a href=""><button class="btn btn-success">480p HD</button></a><br>
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

{{-- The Comment Of Facebook users --}}
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

{{-- start comment section --}}

     <div class="comment-users"><hr>
        <h3>التعليقات</h3>
        <hr>
        <span class="n-comment">17 تعليقا</span>
        <div class="write_comment">
            <span class="username_comment">{{ Auth::user()->username }}</span>
            <img class="responsive-img user-img-comment" src="{{asset('imgs/avatar.png')}}" alt="">
            <button><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
            <input type="text" placeholder="أكتب تعليق">
        </div>

        <div class="all_comment">
            <i class="time-comment">مند ساعة</i>
            <span class="auther-username_comment">Moad ELAZZAOUI</span>
            <img class="responsive-img auther-user-img-comment" src="{{asset('imgs/avatar.png')}}" alt="">
            <i class="fa fa-heart-o eart-comment" aria-hidden="true"></i>
            <input disabled type="text" value="واش وزعما ما انتخلصوش ف هادشي ؟">
        </div>

        <div class="all_comment">
            <i class="time-comment"><b>15</b>دقيقة </i>
            <span class="auther-username_comment">Aziz AJARAF</span>
            <img class="responsive-img auther-user-img-comment" src="{{asset('imgs/avatar.png')}}" alt="">
            <i class="fa fa-heart eart-comment" aria-hidden="true"></i>
            <input disabled type="text" value="اعلم الله بشحال د الجافاسكربت مخدوم هاد السيت">

        </div>
        <br>
        <button class="btn btn-primary more-comment">
            <i class="fa fa-arrow-down" aria-hidden="true"></i>
باقي التعليقات</button>
    </div> 

    @endsection
