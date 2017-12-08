@extends('admin.index')
@section('kuang')
<div class="col-md-12">
    <h1 class="page-head-line">修改用户</h1>
</div>    
<div class="panel panel-info">
<div class="panel-heading">
   BASIC FORM
</div>

<div class="panel-body">
    <form role="form" action="/user/{{$user->id}}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>用户名:</label>
                    <input class="form-control" type="text" name="username" value="{{$user->username}}">                    
                </div>
         <div class="form-group">
                    <label>电子邮箱:</label>
                    <input class="form-control" type="text" name="email" value="{{$user->email}}">           
                </div>               
                    <div class="form-group">
                    <img src="{{$user->tupian}}" alt="" width="" width="200" height="250">
                    <label>上传头像</label>
                    <input class="form-control" rows="3" type="file" name="tupian" style="border:0px;" >
                </div>
          		{{csrf_field()}} 
                {{method_field('PUT')}}        			
                <button type="submit" class="btn btn-info" style="width:100px;">更改</button>
                <button type="reset" class="btn btn-info" style="width:100px;">重置</button>
            </form>
    </div>
</div>              
@endsection    


