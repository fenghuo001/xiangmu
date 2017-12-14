@extends('admin.index')
@section('kuang')
<div class="col-md-12">
    <h1 class="page-head-line">添加订单</h1>
</div> 
<div class="panel panel-info">
<div class="panel-heading">
   BASIC FORM
</div>
<div class="panel-body">
    <form role="form" action="/adv" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>用户名称:</label>
                    <input class="form-control" type="text" name="title">                    
                </div>
                <div class="form-group">
                    <label>商品名称:</label>
                    <input class="form-control" type="text" name="title">                    
                </div>               
                <div class="form-group">
                    <label>商品单号:</label>
                    <input class="form-control" type="text" name="cont">                 
                </div>
                <div class="form-group">
                    <label>数量:</label>
                    <input class="form-control" type="text" name="shuliang">                 
                </div>
                <div class="form-group">
                    <label>商品图片:</label>
                    <input class="form-control" type="file" name="tu" style="border:0px;">                 
                </div>
                <div class="form-group">
                    <label>支付状态:</label>
                    <span>&nbsp;&nbsp;<input type="checkbox" value="">&nbsp;&nbsp;已支付</span>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <span>&nbsp;&nbsp;<input type="checkbox" value="">&nbsp;&nbsp;未支付</span>            
                </div>   
          		{{csrf_field()}}	
                <button type="submit" class="btn btn-info" style="width:100px; margin-top:20px;">添加</button>
            </form>
    </div>
</div>              
@endsection    


