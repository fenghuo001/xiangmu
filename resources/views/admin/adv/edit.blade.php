@extends('admin.index')
@section('kuang')
<div class="col-md-12">
    <h1 class="page-head-line">修改广告</h1>
</div> 
<div class="panel panel-info">
<div class="panel-heading">
   BASIC FORM
</div>
<div class="panel-body">
    <form role="form" action="/adv/{{$adv->id}}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>广告标题:</label>
                    <input class="form-control" type="text" name="title" value="{{$adv->title}}">                    
                </div>
                <div class="form-group">
                    <label>广告内容:</label>
                    <input class="form-control" type="text" name="cont" value="{{$adv->cont}}">                 
                </div>
                <div class="form-group">
                    <label>广告图片:</label>
                    <img src="{{$adv->tu}}" alt="" width="200">
                    <input class="form-control" type="file" name="tu" style="border:0px;">                 
                </div>
          		{{csrf_field()}}
         		{{method_field('PUT')}}
                <button type="submit" class="btn btn-info" style="width:100px; margin-top:20px;">修改</button>
            </form>
    </div>
</div>              
@endsection    


