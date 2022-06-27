@extends('layout.layout_user')
@section('display')
<a href="javascript:void(0)" onclick="openMenu()"><i class="bi bi-list fs-1"></i></a>
<a href="http://tatshop.42web.io/" style="float: right; margin-top:70px;">>>>Quay trở lại trang chủ</a>
<div class="container-fluid padding p-0">
	<h2 class="display-4" style="font-size:36px;">Cập nhật tài khoản</h2>
	@if(count($errors) > 1)
	@foreach($errors->all() as $err)
	<div class="alert alert-danger">
		<i class="fas fa-exclamation-triangle"></i> {{$err}}
	</div>
	@endforeach
	@endif
	@if(session('notice'))
	<div class="alert alert-success">
		<i class="far fa-check-circle"></i> {{session('notice')}}
	</div>
	@elseif(session('danger'))
	<div class="alert alert-danger">
		<i class="fas fa-exclamation-triangle"></i> {{session('danger')}}
	</div>
	@endif
	<form class="col-12" action="user/cap-nhat-tai-khoan" method="post" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{csrf_token()}}" />
		<div class="form-group">
			<label for="title">Tên</label>
			<input id="title" class="form-control" name="fullname" placeholder="Nhập tên" value="{{Auth::user()->name}}" size="50" />
		</div>
		<div class="form-group">
			<label for="phone">Số điện thoại</label>
			<input id="phone" class="form-control" name="phone" placeholder="Nhập số điện thoại" value="{{Auth::user()->phone}}" size="10" />
		</div>
		<div class="form-group">
			@if(Auth::user()->address != "")
			<p>Địa chỉ nhận hàng hiện tại: {{Auth::user()->address}}</p>
			@else
			<p>Địa chỉ nhận hàng hiện tại: Chưa có</p>
			@endif
		</div>
		<div class="form-group">
                    <label for="">Chọn Tỉnh/Thành phố</label>
                    <select id="province-user" class="form-select" name="province" aria-label="Default select example">
                        <option selected disabled>Chọn tỉnh/thành phố</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Chọn Quận/Huyện</label>
                    <select id="district-user" class="form-select" name="district" aria-label="Default select example">
                        <option selected disabled>Chọn quận/huyện</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="address">Địa chỉ nhận hàng</label>
                    <input id="address" class="form-control" type="text" name="address" placeholder="Số nhà/hẻm, tên đường, phường/xã" />
                </div>
		<div class="form-group">
			<label for="">Emai</label>
			<input class="form-control" readonly value="{{Auth::user()->email}}" size="255" />
		</div>
		<p>Giới tính</p>
		<div class="custom-control custom-radio custom-control-inline">
			<input type="radio" id="customRadioInline1" checked name="sex" class="custom-control-input" value="Nam">
			<label class="custom-control-label" for="customRadioInline1">Nam</label>
		</div>
		<div class="custom-control custom-radio custom-control-inline">
			<input type="radio" id="customRadioInline2" name="sex" class="custom-control-input" value="Nữ">
			<label class="custom-control-label" for="customRadioInline2">Nữ</label>
		</div>
		<div class="form-group">
			<label for="">Ngày sinh</label>
			<input class="form-control" type="date" name="birthday" value="{{Auth::user()->birthday}}" />
		</div>
		<div class="form-group">
			<label for="avatar">Ảnh đại diện (< 1 MB)</label>
					<input id="avatar" class="form-control-file" type="file" name="image" />
		</div>
		<div class="form-group">
			<button class="btn btn-primary btn-md" name="btn_submit" type="submit">Cập nhật</button>
		</div>
	</form>
	@endsection
	@section('script')
	<script type="text/javascript" src="js/effect.js"></script>
	<script type="text/javascript" src="js/effect.jquery"></script>
	<script>
		// jQuery(document).ready(function($) {
		// 	$('#district').change(function(event) {
		// 		var district = $('#district').val();
		// 		$.get('ajax/' + district, function(data) {
		// 			$('#ward').html(data);
		// 		});
		// 	});
		// });
		$(document).ready((e) => {
    var province_user = $("#province-user");
    var data_province_user;
    var district_user = $("#district-user");

    $.ajax({
        "url": "https://provinces.open-api.vn/api/?depth=2",
        "type": "GET",
        "dataType": "JSON",
        "success": function (data) {
            data_province_user = data;
            data_province_user.forEach(element => {
                province_user.append("<option value='" + element.name + "' data-id='" + element.code + "'>" + element.name + "</option>")
            });
        },
        "errors": function (err) {
            alert(err);
        }
    });

    province_user.change((e) => {
        let objProvince_user = data_province_user.find(x => x.name == province_user.val());
        let dataDistrict_user = objProvince_user.districts;
        district_user.empty();
        district_user.append("<option selected disabled> Chọn Quận/Huyện </option>");
        dataDistrict_user.forEach(el => {
            district_user.append("<option value='" + el.name + "'>" + el.name + "</option>");
        });
    });
})

	</script>
	@endsection
	@section('title')
	Thành viên
	@endsection