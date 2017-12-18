@extends('layouts.home')

@section('title')
<title>列表页</title>
@stop

@section('daohang')
    @foreach($navs as $k=>$v)
    <li><a href="{{$v->links}}">{{$v->title}}</a></li>
    @endforeach
@endsection

@section('section')

        <!-- 列表页部分开始 -->
        <div class="row">
            <!-- 面包屑导航开始 -->
            <div class="col-lg-12">
                <ol class="breadcrumb bg-none">
                    <li><a href="#">首页</a></li>
                    <li><a href="#">运动 户外</a></li>
                    <li class="active">运动鞋</li>
                </ol>
            </div>
            <!-- 面包屑导航结束 -->
        </div>
        <div class="row">
            <!-- 左边栏开始 -->
            <div id="sidebar" class="col-lg-2">
                
                <!-- 商品推荐 -->
                <div class="widget mb10">
                    <h5 class="widget-tit pl10 fb">热门商品推荐</h5>
                    <ul class="widget-list-3">
                        @foreach($hot as $k=>$v)
                        <li>
                            <a href="">
                                <img class="center-block" alt="" src="/h_assets/img/advertise/ad-2.jpg" /></a>
                            <div class="summary"><a href="">{{$v->title}}</a></div>
                            <div class="price"><b class="f18">￥799</b> <span class="f12 ml10 red-font"><i class="icon-lower mr10">直降</i>已优惠 ￥481</span></div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <!-- 浏览记录推荐 -->
                <div class="widget mb10">
                    <h5 class="widget-tit pl10 fb">根据浏览记录为您推荐</h5>
                    <ul class="widget-list-3">
                        <li>
                            <a href="">
                                <img class="center-block" alt="" src="/h_assets/img/advertise/ad-2.jpg" /></a>
                            <div class="summary tc"><span class="f12 ml10 red-font">%9会买 ：</span><a href="">美的（Midea） MRO102C-4 反渗透 净水机</a></div>
                            <div class="price tc"><b class="f18">￥799</b> </div>
                        </li>
                    </ul>
                    <div class="blue-font p10 pull-right"><a href="">查看更多推荐</a></div>
                    <div class="clearfix"></div>
                </div>
                <!-- 浏览记录 -->
                <div class="widget mb10">
                    <h5 class="widget-tit pl10 fb"><span class="pull-right f12 pr10 gray-font"><a href="">清除</a></span>浏览记录</h5>
                    <ul class="widget-list-2">
                        <li>
                            <div class="w-list-product">
                                <a href="">
                                    <img class="pull-left" alt="" src="" /></a>
                                <div class="summary"><a href="">阿迪达斯adidas女鞋跑步鞋-G61326</a></div>
                                <div class="price"><b>¥96</b></div>
                            </div>
                        </li>
                        <li>
                            <div class="w-list-product">
                                <a href="">
                                    <img class="pull-left" alt="" src="" /></a>
                                <div class="summary"><a href="">阿迪达斯adidas女鞋跑步鞋-G61326</a></div>
                                <div class="price"><b>¥96</b></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- 左边栏结束 -->
            <!-- 内容区域开始 -->
            <div id="content" class="col-lg-10">
                <div class="item-recommend">
                    <div class="list-item-title pl10 f14 tit-family "><i class="icon-main icon-recom mr5"></i>热卖推荐</div>
                    <div class="recommend-list">
                        <ul>
                            @foreach($hot as $k=>$v)
                            <li>
                                <a href="">
                                    <img alt="" class="pull-left center-block" src="/h_assets/img/advertise/ad-2.jpg" /></a>
                                <div class="summary"><a href="">{{$v->title}}</a></div>
                                <div class="price"><b>¥{{$v->spxj}}</b></div>
                                <a href="/goods/{{$v->id}}" type="button" class="btn btn-danger btn-xs">立即抢购</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="item-pro-list mt10">
                    <div class="list-item-title">
                        <div class="sort-left pull-left pl10">
                            <span>排序：</span>
                            <a href="">销量 <span class="glyphicon glyphicon-arrow-down"></span></a>
                            <a href="">价格 <span class="glyphicon glyphicon-arrow-down"></span></a>
                            <a href="">评论数 <span class="glyphicon glyphicon-arrow-down"></span></a>
                            <a href="">上架时间 <span class="glyphicon glyphicon-arrow-down"></span></a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="pro-list-show">
                        <ul>
                            @foreach($good as $k=>$v)
                            <li>
                                <a href="/goods/{{$v->id}}">
                                    <img class="center-block" alt="" src="/h_assets/img/advertise/ad-2.jpg" /></a>
                                <input type="hidden" name="goodsid" value="{{$v->id}}">
                                <div class="summary"><a href="">{{$v->title}}</a></div>
                                <div class="price"><span class="pull-right red-font">返129积分</span><b>￥{{$v->spxj}}</b></div>
                                <div class="list-show-eva"><i class="icon-main icon-eva-6"></i><a href="">已有215人评价</a></div>
                                <button type="submit" class="btn btn-default btn-xs">加入购物车</button>
                                <button type="button" class="btn btn-default btn-xs">收藏</button>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                {{csrf_field()}}
                <div class="pull-right">
                    {{ $good->links() }}
                </div>
            </div>
            <!-- 内容区域结束 -->
        </div>
        <!-- 列表页部分结束 -->
        
@stop

@section('js')

@endsection