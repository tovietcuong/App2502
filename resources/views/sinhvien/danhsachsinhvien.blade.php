@extends('master')
@section('main')
      <div class="app-title">
        <div class="container">
          <h1><i class="fa fa-th-list"></i>Danh sách sinh viên</h1>
          @if(Session::has('tk_admin'))
          <a class="btn btn-secondary" href="themmoisinhvien"><i class="fa fa-fw fa-lg fa-user-plus"></i>Thêm mới sinh viên</a>
          @endif
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
					<th>Tên lớp</th>
					<th>Ngày sinh</th>
					<th>Giới tính</th>
					<th>Địa chỉ</th>
					<th>Số điện thoại</th>
					<th>Email</th>
					@if(Session::has('tk_admin'))
					<th>Sửa</th>
					<th>Xóa</th>
					@endif
                  </tr>
                </thead>
                <tbody>
					</tr>
					@foreach($arrsv as $objsv)
					<tr>
						<td>{{$objsv->masv}}</td>
						<td>{{$objsv->tensv}}</td>
						<td>{{$objsv->tenlop}}</td>
						<td>{{$objsv->ngaysinh}}</td>
						<td>
						@if($objsv->gioitinh==0){{"Nữ"}}
						@else {{"Nam"}}
						@endif
						</td>
						<td>{{$objsv->diachi}}</td>
						<td>{{$objsv->sodienthoai}}</td>
						<td>{{$objsv->email}}</td>
						@if(Session::has('tk_admin'))
						<td><a href="suasinhvien?masv={{$objsv->masv}}"><i class="fa fa-fw fa-lg fa-pencil"></i></a></td>
						<td><a onclick="return confirm('Bạn chắc xóa không')" href="xoasinhvien?masv={{$objsv->masv}}"><i class="fa fa-fw fa-lg fa-eraser"></i></a></td>
						@endif
					</tr>
					@endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
@endsection