@extends('admin.index')
@section('kuang')  
<div class="col-md-12">
    <h1 class="page-head-line">用户管理</h1>                                    
</div>
@endsection
@section('zhuti')

<form action="/goods">
	<div class="col-sm-6 text-left" style="margin-bottom:15px; margin-left:20px;"> 
	每页显示
		<select name="num">
			<option value="10">10</option>
			<option value="25">25</option>
			<option value="50">50</option>
			<option value="100">100</option>
		</select>
	条
	</div>
	<div class="col-smm-6 text-right">
		<input type="text" name="keywords" value="{{$keywords}}">&nbsp;
		<button type="submit" style="margin-right:30px;" aria-controls="datatable-example">搜索</button>	
	</div>
</form>
<div class="col-lg-12 col-md-12 col-sm-12">
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">			
        <thead>
            <tr>
                <th><input type="checkbox" class="text-center"></th>
                <th>ID</th>
                <th>商品名称</th>
                <th>商品介绍</th>
                <th>库存</th>
                <th>原价</th>
                <th>现价</th>
                <th>图片</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>  
        @foreach($goods as $key=>$val)
            <tr>
               <th><input type="checkbox" class="text-center"></th>
               	<td>{{$val->id}}</td>
                <td>{{$val->name}}</td>
                <td style="width:210px;">{{$val->cons}}</td>
                <td>{{$val->kucun}}</td>
                <td>{{$val->yuanjia}}</td>
                <td>{{$val->xianjia}}</td>
                <td width="100"><img width="30" height="30" src="{{$val->imgs}}"></td>
                <td style="width:150px;"><a class="btn btn-info btn-sm pull-left" href="/goods/{{$val->id}}/edit">修改</a>
				<form action="/goods/{{$val->id}}" method="post" class="del">
				{{csrf_field()}}
				{{method_field('DELETE')}}
				<button class="btn btn-danger btn-sm ">删除</button>
				</form>
                </td>
            </tr>
		@endforeach  
        </tbody>
    </table>    
</div> 
</div>
<div class="col-sm-12 text-right">
	{{ $goods->links() }}
</div>                  
@endsection

@section('js')
<script>
	$('.del').submit(function(){
		var res = confirm('您确定要删除当前信息吗!!!')
		if(!res){
			return false;
		}
	})
</script>
@endsection


