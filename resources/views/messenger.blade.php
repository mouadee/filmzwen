@extends('master')
@section('title', ' - ' . 'الرسائل')
@section('content')
    <style>
        footer
        {
            position: relative;
            top: 510px;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-6 allMessengerContainer">
                <h4 class="text-center">الرسائل</h4>
                {{--  The other user sending message  --}}
                <div class="messageReceivedPart">
                        <img class="messageReceivedPartFirstUser" src="{{asset('imgs/autherUserAvatar.png')}}" alt="userImageProfile">
                        <input type="text" placeholder="السلام عليكم, كيف االحال ؟ .." disabled>
                </div>

                {{--  The official user sending message  --}}
                <div class="messageReceivedPartSecondUser">
                        <img class="messageReceivedPartFirstUser" src="{{asset('imgs/user-avatar.png')}}" alt="userImageProfile">
                        <input type="text" placeholder="بخير الحمد لله .." disabled>
                </div>

                <div class="messageSendingPart">
                    @csrf
                    <form action="" method="post">
                        <img class="messageSendingPartFirstUser" src="{{asset('imgs/user-avatar.png')}}" alt="userImageProfile">
                        <input type="text" placeholder="أكتب رسالتك">
                        <button type="submit"><i class="fal fa-paper-plane"></i></button>
                        <button class="audioMessageSend" type="button"><i class="fal fa-microphone"></i></button>

                    </form>
                    <div aria-label="Voice Clip" class="_3z51" role="dialog"><div><div class="_3z54" style="height: 0px; width: 0px;"></div><a class="_3z55" role="button" title="Record" href="#" tabindex="0"><div><span class="_3z56">Record</span></div></a></div><div class="_3z53">0:00</div></div>
                </div>
            </div>
        </div>
    </div>

@endsection
