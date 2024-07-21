@extends('proje1.layout')
@section("title" , "Üye Kaydı")
@section('content')

<body style="background-image: url('/images/background.jpg');">

<div class="container col-lg-6">
    <p class="login-box-msg text-center pt-5">Burada Yeni Misin?</p>

    @if ($errors->any())
        <div class="alert alert-danger form-group">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
             </ul>
        </div>
    @endif

    <form action="{{Route('UyeKayit')}}" method="post">
        @csrf
        <div class="form-group pt-2">
            <input type="text" name="AdSoyad" class="form-control" placeholder="Ad Soyad :">
        </div>

        <div class="form-group pt-2">
            <input type="email" name="email" class="form-control" placeholder="Email Adresi :">
        </div>
        <div class="form-group pt-3">
            <input type="password"  name="sifre"  class="form-control" placeholder="Şifre :" >
        </div>

        <div class="form-group pt-3">
            <button type="submit" class="form-control btn btn-white">Üye Ol</button>
        </div>
        </div>
</form>
</div>


</body>

@endsection
@section("css") @endsection
@section("js") @endsection
