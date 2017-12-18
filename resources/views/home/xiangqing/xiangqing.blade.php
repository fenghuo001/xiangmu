@extends('layouts.home')

@section('css')
<link rel="stylesheet" href="/h_assets/css/smoothproducts.css">
@endsection

@section('daohang')
    @foreach($navs as $k=>$v)
    <li><a href="{{$v->links}}">{{$v->title}}</a></li>
    @endforeach
@endsection

@section('title')
<title>详情页</title>
@endsection

@section('fl')
@endsection

@section('section')

        <!-- 详细页开始 -->
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb bg-none">
                    <li><a href="#">首页</a></li>
                    <li><a href="#">运动 户外</a></li>
                    <li class="active">运动鞋</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <!-- 左边栏 -->
            <div id="sidebar" class="col-lg-2">
                
                <div class="widget mb10">
                    <h5 class="widget-tit pl10 fb">销量排行榜</h5>
                    <ul class="widget-list-2">
                        @foreach($hot as $k=>$v)
                        <li>
                            <div class="w-list-product pr">
                                <a href=""><img class="pull-left" alt="" src="{{$v->img}}" /></a>
                                <div class="summary"><a href="">{{$v->title}}</a></div>
                                <div class="price"><b>¥{{$v->spxj}}</b></div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="widget mb10">
                    <h5 class="widget-tit pl10 fb">看看别人买了什么</h5>
                    <ul class="widget-list-2">
                        @foreach($new as $k=>$v)
                        <li>
                            <div class="w-list-product">
                                <div class="pull-left other-welt">
                                    <div class="welt-style">最新订单</div>
                                    <a href="">
                                        <img alt="" src="{{$v->img}}" /></a>
                                </div>
                                <div class="summary-20 "><a href="">{{$v->title}}</a></div>
                                <div class="summary gray-font">b***417于15分钟前购买此商品</div>
                                <div class="summary-20 red-font">享8折优惠 还减2元</div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- 右边内容 -->
            <div id="content" class="col-lg-10">
                <div class="item-meta">
                    <h1 class="meta-tit">{{$goods->title}}</h1>
                    <div class="meta-situ">
                        <div class="meta-magnifier pull-left">
                            <div class="page">
                                <div class="sp-wrap">
                                @foreach($goods_img as $k=>$v)
                                <a href="{{$v->imgs}}"><img src="{{$v->imgs}}" alt=""></a>
                                @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="meta-show pull-right">
                            <h2 class="meta-maintit">{{$goods->title}}</h2>
                            <div class="meta-subtitle">满300返40,仅限一天哦</div>
                            <div class="meta-reveal mb10">
                                <ul>
                                    <li class="reveal-tit">商品编号：</li>
                                    <li class="reveal-sow">{{$goods->id}}</li>
                                    <li class="reveal-tit">市场价：</li>
                                    <li class="reveal-sow rev-text-1">￥{{$goods->spyj}}</li>
                                    <li class="reveal-tit">市场价：</li>
                                    <li class="reveal-sow rev-text-2">￥{{$goods->spxj}} <b class="rev-text-3 ml10">返积分：20</b> <b class="rev-text-4 ml10"><a href="">什么积分？</a></b></li>
                                    <li class="reveal-tit">服    务：</li>
                                    <li class="reveal-sow">由<b class="rev-text-3">传智</b>发货并提供帮助</li>
                                    <li class="reveal-tit">商品评分：</li>
                                    <li class="reveal-sow">
                                        <i class="icon-main icon-eva-5"></i>(已有2702人评价)
                                    </li>
                                </ul>
                            </div>
                            <div style="border-bottom: 1px dotted #ccc;"></div>
                            <div class="meta-btn">
                                <form action="/cart" method="post">
                                <div class="quantity mb10">购买数量：<span class="ui-spinner"><input type="text" value="1" name="num" aria-valuenow="0" autocomplete="off"><a class="ui-spinner-button ui-spinner-up" tabindex="-1"><span class="ui-icon">▲</span></a><a class="ui-spinner-button ui-spinner-down" tabindex="-1"><span class="ui-icon">▼</span></a></span>(库存{{$goods->spkc}}件)</div>
                                <input type="hidden" name="goodsid" value="{{$goods->id}}">
                                <div class="button-group">
                                    <button type="submit" class="btn btn-addcart btn-lg mr20"><i class="icon-main icon-addcart"></i>加入购物车</button>
                                </div>
                                {{csrf_field()}}
                                </form>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="item-detail">
                    <ul class="nav nav-tabs detail-tabs" id="detail-tabs">
                        <li class="active"><a href="#intro" data-toggle="tab">商品介绍</a></li>
                    </ul>
                </div>
                <div class="tab-pane active" id="intro">
                    <p>{!!$goods->cons!!}</p>
                </div>
                <div class="item-review" id="review">
                    <div class="item-title"><span>商品评价</span></div>
                    <div class="review-per">
                        <div class="rate">
                            <div>
                                78<span>%</span>
                            </div>
                            <br>
                            <span>好评度</span>
                        </div>
                        <div class="percent">
                            <dl>
                                <dt>好评<span>(78%)</span></dt>
                                <dd>
                                    <div style="width: 78%;">
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>中评<span>(20%)</span></dt>
                                <dd class="d1">
                                    <div style="width: 20%;">
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>差评<span>(1%)</span></dt>
                                <dd class="d1">
                                    <div style="width: 1%;">
                                    </div>
                                </dd>
                            </dl>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="review-show mt15  p15">
                        <ul class="nav nav-tabs review-tabs" id="review-tabs">
                            <li class="active"><a href="#all-eva" data-toggle="tab">全部评价(4558)</a></li>
                            <li><a href="#good" data-toggle="tab">好评(1245)</a></li>
                            <li><a href="#general" data-toggle="tab">中评(2584)</a></li>
                            <li><a href="#poor" data-toggle="tab">差评(225)</a></li>
                        </ul>

                        <div class="tab-content p15">
                            <div class="tab-pane active" id="all-eva">
                                <div class="rev-list">
                                    <div class="user">
                                        <div class="user-avatar">
                                            <a href="" target="_blank">
                                                <img alt="唯***8" src="/h_assets/img/admin.png" data-original="" style="display: inline;" /></a>
                                        </div>
                                        <div class="user-name">
                                            <a href="" target="_blank">唯***8</a>
                                        </div>
                                    </div>
                                    <div class="rev-item">
                                        <div class="rev-top">
                                            <i class="rev-star icon-main icon-eva-5"></i><span class="rev-date">2014年01月15日</span>
                                        </div>
                                        <div class="rev-content">
                                            鞋子真的很靓，穿着挺舒服的，鞋码偏小点 平时穿42.5的 这次买的43的刚好 谢谢前面买家的意见
                                        </div>
                                    </div>
                                    <i class="corner icon-main icon-arrow"></i>
                                </div>
                                <div class="rev-list">
                                    <div class="user">
                                        <div class="user-avatar">
                                            <a href="" target="_blank">
                                                <img alt="唯***8" src="/h_assets/img/admin.png" data-original="" style="display: inline;" /></a>
                                        </div>
                                        <div class="user-name">
                                            <a href="" target="_blank">唯***8</a>
                                        </div>
                                    </div>
                                    <div class="rev-item">
                                        <div class="rev-top">
                                            <i class="rev-star icon-main icon-eva-5"></i><span class="rev-date">2014年01月15日</span>
                                        </div>
                                        <div class="rev-content">
                                            鞋子真的很靓，穿着挺舒服的，鞋码偏小点 平时穿42.5的 这次买的43的刚好 谢谢前面买家的意见
                                        </div>
                                    </div>
                                    <i class="corner icon-main icon-arrow"></i>
                                </div>
                                <div class="rev-list">
                                    <div class="user">
                                        <div class="user-avatar">
                                            <a href="" target="_blank">
                                                <img alt="唯***8" src="/h_assets/img/admin.png" data-original="" style="display: inline;" /></a>
                                        </div>
                                        <div class="user-name">
                                            <a href="" target="_blank">唯***8</a>
                                        </div>
                                    </div>
                                    <div class="rev-item">
                                        <div class="rev-top">
                                            <i class="rev-star icon-main icon-eva-5"></i><span class="rev-date">2014年01月15日</span>
                                        </div>
                                        <div class="rev-content">
                                            鞋子真的很靓，穿着挺舒服的，鞋码偏小点 平时穿42.5的 这次买的43的刚好 谢谢前面买家的意见
                                        </div>
                                    </div>
                                    <i class="corner icon-main icon-arrow"></i>
                                </div>
                            </div>
                            <div class="tab-pane" id="good">
                                 <div class="rev-list">
                                    <div class="user">
                                        <div class="user-avatar">
                                            <a href="" target="_blank"><img alt="唯***8" src="/h_assets/img/admin.png" data-original="" style="display: inline;" /></a>
                                        </div>
                                        <div class="user-name">
                                            <a href="" target="_blank">唯***8</a>
                                        </div>
                                    </div>
                                    <div class="rev-item">
                                        <div class="rev-top">
                                            <i class="rev-star icon-main icon-eva-5"></i><span class="rev-date">2014年01月15日</span>
                                        </div>
                                        <div class="rev-content">
                                            鞋子真的很靓，穿着挺舒服的，鞋码偏小点 平时穿42.5的 这次买的43的刚好 谢谢前面买家的意见
                                        </div>
                                    </div>
                                    <i class="corner icon-main icon-arrow"></i>
                                </div>
                            </div>
                            <div class="tab-pane" id="general">
                                 <div class="rev-list">
                                    <div class="user">
                                        <div class="user-avatar">
                                            <a href="" target="_blank"><img alt="唯***8" src="/h_assets/img/admin.png" data-original="" style="display: inline;" /></a>
                                        </div>
                                        <div class="user-name">
                                            <a href="" target="_blank">唯***8</a>
                                        </div>
                                    </div>
                                    <div class="rev-item">
                                        <div class="rev-top">
                                            <i class="rev-star icon-main icon-eva-5"></i><span class="rev-date">2014年01月15日</span>
                                        </div>
                                        <div class="rev-content">
                                            鞋子真的很靓，穿着挺舒服的，鞋码偏小点 平时穿42.5的 这次买的43的刚好 谢谢前面买家的意见
                                        </div>
                                    </div>
                                    <i class="corner icon-main icon-arrow"></i>
                                </div>
                            </div>
                            <div class="tab-pane" id="poor">
                                 <div class="rev-list">
                                    <div class="user">
                                        <div class="user-avatar">
                                            <a href="" target="_blank"><img alt="唯***8" src="/h_assets/img/admin.png" data-original="" style="display: inline;" /></a>
                                        </div>
                                        <div class="user-name">
                                            <a href="" target="_blank">唯***8</a>
                                        </div>
                                    </div>
                                    <div class="rev-item">
                                        <div class="rev-top">
                                            <i class="rev-star icon-main icon-eva-5"></i><span class="rev-date">2014年01月15日</span>
                                        </div>
                                        <div class="rev-content">
                                            鞋子真的很靓，穿着挺舒服的，鞋码偏小点 平时穿42.5的 这次买的43的刚好 谢谢前面买家的意见
                                        </div>
                                    </div>
                                    <i class="corner icon-main icon-arrow"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-after" id="after">
                    <div class="item-title"><span>售后保障</span></div>
                    <div class="p15">
                        <p class="lh200">
                            <b>服务承诺： </b>
                            <br />
                            传智商城向您保证所售商品均为正品行货，传智自营商品自带机打发票，与商品一起寄送。凭质保证书及传智商城发票，可享受全国联保服务（奢侈品、钟表除外；奢侈品、钟表由传智联系保修，享受法定三包售后服务），与您亲临商场选购的商品享受相同的质量保证。传智商城还为您提供具有竞争力的商品价格和运费政策，请您放心购买！<br />
                            <br />

                            注：因厂家会在没有任何提前通知的情况下更改产品包装、产地或者一些附件，本司不能确保客户收到的货物与商城图片、产地、附件说明完全一致。只能确保为原厂正货！并且保证与当时市场上同样主流新品一致。若本商城没有及时更新，请大家谅解！
                        </p>
                    </div>
                </div>
                <div class="item-history">
                    <div class="history-tit f14 fb pl10">根据您的浏览历史为您推荐</div>
                    <ul class="history-list">
                        <li>
                            <img class="center-block" alt="" src="" width="165" />
                            <div class="summary"><a href="">【五折】自然素材 蜜桃芒果味果冻 255g 台湾地区进口</a></div>
                            <div class="price"><b>¥96</b></div>
                        </li>
                        <li>
                            <img class="center-block" alt="" src="" width="165" />
                            <div class="summary"><a href="">【五折】自然素材 蜜桃芒果味果冻 255g 台湾地区进口</a></div>
                            <div class="price"><b>¥96</b></div>
                        </li>
                        <li>
                            <img class="center-block" alt="" src="" width="165" />
                            <div class="summary"><a href="">【五折】自然素材 蜜桃芒果味果冻 255g 台湾地区进口</a></div>
                            <div class="price"><b>¥96</b></div>
                        </li>
                        <li>
                            <img class="center-block" alt="" src="" width="165" />
                            <div class="summary"><a href="">【五折】自然素材 蜜桃芒果味果冻 255g 台湾地区进口</a></div>
                            <div class="price"><b>¥96</b></div>
                        </li>
                        <li>
                            <img class="center-block" alt="" src="/h_assets/img/advertise/focus-ban-6.jpg" width="165" />
                            <div class="summary"><a href="">【五折】自然素材 蜜桃芒果味果冻 255g 台湾地区进口</a></div>
                            <div class="price"><b>¥96</b></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- 详细页结束 -->

@endsection

@section('js')
<script type="text/javascript">
    $('#vcode_img').click(function  () {
        $(this).attr('src',  $(this).data('src')+'?'+ Math.random());
    });
</script>
<script type="text/javascript" src="/h_assets/js/smoothproducts.js"></script>

@endsection