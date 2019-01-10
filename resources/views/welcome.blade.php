@extends('master')
@section('title', '- الصفحة الرأيسية')
@section('content')

    <!-- Search Area -->
    <div class="search">
        <form action="" method="post">
            <input type="search" placeholder="البحث السريع">
            <input type="submit" value="submit">
            <i class="fa fa-search searchBarIcon" aria-hidden="true"></i>
        </form>
    </div>

    <!--  Carousel for the Home page  -->
    <div class="carouselItem">
        <img class="img-slide" src="/imgs/ee.jpg" alt="home">
    </div>

    <!--  Button Watch  -->
    <button class="btn btn-danger watch" type="submit">شاهد الان مجانا</button>

    <div class="carousel">
        <a class="carousel-item" href="#">
            <img src="imgs/Mandy.jpg"><br>
            <span class="carousel-title">Mandy</span>
        </a>
        <a class="carousel-item" href="#">
            <img src="imgs/panick.jpg"><br>
            <span class="carousel-title">Panick</span>
        </a>
        <a class="carousel-item" href="#">
            <img src="imgs/worthy.jpg"><br>
            <span class="carousel-title">المختارون</span>
        </a>
        <a class="carousel-item" href="#">
            <img src="imgs/Daredevil.jpg"><br>
            <span class="carousel-title">Daredevil</span>
        </a>
        <a class="carousel-item" href="#">
            <img src="imgs/Manifest.jpg"><br>
            <span class="carousel-title">Manifest</span>
        </a>
        <br><br>
    </div>



    <div class="all_content">
        <!-- This Is The Section Of The most watchen Films -->
        <section class="most_watch">
            <ul>
                <span class="title_categorie">الأكثر مشاهدة</span>
                <li>
                    <div class="meniature_content">
                        <img src='/imgs/kk.jpg' alt="poster">
                        <ul class="film_meniature_infos">
                            <li>Venom</li>
                            <li>الانجليزية</li>
                            <li>اكشن</li>
                            <li>2018</li>
                            <li>7.1/10</li>
                        </ul>
                    </div>
                    <a class="content_name" href="#">Venom</a></li>
                <li>
                    <div class="meniature_content">
                        <img src='/imgs/aaa.jpg' alt="poster">
                        <ul class="film_meniature_infos">
                            <li>The Meg</li>
                            <li>الانجليزية</li>
                            <li>اثارة</li>
                            <li>2018</li>
                            <li>6.0/10</li>
                        </ul>
                    </div>
                    <a class="content_name" href="#">The Meg</a></li>
                <li>
                    <div class="meniature_content">
                        <img src='/imgs/ropa.jpg' alt="poster">
                        <ul class="film_meniature_infos">
                            <li>Malicious</li>
                            <li>الانجليزية</li>
                            <li>رعب</li>
                            <li>2018</li>
                            <li>6.1/10</li>
                        </ul>
                    </div>
                    <a class="content_name" href="#">Malicious</a></li>
                <li>
                    <div class="meniature_content">
                        <img src='/imgs/mille.jpg' alt="poster">
                        <ul class="film_meniature_infos">
                            <li>Mile 22</li>
                            <li>الانجليزية</li>
                            <li>كوميديا</li>
                            <li>2018</li>
                            <li>8.0/10</li>
                        </ul>
                    </div>
                    <a class="content_name" href="#">Mile 22</a></li>
                <li>
                    <div class="meniature_content">
                        <img src='/imgs/incl.jpg' alt="poster">
                        <ul class="film_meniature_infos">
                            <li>Incredibles 2</li>
                            <li>الانجليزية</li>
                            <li>دراما</li>
                            <li>2018</li>
                            <li>8.0/10</li>
                        </ul>
                    </div>
                    <a class="content_name" href="#">Incredibles 2</a>
                </li>
                <li>
                    <div class="meniature_content">
                        <img src='/imgs/mission.jpg' alt="poster">
                        <ul class="film_meniature_infos">
                            <li>Fallout</li>
                            <li>الانجليزية</li>
                            <li>مغامرة</li>
                            <li>2018</li>
                            <li>8.1/10</li>
                        </ul>
                    </div>
                    <a class="content_name" href="#">Fallout</a>
                </li>

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
                <span class="title_categorie">أفلام</span>
                @foreach ($film as $films)
                    @if($films->Film_language == 'إنجليزية')
                        <li>
                            <div class="meniature_content">
                                <img src='{{$films->Film_poster}}' alt="poster">
                                <ul class="film_meniature_infos">
                                    <li><a href="{{Route('film.show', $films->id)}}">{{$films->Film_title}}</a></li>
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
                <i class="fa fa-circle" aria-hidden="true"></i></a>
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
                                <li><a href="{{Route('play.show', $player->id)}}">{{$player->Film_title}}</a></li>
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
                                    <li><a href="{{Route('film.show', $films->id)}}">{{$films->Film_title}}</a></li>
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

