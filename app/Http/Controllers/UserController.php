<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
class UserController extends Controller
{
    /**
     * 用户管理
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $num = $request->input('num',10);
       
        $keywords = $request->input('keywords');

       if($request->has('keywords')){
             $user = DB::table('user')->where('username','like','%'.$keywords.'%')->paginate($num);
         }else{
            $user = DB::table('user')->paginate($num); 
        }
        

        return view('admin.user.index',[
            'user'=>$user,
            'keywords'=>$keywords
            ]);      
    }

    /**
     * 添加用户
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = $request->only(['username','password','email']);
        $date['password'] = Hash::make($date['password']);        
        if($request->hasFile('tupian')){
            $suffix = $request->file('tupian')->extension();
            $name = uniqid('img').'.'.$suffix;
            $dir = './uploads/'.date('Y-m-d');
            $request->file('tupian')->move($dir,$name);
            $date['tupian'] = trim($dir.'/'.$name,'.');
        }
          if(DB::table('user')->insert($date)){
            return redirect('/user')->with('msg','添加成功');
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
        $user = DB::table('user')->where('id',$id)->first();

        return view('admin.user.edit',['user'=>$user]);
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
        $date = $request->only(['username','email'] );
         if($request->hasFile('tupian')){
            $suffix = $request->file('tupian')->extension();
            $name = uniqid('img').'.'.$suffix;
            $dir = './uploads/'.date('Y-m-d');
            $request->file('tupian')->move($dir,$name);
            $date['tupian'] = trim($dir.'/'.$name,'.');

            if(DB::table('user')->where('id',$id)->update($date)){
                return redirect('/user')->with('msg','添加成功');
            }else{
                return back()->with('msg','添加失败');
            }
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
        
        if(DB::table('user')->where('id',$id)->delete()){
            return back()->with('msg','删除成功');
        }else{
            return back()->with('msg','删除失败');
        }
    }
}
