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
        $wen = DB::table('cates')->where('pid',0)->get();
        foreach($wen as $k=>$c){
            $c->lian = DB::table('cates')->where('pid',$c->id)->get();
              foreach($c->lian as $k=>$v){
                 $v->ccc =DB::table('cates')->where('pid',$v->id)->get();
                 }
        }
    	return view('home.index',compact('info','navs','goods','cuxiao','jieri','wen'));
    }
    public function liebiao()
    {
        $navs = DB::table('navs')->where(['ztid'=>1])->get();
        $hot = DB::table('goods')->where(['pid_fir'=>1,'pid_sec'=>1])->get();
        $good = DB::table('goods')->where(['ztid'=>1])->paginate(12);
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
            return redirect('/login')->with('msg','注册成功,请登录');
        }else{
            return back()->with('msg','注册失败');
        }
    }
}
