@extends("proje1.layout")
@section("content")
@section("title" , "Profili Düzenle")

<div class="container fixed-top mt-2">
  <div class="card-header">
    Profili Düzenle
  </div>

  @if($errors->any())
  <div class="alert alert-danger mt-3">
    <ul>
      @foreach($errors->all() as $error)
      <li class="pt-2">{{$error}}</li>
      @endforeach
    </ul>
  </div>
@endif


  <form action="{{route('DuzenleUpdate')}}" method="post" enctype="multipart/form-data">
    @csrf


      @isset(Auth::user()->user_file)
      <div class="row mt-4 pl-3">
        <div class="col-xs-12">
          <label class="pl-3 label-style">Yüklü Resim</label> </br>
          <img class="pl-3" width="50" src='/images/settings/{{Auth::user()->user_file}}'>
        </div>
      </div>  
      @endisset

      <div class="row mt-4 pl-3">
        <div class="col-xs-12">
          <label class="pl-3 label-style">Resim Seç:</label> </br>
            <input class="ml-3 pl-3 input-style form-control" type="file"  name="dosya">
        </div>
      </div>


      
      <div class="row mt-4 pl-3">
        <div class="col-xs-12">
          <label class="pl-3 label-style">Ad Soyad :</label> </br>
            <input class="ml-3 pl-3 input-style form-control" type="text"  name="adsoyad" value="{{Auth::user()->name}}">
        </div>
      </div>

      <div class="row mt-4 pl-3">
        <div class="col-xs-12">
          <label class="pl-3 label-style">Kullanıcı Adı (Email) :</label></br>
            <input class="ml-3 pl-3 input-style form-control" type="email"  name="email" value="{{Auth::user()->email}}">
        </div>
      </div>

      <div class="row mt-4 pl-3">
        <div class="col-xs-12">
          <label class="pl-3 label-style">Şifre :</label> </br>
            <input class="ml-3 pl-3 input-style form-control" type="password"  name="sifre"> 
            <small class="ml-3">Şifreyi değiştirmek istemiyorsanız boş bırakın</small>
        </div>
      </div>

     
      <div align="left" class="box-footer pl-3 mt-4">
          <a class="btn bg-danger text-white" href="{{route('LoginIndex')}}">Geri</a>
          <button type="submit" class="btn bg-success text-white">Düzenle</button>
      </div>   


                   
</form>
  
  
</div> 



 




@endsection
@section("css") @endsection
@section("js") @endsection
