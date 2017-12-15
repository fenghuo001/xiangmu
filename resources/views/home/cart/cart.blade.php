@extends('layouts.home')

@section('css')
<link rel="stylesheet" href="/h_assets/css/smoothproducts.css">
@endsection

@section('title')
<title>购物车</title>
@endsection

@section('top')

@endsection

@section('section')

<!-- 购物车开始 -->
<div class="row">
<form action="/dingdan/info" method="post">
    <div class="col-lg-12">
        <div class="cart-title f16 tit-family pl10 mt10">我的购物车</div>
        <div class="cart-content">
            <table width="100%" border="0">
                <tbody>
                    <tr>
                        <td width="5%" class="tr-title">
                            <form>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" />全选</label>
                                </div>
                            </form>
                        </td>
                        <td width="52%" class="tr-title">商品名称</td>
                        <td width="12%" class="tr-title">金额</td>
                        <td width="11%" class="tr-title">优惠</td>
                        <td width="12%" class="tr-title">数量</td>
                        <td width="8%" class="tr-title">操作</td>
                    </tr>
                    @foreach($goods as $k=>$v)
                    <tr>
                        <td width="5%" class="tr-list">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="data[{{$v->id}}][id]" value="{{$v->goodsid}}" /></label>
                            </div>
                        </td>
                        <td width="52%" class="tr-list">
                            <a href=""><img class="pull-left" alt="" src="{{$v->pic}}" /></a>
                            <div class="summary blue-font"><a href="">{{$v->detail->title}}</a></div>
                        </td>
                        <td width="12%" class="tr-list"><b class="orange-font">￥{{$v->detail->spxj}} </b></td>
                        <td width="11%" class="tr-list">减￥0.00</td>
                        <td width="12%" class="tr-list">
                            <span class="ui-spinner">
                                <input type="text" name="data[{{$v->id}}][num]" value="{{$v->num}}" aria-valuenow="0" autocomplete="off">
                                <a class="ui-spinner-button ui-spinner-up" tabindex="-1"><span class="ui-icon">▲</span></a>
                                <a class="ui-spinner-button ui-spinner-down" tabindex="-1"><span class="ui-icon">▼</span></a>
                            </span>
                        </td>
                        <td width="8%" class="tr-list bule-font"><a class="btn btn-danger btn-sm del" cid="{{$v->id}}">删除</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-lg-12 main-show mb10">
        <div class="p10">
            <div class="show-left pull-left">
                <a href=""><i class="icon-main icon-fork"></i>删除选中的商品</a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    {{csrf_field()}}
    <div class="pull-right">
        <a href="/index" class="btn btn-addcart btn-lg mr20">继续购物</a>
        <button type="submit" class="btn btn-danger btn-lg mr20">创建订单</button>
    </div>
</form>
</div>
<!-- 购物车结束 -->
<!-- 购物车为空开始 -->
<!-- <div class="row">
    <div class="col-lg-12">
        <div class="cart-title f16 tit-family pl10 mt10">我的购物车</div>
        <div class="cart-content p30">
            <div class="pull-left empty-img"><img alt="" src="assets/img/empty-cart.jpg" /></div>
            <div class="pull-right empty-text tit-family">
                您的购物车中还没有商品，您现在可以<br />
                <b class="f14">马上去 <i><a href="">挑选商品</a></i>， 或者查查 <i><a href="">我的订单</a></i></b>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div> -->
<!-- 购物车为空结束 -->
        

@endsection

@section('bottom')
@endsection

@section('js')
<script type="text/javascript">
    $('.del').click(function(){
        var cid = $(this).attr('cid');
        var tr = $(this).parents('tr');

        $.ajax({
            type:'get',
            url:'/cart/delete',
            data:{'cid':cid},
            success:function(data){
                if(data == 1){
                    tr.fadeOut(300);
                }
            }
        })
    })
</script>
<script type="text/javascript" src="/h_assets/js/smoothproducts.js"></script>
@endsection

