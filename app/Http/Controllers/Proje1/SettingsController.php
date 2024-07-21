<?php

namespace App\Http\Controllers\Proje1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class SettingsController extends Controller
{
    public function edit()
    {
        $userEdit = Auth::user()->id;
        return view("proje1.settings.edit",);
    }

    
    public function update(Request $request)
    {

        $id = Auth::user()->id;
        
        $request->validate([
            "adsoyad" => "required",
            "email" => "required|email|max:2048"
        ]);

        if($request->hasFile("dosya")):
            $request->validate([
                "dosya" => "image|mimes:png,jpg,jpeg|max:2048"
            ]);

            $file_name = uniqid() . "." . $request->dosya->getClientOriginalExtension();
            $request->dosya->move(public_path("/images/settings") , $file_name);
        else:
            $file_name = null;
        endif;

        if(strlen($request->sifre) > 0):
            $request->validate([
                "sifre" => "required|min:8"
            ]);

            $userUpdate =  User::where("id" , $id)->update([
                "name" => $request->adsoyad,
                "user_file" => $file_name,
                "email" => $request->email,
                "password" => Hash::make($request->sifre),
                
            ]);

        else:
            $userUpdate =  User::where("id" , $id)->update([
                "name" => $request->adsoyad,
                "user_file" => $file_name,
                "email" => $request->email,
            ]);
        endif;

        if($userUpdate):
            return redirect(route("LoginIndex"))->with("success" , "Düzenleme İşlemi Başarılı");
        else:
            return back()->with("error" , "Düzenleme İşlemi Başarısız");
        
        endif;      
    }

}
