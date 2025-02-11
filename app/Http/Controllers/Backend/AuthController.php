<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
   public function __construct(){
      
    
   }
   public function index(){
  
      return view('auth.login')->with('Error', 'Bạn cần đăng nhập để xem trang này');  
  }
   public function login(AuthRequest $request){
   $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect()->route('dashboard.index')->with('success', 'Đăng nhập thành công');
    }
    return redirect()->route('auth.admin')->with('error', 'Email hoặc mật khẩu không đúng');
    
}
public function logout(Request $request)
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect()->route('auth.admin');
}
}
