@extends('admin.index')

@section('kuang')
<h1 class="page-head-line">商品添加</h1>
@endsection

@section('zhuti')
<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
	<div class="panel panel-danger">
		<div class="panel-heading">
		   ADD GOODS
		</div>
		<div class="panel-body">
		    <form role="form" action="/goods" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>商品名称</label>
                    <input class="form-control" type="text" name="title">
                </div>
		        <div class="form-group">
                    <label>商品原价</label>
                    <input class="form-control" type="text" name="spyj">
                </div>
		        <div class="form-group">
                    <label>商品现价</label>
                    <input class="form-control" type="text" name="spxj">
                </div>
                <div class="form-group">
                    <label>商品库存</label>
                    <input class="form-control" type="text" name="spkc">
                </div>
                <div class="form-group">
                    <label>商品详情</label>
                    <textarea name="cons" cols="52" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label>商品图片</label>
                    <input class="form-control" type="file" name="file[]" multiple>
                </div>
                {{csrf_field()}}
		        <button type="submit" class="btn btn-success btn-md col-md-offset-4">添加</button>
		        <button type="reset" class="btn btn-danger">重置</button>
		    </form>
		</div>
	</div>
</div>
@endsection