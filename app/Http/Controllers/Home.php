<?php

namespace App\Http\Controllers;
use App\Models\Register;
use Illuminate\Http\Request;
use App\Models\Topluluk;
use App\Models\Ozelmesaj;
class Home extends Controller
{
    public function login(){
      return view('login');
    }
    public function kayıt(){
      return view('register');
    }
    public function kayıtolregister(Request $request){
   if ($request->email != $request->email2 ) {
     return redirect()->route('kayıt')->with('Emailhata','Email adresleri uyumlu Değil Lütfen ikisini Doğru Yazınız');
   }
   elseif($request->pass != $request->pass2){
return redirect()->route('kayıt')->with('Şifrehata','Şifreler uyumlu Değil Lütfen ikisini Doğru Yazınız');
   }
   else{

     $kayıtvar = Register::where("eposta",$request->email)->get();
     $kayıtvar2 = Register::where("username",$request->username)->get();

     if (count($kayıtvar)>0) {
        return redirect()->route('kayıt')->with("Kullanıcıvar"," Böyle Email Var Lütfen Başka Emaille Kayıt Olunuz");
     }
     elseif(count($kayıtvar2)){
       return redirect()->route('kayıt')->with("usernamevar","Böyle isim  Var Lütfen Başka isim ile Kayıt Olunuz");
     }
     else{
       $request->validate([
      "username" => "required",
      "email" => "required|email:rfc,dns",
      "pass" => "required",
       ]);
       Register::create([
        "username" => $request->username,
        "eposta" => $request->email,
        "password" => $request->pass,
       ]);
return redirect()->route('kayıt')->with("Basarili","Başarılı Bir Şekilde Kayıt Olundu Lütfen Giriş Yapınız");
     }




   }


    }
public function logincontrol(Request $request){
$control = Register::where("eposta",$request->email)->where("password",$request->pass)->get();

if (count($control)>0) {
      $request->session()->put('email',$control[0]->eposta);
      $request->session()->put('password',$control[0]->password);
      $request->session()->put('İsim',$control[0]->username);

        return redirect()->route('yonetim');
}
else{
  return redirect()->route('login')->with('Hata',"Böyle Kullanıcı Yok Lütfen Doğru Yazınız Hesabınız yoksa Kayıt olunuz");
}


}
public function yonetim(Request $request){
  if ($request->session()->get('email') == "") {
    return redirect()->route('login')->with('giris',"Lütfen Giriş Yapınız");
  }
  else{
    $isim = $request->session()->get('İsim');
    $capsule = array(
      'isim' => $isim,
    );
  $musteriler =   Topluluk::all();
  $musteriler2 = Register::orderBy('id','DESC')->paginate(5);
      return view('yonetim',compact('musteriler'),compact('musteriler2'))->with($capsule);
  }

}
public function cikisyap(Request $request){
$request->session()->forget('email');
$request->session()->forget('password');
$request->session()->forget('İsim');

return redirect('/');
}
public function profilduzenle(Request $request){
  if ($request->session()->get('email') == "") {
  return redirect()->route('login')->with('giris',"Lütfen Giriş Yapınız");
  }
  else{
  $username =   $request->session()->get('İsim');
  $email =   $request->session()->get('email');
  $compact = array(
  'username' => $username,
  'email' => $email,

);
    return view('profil-duzenle')->with($compact);
  }

}
public function isimgüncelle(Request $request){
if ($request->session()->get('email') == "") {
    return redirect()->route('login')->with('giris',"Lütfen Giriş Yapınız");
}
else{
  $request->validate([
 "username" => "required",

  ]);
    $username = Register::where("username",$request->username)->get();

    if (count($username)>0) {
      return redirect()->route('profilduzenle')->with('usernamehata',"Böyle Kullanıcı Var Lütfen Hataları Düzeltiniz");
    }
    else{
      Register::where('username',$request->session()->get('İsim'))->update([
        "username" => $request->username,
      ]);
      return redirect()->route('profilduzenle')->with('Update',"Başarılı Bir Şekilde Update edildi Lütfen Tekrardan Giriş Sağlayınız");
    }
}


}
public function emailguncelle(Request $request){
  if ($request->session()->get('email') == "") {
      return redirect()->route('login')->with('giris',"Lütfen Giriş Yapınız");
  }
  else{
    if ($request->email != $request->email2) {
      return redirect()->route('profilduzenle')->with('Hataesit',"Email adresleri uyumlu değil lütfen doğru yazınız!");
    }
    else{
      $username = Register::where("eposta",$request->email)->get();

      if (count($username)>0) {
        return redirect()->route('profilduzenle')->with('usernamehata',"Böyle Email Var Lütfen Hataları Düzeltiniz");
      }
      else{
        Register::where('eposta',$request->session()->get('email'))->update([
          "eposta" => $request->email,
        ]);
        return redirect()->route('profilduzenle')->with('Update',"Başarılı Bir Şekilde Update edildi Lütfen Tekrardan Giriş Sağlayınız");
      }

    }

}


}
public function sifreguncelle(Request $request){
  if ($request->session()->get('email') == "") {
      return redirect()->route('login')->with('giris',"Lütfen Giriş Yapınız");
  }
  else{
    if ($request->password != $request->password2) {
      return redirect()->route('profilduzenle')->with('passwordhata',"Şifreler aynı Değil  lütfen doğru yazınız!");
    }
    else{

        Register::where('password',$request->session()->get('password'))->update([
          "password" => $request->password,
        ]);
        return redirect()->route('profilduzenle')->with('Update',"Başarılı Bir Şekilde Update edildi Lütfen Tekrardan Giriş Sağlayınız");


    }

}


}

public function kullanicilar(Request $request){
  if ($request->session()->get('email') == "") {
    return redirect()->route('login')->with('giris',"Lütfen Giriş Yapınız");
  }
  else{
    $register =   Register::orderBy('id','DESC')->paginate(5);
      return view('kullanıcılar',compact('register'));
  }

}
public function mesajgonder(Request $request){
  if ($request->session()->get('email') == "") {
    return redirect()->route('login')->with('giris',"Lütfen Giriş Yapınız");
  }
  else{

    $request->validate([
      "mesajyaz" => "required",
    ]);
           Topluluk::create([
               "kimden" =>  $request->session()->get('İsim'),
               "gelenmesajlar" => $request->mesajyaz,
           ]);

           return redirect()->route('yonetim');
  }
}
public function ozelmesaj(Request $request){
if ($request->session()->get('email') == "") {
     return redirect('/');
}
else{

   return view('ozelmesaj');
}

}
public function ozelmesajgonder(Request $request){
  if ($request->session()->get('email') == "") {
      return redirect()->route('login')->with('giris',"Lütfen Giriş Yapınız");
  }
  else{
       $control = Register::where("username",$request->alıcı)->get();
       if (count($control)>0) {
         $request->validate([
           'alıcı' => 'required',
           'baslik' =>'required',
           'mesaj' => 'required',
         ]);
               Ozelmesaj::create([
                  "gönderen" => $request->session()->get('İsim'),
                  "alıcı" => $request->alıcı,
                  "baslik" => $request->baslik,
                  "mesaj" => $request->mesaj,

               ]);

               return redirect()->route('ozelmesaj')->with('Başarılı',"Mesajınız Başarılı Bir Şekilde İletilmiştir");
       }
       else{
         return redirect()->route('ozelmesaj')->with('userserror',"Böyle Kullanıcı yoktur .Lütfen Alıcıyı Doğru Yazınız");
       }
  }
}
public function ozelmesajkullanici(Request $request,$id){
  if ($request->session()->get('email') == "") {
  return redirect()->route('login')->with('giris',"Lütfen Giriş Yapınız");
  }
  else{
    $kullanıcı =     Register::where("id",$id)->first();

  return view('kullaniciicerigi',compact('kullanıcı'));
  }
}

public function kullanicigonder(Request $request){
  if ($request->session()->get('email') == "") {
      return redirect()->route('login')->with('giris',"Lütfen Giriş Yapınız");
  }
  else{
       $control = Register::where("username",$request->alıcı)->get();
       if (count($control)>0) {
         $request->validate([
           'alıcı' => 'required',
           'baslik' =>'required',
           'mesaj' => 'required',
         ]);
               Ozelmesaj::create([
                  "gönderen" => $request->session()->get('İsim'),
                  "alıcı" => $request->alıcı,
                  "baslik" => $request->baslik,
                  "mesaj" => $request->mesaj,

               ]);

               return redirect()->route('kullanicilar')->with('Başarılı',"Mesajınız Başarılı Bir Şekilde İletilmiştir");
       }
       else{
         return redirect()->route('kullanicilar')->with('userserror',"Böyle Kullanıcı yoktur .Lütfen Alıcıyı Doğru Yazınız");
       }
  }
}
public function gelenmesajlar(Request $request){
  if ($request->session()->get('email') == "") {
     return redirect()->route('login')->with('giris',"Lütfen Giriş Yapınız");
  }
  else{
  $musteri =   Ozelmesaj::orderBy("id","desc")->where("alıcı",$request->session()->get('İsim'))->paginate(5);

    return view('gelenmesajlar',compact('musteri'));
  }
}
public function ozelmesajdetail(Request $request,$id){
  if ($request->session()->get('email') == "") {
    return redirect()->route('login')->with('giris',"Lütfen Giriş Yapınız");
  }
  else{
      $musteri = Ozelmesaj::where("id",$id)->first();

      return view('ozelmesajdetail',compact('musteri'));
  }
}
public function search(Request $request){
  if ($request->session()->get('email') == "") {
  return redirect()->route('login')->with('giris',"Lütfen Giriş Yapınız");
  }
  else{
      $register = Register::where('username','LIKE','%'.$request->search.'%')->paginate(5);

      return view('searchkullanicilar',compact('register'));
  }
}




}
