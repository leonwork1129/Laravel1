<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use App\Member;

class MemberController extends Controller
{
    //
    
    // public function index ()
    // {
    //     return view('Member/login');
    // }
    
    public function Login ()
    {
        return view('Member/login');
    }
    
    public function LoginCheck (Request $request)
    {
        //檢驗會員是否存在
        $memberName = $request->input('loginName');
        $password   = $request->input('loginPassword');
        $Member = Member::get()
            ->where('membername', $memberName)
            ->where('password'  , $password);
        if(count($Member) == 0) {
            return view('Member/login', ['message'=>'會員帳號或密碼輸入錯誤']);
        } else {
            // return view('welcome', ['name'=>$request]);
            Session::put('memberName', $memberName);
            // return view('Member/login', ['message'=>'會員帳號或密碼輸入正確']);
            return view('welcome', ['memberName'=>$memberName]);
        }
        // var_dump($Members);
    }
    
    public function Logout ()
    {
        Session::forget('memberName');
        return view('welcome');
    }
    
    public function register ()
    {
        return view('Member/register');
    }
}
