<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AdvController extends Controller
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
            $adv = DB::table('adv')->where('name','like','%'.$keywords.'%')->paginate($num);
         }else{
            $adv = DB::table('adv')->paginate($num); 
        }
        return view('admin.adv.index',[
            'adv'=>$adv,
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
        return view('admin.adv.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $adv = $request->only('title','cont');
        if($request->hasFile('tu')){
            $suffix = $request->file('tu')->extension();
            $name = uniqid('tu').'.'.$suffix;
            $dir = './uploads/'.date('Y-m-d');
            $request->file('tu')->move($dir,$name);
            $adv['tu'] = trim($dir.'/'.$name,'.');
        }
        if(DB::table('adv')->insert($adv)){
            return redirect('/adv')->with('msg','添加成功');
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
        $adv = DB::table('adv')->where('id',$id)->first();
        return view('admin.adv.edit',compact('adv'));
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
        $adv = $request->only('id','title','cont');
        if($request->hasFile('tu')){
            $suffix = $request->file('tu')->extension();
            $name = uniqid('tu').'.'.$suffix;
            $dir = './uploads/'.date('Y-m-d');
            $request->file('tu')->move($dir,$name);
            $adv['tu'] = trim($dir.'/'.$name,'.');
        }
        if(DB::table('adv')->where('id',$id)->update($adv)){
            return redirect('/adv')->with('msg','修改成功');
        }else{
            return back()->with('msg','修改失败');
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
        if($adv = DB::table('adv')->where('id',$id)->delete()){
            return back()->with('msg','删除成功');
        }else{
            return back()->with('msg','删除失败');
        }
    }
}
