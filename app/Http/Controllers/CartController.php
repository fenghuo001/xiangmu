<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CartController extends Controller
{
    //购物车
    public function store(Request $request)
    {
        $data = $request->only('num','goodsid');
        $data['addtime'] = date('Y-m-d H:i:s');
        $data['userid'] = session('id');
        $res = DB::table('carts')->insert($data);
        if($res){
        	return view('home.cart.hui');
        }else{
        	return back()->whit('msg','添加失败');
        }
    }
    public function cart()
    {
    	$id = session('id');
    	$goods = DB::table('carts')->where('userid',$id)->get();
    	foreach ($goods as $key => $value) {
    		$value->detail = DB::table('goods')->where('id',$value->goodsid)->first();
    		$value->pic = DB::table('goods_img')->where('spid',$value->goodsid)->value('imgs');
    	}
    	// dd($goods);
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
    public function confirm()
    {
    	return view('home.cart.confirm');
    }

    public function getarea(Request $request)
    {
        $pid = $request->pid;
        $province = DB::table('areas')->where('area_parent_id',$pid)->get();
        return $province->toJson();
    }
    public function postconfirm(Request $request)
    {
        $data = $request->except(['_token']);
        $data['userid'] = session('id');
        $address = DB::table('address')->insert($data);
        
    }
}
