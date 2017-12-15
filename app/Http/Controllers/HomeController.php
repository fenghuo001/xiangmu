<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use DB;
class HomeController extends Controller
{
    public function index()
    {
        $navs = DB::table('navs')->where(['ztid'=>1])->get();
        $cuxiao = DB::table('goods')->where(['pid_fir'=>1,'pid_sec'=>1])->get();
        $jieri = DB::table('goods')->where('pid_fir',2)->get();
        $goods = DB::table('goods')->where('pid_fir',3)->get();
        // dd($goods);die;
    	return view('home.index',compact('navs','goods','cuxiao','jieri'));
    }
    public function liebiao()
    {
        $navs = DB::table('navs')->where(['ztid'=>1])->get();
        $hot = DB::table('goods')->where(['pid_fir'=>1,'pid_sec'=>1])->get();
        $good = DB::table('goods')->where(['pid_fir'=>1])->paginate(12);
        // dd($good);
    	return view('home.liebiao.liebiao',compact('hot','good','navs'));
    }
    //登录
    public function login()
    {
    	return view('home.login.login');
    }
    public function dologin(Request $request)
    {
        $data = $request->only(['phone','password']);

        $user = DB::table('home_user')->where('phone',$data['phone'])->first();
        if(empty($user)){
            return back()->whit('msg','登陆失败');
        }
        if(Hash::check($data['password'],$user->password)){
            session(['id'=>$user->id]);
            session(['phone'=>$user->phone]);

            return redirect('/index')->with('msg','登陆成功');
        }
        return back()->with('msg','登陆失败');
    }
    //注册
    public function register()
    {
    	return view('home.register.register');
    }
    public function signup(Request $request)
    {
        $code = $request->vcode;
        if(session('vcode') != $code){
            return back()->with('msg','验证码错误');
        }

        $data = $request->only(['email','phone','password']);
        $data['password'] = Hash::make($data['password']);
        $data['name'] = $data['phone'];
        $data['file'] = '/image/u=3635635221.jpg';
        if(DB::table('home_user')->insert($data)){
            return redirect('/login')->with('msg','注册成功');
        }else{
            return back()->with('msg','注册失败');
        }
    }
}
