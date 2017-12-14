<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    @section('title')
    <title>首页</title>
    @show
    <link href="/h_assets/lib/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="/h_assets/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="/h_assets/css/shutter.css">
    @section('css')
    @show
</head>
@section('style')
@show
<body>
    <div id="sitebar">
        <div class="container">
            <div class="row h30 lh30 f12">
                <div class="col-lg-6">
                    <a href="javascript:;" class="bootmark" rel="nofollow"><i class="icon-main icon-collect mt8 mr5"></i>收藏传智</a>
                    <span>您好，欢迎您光临传智网！请</span>
                    <span class="bar-link">
                        <a href="/login">登录</a>
                        <a href="/register">注册</a>
                    </span>
                </div>
                <div class="col-lg-6">
                    <ul class="pull-right bar-link">
                        <li><a href="/address">个人中心</a> | </li>
                        <li><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=27102514&amp;site=qq&amp;menu=yes">客服服务</a> | </li>
                        <li><a href="sitemap.html">网站导航</a> |&nbsp;&nbsp;&nbsp;&nbsp;</li>
                        <li class="tel-num"><i class="icon-main icon-tel mt8 mr5"></i>8888-888-888</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @section('top')
    <!--/#sitebar-->
    <div id="header">
        <div class="container">
            <div class="row search">
                <div class="col-lg-4">
                    <h1 class="logo"><a href="/">
                        <img src="/h_assets/img/logo/logo.png" alt="传智" /></a><img src="/h_assets/img/logo/logo-text.png" alt="让每个人都满意！" /></h1>
                </div>
                <div class="col-lg-5">
                    <form action="search.html" method="get">
                        <label for="txt_search" class="hidden">搜索传智 分类/品牌/商品</label>
                        <input id="txt_search" type="text" name="q" accesskey="s" autocomplete="off" autofocus="true" x-webkit-speech="" x-webkit-grammar="builtin:translate" class="s-combobox-input" role="combobox" aria-haspopup="true" title="请输入搜索文字" aria-label="请输入搜索文字">
                        <button id="btn_search" type="submit">搜索</button>
                    </form>
                </div>
                <div class="col-lg-3">
                    <div id="my_account" class="btn-group mt30 ml50 ">
                        <button type="button" class="btn btn-radius-none btn-default dropdown-toggle f12" data-toggle="dropdown">我的账户 <span class="caret"></span></button>
                        <!--登录之前-->
                        <!-- <ul class="dropdown-menu p10 f12" role="menu">
                            <li><a href="/account/login.html" class="btn btn-warning btn-block">立即登录</a>新客户？<a class="blue-font" href="/account/register.html">免费注册</a></li>
                            <li class="divider"></li>
                            <li><a href="/member/">我的账户</a></li>
							<li><a href="/member/order.html">我的订单</a></li>
                            <li><a href="#">评论已购商品</a></li>
							<li><a href="#">为我推荐</a></li>
                        </ul> -->
                        <!--登录之后-->
                        <ul class="dropdown-menu p10 f12" style="width: 240px;" role="menu">
                            <li>
                                <div class="box-title fb"><span class="pull-right"><a href="/member/" class="blue-font">去我的传智首页</a></span>用户名称</div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="box-title">最新订单状态：<span><a href="/member/order.html">查看所有订单</a></span></div>
                            </li>
                            <li class="divider"></li>
                            <li><a href="/member/order.html?status=0">待处理订单<i class="gray-font">(0)</i></a></li>
                            <li><a href="/member/order.html?status=1">待处理订单<i class="gray-font">(1)</i></a></li>
                            <li><a href="/member/order.html?status=2">待处理订单<i class="gray-font">(2)</i></a></li>
                            <li><a href="/member/order.html?status=3">待处理订单<i class="gray-font">(3)</i></a></li>
                        </ul>
                    </div>
                    <div id="mini_cart" class="btn-group mt30 ml15">
                        <a href="/cart" class="btn btn-radius-none btn-default dropdown-toggle f12" data-toggle="dropdown">
                            <i class="icon-main icon-cart ilb"></i>去购物车结算 <span class="caret"></span>
                        </a>
                        <!--购物车为空-->
                        <!--<ul class="dropdown-box" role="menu">
                            <li><i class="icon-main icon-mini-cart ilb"></i>购物车中还没有商品，赶紧选购吧！</li>
                        </ul>-->
                        <!--购物车有商品-->
                        <ul class="dropdown-box" role="menu">
                            <li>
                                <div class="box-title fb p10">最新加入的商品</div>
                                <div class="box-content ">
                                    <ul class="box-list">
                                        <li>
                                            <div class="pull-left product-info">
                                                <img class="pull-left" alt="" src="" />
                                                <div class="summary"><a href="">【五折】自然素材 蜜桃芒果味果冻 255g 台湾地区进口</a></div>
                                            </div>
                                            <div class="pull-right price-info">
                                                <b class="red-font">￥779.00</b>×1<br>
                                                <span class="blue-font pull-right"><a href="">删除</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pull-left product-info">
                                                <img class="pull-left" alt="" src="" />
                                                <div class="summary"><a href="">【五折】自然素材 蜜桃芒果味果冻 255g 台湾地区进口</a></div>
                                            </div>
                                            <div class="pull-right price-info ">
                                                <b class="red-font">￥779.00</b>×1<br>
                                                <span class="blue-font pull-right"><a href="">删除</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pull-left product-info">
                                                <img class="pull-left" alt="" src="" />
                                                <div class="summary"><a href="">【五折】自然素材 蜜桃芒果味果冻 255g 台湾地区进口</a></div>
                                            </div>
                                            <div class="pull-right price-info">
                                                <b class="red-font">￥779.00</b>×1<br>
                                                <span class="blue-font pull-right"><a href="">删除</a></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="box-settlement tr">
                                    共 <b class="red-font">3</b> 件商品&nbsp;&nbsp;共计<b class="red-font f16">￥ 2008.00</b>
                                    <a href="/cart" class="btn btn-danger">去购物车结算</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="navbar navbar-red" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div id="menu" class="dropdown open">
                        <a class="navbar-brand dropdown-toggle" href="#">全部商品分类 <b class="caret"></b></a>
                        <!--data-toggle="dropdown"-->
                        <div class="clearfix"></div>
                        @section('fl')
                        <ul id="categories" class="dropdown-menu">
                            <li>
                                <a href="#"><i class="icon-main icon-0"></i>运动 户外</a>
                                <ul class="sub-item">
                                    <li>
                                        <a href="#">运动 户外</a>
                                        <ul class="sub-item">
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">家居 家具 厨具 清洁</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">运动 户外</a>
                                        <ul class="sub-item">
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">家居 家具 厨具 清洁</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">运动 户外</a>
                                        <ul class="sub-item">
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">家居 家具 厨具 清洁</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">运动 户外</a>
                                        <ul class="sub-item">
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">家居 家具 厨具 清洁</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">家居 家具 厨具 清洁</a>
                                        <ul class="sub-item">
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">家居 家具 厨具 清洁</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">运动 户外</a>
                                        <ul class="sub-item">
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">家居 家具 厨具 清洁</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">运动 户外</a>
                                        <ul class="sub-item">
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">家居 家具 厨具 清洁</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">运动 户外</a>
                                        <ul class="sub-item">
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">家居 家具 厨具 清洁</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">运动 户外</a>
                                        <ul class="sub-item">
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">家居 家具 厨具 清洁</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">运动 户外</a>
                                        <ul class="sub-item">
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">家居 家具 厨具 清洁</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-main icon-1"></i>运动 户外</a>
                                <ul class="sub-item">
                                    <li>
                                        <a href="#">运动 户外</a>
                                        <ul class="sub-item">
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">家居 家具 厨具 清洁</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">运动 户外</a>
                                        <ul class="sub-item">
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">家居 家具 厨具 清洁</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">运动 户外</a>
                                        <ul class="sub-item">
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">家居 家具 厨具 清洁</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">运动 户外</a>
                                        <ul class="sub-item">
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">家居 家具 厨具 清洁</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">家居 家具 厨具 清洁</a>
                                        <ul class="sub-item">
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">家居 家具 厨具 清洁</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">运动 户外</a>
                                        <ul class="sub-item">
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">家居 家具 厨具 清洁</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">运动 户外</a>
                                        <ul class="sub-item">
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">家居 家具 厨具 清洁</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">运动 户外</a>
                                        <ul class="sub-item">
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">家居 家具 厨具 清洁</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">运动 户外</a>
                                        <ul class="sub-item">
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">家居 家具 厨具 清洁</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">运动 户外</a>
                                        <ul class="sub-item">
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">家居 家具 厨具 清洁</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                            <li><a href="#">运动 户外</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-main icon-2"></i>运动 户外</a>
                                <ul class="sub-item">
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">家居 家具 厨具 清洁</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-main icon-3"></i>运动 户外</a>
                                <ul class="sub-item">
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">家居 家具 厨具 清洁</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-main icon-4"></i>运动 户外</a>
                                <ul class="sub-item">
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">家居 家具 厨具 清洁</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-main icon-5"></i>家居 家具 厨具 清洁</a>
                                <ul class="sub-item">
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">家居 家具 厨具 清洁</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-main icon-6"></i>运动 户外</a>
                                <ul class="sub-item">
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">家居 家具 厨具 清洁</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-main icon-7"></i>运动 户外</a>
                                <ul class="sub-item">
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">家居 家具 厨具 清洁</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-main icon-8"></i>运动 户外</a>
                                <ul class="sub-item">
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">家居 家具 厨具 清洁</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-main icon-9"></i>运动 户外</a>
                                <ul class="sub-item">
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">家居 家具 厨具 清洁</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-main icon-10"></i>运动 户外</a>
                                <ul class="sub-item">
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">家居 家具 厨具 清洁</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                    <li><a href="#">运动 户外</a></li>
                                </ul>
                            </li>
                        </ul>
                        @show
                    </div>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav f14">
                        <li class="active"><a href="/index">首页</a></li>
                        <li><a href="/liebiao">专题</a></li>
                        <li><a href="#">优惠券</a></li>
                        <!--<li class="dropdown"> <a href="#">Dropdown </a> </li>-->
                    </ul>
                    <!--<ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="./">Default</a></li>
                        <li><a href="../navbar-static-top/">Static top</a></li>
                        <li><a href="../navbar-fixed-top/">Fixed top</a></li>
                    </ul>-->
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
    <!--/#header-->
    @show
    <div class="container">
        <!-- 内容部分开始 -->

    @section('section')

    @show


        <!-- 内容部分结束 -->
    @section('bottom')
        <div class="row mt20">
            <div class="col-lg-12">
                <ul class="listbar-5">
                    <li><i class="icon-main icon-intr-1 ilb ml31"></i>
                        <p class="tc gray-font">
                            正品保证<br>
                            假1赔10
                        </p>
                    </li>
                    <li><i class="icon-main icon-intr-2 ilb ml31"></i>
                        <p class="tc gray-font">
                            质优价廉<br>
                            买贵就赔
                        </p>
                    </li>
                    <li><i class="icon-main icon-intr-3 ilb ml31"></i>
                        <p class="tc gray-font">
                            7天保障<br>
                            无理由退换
                        </p>
                    </li>
                    <li><i class="icon-main icon-intr-4 ilb ml31"></i>
                        <p class="tc gray-font">
                            满100元<br>
                            免运费
                        </p>
                    </li>
                    <li><i class="icon-main icon-intr-5 ilb ml31"></i>
                        <p class="tc gray-font">
                            100优惠宝<br>
                            =1元
                        </p>
                    </li>
                    <li><i class="icon-main icon-intr-6 ilb ml31"></i>
                        <p class="tc gray-font">
                            24小时<br>
                            闪电发货
                        </p>
                    </li>
                    <li><i class="icon-main icon-intr-7 ilb ml31"></i>
                        <p class="tc gray-font">
                            7x24小时<br>
                            在线客服
                        </p>
                    </li>
                    <li><i class="icon-main icon-intr-8 ilb ml31"></i>
                        <p class="tc gray-font">
                            支持多种<br>
                            支付方式
                        </p>
                    </li>
                    <li><i class="icon-main icon-intr-9 ilb ml31"></i>
                        <p class="tc gray-font">
                            开箱验货<br>
                            放心付款
                        </p>
                    </li>
                    <li><i class="icon-main icon-intr-10 ilb ml31"></i>
                        <p class="tc gray-font">
                            晒单奖励<br>
                            评论奖励
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row mt10">
            <div class="col-lg-12 help-center">
                <ul class="help-list">
                    <li>
                        <ul class="help-on">
                            <li class="ontitle"><i class="icon-main icon-help-1 pull-left"></i>关于我们</li>
                            <li class="ontext"><a href="#">关于传智</a></li>
                            <li class="ontext"><a href="#">联系我们</a></li>
                            <li class="ontext"><a href="#">加入我们</a></li>
                        </ul>
                    </li>
                    <li>
                        <ul class="help-on">
                            <li class="ontitle"><i class="icon-main icon-help-2 pull-left"></i>购物指南</li>
                            <li class="ontext"><a href="#">购物流程</a></li>
                            <li class="ontext"><a href="#">服务协议</a></li>
                            <li class="ontext"><a href="#">优惠券说明</a></li>
                        </ul>
                    </li>
                    <li>
                        <ul class="help-on">
                            <li class="ontitle"><i class="icon-main icon-help-3 pull-left"></i>支付方式</li>
                            <li class="ontext"><a href="#">银联支付</a></li>
                            <li class="ontext"><a href="#">快钱支付</a></li>
                            <li class="ontext"><a href="#">支付宝支付</a></li>
                        </ul>
                    </li>
                    <li>
                        <ul class="help-on">
                            <li class="ontitle"><i class="icon-main icon-help-4 pull-left"></i>配送方式</li>
                            <li class="ontext"><a href="#">运费说明</a></li>
                        </ul>
                    </li>
                    <li>
                        <ul class="help-on">
                            <li class="ontitle"><i class="icon-main icon-help-5 pull-left"></i>售后服务</li>
                            <li class="ontext"><a href="#">退换货政策</a></li>
                            <li class="ontext"><a href="#">退换货流程</a></li>
                            <li class="ontext"><a href="#">退换货申请</a></li>
                        </ul>
                    </li>
                    <li>
                        <ul class="help-on">
                            <li class="ontitle"><i class="icon-main icon-help-6 pull-left"></i>帮助信息</li>
                            <li class="ontext"><a href="#">常见问题</a></li>
                            <li class="ontext"><a href="#">投诉建议</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @show
    <footer>
        <div class="container">
            <p class="tc lh200">
                <a href="#">关于我们</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="">联系我们</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="">网络联盟</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="">商家入驻</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="">网络招聘</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="">广告服务</a>&nbsp;&nbsp;|
                <br />
                互联网出版许可证编号新出网证 <a href="http://www.miibeian.gov.cn/" target="_blank" rel="external nofollow">你妹的备案</a> ©传智<br>
                京公网安备88888888888888号
            </p>
        </div>
    </footer>
    <script src="/h_assets/lib/jquery/jquery-1.11.0.js"></script>
    <script src="/h_assets/lib/bootstrap/js/bootstrap.js"></script>
    <script src="/h_assets/js/jquery.min.js"></script>
    <script src="/h_assets/js/velocity.js"></script>
    <script src="/h_assets/js/shutter.js"></script>
    <script>
    $(function () {
      $('.shutter').shutter({
        shutterW: 780, // 容器宽度
        shutterH: 358, // 容器高度
        isAutoPlay: true, // 是否自动播放
        playInterval: 10, // 自动播放时间
        curDisplay: 3, // 当前显示页
        fullPage: false // 是否全屏展示
      });
    });
    </script>
    @section('js')
    @show
</body>
</html>