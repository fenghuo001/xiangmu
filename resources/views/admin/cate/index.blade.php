@extends('admin.index')
@section('kuang')  
<div class="col-md-12">
    <h1 class="page-head-line">用户管理</h1>                                    
</div>
@endsection
@section('zhuti')

<form action="/cates">
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
		<input type="text">&nbsp;
		<button type="submit" style="margin-right:30px;" aria-controls="datatable-example">搜索</button>	
	</div>
</form>
<div class="col-lg-12 col-md-12 col-sm-12">
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">			
        <thead>
            <tr>
                <th><input type="checkbox" class="text-center" id="dianji"></th>
                <th>ID</th>
                <th>商品名称</th>
                <th>商品介绍</th>
               
            </tr>
        </thead>
        <tbody>  
        @foreach($cates as $key=>$val)
            <tr>
               <th><input type="checkbox" class="text-center sjs"></th>
               	<td>{{$val->id}}</td>
                <td>{{$val->name}}</td>
                
                <td style="width:150px;"><a class="btn btn-info btn-sm pull-left" href="/cate/{{$val->id}}/edit">修改</a>
				<form action="/cate/{{$val->id}}" method="post" class="del">
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
              
@endsection

@section('js')
<script>
	$('.del').submit(function(){
		var res = confirm('您确定要删除当前分类吗!!!')
		if(!res){
			return false;
		}
	})


//全选
////////////
</script>

@endsection


