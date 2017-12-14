<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>xxx网后台管理界面</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="/yangshi/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="/yangshi/assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="/yangshi/assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="/yangshi/assets/css/custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="/lun/css/shutter.css">
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
        
<body>

    <div id="wrapper">
   
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">用户管理</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">COMPANY NAME</a>
            </div>
            <div class="header-right">
                <img src="" alt="">
                <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="/admin/login" class="btn btn-danger" title="退出"><i class="fa fa-exclamation-circle fa-2x"></i></a>

            </div>
        </nav>
    
        @include('layouts.header')
        //后台轮播图
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row"> 
                    @section('kuang')  
                    <div class="col-md-12">
                        <div class="shutter" style="margin-top:10px;">
                            <div class="shutter-img">
                                <a href="#" data-shutter-title="Iron Man"><img src="/lun/images/shutter_1.jpg" alt="#"></a>
                                <a href="#" data-shutter-title="Super Man"><img src="/lun/images/shutter_2.jpg" alt="#"></a>
                                <a href="#" data-shutter-title="The Hulk"><img src="/lun/images/shutter_3.jpg" alt="#"></a>
                                <a href="#" data-shutter-title="The your"><img src="/lun/images/shutter_4.jpg" alt="#"></a>
                            </div>
                            <ul class="shutter-btn">
                                <li class="prev"></li>
                                <li class="next"></li>
                            </ul>

                        </div> 
                        <p style="font-size:22px;" class="text-right">制作人:<span>小钢炮</span></p>                                
                    </div>
                    @show
                    @if(session('msg'))
                    <div class="alert alert-info col-md-12" style="margin-top:10px;">
                       {{session('msg')}}
                    </div>
                    @endif
                    @section('zhuti')
                    
                    @show 
                </div>                     
            </div>     
        </div>

    <script src="/yangshi/assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="/yangshi/assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="/yangshi/assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="/yangshi/assets/js/custom.js"></script>
    <!--模拟图片 -->
    <script src="/yangshi/assets/js/holder.min.js"></script>
    <script src="/lun/js/jquery.min.js"></script>
    <script src="/lun/js/velocity.js"></script>
    <script src="/lun/js/shutter.js"></script>
    <script>
    $(function () {
    $('.shutter').shutter({
    shutterW: 1000, // 容器宽度
    shutterH: 358, // 容器高度
    isAutoPlay: true, // 是否自动播放
    playInterval: 20, // 自动播放时间
    curDisplay: 3, // 当前显示页
    fullPage: false //  是否全屏展示
    });
    });
    </script>
    @section('js')
    @show

</body>
</html>
