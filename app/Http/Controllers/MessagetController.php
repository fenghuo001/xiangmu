<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MessagetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shijian = date('Y-m-d H:i:s');
        //$message = DB::table('message')->first();
        $messaget = DB::table('messaget')->get();
        //$message[0]->date=$shijian;
        foreach($messaget as $k=>$v){
            $v->date=$shijian;
        }
     
        //dd($message);
        return view('admin.messaget.index',compact('messaget'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
       if($messaget = DB::table('messaget')->where('id',$id)->delete()){
            return back()->with('msg','删除成功');
       }else{
            return back()->with('msg','删除失败');
       }
    }
}
