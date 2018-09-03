@extends('master')

@section('register')
    <style>
        footer {
            position: relative;
            top: 786px;
        }
    </style>
    <form action="" method="post" class="register_inos">

        {{ csrf_field() }}

        <input type="text" placeholder="إسم المستخدم" name="username" value="{{ old('username') }}" autofocus>
        <label for="">إسم المستخدم</label><br>


        <input type="text" placeholder="الإسم الكامل" name="name"  value="{{ old('name') }}">
        <label for="">الإسم الكامل</label><br>


        <input type="email" placeholder="البريد الإلكتروني" name="email"  value="{{ old('email') }}">
        <label for="">البريد الإلكتروني</label><br>


        <input type="password" placeholder="كلمة المرور" name="password" value="{{ old('password') }}">
        <label for="">كلمة المرور</label><br>


        <input name="password_confirmation" type="password" placeholder="أعد إدخال كلمة المرور" value="{{ old('password_confirmation') }}">
        <label>أعد إدخال كلمة المرور</label><br>


        <input type="submit" value="تسجيل" class="save_infos" name="submit">

    </form>
    <div class="login_with">
        <h5>: أو قم بالتسجيل عبر</h5>
        <button class="btn btn-success facebook">
            <span>الدخول عبر فيسبوك</span>
            <i class="fa fa-facebook" aria-hidden="true"></i>
        </button>
        <button class="btn btn-danger google">
            <span>الدخول عبر جوجل</span>
            <i class="fa fa-google" aria-hidden="true"></i>
        </button>
    </div>
    <script>
        var has_errors = {{ $errors->count() > 0 ? 'true' : 'false' }};
        if ( has_errors ) {

            swal({
                title: "!خطأ",
                text: "!المرجو التأكد من صحة البيانات",
                icon: "error",
                button: "الرجوع"
            });
        }
    </script>

@endsection
