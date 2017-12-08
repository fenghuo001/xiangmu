@extends('admin.index')
@section('kuang')
<div class="col-md-12">
    <h1 class="page-head-line">添加商品</h1>
</div> 
<div class="panel panel-info">
<div class="panel-heading">
   BASIC FORM
</div>
<div class="panel-body">
    <form role="form" action="/goods" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>商品名称:</label>
                    <input class="form-control" type="text" name="name">
                    
                </div>
         <div class="form-group">
                    <label>商品介绍:</label>
                    <input class="form-control" type="text" name="cons">
           
                </div>
                <div class="form-group">
                    <label>原价</label>
                    <input class="form-control" type="text" name="yuanjia">
            
                </div>
                <div class="form-group">
                    <label>现价:</label>
                    <input class="form-control" type="text" name="xianjia">
            
                </div>
                <div class="form-group">
                    <label>库存:</label>
                    <input class="form-control" type="text" name="kucun">
            
                </div>
                <div class="form-group">
                    <label>商品图片</label>
                    <input class="form-control" rows="3" type="file" name="imgs" style="border:0px;">
                </div>
          		{{csrf_field()}}
         			
                <button type="submit" class="btn btn-info" style="width:100px;">添加</button>
            </form>
    </div>
</div>              
@endsection    


