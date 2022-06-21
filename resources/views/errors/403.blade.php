@extends('layout.layout_master')
@section('content')
<h2 class="display-4 text-center">Oops!<br /> You don't have access to this page</h2>
<div class='hover mb-5'>
    <div class='background'>
        <div class='door'>403</div>
        <div class='rug'></div>
    </div>
    <div class='foreground'>
        <div class='bouncer'>
            <div class='head'>
                <div class='neck'></div>
                <div class='eye left'></div>
                <div class='eye right'></div>
                <div class='ear'></div>
            </div>
            <div class='body'></div>
            <div class='arm'></div>
        </div>
        <div class='poles'>
            <div class='pole left'></div>
            <div class='pole right'></div>
            <div class='rope'></div>
        </div>
    </div>
</div>
@endsection

@section('title')
TAT SHOP - Cửa hàng trực tuyến tại Hồ Chí Minh
@endsection
@section('script')
<link rel="stylesheet" href="403.css" />
@endsection
@section('seo')
<meta property="og:url" content="{{asset('')}}">
<meta property="og:type" content="article">
<meta property="og:title" content="Cửa hàng trực tuyến tại Hồ Chí Minh">
<meta property="og:keyword" content="phone, dien thoai, laptop, tat, tat shop, iphone, promax,phu kien dt" />
<meta property="og:description" content="TAT được thành lập bởi một nhóm sinh viên với mục tiêu cung cấp các sản phẩm chất lượng tốt, giá cả hợp lý cho mọi đối tượng khách hàng đặc biệt là sinh viên. Với tiêu chí uy tín, an toàn, shop xin cam kết chất lượng sản phẩm hoàn toàn giống như hình ảnh quảng cáo và đảm bảo quyền lợi khách hàng theo đúng như trong Quy định về quyền lợi khách hàng mà TAT đã đưa ra. Xin chân thành ơn quý khách đã tin tưởng và mua hàng của chúng tôi." />
<meta property="og:image" content="https://images.pexels.com/photos/296115/pexels-photo-296115.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
@endsection