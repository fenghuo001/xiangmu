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

                <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="login.html" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>
            </div>
        </nav>

        @include('layouts.header')

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row"> 
                    @section('kuang')  
                    <div class="col-md-12">
                        <h1 class="page-head-line">添加用户</h1>                                    
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
    
    @section('js')
    @show

</body>
</html>
