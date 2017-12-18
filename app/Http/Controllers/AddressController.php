<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //读取收货地址
        $address = DB::table('address')->where('userid',session('id'))->get();
        foreach ($address as $key => $value) {
            $value->pname = DB::table('areas')->where('id',$value->province)->value('area_name');
            $value->cname = DB::table('areas')->where('id',$value->city)->value('area_name');
            $value->xname = DB::table('areas')->where('id',$value->xian)->value('area_name');
        }
        return view('home.address.index', compact('address'));
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
    public function addresses(Request $request)
    {
        //address表插入信息
        
        $data = $request->except(['_token']);
        $data['userid'] = session('id');
        $address = DB::table('address')->insert($data);
        // dd($address);
        if($address){
            return back()->with('msg','添加成功了耶!!');
        }else{
            return back()->with('msg','添加失败了呢!!');
        }

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
        $data = DB::table('address')->where('id',$id)->delete();
        if($data){
            return back()->with('msg','删除成功');
        }else{
            return back()->with('msg','删除失败');
        }
    }

    public function getarea(Request $request)
    {
        $pid = $request->pid;
        $province = DB::table('areas')->where('area_parent_id',$pid)->get();
        return $province->toJson();
    }
}
