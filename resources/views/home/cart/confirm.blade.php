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


<!-- 购物车开始 -->
<form action="/confirm" method="post">
    <div class="row col-md-6">
        <div class="cart-title f16 tit-family pl10 mt10">收货人信息</div>
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
		</div>
    </div>
    <div class="row" style="margin-top:80px;">
        <div class="col-lg-12">
            <div class="cart-title f16 tit-family pl10 mt10">商品清单</div>
            <div class="cart-content">
                <table width="100%" border="0">
                    <tbody>
                        <tr>
                            <td width="45%" class="tr-title">商品名称</td>
                            <td width="7%" class="tr-title">积分</td>
                            <td width="12%" class="tr-title">金额</td>
                            <td width="11%" class="tr-title">优惠</td>
                            <td width="12%" class="tr-title">数量</td>
                        </tr>
                        <tr>
                            <td width="45%" class="tr-list">
                                <a href="">
                                    <img class="pull-left" alt="" src="assets/img/advertise/ad-1.jpg"></a>
                                <div class="summary blue-font"><a href="">Maybelline 美宝莲 矿物水漾亲肤散粉 5.5g</a></div>
                            </td>
                            <td width="7%" class="tr-list"><b>0</b></td>
                            <td width="12%" class="tr-list"><b class="orange-font">￥153.00 </b></td>
                            <td width="11%" class="tr-list">减￥0.00</td>
                            <td width="12%" class="tr-list">1</td>
                        </tr>
                        <tr>
                        <tr>
                            <td width="45%" class="tr-list">
                                <a href="">
                                    <img class="pull-left" alt="" src="assets/img/advertise/ad-1.jpg"></a>
                                <div class="summary blue-font"><a href="">Maybelline 美宝莲 矿物水漾亲肤散粉 5.5g</a></div>
                            </td>
                            <td width="7%" class="tr-list"><b>0</b></td>
                            <td width="12%" class="tr-list"><b class="orange-font">￥153.00 </b></td>
                            <td width="11%" class="tr-list">减￥0.00</td>
                            <td width="12%" class="tr-list">1</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-lg-12 main-show mb10">
            <div class="p10">
                
                <div class="show-right pull-right tr">
                    <div class=""><b class="orange-font">2</b> 件商品 总计：￥1398.00</div>
                    <div class="">返现：-￥0.00</div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="total tr"><b>总计（不含运费）：</b> <i class="orange-font f20 tit-family pr10">￥1398.00</i></div>
        </div>
        {{csrf_field()}}
        <div class="pull-right">
            <button type="submit" class="btn btn-danger btn-lg mr20">立即支付</button>
        </div>
    </div>
</form>
<hr>	
<!-- 购物车为空结束 -->
        
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
</script>
@endsection

