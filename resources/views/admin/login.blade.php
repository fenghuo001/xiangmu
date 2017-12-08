<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>后台登录页面</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="/yangshi/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="/yangshi/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background-color: #E2E2E2;">
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <img src="/yangshi/assets/img/logo-invoice.png" />
            </div>

        </div>
        @if(session('msg'))
	        <div class="alert alert-warning  col-md-6 col-md-offset-3" style="margin-top:10px;">
	           {{session('msg')}}
	        </div>
        @endif
        <div class="row ">
               
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">                          
                <div class="panel-body">
                    <form role="form" method="post" action="/admin/login">
                        <hr />
                        <h5>后台登录</h5>
                        <br />
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                            <input type="text" class="form-control" placeholder="用户名" name="username"/>
                        </div>                                                      
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                            <input type="password" class="form-control"  placeholder="密码" name="password"/>
                        </div>
                        <div class="form-group">
                            <label class="checkbox-inline">
                                <input type="checkbox" /> 记住密码
                            </label>
                            <span class="pull-right">
                                   <a href="index.html" >忘记密码 ? </a> 
                            </span>
                        </div>    
                        {{csrf_field()}}                     
                        <button href="index.html" class="btn btn-primary ">登录</button>
                        <hr />
                            Not register ? <a href="index.html" >click here </a> or go to <a href="index.html">Home</a> 
                    </form>
                </div>               
            </div>                                
        </div>
    </div>
</body>
</html>