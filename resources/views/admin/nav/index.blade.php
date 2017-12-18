@extends('admin.index')
@section('kuang')  
<div class="col-md-12">
    <h1 class="page-head-line">导航管理</h1>                                    
</div>
@endsection
@section('zhuti')

<div class="col-lg-12 col-md-12 col-sm-12">
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">			
        <thead>
            <tr>
                <th>ID</th>
                <th>导航名称</th>
                <th>导航链接</th>
                <th>添加时间</th>
                <th>状态</th>
                <th>操作</th>
               
            </tr>
        </thead>
        <tbody>
        	@foreach($navs as $k=>$v)
            <tr>
               	<td>{{$v->id}}</td>
                <td>{{$v->title}}</td>
                <td>{{$v->links}}</td>
                <td>{{$v->addtime}}</td>
                <td>
                    @if($v->ztid == 1)已运行
                    @elseif($v->ztid == 0)未运行
                    @endif
                </td>
                
                <td style="width:150px;"><a class="btn btn-info btn-sm pull-left" href="/nav/{{$v->id}}/edit">修改</a>
				<form action="/nav/{{$v->id}}" method="post" class="del">
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
		var res = confirm('您确定要删除当前导航吗!!!')
		if(!res){
			return false;
		}
	})
</script>

@endsection


