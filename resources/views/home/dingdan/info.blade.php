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
    .tables > p{font-size: 16px;float:left;height: 25px;line-height: 25px;}
    .active{background: rgba(255,155,0,0.3);}
    .cur{background: rgba(255,155,0,0.3);border:1px solid #000;}
</style>

<form action="/dingdan" method="post">
<div class="row">
    <div class="cart-title f16 tit-family pl10 mt10">收货地址</div>
    @foreach($address as $k=>$v)
    <div class="tables" aid="{{$v->id}}">
            <p style="width:100px;">{{$v->name}}</p>
            <p style="width:200px;">{{$v->phone}}</p>
            <p style="width:500px;">{{$v->pname}}{{$v->cname}}{{$v->xname}}{{$v->detail}}</p>
            <div class="clearfix"></div>
    </div>
    @endforeach
    <input type="hidden" name="addressid">
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="cart-title f16 tit-family pl10 mt10">商品清单</div>
        <div class="cart-content">
            <table width="100%" border="0">
                <tbody>
                    <tr>
                        <td width="45%" class="tr-title">商品名称</td>
                        <td width="15%" class="tr-title">金额</td>
                        <td width="12%" class="tr-title">优惠</td>
                        <td width="15%" class="tr-title">数量</td>
                    </tr>
                    @foreach($goodsData as $k=>$v)
                    <tr>
                        <td width="45%" class="tr-list">
                            <a href="">
                                <img class="pull-left" alt="" src="{{$v->pic}}"></a>
                            <div class="summary blue-font"><a href="">{{$v->title}}</a></div>
                        </td>
                        <td width="12%" class="tr-list"><b class="orange-font">￥{{$v->spxj}} </b></td>
                        <td width="11%" class="tr-list">减￥0.00</td>
                        <input type="hidden" name="data[{{$v->id}}][id]" value='{{$v->id}}'>
                        <td width="12%" class="tr-list">
                            <input type="text" style="width:20%" name="data[{{$v->id}}][num]" value="{{$v->num}}">
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-lg-12 main-show mb10">
        <div class="total tr"><b>总计（不含运费）：</b> <i class="orange-font f20 tit-family pr10">￥{{$total}}</i></div>
    </div>
    {{csrf_field()}}
    <div class="pull-right">
        <button type="submit" class="btn btn-danger btn-lg mr20">创建订单</button>
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
<script>
$('.tables').hover(function(){
    $(this).addClass('active');
},function(){
    $(this).removeClass('active');
}).click(function(){
    $('.tables').removeClass('cur');
    $(this).addClass('cur');
    //获取当前的地址id
    aid = $(this).attr('aid');
    //j将值设置到 隐藏域上
    $('input[name=addressid]').val(aid);
})
</script>
@endsection

