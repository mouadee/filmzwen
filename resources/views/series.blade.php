@extends('master')
@section('title', '- مسلسلات')
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
            <img class="img-slide" src="{{asset('imgs/ee.jpg')}}" alt="home">
        </div>

        <!--  Button Watch  -->
        <div>
            <button class="btn btn-danger watch">شاهد الان مجانا</button>
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
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
            </select>
            <span class="new-films-span">الأحدث</span>
            <span class="most-watched-films">الأكثر رواجا</span>
        </div>
        <ul class="enFilmsContent">
            @foreach ($plays as $player)
                <li>
                    <div class="meniature_content">
                        <img src='{{$player->Film_poster}}' alt="poster">
                        <ul class="series-imgs-infos">
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
    {!! $plays->render() !!}

    {{--adset banner here--}}
    {{--<img src="imgs/adset.png" class="left_adset" alt="adset">--}}

@endsection
