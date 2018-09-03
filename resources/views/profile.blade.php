@extends('master')
@section('content')
    <style>
        footer {
            position: relative;
            top: 800px;
            bottom: 0!important;
        }
    </style>
    <section>
        <div class="side-infos">
            <ul>
                <li><a href="profile" class="active">تعديل الملف الشخصي</a></li>
                <li><a href="chPass">تغيير الرقم السري</a></li>
            </ul>
        </div>
        <div style="border-left: 1px solid #e8e8e8;height: 424px;float: right;margin-top: 59px;"></div>
        <div class="infos_edit">



            <div class="show-image">
                <img id="edit-img" src="imgs/avatars/{{ Auth::user()->avatar }}" alt="avatar">
                <form enctype="multipart/form-data" action="/profile" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <span class="select-wrapper">
                      <input name="avatar" type="file" value="upload" onchange="this.form.submit()">
                  </span>


                </form>
            </div>



            <div class="infos_perso">
                <span>{{ Auth::user()->name }}</span><br>
                {{--<form enctype="multipart/form-data" action="/profile" method="POST">إختر--}}
                    {{--<input class="inputfile" type="file" name="avatar">--}}
                    {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                    {{--<input type="submit" value="إختر" class="pull-right btn btn-sm btn-primary">--}}
                {{--</form>--}}
            </div>
            <form method="post" id="change_infos" action="{{url('/user/update/'.Auth::user()->id)}}">
               
               {{csrf_field()}}

               
                <label for="name">الإسم الكامل</label>
                <input id="name" name="name" value="{{Auth::user()->name}}" type="text" placeholder="{{ Auth::user()->name }}">


                <div class="general_infos">

                    <span class="private_info">معلومات خاصة </span>

                    <label for="email">البريد الإلكتروني</label>
                    <input id="email" name="email" value="{{Auth::user()->email}}" type="email" placeholder="{{ Auth::user()->email }}">

                    <label for="phone">رقم الهاتف</label>
                    <input id="phone" name="phone" type="text" value="{{Auth::user()->phone}}" placeholder="{{ Auth::user()->phone }}">

                    <label for="country">البلد</label>
                    <input id="country" name="country" type="text" value="{{Auth::user()->country}}" placeholder="{{ Auth::user()->country }}" style="text-align: right">

                    <label for="gender">الجنس</label>
                    <select id="gender" name="gender" value="{{Auth::user()->gender}}">
                        @foreach($genders as $key => $value)
                            <option value="{{$key}}" {{Auth::user()->gender == $key ? 'selected' : ''}}>{{$value}}</option>
                        @endforeach
                    </select>


                </div>
                <input type="submit" value="حفظ">
            </form>
        </div>
    </section>


    {{-- if all information of the profile was fill successfuly and is valide and session give success oredr --}}
    @if(session('success'))

        <script type="text/javascript">
            swal({
                title: "جيد",
                text: "تم تحديث معلومات العضو بنجاح",
                icon: "success",
                button: " رجوع",
            });
        </script>

    @endif


    {{-- if information is not valide and session give error oredr --}}
    @if(session('error'))

        <script type="text/javascript">
            swal({
                title: "خطأ",
                text: "تأكد من صحة المعلومات",
                icon: "error",
                button: " رجوع",
            });
        </script>

    @endif
    @endsection