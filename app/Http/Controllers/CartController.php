<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CartController extends Controller
{
    //购物车
    public function store(Request $request)
    {
        $data = $request->except(['_token']);
        $data['addtime'] = date('Y-m-d H:i:s');
        $data['userid'] = session('id');
        $res = DB::table('carts')->insert($data);
        if($res){
        	return view('home.cart.hui');
        }else{
        	return back()->with('msg','添加失败');
        }
    }
    //订单表
    public function cart()
    {
    	$id = session('id');
    	$goods = DB::table('carts')->where('userid',$id)->get();
    	foreach ($goods as $key => $value) {
    		$value->detail = DB::table('goods')->where('id',$value->goodsid)->first();
    		$value->pic = DB::table('goods_img')->where('spid',$value->goodsid)->value('imgs');
    	}
        return view('home.cart.cart',compact('goods'));
    }
    public function delete(Request $request)
    {
    	$id = $request->input('cid');
    	$del = DB::table('carts')->where('id',$id)->delete();
    	if($del){
    		echo 1;
    	}else{
    		echo 0;
    	}
    }

    
}
