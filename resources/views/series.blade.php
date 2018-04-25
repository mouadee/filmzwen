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
        <img class="img-slide" src="imgs/ee.png" alt="home">
    </div>

    <!--  Button Watch  -->
    <div class="watch">
        <button class="btn btn-danger" type="submit">شاهد الان مجانا</button>
    </div>

    <!-- Left Carousel -->
    <div class="left-carousel">
        <div class="carousel">
            {{-- <a class="carousel-item" href="#one">
                <img src="imgs/bright.jpg">
                <div class="infos">
                    <span>span</span>
                    <span>span</span>
                    <span>span</span>
                    <span>span</span>
                    <span>span</span>
                </div>
            </a>
            <a class="carousel-item" href="#two">
                <img src="imgs/yy.jpg">
                <div class="infos">
                    <span>span</span>
                    <span>span</span>
                    <span>span</span>
                    <span>span</span>
                    <span>span</span>
                </div>
            </a> --}}
        </div>
    </div>
</div>

<span class="title_categorie_films">مسلسلات</span>
<section class="films_pages">

    <div class="films-cat">
        <select>
            <option value="" disabled selected>النوع</option>
            <option value="all_type">الكل</option>
            <option value="all_type">أكشن</option>
            <option value="all_type">مغامرة</option>
            <option value="all_type">كوميديا</option>
            <option value="all_type">جريمة</option>
            <option value="all_type">دراما</option>
            <option value="all_type">رعب</option>
            <option value="all_type">غموض</option>
            <option value="all_type">إثارة</option>
            <option value="all_type">رومانسي</option>
            <option value="all_type">خيال علمي</option>
        </select>
        <select>
            <option value="" disabled selected>السنة</option>
            <option value="all_type">2018</option>
            <option value="all_type">2017</option>
            <option value="all_type">2016</option>
            <option value="all_type">2015</option>
            <option value="all_type">2014</option>
            <option value="all_type">2013</option>
            <option value="all_type">2012</option>
            <option value="all_type">2011</option>
            <option value="all_type">2010</option>
            <option value="all_type">2009</option>
            <option value="all_type">2008</option>
        </select>
        <span class="new-films-span">الأحدث</span>
        <span class="most-watched-films">الأكثر رواجا</span>
    </div>
    <ul>
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
</section>

<nav class="pagination-label" aria-label="...">
    <ul class="pagination">
        <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">السابق</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item active">
            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
        </li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#">التالي</a>
        </li>
    </ul>
</nav>
<img src="imgs/adset.png" class="left_adset" alt="adset">

    @endsection