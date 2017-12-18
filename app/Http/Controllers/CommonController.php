<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function message(Request $request)
    {
    	$phone = $request->input('phone');
    	$web = 'random';
    	$code = rand(100000,999999);
    	$res = file_get_contents('http://www.xiaohigh.com/message/index.php?to='.$phone.'&class=123456&web='.$web.'&code='.$code);
    	session(['vcode'=>$code]);
    	$data = json_decode($res,true);
    	// 测试
    	// $data['resp']['respCode'] = '000000';
    	// if($data['resp']['respCode'] == '000000'){
    	// 	return response()->json(['data'=>['vcode'=>$code],'ztid'=>'1','msg'=>'发送成功']);
    	// }else{
    	// 	return response()->json(['data'=>'','ztid'=>'0','msg'=>'发送失败']);
    	// }
    }
}
