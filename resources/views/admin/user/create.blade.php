@extends('admin.index')
@section('kuang')
<div class="col-md-12">
    <h1 class="page-head-line">添加用户</h1>
</div> 
<div class="panel panel-info">
<div class="panel-heading">
   BASIC FORM
</div>
<div class="panel-body">
    <form role="form" action="/user" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>用户名:</label>
                    <input class="form-control" type="text" name="username">
                    
                </div>
         <div class="form-group">
                    <label>电子邮箱:</label>
                    <input class="form-control" type="text" name="email">
           
                </div>
                <div class="form-group">
                    <label>密码:</label>
                    <input class="form-control" type="password" name="password">
            
                </div>
                 <div class="form-group">
                    <label>确认密码:</label>
                    <input class="form-control" type="password" name="repassword">
            
                </div>
                    <div class="form-group">
                    <label>上传头像</label>
                    <input class="form-control" rows="3" type="file" name="tupian" style="border:0px;">
                </div>
          		{{csrf_field()}}
         			
                <button type="submit" class="btn btn-info" style="width:100px;">添加</button>
            </form>
    </div>
</div>              
@endsection    


