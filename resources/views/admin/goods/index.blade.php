@extends('admin.index')

@section('kuang')
<h1 class="page-head-line">商品列表</h1>
@endsection

@section('zhuti')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
       	<div class="table-responsive">
            <table class="table table-striped table-bordered table-hover text-center">
	            <thead>
	                <tr>
	                    <th class="text-center col-md-1">编号</th>
	                    <th class="text-center col-md-2">商品名称</th>
	                    <th class="text-center col-md-2">商品介绍</th>
	                    <th class="text-center col-md-1">原价</th>
	                    <th class="text-center col-md-1">现价</th>
	                    <th class="text-center col-md-1">库存</th>
	                    <th class="text-center col-md-1">状态</th>
	                    <th class="text-center col-md-2">操作</th>
	                </tr>
	            </thead>
	            <tbody>
	            	@if(count($goods) > 0)
	            	@foreach($goods as $k => $v)
	                <tr>
	                    <td>{{$v->id}}</td>
	                    <td>{{$v->title}}</td>
	                    <td>{{$v->cons}}</td>
	                    <td>{{$v->spyj}}</td>
	                    <td>{{$v->spxj}}</td>
	                    <td>{{$v->spkc}}</td>
	                    <td>{{$v->ztid}}</td>
	                    <td><a href="/goods/{{$v->id}}/edit" style="margin-left:20px;" class="btn btn-info btn-sm pull-left">修改</a>
	                    <form action="/goods/{{$v->id}}" class="del" method="post">
	                    	{{method_field('DELETE')}}
	                    	{{csrf_field()}}
	                    	<button class="btn btn-danger btn-sm">删除</button></td>	          	
	                    </form>
	                </tr>
	                @endforeach
	                @else
	                <tr><td colspan="6" class="text-center">暂无数据</td></tr>
	                @endif
	            </tbody>
            </table>
        </div>
        <div class="pull-right">
        		{{ $goods->links() }}
        </div>
        
    </div>
</div>
@endsection

@section('js')
<script>
	$('.del').submit(function(){
		var res = confirm("确定删除该用户吗?");
    	if(!res){
    		return false;
    	}
	});
	
</script>
@stop