<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Console\Input\Input;


class UserController extends Controller
{
    //

    public function Login(Request $request)
    {
    $login =[
        'email' => $request -> input('email'),
        'password' => $request -> input('pw')
    ];
    if (Auth::attempt($login)){
        $user = Auth::user();
        Session::put('user',$user);
        echo '<script> alert("Dang Nhap THANH CONG");window.location.assign("master");</script>';
    }else{
        echo '<script> alert("Dang Nhap THAT BAI");window.location.assign("login");</script>';
    }
    }

    public function Register(Request $request)
{
    $input = $request->validate([
        'name' => 'required|string',
        'email' => 'required|email|unique:users',
        'password' => 'required',
        'c_password' => 'required|same:password'
    ]);

    $input['password'] = bcrypt($input['password']); // Mã hóa mật khẩu

    User::create($input);

    echo '
    <script>
        alert("Đăng ký thành công. Vui lòng đăng nhập");
        window.location.assign("login");
    </script>
    ';
}
    }
    



