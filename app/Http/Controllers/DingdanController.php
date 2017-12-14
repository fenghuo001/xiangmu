<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DingdanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    }
    public function info(Request $request)
    {
        //读取收货地址
        $address = DB::table('address')->where('userid',session('id'))->get();
        foreach ($address as $key => $value) {
            $value->pname = DB::table('areas')->where('id',$value->province)->value('area_name');
            $value->cname = DB::table('areas')->where('id',$value->city)->value('area_name');
            $value->xname = DB::table('areas')->where('id',$value->xian)->value('area_name');
        }
        // dd($request->all());

        //遍历数组
        $data = $request->data;
        $goodsData = [];
        //总价
        $total = 0;
        foreach ($data as $key => $value) {
            if(isset($value['id'])) {
                //读取商品的详细信息
                $goods = DB::table('goods')->where('id',$value['id'])->first();
                //读取商品的图片信息
                $goods->pic = DB::table('goods_img')->where('spid', $value['id'])->value('imgs');
                $goods->num = $value['num'];
                $goodsData[] = $goods;
                $total += $goods->num * $goods->spxj;
            }
        }
        // dd($goodsData);
        return view('home.dingdan.info',compact('address','goodsData','total'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function getarea(Request $request)
    {
        $pid = $request->pid;
        $province = DB::table('areas')->where('area_parent_id',$pid)->get();
        return $province->toJson();
    }
    public function rding(Request $request)
    {
        //确认订单页面
        
        // dd($request->all());
        //
        
        //
    }
}
