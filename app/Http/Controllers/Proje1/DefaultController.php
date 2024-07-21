<?php

namespace App\Http\Controllers\Proje1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DefaultController extends Controller
{
    public function register()
    {
        return view("proje1.default.register");
    }

    public function store(Request $request) 
    {
        $request->validate([
            "AdSoyad" => "required|max:100",
            "email" => "required|email|unique:users|max:255",
            "sifre" => "required|min:8"
        ]);
        
        $UserInsert = User::Insert([
            "name" => $request->AdSoyad,
            "email" => $request->email,
            "password" => Hash::make($request->sifre)
        ]);

        if($UserInsert):
            return redirect(route('GirisYap'))->with("success" , "Kayıt İşlemi Başarılı. Artık Giriş Yapabilirsiniz.");
        else:
            return back()->with("error" , "Kayıt İşlemi Başarısız");
        endif;
    }

    public function login()
    {
        return view("proje1.default.login");
    }

    public function authenticate(Request $request)
    {
        $auth = $request->only("email" , "password");
        $remember_me = $request->has("remember_me") ? true : false;

        if(Auth::attempt($auth , $remember_me)):
            return redirect()->intended(route("LoginIndex"));
        else:
            return back()->with("error" , "Kullanıcı Adı veya Şifre Hatalı");
        endif;
    }

    public function index()
    {
        return view("proje1.default.index");
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route("GirisYap"))->with("success" , "Çıkış Yapıldı");
    }
}
