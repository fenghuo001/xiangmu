<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {        
        $cates = DB::select("select id,name,pid,concat(path,'_',id) as path from cates order by path");       
        foreach ($cates as $key=>&$val){
            $count = count(explode('_',$val->path))-2;
            $val->name = str_repeat('|----', $count).$val->name;
        }

        
        return view('admin.cate.index',compact('cates',));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function create()
    {
        $cates = DB::table('cates')->get();
        return view('admin.cate.create',['cates'=>$cates]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data  = $request->except(['_token'] );
      
        if (DB::table('cates')->insert($data)) {
            return redirect('/cate')->with('msg','添加成功');
        }else{
            return back()->with('msg','添加失败');
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
        $cates = DB::table('cates')->where('id',$id)->first();
        return view('admin.cate.edit',['cates'=>$cates]);
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
        $data = $request->except(['_token','_method']);
        if(DB::table('cates')->where('id',$id)->update($data)){
            return redirect('/cate')->with('msg','更新成功');
          }else{
            return back()->with('msg','更新失败');
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
        $cate = DB::table('cates')->where('id',$id)->first();
        $path = $cate->path.'_'.$cate->id;
        $res = DB::table('cates')-where('path','like',path.'%')->delete();

        if($data = DB::table('cates')->where('id',$id)->delete()){
            return back()->with('msg','删除成功');
        }else{
            return back()->with('msg','删除失败');
        }

    }
    public function xunhuan()
    {

    }
}
 