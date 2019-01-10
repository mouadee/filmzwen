@extends('master')
@section('title', ' - ' . 'الصفحة الشخصية')
@section('content')
<style>
    .full-height {
        height: 100vh;
    }
    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }
    .position-ref {
        position: relative;
    }
    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }
    .content {
        text-align: center;
    }
    .title {
        font-size: 24px;
    }
    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }
    .m-b-md {
        margin-bottom: 30px;
        position: relative;
        top: 207px;
    }
    footer {
        display: none;
    }
</style>

    <div class="container">
        <div class="row">
            <div class="homePageProfile col-md-4">
                <img class="profileAvatar" src="imgs/avatars/{{ Auth::user()->avatar }}" alt="avatar">
                <ul class="list-unstyled">
                    <li>{{ Auth::user()->name }}</li>
                    <li class="usernamePrefix"><b>@</b>{{ Auth::user()->username }}</li>
                    <li>{{ Auth::user()->country }} <i class="far fa-map-marker-alt"></i></li>
                </ul>
                <table class="table">
                    <tr>
                        <th scope="col"><a><i class="far fa-user-plus" title="إضافة كصديق"></i></a></th>
                        <th scope="col"><a href="messenger"><i class="fab fa-facebook-messenger" title="إرسال رسالة"></i></a></th>
                        <th scope="col"><a href=""><i class="far fa-bell" title="إشعارات"></i></a></th>
                        <th scope="col"><a href=""><i class="far fa-tv" title="مشاهدة مع صديق"></i></a></th>
                    </tr>
                </table>
                <p class="userProfileDescription">
                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.
                </p>
                <ul class="list-unstyled userProfileSocialMedia">
                    <li><i class="fab fa-facebook-f"></i></li>
                    <li><i class="fab fa-instagram"></i></li>
                    <li><i class="fab fa-linkedin-in"></i></li>
                </ul>

                <div class="userProfilePopularity">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <b>نقاط السمعة</b>
                </div>
                <div class="userEditPostAndStatus">
                    <form action="" method="post">
                        <label for="UserPublishStatus" class="text-right UserPublishStatus">مذا يخطر في بالك ؟<i class="fal fa-edit"></i></label>
                        <textarea id="UserPublishStatus" class="textEditorUserPublishStatus" placeholder=".. أكتب شيأ" ></textarea>
                        <button type="submit" class="btn publishStatusUserButton">نشر</button>
                    </form>
                </div>
                <hr class="hr-text text-center" data-content="المنشورات">
                <div class="userStatusPublished">
                    <img class="userStatusPublishedAvatar" src="imgs/avatars/{{Auth::user()->avatar}}" alt="avatar">
                        <span class="userNameStatusPublished">{{Auth::user()->username}}</span>
                    <p class="userStatusPublishedContent">
                        هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.
                    </p>
                    <hr class="text-center hrUnderUserTools">
                    <ul class="list-unstyled userStatusToolsInteraction">
                        <li><a href=""><i class="fal fa-share"></i></a></li>
                        <li><a href=""><label for="userProfileComment" class="userProfileComment"><i class="fal fa-comment-lines"></i></label></a></li>
                        <li><a href=""><i class="fal fa-thumbs-up"></i></a></li>
                    </ul>
                    <form action="" method="post">
                        <textarea name="userProfileComment" id="userProfileComment" cols="24" rows="2" placeholder="..أكتب تعليق"></textarea>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
