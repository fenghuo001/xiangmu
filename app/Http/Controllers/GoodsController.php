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
    public function index()
    {
        $goods = DB::table('goods')->paginate(10);
        return view('/admin/goods/index',['goods'=>$goods]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/goods/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['title','spyj','spxj','spkc','cons']);

        $data['addtime'] = date('Y-m-d H:i:s');

        $id = DB::table('goods')->insertGetId($data);
        // dd($id);
        if($id > 0){
            if($request->hasFile('file')){
                $images = [];
                foreach($request->file('file') as $k=>$v){
                    $tmp = [];
                    $suffix = $v->extension();
                    $name = uniqid('sp').'.'.$suffix;
                    $dir = './uploads/'.date('Y-m-d');
                    $v->move($dir,$name);

                    $tmp['spid'] = $id;
                    $tmp['imgs'] = trim($dir.'/'.$name,'.');
                    $images[] = $tmp;
                }
                DB::table('goods_img')->insert($images);
            }
            return redirect('/goods')->with('msg','添加成功 :)');
        }else{
            return redirect('/goods')->with('msg','添加失败 :(');
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
        $navs = DB::table('navs')->where(['ztid'=>1])->get();
        $goods = DB::table('goods')->where('id',$id)->first();
        $hot = DB::table('goods')->where(['hot'=>1])->get();
        foreach ($hot as $key => $value) {
            $value->img = DB::table('goods_img')->where('spid',$value->id)->value('imgs');
        }
        // dd($hot);
        $new = DB::table('goods')->where(['new'=>1])->get();
        foreach ($new as $key => $value) {
            $value->img = DB::table('goods_img')->where('spid',$value->id)->value('imgs');
        }
        $goods_img = DB::table('goods_img')->where('spid',$id)->get();
        return view('home.xiangqing.xiangqing',compact('navs','goods','goods_img','hot','new'));
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
        //dd($request->all());
        $date = $request->except(['_token','_method']);
        // dd($date);
        if(DB::table('goods')->where('id',$id)->update($date)){
            return redirect('/goods')->with('msg','更新成功 :)');
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
        if(DB::table('goods')->where('id',$id)->delete()){
            return back()->with('msg','删除成功 :)');
        }else{
            return back()->with('msg','删除失败 :(');
        }
    }
}
