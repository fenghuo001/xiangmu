<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        $num = $request->input('num',10);
       
        $keywords = $request->input('keywords');

       if($request->has('keywords')){
             $goods = DB::table('goods')->where('name','like','%'.$keywords.'%')->paginate($num);
         }else{
            $goods = DB::table('goods')->paginate($num); 
        }
        

        return view('admin.goods.index',[
            'goods'=>$goods,
            'keywords'=>$keywords
            ]);      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.goods.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = $request->except('_token');
        //$date = $request->all();
       // dd($date);die;
        if($request->hasFile('imgs')){
            $suffix = $request->file('imgs')->extension();
            $name = uniqid('img').'.'.$suffix;
            $dir = './uploads/'.date('Y-m-d');
            $request->file('imgs')->move($dir,$name);
            $date['imgs'] = trim($dir.'/'.$name,'.');
        }

          if(DB::table('goods')->insert($date)){
            return redirect('/goods')->with('msg','添加成功');
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
        $goods = DB::table('goods')->where('id',$id)->first();
        return view('admin.goods.edit',['goods'=>$goods]);
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
        $date = $request->except(['_token','_method']);

        if($request->hasFile('imgs')){
            $suffix = $request->file('imgs')->extension();
            $name = uniqid('img').'.'.$suffix;
            $dir = './uploads/'.date('Y-m-d');
            $request->file('imgs')->move($dir,$name);
            $date['imgs'] = trim($dir.'/'.$name,'.');
        }

          if(DB::table('goods')->where('id',$id)->update($date)){
            return redirect('/goods')->with('msg','更新成功');
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
        if($date = DB::table('goods')->where('id',$id)->delete()){
            return back()->with('msg','删除成功');
        }else{
            return back()->with('msg','删除失败');
        }
    }
}
