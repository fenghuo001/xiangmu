@extends('admin.index')

@section('kuang')
<h1 class="page-head-line">商品修改</h1>
@endsection

@section('zhuti')
<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
	<div class="panel panel-danger">
		<div class="panel-heading">
		   EDIT GOODS
		</div>
		<div class="panel-body">
		    <form role="form" action="/goods/{{$goods->id}}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>商品名称</label>
                    <input class="form-control" type="text" name="title" value="{{$goods->title}}">
                </div>
                <div class="form-group">
                    <label>商品介绍</label>
                    <textarea name="cons" cols="52" rows="3">{{$goods->cons}}</textarea>
                </div>
		        <div class="form-group">
                    <label>商品原价</label>
                    <input class="form-control" type="text" name="spyj" value="{{$goods->spyj}}">
                </div>
		        <div class="form-group">
                    <label>商品现价</label>
                    <input class="form-control" type="text" name="spxj" value="{{$goods->spxj}}">
                </div>
                <div class="form-group">
                    <label>商品库存</label>
                    <input class="form-control" type="text" name="spkc" value="{{$goods->spkc}}">
                </div>
                {{csrf_field()}}
                {{method_field('PUT')}}
		        <button type="submit" class="btn btn-success btn-md col-md-offset-4">提交</button>
		        <button type="reset" class="btn btn-danger">还原</button>
		    </form>
		</div>
	</div>
</div>
@endsection