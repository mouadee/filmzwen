@extends('master')

@section('content')
    <div class="slider">
        <!-- Search Area -->
        <div class="search">
            <input type="search" placeholder="البحث السريع">
            <button type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
            </button>
        </div>

        <!--  Carousel  -->
        <div class="carousel">
            <img class="img-slide" src="/imgs/ee.png" alt="home">
        </div>

        <!--  Button Watch  -->
        <div class="watch">
            <button class="btn btn-danger" type="submit">شاهد الان مجانا</button>
        </div>


        <!-- Left Carousel Was deleted now !-->
 
            
  <div class="carousel">
    <a class="carousel-item" href="#">
        <img src="imgs/run.jpg"><br>
        <span class="carousel-title">Breaking Bad</span>
    </a>
    <a class="carousel-item" href="#">
        <img src="imgs/ll.jpg"><br>
        <span class="carousel-title">Breaking Bad</span>
    </a>
    <a class="carousel-item" href="#">
        <img src="imgs/kk.jpg"><br>
        <span class="carousel-title">Breaking Bad</span>
    </a>
    <a class="carousel-item" href="#">
        <img src="imgs/run.jpg"><br>
        <span class="carousel-title">Breaking Bad</span>
    </a>
    <a class="carousel-item" href="#">
        <img src="imgs/run.jpg"><br>
        <span class="carousel-title">Breaking Bad</span>
    </a>
    <br><br>
  </div>



<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>

    <div class="all_content">
    <!-- This Is The Section Of The most watchen Films -->
        <section class="most_watch">
            <ul>
                <span class="title_categorie">الأكثر مشاهدة</span>
                <li>
                    <div class="meniature_content">
                    <img src='/imgs/kk.jpg' alt="poster">
                        <ul class="film_meniature_infos">
                            <li>Breaking Bad</li>
                            <li>wol nar</li>
                            <li>دراما</li>
                            <li>2013</li>
                            <li>9/10</li> 
                        </ul>
                    </div>
                    <a class="content_name" href="#">Breaking Bad</a></li>
                <li>
                    <div class="meniature_content">
                    <img src='/imgs/kk.jpg' alt="poster">
                        <ul class="film_meniature_infos">
                            <li>Breaking Bad</li>
                            <li>wol nar</li>
                            <li>دراما</li>
                            <li>2013</li>
                            <li>9/10</li> 
                        </ul>
                    </div>
                    <a class="content_name" href="#">Breaking Bad</a></li>
                <li>
                    <div class="meniature_content">
                    <img src='/imgs/kk.jpg' alt="poster">
                        <ul class="film_meniature_infos">
                            <li>Breaking Bad</li>
                            <li>wol nar</li>
                            <li>دراما</li>
                            <li>2013</li>
                            <li>9/10</li> 
                        </ul>
                    </div>
                    <a class="content_name" href="#">Breaking Bad</a></li>
                <li>
                    <div class="meniature_content">
                    <img src='/imgs/kk.jpg' alt="poster">
                        <ul class="film_meniature_infos">
                            <li>Breaking Bad</li>
                            <li>wol nar</li>
                            <li>دراما</li>
                            <li>2013</li>
                            <li>9/10</li> 
                        </ul>
                    </div>
                    <a class="content_name" href="#">Breaking Bad</a></li>
                <li>
                    <div class="meniature_content">
                    <img src='/imgs/kk.jpg' alt="poster">
                        <ul class="film_meniature_infos">
                            <li>Breaking Bad</li>
                            <li>wol nar</li>
                            <li>دراما</li>
                            <li>2013</li>
                            <li>9/10</li> 
                        </ul>
                    </div>
                    <a class="content_name" href="#">Breaking Bad</a></li>
                <li>
                    <div class="meniature_content">
                    <img src='/imgs/kk.jpg' alt="poster">
                        <ul class="film_meniature_infos">
                            <li>Breaking Bad</li>
                            <li>wol nar</li>
                            <li>دراما</li>
                            <li>2013</li>
                            <li>9/10</li> 
                        </ul>
                    </div>
                    <a class="content_name" href="#">Breaking Bad</a></li>

                {{-- <span class="title_categorie">الأكثر مشاهدة</span>
                @foreach ($plays as $player) 
                <li>
                    <div class="meniature_content">
                    <img src='{{$player->Film_poster}}' alt="poster">
                        <ul class="film_meniature_infos">
                            <li>{{$player->Film_title}}</li>
                            <li>{{$player->Film_Hero}}</li>
                            <li>{{$player->Film_types}}</li>
                            <li>{{$player->Film_times}}</li>
                            <li>{{$player->Film_feedback}}</li> 
                        </ul>
                    </div>
                    <a class="content_name" href="{{Route('play.show', $player->id)}}">{{$player->Film_title}}</a>
                </li>
                @endforeach --}}
            </ul>
        </section>
    <!-- This Is The Section Of The Films -->
        <section class="films">
            <ul>
                <span class="title_categorie">افلام</span>
                @foreach ($film as $films)
            @if($films->Film_language == 'إنجليزية')
                <li>
                    <div class="meniature_content">
                    <img src='{{$films->Film_poster}}' alt="poster">
                        <ul class="film_meniature_infos">
                            <li>{{$films->Film_title}}</li>
                            <li>{{$films->Film_Hero}}</li>
                            <li>{{$films->Film_types}}</li>
                            <li>{{$films->Film_times}}</li>
                            <li>{{$films->Film_feedback}}</li> 
                        </ul>
                    </div>
                    <a class="content_name" href="{{Route('film.show', $films->id)}}">{{$films->Film_title}}</a>
                </li>
            @endif
                @endforeach
            </ul>
            <a href="films" class="more_categorie">
                <i class="fa fa-circle" aria-hidden="true"></i>
                <i class="fa fa-circle" aria-hidden="true"></i>
                <i class="fa fa-circle" aria-hidden="true"></i>
            </a>
        </section>
    <!-- This Is The Section Of The Series -->
        <section class="series">
            <ul>
                <span class="title_categorie">مسلسلات</span>
               @foreach ($plays as $player) 
                <li>
                    <div class="meniature_content">
                    <img src='{{$player->Film_poster}}' alt="poster">
                        <ul class="film_meniature_infos">
                            <li>{{$player->Film_title}}</li>
                            <li>{{$player->Film_Hero}}</li>
                            <li>{{$player->Film_types}}</li>
                            <li>{{$player->Film_times}}</li>
                            <li>{{$player->Film_feedback}}</li> 
                        </ul>
                    </div>
                    <a class="content_name" href="{{Route('play.show', $player->id)}}">{{$player->Film_title}}</a>
                </li>
                @endforeach
            </ul>
            <a href="series" class="more_categorie">
                <i class="fa fa-circle" aria-hidden="true"></i>
                <i class="fa fa-circle" aria-hidden="true"></i>
                <i class="fa fa-circle" aria-hidden="true"></i>
            </a>
        </section>
    <!-- This Is The Section Of The Arabic Films -->
        <section class="arabic_films">
            <ul>
                <span class="title_categorie">أفلام عربية</span>
                @foreach ($film as $films)
            @if($films->Film_language == 'العربية')
                <li>
                    <div class="meniature_content">
                    <img src='{{$films->Film_poster}}' alt="poster">
                        <ul class="film_meniature_infos">
                            <li>{{$films->Film_title}}</li>
                            <li>{{$films->Film_Hero}}</li>
                            <li>{{$films->Film_types}}</li>
                            <li>{{$films->Film_times}}</li>
                            <li>{{$films->Film_feedback}}</li> 
                        </ul>
                    </div>
                    <a class="content_name" href="{{Route('film.show', $films->id)}}">{{$films->Film_title}}</a>
                </li>
            @endif
                @endforeach
            </ul>
        <a href="ar_films" class="more_categorie">
            <i class="fa fa-circle" aria-hidden="true"></i>
            <i class="fa fa-circle" aria-hidden="true"></i>
            <i class="fa fa-circle" aria-hidden="true"></i></a>
        </section>
    </div>
@endsection