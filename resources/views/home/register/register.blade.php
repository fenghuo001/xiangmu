@extends('layouts.home')

@section('title')
<title>注册</title>
@endsection

@section('top')
@endsection

@section('section')
        <!-- 注册模块开始 -->
        <div class="row p30">
            <div class="col-lg-8">
                <!-- 左侧广告位 -->
                <img alt="" src="/h_assets/img/advertise/login-ban.gif" />
            </div>
            <div class="col-lg-4">
                    @if(session('msg'))
                    <div class="alert alert-info col-md-12" style="margin-top:10px;">
                       {{session('msg')}}
                    </div>
                    @endif
                <!-- 注册表单开始 -->
                <form role="form" class="login-form f14" action="/register" method="post">
                    
                    <div class="form-group">
                        <label for="username">邮箱</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="邮箱">
                    </div>
                    <div class="form-group">
                        <label for="username">手机号码</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="手机号码">
                    </div>
                    <div class="form-group">
                        <label for="password">密码</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="密码">
                    </div>
                    <div class="form-group">
                        <label for="confirm">确认密码</label>
                        <input type="password" class="form-control" name="repassword" id="confirm" placeholder="确认密码">
                    </div>
                    <div class="form-group">
                        <label for="vcode">验证码</label>
                        <div class="input-group">
                            <input type="text" class="form-control pull-left" style="width:57%;margin-right:1%;" name="vcode" id="vcode" placeholder="验证码">
                            <button type="button" id="send" class="btn btn-success">免费获取验证码</button>
                        </div>
                    </div>
                    {{csrf_field()}}
                    <div class="checkbox f12">
                        <label>
                            <input type="checkbox">
                            我已阅读并同意 &nbsp;<span class="blue-font"><a href="">《传智用户注册协议》</a></span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-danger btn-block f16">立即注册</button>
                </form>
                <!-- 注册表单结束 -->
            </div>
        </div>
        <!-- 注册模块结束 -->
@endsection

@section('bottom')
@endsection

@section('js')
<script>
    $('#send').click(function(){
        var phone = $('input[name=phone]').val();
        var reg = /1\d{10}/;
        if(!reg.test(phone)){
            alert('手机号格式错误!!!');
            return;
        }
        
        $.get('/message',{phone:phone},function(data){
            console.log(data);
        });

        $(this).addClass('disabled');
        var t = 60;
        var inte = setInterval(function(){
            $('#send').html(t+'秒后重新发送');
            t--;
            if(t == -1){
                clearInterval(inte);
                $('#send').removeClass('disabled');
                $('#send').html('免费获取验证码');
            }
        },1000);
    });
</script>
@endsection







