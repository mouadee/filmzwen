@extends('master')
@section('title', '- إنشاء حساب')
@section('register')
    <style>
        footer {
            position: relative;
            top: 786px;
        }
    </style>
    <form action="" method="post" class="register_inos" autocomplete="off">

        {{ csrf_field() }}

        <h2 class="newAccount">إنشاء حساب جديد</h2>
        <div class="clear"></div>
        <input type="text" placeholder="إسم المستخدم" name="username" value="{{ old('username') }}" autofocus>
        <label for=""><span class="requiredDanger">*</span>إسم المستخدم</label><br>


        <input type="text" placeholder="الإسم الكامل" name="name"  value="{{ old('name') }}">
        <label for=""><span class="requiredDanger">*</span>الإسم الكامل</label><br>


        <input type="email" placeholder="البريد الإلكتروني" name="email"  value="{{ old('email') }}">
        <label for=""><span class="requiredDanger">*</span>البريد الإلكتروني</label><br>


        <input type="password" placeholder="كلمة المرور" name="password" value="{{ old('password') }}">
        <label for=""><span class="requiredDanger">*</span>كلمة المرور</label><br>


        <input name="password_confirmation" type="password" placeholder="أعد إدخال كلمة المرور" value="{{ old('password_confirmation') }}">
        <label><span class="requiredDanger">*</span>أعد إدخال كلمة المرور</label><br>


        <input type="submit" value="تسجيل" class="save_infos" name="submit">

    </form>
    <div class="login_with">

        <hr class="hr-text" data-content="أو">
        <a class="btn btn-success facebook" href="/login/facebook">
            <span>بإستخدام فيسبوك</span>
            <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a class="btn btn-danger google" href="/login/google">
            <span>بإستخدام جوجل</span>
            <i class="fa fa-google" aria-hidden="true"></i>
        </a>
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
