@extends('master')
@section('main')
      <div class="app-title">
        <div class="container">
          <h1><i class="fa fa-th-list"></i>Danh sách lịch học</h1>
          @if(Session::has('tk_admin'))
          <a class="btn btn-secondary" href="themmoilichhoc"><i class="fa fa-fw fa-lg fa-user-plus"></i>Thêm mới lịch học</a>
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
                     <th>Mã lịch học</th>
          					 <th>Tên giáo viên</th>
          					 <th>Tên môn học</th>
          					 <th>Tên lớp học</th>
                     <th>Tình trạng</th>
                     @if(Session::has('tk_admin'))
          					 <th>Sửa</th>
          					 <th>Xóa</th>
                     @endif
                  </tr>
                </thead>
                <tbody>
					</tr>
					@foreach($arrlich as $objlich)
					<tr>
						<td>{{$objlich->malich}}</td>
						<td>{{$objlich->tengv}}</td>
            <td>{{$objlich->tenmonhoc}}</td>
            <td>{{$objlich->tenlop}}</td>
            <td>
            @if($objlich->tinhtrang==0){{"Chưa dạy"}}
            @else {{"Đang dạy"}}
            @endif
            </td>
            @if(Session::has('tk_admin'))
						<td><a href="sualichhoc?malich={{$objlich->malich}}"><i class="fa fa-fw fa-lg fa-pencil"></i></a></td>
						<td><a onclick="return confirm('Bạn chắc xóa không')" href="xoalichhoc?malich={{$objlich->malich}}"><i class="fa fa-fw fa-lg fa-eraser"></i></a></td>
            @endif
					</tr>
					@endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
@endsection