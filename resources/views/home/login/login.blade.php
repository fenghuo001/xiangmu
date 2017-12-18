@extends('layouts.home')

@section('title')
<title>登录</title>
@endsection

@section('top')
@endsection

@section('section')
        <!-- 登录模块开始 -->
        <div class="row p30">
            <div class="col-lg-8">
                <!-- 左侧广告位 -->
                <img alt="" src="/h_assets/img/advertise/login-ban.gif" />
            </div>
            @if(session('msg'))
            <div class="alert alert-info col-lg-4" style="margin-top:10px;">
               {{session('msg')}}
            </div>
            @endif
            <div class="col-lg-4">
                <!-- 登录表单开始 -->
                <form role="form" class="login-form f14" method="post" action="/login">
                    <div class="form-group">
                        <label for="phone">邮箱/用户名/已验证手机</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="邮箱/用户名/已验证手机" />
                    </div>
                    <div class="form-group">
                        <label for="password">密码</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="密码" />
                    </div>
                    <div class="checkbox f12">
                        <label>
                            <input type="checkbox" />记住我</label>
                        <span class="pull-right"><a href="findme.aspx">忘记密码？</a>&nbsp;<a href="/register">免费注册</a></span>
                    </div>
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-danger btn-block f16">登 录</button>
                    <div class="f12 pt10">
                        合作登录：<i class="icon-main icon-cooper ml10"></i><a class="blue-font" href="oauth.aspx?t=qq">QQ账号</a>
                    </div>
                </form>
                <!-- 登录表单结束 -->
            </div>
        </div>
        <!-- 登录模块结束 -->
@endsection

@section('bottom')
@endsection