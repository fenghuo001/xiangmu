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

<div class="row">
    <div class="cart-title f16 tit-family pl10 mt10">收货地址</div>
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
<div class="row">
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
                        @foreach($goodsData as $k=>$v)
                        <tr>
                            <td width="45%" class="tr-list">
                                <a href="">
                                    <img class="pull-left" alt="" src="{{$v->pic}}"></a>
                                <div class="summary blue-font"><a href="">{{$v->title}}</a></div>
                            </td>
                            <td width="7%" class="tr-list"><b>0</b></td>
                            <td width="12%" class="tr-list"><b class="orange-font">￥{{$v->spxj}} </b></td>
                            <td width="11%" class="tr-list">减￥0.00</td>
                            <td width="12%" class="tr-list">{{$v->num}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        
    </div>
    <div class="col-lg-12 main-show mb10">
        <div class="total tr"><b>总计（不含运费）：</b> <i class="orange-font f20 tit-family pr10">￥{{$total}}</i></div>
    </div>
    <div class="pull-right">
        <button type="submit" class="btn btn-danger btn-lg mr20">立即支付</button>
    </div>
</div>
<hr>	
<!-- 购物车为空结束 -->
        
@endsection

@section('bottom')
@endsection

@section('js')
<script type="text/javascript" src="/h_assets/js/smoothproducts.js"></script>
<script>
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

