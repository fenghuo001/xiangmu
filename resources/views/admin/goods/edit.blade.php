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
    <form role="form" action="/goods/{{$goods->id}}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>商品名称:</label>
                    <input class="form-control" type="text" name="name" value="{{$goods->name}}">                    
                </div>
                <div class="form-group">
                    <label>商品介绍:</label>
                    <input class="form-control" type="text" name="cons" value="{{$goods->cons}}">           
                </div>    
                <div class="form-group">
                    <label>库存:</label>
                    <input class="form-control" type="text" name="kucun" value="{{$goods->kucun}}">           
                </div>        
                <div class="form-group">
                    <label>原价:</label>
                    <input class="form-control" type="text" name="yuanjia" value="{{$goods->yuanjia}}">           
                </div>     
                <div class="form-group">
                    <label>现价:</label>
                    <input class="form-control" type="text" name="xianjia" value="{{$goods->xianjia}}">           
                </div>           
                <div class="form-group">
                    <img src="{{$goods->imgs}}" alt="" width="" width="200" height="250">
                    <label>上传头像</label>
                    <input class="form-control" rows="3" type="file" name="imgs" style="border:0px;" >
                </div>
          		{{csrf_field()}} 
                {{method_field('PUT')}}        			
                <button type="submit" class="btn btn-info" style="width:100px;">更改</button>
                <button type="reset" class="btn btn-info" style="width:100px;">重置</button>
            </form>
    </div>
</div>              
@endsection    


