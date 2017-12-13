@extends('layouts.home')

@section('css')
<link rel="stylesheet" href="/h_assets/css/smoothproducts.css">
@endsection

@section('title')
<title>支付页面</title>
@endsection

@section('top')
@endsection

@section('fl')
@endsection

@section('section')

<style>
    .tables{padding: 10px;cursor:pointer;border-radius: 5px;}
    td{font-size: 16px;}
    .active{background: rgba(255,155,0,0.3);}
    .cur{background: rgba(255,155,0,0.3);border:1px solid #000;}
</style>

<!-- 购物车开始 -->
<div style="width:100%;height:500px;">
<div class="row col-md-8">
    <div class="cart-title f16 tit-family pl10 mt10">个人信息</div>
    @foreach($address as $k=>$v)
    <div class="tables">
        <table width="100%" border="0">
            <tr>
                <td width="15%">{{$v->name}}</td>
                <td width="30%">{{$v->phone}}</td>
                <td width="50%">{{$v->pname}}{{$v->cname}}{{$v->xname}}{{$v->detail}}</td>
                <td width="5%"><span class="btn btn-danger btn-sm">删除</span></td>
            </tr>
        </table>
    </div>
    @endforeach
</div>


<form action="/addresses" method="post">
    <div class="row col-md-3 col-md-offset-1">
        <div class="cart-title f16 tit-family pl10 mt10">添加新地址</div>
        @if(session('msg'))
        <div class="alert alert-warning alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{session('msg')}}
        </div>
        @endif
        <div class="col-md-12">
            <div class="form-group">
                <label for="name" class="control-label">姓名</label>
                <div class="">
                    <input type="text" class="form-control" id="name" name="name" placeholder="姓名">
                </div>
            </div>
            <div class="form-group">
                <label for="mobile" class="control-label">联系电话</label>
                <div class="">
                    <input type="text" class="form-control" id="mobile" name="phone" placeholder="联系电话">
                </div>
            </div>
            <div class="form-group">
                <label for="address" class="control-label">地址</label>
                <div class="cleckfix"></div>
                <div class='col-md-4'>
                    <select name="province" id="" class="form-control ">
                        <option value="">请选择</option>
                    </select>
                </div>
                <div class='col-md-4'>
                    <select name="city" id="" class="form-control ">
                        <option value="">请选择</option>
                    </select>
                </div>
                <div class='col-md-4'>
                    <select name="xian" id="" class="form-control ">
                        <option value="">请选择</option>
                    </select>
                </div>
            </div>
            <div class="form-group" style="margin-top:20px;">
                <label for="mobile" class="control-label">详细地址</label>
                <div class="">
                    <input type="text" class="form-control" id="mobile" name="detail" placeholder="详细地址">
                </div>
            </div>
            {{csrf_field()}}
            <button type="submit" class="btn btn-danger btn-lg mr20 col-md-12">立即添加</button>
        </div>
    </div>
</form>
</div>      
@endsection

@section('bottom')
@endsection

@section('js')
<script type="text/javascript" src="/h_assets/js/smoothproducts.js"></script>
<script type="text/javascript">
function init(){
    $.ajax({
        type:'get',
        url:'/getarea',
        dataType:'json',
        data:{pid:0},
        success:function(data){
            for (var i = 0; i < data.length; i++) {
                var option = $('<option value="'+data[i].id+'">'+data[i].area_name+'</option>')
                $('select[name=province]').append(option);
            };
        }
    })
}
init();

$('select[name=province]').change(function(){
    $('select[name=city]').html('<option value="">请选择</option>')
    //获取当前省的id
    var id = $(this).val();
    //发送ajax获取当前省所对应的市的信息
    $.ajax({
        type:'get',
        url: '/getarea',
        dataType:'json',
        data: {pid:id},
        success: function(data){
            for(var i=0;i<data.length;i++){
                var option = $('<option value="'+data[i].id+'">'+data[i].area_name+'</option>')
                //将option插入到省的select中
                $('select[name=city]').append(option);
            }
        }
    })
});

$('select[name=city]').change(function(){
    $('select[name=xian]').html('<option value="">请选择</option>')
    //获取当前省的id
    var id = $(this).val();
    //发送ajax获取当前省所对应的市的信息
    $.ajax({
        type:'get',
        url: '/getarea',
        dataType:'json',
        data: {pid:id},
        success: function(data){
            for(var i=0;i<data.length;i++){
                var option = $('<option value="'+data[i].id+'">'+data[i].area_name+'</option>')
                //将option插入到省的select中
                $('select[name=xian]').append(option);
            }
        }
    })
});

$('.tables').hover(function(){
    $(this).addClass('active');
},function(){
    $(this).removeClass('active');
}).click(function(){
    $('.tables').removeClass('cur');
    $(this).addClass('cur');
})
</script>
@endsection

