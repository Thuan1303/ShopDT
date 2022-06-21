@extends('layout.layout_admin')

@section('display')
<a class="open" href="javascript:void(0)" onclick="openMenu()"><i class="bi bi-list fs-1"></i></a>
<h2 class="font-weight-light">Phân tích <i class="bi bi-pie-chart-fill"></i></h2>
<hr>
<div class="col-12 d-flex flex-row my-4 p-0 flex-wrap">
  <div class="col-lg-3 rounded shadow col-sm-12 bg-dark text-light text-center p-4 mx-1 my-1">
    <p class="mt-4 fs-3 mb-0">{{number_format($total)}}đ</p>
    <p class="mb-4 fs-3 mt-0"><i class="bi bi-cash"></i> Doanh thu</p>
  </div>
  <div class="col-lg-3 rounded shadow col-sm-12 bg-info text-light text-center p-4 mx-1 my-1">
    <p class="mt-4 fs-3 mb-0">{{number_format($totalSale)}} cái</p>
    <p class="mb-4 fs-3 mt-0"><i class="bi bi-box"></i> Đã bán</p>
  </div>
  <div class="col-lg-3 rounded shadow col-sm-12 bg-danger bg-gradient text-light text-center p-4 mx-1 my-1">
    <p class="mt-4 fs-3 mb-0">{{number_format($todayTotal)}}đ</p>
    <p class="mb-4 fs-3 mt-0"><i class="bi bi-cash"></i> Hôm nay</p>
  </div>
</div>
<div id="chartAnalyze" class="border-bottom" style="width:100%; height:400px;"></div>
<div id="chartCircle" style="width:100%; height:400px"></div>
@endsection

@section('script')

@endsection
@section('title')
Phân tích
@endsection