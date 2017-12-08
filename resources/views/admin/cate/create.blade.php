@extends('admin.index')
@section('kuang')
<div class="col-md-12">
    <h1 class="page-head-line">分类管理</h1>
</div> 
<div class="panel panel-info">
<div class="panel-heading">
   BASIC FORM
</div>
<div class="panel-body">
    <form role="form" action="/cate" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>分类名称:</label>
                    <input class="form-control" type="text" name="name">                    
                </div>
                <div class="form-group">
                    <label>父级分类:</label>
                    <select class="form-control" name="pid">
                        <option value="1">顶级菜单</option>
                        @foreach($cates as $k=>$v)
                        <option value="{{$v->id}}">{{$v->name}}</option>
                        @endforeach
                    </select>                   
                </div>
          		{{csrf_field()}}
         			
                <button type="submit" class="btn btn-info" style="width:100px;">添加</button>
            </form>
    </div>
</div>              
@endsection    


