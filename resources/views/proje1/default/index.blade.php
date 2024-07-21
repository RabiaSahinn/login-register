<!-- KULLANICI LOGİN OLDUĞUNDA YÖNLENDİRİLECEK SAYFA-->
@extends("proje1.layout")
@section("title" , "Hesabım")
@section("content")

    <a class="btn nav-link dropdown-toggle text-right px-5 fixed-top" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #000000;">
    <i class="fa fa-user-circle-o" aria-hidden="true"></i> Hesabım
            </a>
            <div class="dropdown-menu dropdown-menu-right border border-white pt-1" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item btn " href="{{route('DuzenleEdit')}}">Profili Düzenle</a>
              <a class="dropdown-item btn" href="{{route('CikisYap')}}">Çıkış Yap <i class="fa fa-sign-out" aria-hidden="true"></i></a>
            </div>
          </li>

<div class="container mt-5 border border-white">
          <div class="card mb-4 mt-3 border border-white">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">
            <a href="{{route('DuzenleEdit')}}">
              <img width="255"  class="img-fluid" src="/images/settings/{{Auth::user()->user_file}}" alt="resimekle" >
            </a>
          </div>
          <div class="col-lg-6 mt-5">
          <table class="table">
                <tbody>
                  <tr id="item-{{Auth::user()->id}}">
                  <tr>
                    <th scope="row" style="font-size: 13px;">Ad Soyad : </th>
                    <td class="text-right">{{Auth::user()->name}}</td>
                  </tr>

                  <tr>
                    <th scope="row" style="font-size: 13px;">Kullanıcı Adı (Email) : </th>
                    <td class="text-right">{{Auth::user()->email}}</td>
                  </tr>
</tr>
                </tbody>
          </table>
          
            <a href="{{route('DuzenleEdit')}}" class="btn btn-block">Düzenle</a>
          </div>
        </div>
      </div>
</div>
    
             


@endsection
@section("css") @endsection
@section("js") @endsection