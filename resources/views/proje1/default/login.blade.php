@extends('proje1.layout')
@section("title" , "Üye Girişi")
@section('content')

<body style="background-image: url('/images/background.jpg');">

<div class="container col-lg-6">
    <p class="login-box-msg text-center pt-5">Bir Hesabınız Var mı?</p>

    <form action="{{Route('UyeGiris')}}" method="post">
        @csrf
        <div class="form-group pt-2">
            <input type="email" name="email" class="form-control" placeholder="Kullanıcı Adı :">
        </div>
        <div class="form-group pt-3">
            <input type="password"  name="password"  class="form-control" placeholder="Şifre :" >
        </div>

        <div class="form-group pt-2">
            <button type="submit" class="form-control btn btn-white">Giriş Yap</button>
        </div>

        <div class="row form-group pt-3">
            <div class="col-lg-3">
                <div class="checkbox icheck">
                    <label>
                    <input type="checkbox" name="remember_me"> Beni Hatırla
                    </label>
                </div>
            </div>
        </div>
</form>
</div>
</body>

@endsection
@section("css") @endsection
@section("js") @endsection
