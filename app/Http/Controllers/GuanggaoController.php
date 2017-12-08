<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class GuanggaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guanggao = DB::table('guanggao')->paginate(10);
        return view('/admin/guanggao/index',['guanggao'=>$guanggao]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/guanggao/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['title']);
        if($request->hasFile('file')){
            $suffix = $request->file('file')->extension();
            $name = uniqid('gg').'.'.$suffix;
            $dir = './uploads/'.date('Y-m-d');
            $request->file('file')->move($dir,$name);
            $data['file'] = trim($dir.'/'.$name,'.');
        }

        if(DB::table('guanggao')->insert($data)){
            return redirect('/guanggao')->with('msg','添加成功 :)');
        }else{
            return back()->with('msg','添加失败 :(');
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
        $guanggao = DB::table('guanggao')->where('id',$id)->first();
        return view('admin.guanggao.edit',['guanggao'=>$guanggao]);
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
        $date = $request->only(['title']);
        if($request->hasFile('file')){
            $suffix = $request->file('file')->extension();
            $name = uniqid('img').'.'.$suffix;
            $dir = './uploads/'.date('Y-m-d');
            $request->file('file')->move($dir,$name);
            $date['file'] = trim($dir.'/'.$name,'.');
        }

        if(DB::table('guanggao')->where('id',$id)->update($date)){
            return redirect('/guanggao')->with('msg','更新成功 :)');
        }else{
            return back()->with('msg','更新失败 :(');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(DB::table('guanggao')->where('id',$id)->delete()){
            return back()->with('msg','删除成功 :)');
        }else{
            return back()->with('msg','删除失败 :(');
        }
    }
}
