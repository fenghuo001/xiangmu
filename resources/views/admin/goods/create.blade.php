@extends('admin.index')

@section('kuang')
<h1 class="page-head-line">商品添加</h1>
@endsection

@section('zhuti')
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/lang/zh-cn/zh-cn.js"></script>

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
                    <script id="editor" type="text/plain" name="cons" style="width:450px;height:500px;"></script>
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

<script>
    var ue = UE.getEditor('editor',{
        // toolbars: [
        //     ['fullscreen', 'source', 'undo', 'redo', 'bold']
        // ]
    });
</script>
@endsection