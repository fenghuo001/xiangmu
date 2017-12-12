@extends('layouts.home')

@section('css')
<link rel="stylesheet" href="/h_assets/css/smoothproducts.css">
@endsection

@section('title')
<title>详情页</title>
@endsection

@section('fl')
@endsection

@section('section')
<div class="alert alert-info">
    成功加入购物车!! <a href="/cart" class="alert-link">去结算</a>.
</div>
@endsection

@section('js')
<script type="text/javascript">
    $('#vcode_img').click(function  () {
        $(this).attr('src',  $(this).data('src')+'?'+ Math.random());
    });
</script>
<script type="text/javascript" src="/h_assets/js/smoothproducts.js"></script>

@endsection