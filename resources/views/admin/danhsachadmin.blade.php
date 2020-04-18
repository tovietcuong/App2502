@extends('master')
@section('main')
      <div class="app-title">
        <div class="container">
          <h1><i class="fa fa-th-list"></i>Danh sách quản trị viên</h1>
          <a class="btn btn-secondary" href="themmoiadmin"><i class="fa fa-fw fa-lg fa-user-plus"></i>Thêm mới quản trị viên</a>
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
					<th>Sửa</th>
					<th>Xóa</th>
                  </tr>
                </thead>
                <tbody>
					</tr>
					@foreach($arrad as $objad)
					<tr>
						<td>{{$objad->maadmin}}</td>
						<td>{{$objad->tenadmin}}</td>
						<td>{{$objad->ngaysinh}}</td>
						<td>
						@if($objad->gioitinh==0){{"Nữ"}}
						@else {{"Nam"}}
						@endif
						</td>
						<td>{{$objad->diachi}}</td>
						<td>{{$objad->sodienthoai}}</td>
						<td>{{$objad->email}}</td>
						<td>{{$objad->taikhoan}}</td>
						<td>{{$objad->matkhau}}</td>
						<td><a href="suaadmin?maad={{$objad->maadmin}}"><i class="fa fa-fw fa-lg fa-pencil"></i></a></td>
						<td><a onclick="return confirm('Bạn chắc xóa không')" {{-- id="demoSwal" --}} href="xoaadmin?maad={{$objad->maadmin}}"><i class="fa fa-fw fa-lg fa-eraser"></i></a></td>
					</tr>
					@endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
@endsection