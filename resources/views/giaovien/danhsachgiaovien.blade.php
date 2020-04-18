@extends('master')
@section('main')
      <div class="app-title">
        <div class="container">
          <h1><i class="fa fa-th-list"></i>Danh sách giáo viên</h1>
          <a class="btn btn-secondary" href="themmoigiaovien"><i class="fa fa-fw fa-lg fa-user-plus"></i>Thêm mới giáo viên</a>
        </div>
      </div>
      <div class="row">
        <div class="container"></div>
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Mã</th>
					<th>Họ tên</th>
					<th>Ngày sinh</th>
					<th>Giới tính</th>
					<th>Địa chỉ</th>
					<th>Số điện thoại</th>
					<th>Email</th>
					<th>Tài khoản</th>
					<th>Mật khẩu</th>
					<th>Trạng thái</th>
					<th>Sửa</th>
					<th>Xóa</th>
                  </tr>
                </thead>
                <tbody>
					</tr>
					@foreach($arrgv as $objgv)
					<tr>
						<td>{{$objgv->magv}}</td>
						<td>{{$objgv->tengv}}</td>
						<td>{{$objgv->ngaysinh}}</td>
						<td>
						@if($objgv->gioitinh==0){{"Nữ"}}
						@else {{"Nam"}}
						@endif
						</td>
						<td>{{$objgv->diachi}}</td>
						<td>{{$objgv->sodienthoai}}</td>
						<td>{{$objgv->email}}</td>
						<td>{{$objgv->taikhoan}}</td>
						<td>{{$objgv->matkhau}}</td>
						<td>
						@if($objgv->tinhtranggv==0){{"Nghỉ dạy"}}
						@else {{"Đang dạy"}}
						@endif
						</td>
						<td><a href="suagiaovien?magv={{$objgv->magv}}"><i class="fa fa-fw fa-lg fa-pencil"></i></a></td>
						<td><a onclick="return confirm('Bạn chắc xóa không')" href="xoagiaovien?magv={{$objgv->magv}}"><i class="fa fa-fw fa-lg fa-eraser"></i></a></td>
					</tr>
					@endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
@endsection