@extends('layouts.home')

@section('title')
<title>列表页</title>
@stop

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
                <div class="item-filter mt10">
                    <div class="list-item-title pl10 f14 tit-family "><b class="red-font f16">休闲鞋</b>---商品筛选</div>
                    <div class="filter-list">
                        <div class="list-body">
                            <div class="pull-left filter-left">种类：</div>
                            <div class="pull-right filter-right">
                                <div class="alert-sm fade in pull-left">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    品牌：<b class="red-font">花花公子</b>
                                </div>
                                <div class="alert-sm fade in pull-left">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    品牌：<b class="red-font">花花公子</b>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="list-body">
                            <div class="pull-left filter-left">种类：</div>
                            <div class="pull-right filter-right">
                                <ul>
                                    <li><a href="">日常休闲</a></li>
                                    <li><a href="">棉鞋</a></li>
                                    <li><a href="">工装鞋</a></li>
                                    <li><a href="">板鞋</a></li>
                                    <li><a href="">帆布鞋</a></li>
                                    <li><a href="">增高鞋</a></li>
                                    <li><a href="">驾车鞋</a></li>
                                    <li><a href="">安全鞋</a></li>
                                    <li><a href="">功能鞋</a></li>
                                    <li><a href="">其他</a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="list-body">
                            <div class="pull-left filter-left">价格：</div>
                            <div class="pull-right filter-right">
                                <ul>
                                    <li><a href="">日常休闲</a></li>
                                    <li><a href="">棉鞋</a></li>
                                    <li><a href="">工装鞋</a></li>
                                    <li><a href="">板鞋</a></li>
                                    <li><a href="">帆布鞋</a></li>
                                    <li><a href="">增高鞋</a></li>
                                    <li><a href="">驾车鞋</a></li>
                                    <li><a href="">安全鞋</a></li>
                                    <li><a href="">功能鞋</a></li>
                                    <li><a href="">其他</a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="list-body">
                            <div class="pull-left filter-left">鞋面材质：</div>
                            <div class="pull-right filter-right">
                                <ul>
                                    <li><a href="">日常休闲</a></li>
                                    <li><a href="">棉鞋</a></li>
                                    <li><a href="">工装鞋</a></li>
                                    <li><a href="">板鞋</a></li>
                                    <li><a href="">帆布鞋</a></li>
                                    <li><a href="">增高鞋</a></li>
                                    <li><a href="">驾车鞋</a></li>
                                    <li><a href="">安全鞋</a></li>
                                    <li><a href="">功能鞋</a></li>
                                    <li><a href="">其他</a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="list-body">
                            <div class="pull-left filter-left">尺码：</div>
                            <div class="pull-right filter-right">
                                <ul>
                                    <li><a href="">日常休闲</a></li>
                                    <li><a href="">棉鞋</a></li>
                                    <li><a href="">工装鞋</a></li>
                                    <li><a href="">板鞋</a></li>
                                    <li><a href="">帆布鞋</a></li>
                                    <li><a href="">增高鞋</a></li>
                                    <li><a href="">驾车鞋</a></li>
                                    <li><a href="">安全鞋</a></li>
                                    <li><a href="">功能鞋</a></li>
                                    <li><a href="">其他</a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="list-body">
                            <div class="pull-left filter-left">类型：</div>
                            <div class="pull-right filter-right">
                                <ul>
                                    <li><a href="">日常休闲</a></li>
                                    <li><a href="">棉鞋</a></li>
                                    <li><a href="">工装鞋</a></li>
                                    <li><a href="">板鞋</a></li>
                                    <li><a href="">帆布鞋</a></li>
                                    <li><a href="">增高鞋</a></li>
                                    <li><a href="">驾车鞋</a></li>
                                    <li><a href="">安全鞋</a></li>
                                    <li><a href="">功能鞋</a></li>
                                    <li><a href="">其他</a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
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
                        <div class="sort-right pull-right">
                            <span><b class="red-font mr10">共3541件商品</b> <b class="red-font">1</b>/89</span>
                            <button type="button" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>上一页</button>
                            <button type="button" class="btn btn-default btn-xs">下一页<i class="glyphicon glyphicon-chevron-right"></i></button>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="pro-list-show">
                        <ul>
                            @foreach($good as $k=>$v)
                            <li>
                                <a href="/goods/{{$v->id}}">
                                    <img class="center-block" alt="" src="/h_assets/img/advertise/ad-2.jpg" /></a>
                                <div class="summary"><a href="">{{$v->title}}</a></div>
                                <div class="price"><span class="pull-right red-font">返129积分</span><b>￥{{$v->spxj}}</b></div>
                                <div class="list-show-eva"><i class="icon-main icon-eva-6"></i><a href="">已有215人评价</a></div>
                                <button type="button" class="btn btn-default btn-xs">加入购物车</button>
                                <button type="button" class="btn btn-default btn-xs">收藏</button>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- <div class="list-pagination pull-right">
                    <ul class="pagination">
                        <li class="previous disabled"><a href="#">&laquo;&laquo;</a></li>
                        <li class="disabled"><a href="#">&laquo;</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                        <li class="next"><a href="#">&raquo;&raquo;</a></li>
                    </ul>
                </div> -->
            </div>
            <!-- 内容区域结束 -->
        </div>
        <!-- 列表页部分结束 -->
        
@stop

@section('js')
<script type="text/javascript">
    $('#vcode_img').click(function  () {
        $(this).attr('src',  $(this).data('src')+'?'+ Math.random());
    });
</script>
@endsection