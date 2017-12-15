@extends('admin.index')
@section('kuang')
<div class="col-md-12">
    <h1 class="page-head-line">导航管理</h1>
</div> 
<div class="panel panel-info">
<div class="panel-heading">
   BASIC FORM
</div>
<div class="panel-body">
    <form role="form" action="/nav" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>导航名称:</label>
                    <input class="form-control" type="text" name="title">                    
                </div>
                <div class="form-group">
                    <label>导航链接:</label>
                    <input class="form-control" type="text" name="links">                    
                </div>
          		{{csrf_field()}}
         			
                <button type="submit" class="btn btn-info" style="width:100px;">添加</button>
            </form>
    </div>
</div>              
@endsection    


