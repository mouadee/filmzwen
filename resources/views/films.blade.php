@extends('master')
@section('title', '- أفلام')
@section('films')
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
            <img class="img-slide" src="imgs/ee.jpg" alt="home">
        </div>

        <!--  Button Watch  -->
        <div class="">
            <button class="btn btn-danger watch" type="submit">شاهد الان مجانا</button>
        </div>
    </div>

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
            <span class="title_categorie">افلام</span>
            @foreach ($film as $films)
                @if($films->Film_language == 'إنجليزية')
                    <li>
                        <div class="meniature_content">
                            <img src='{{$films->Film_poster}}' alt="poster">
                            <ul class="film_page_meniature_infos">
                                <li>{{$films->Film_title}}</li>
                                <li>{{$films->Film_Hero}}</li>
                                <li>{{$films->Film_types}}</li>
                                <li>{{$films->Film_times}}</li>
                                <li>{{$films->Film_feedback}}</li>
                            </ul>
                        </div>
                        <a class="content_name" href="{{Route('play.show', $films->id)}}">{{$films->Film_title}}</a>
                    </li>
                @endif
            @endforeach
        </ul>
        {{--{!! $film->render() !!}--}}
    </section>


    {{--The Adset Banner Here--}}
    {{--<img src="imgs/adset.png" class="left_adset" alt="adset">--}}
@endsection
