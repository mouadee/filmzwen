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
                <li><a href="profile">تعديل الملف الشخصي</a></li>
                <li><a href="chPass">تغيير الرقم السري</a></li>
            </ul>
        </div>
        <div style="border-left: 1px solid #e8e8e8;height: 424px;float: right;margin-top: 59px;"></div>
        <div class="infos_edit">
            <img src="{{ asset('imgs') }}/avatars/default.png" alt="avatar">
            <div class="infos_perso">
                <span>{{ Auth::user()->name }}</span><br>
            </div>
            <form method="post" action="{{-- route('chPass') --}}" class="change_pass">
                @csrf

                <label for="">كلمة المرور القديمة</label>
                <input type="password" name="oldPassword" placeholder="كلمة المرور القديمة">

                <label for="">كلمة المرور الجديدة</label>
                <input type="password" placeholder="كلمة المرور الجديدة"  name="newPassword" required>

                <label for="">تأكيد كلمة المرور الجديدة</label>
                <input type="password"  placeholder="تأكيد كلمة المرور الجديدة" name="passwordConfirmation">

                <input type="submit" value="حفظ" class="save_infos">
            </form>

        </div>
    </section>


{{-- if password is valide and session give success oredr --}}
@if(session('success'))

    <script type="text/javascript">
        swal({
            title: "جيد",
            text: "تم تحديث كلمة المرور",
            icon: "success",
            button: " رجوع",
        });
    </script>

@endif


{{-- if password is not valide and session give error oredr --}}
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