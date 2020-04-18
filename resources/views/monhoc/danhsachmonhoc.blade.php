@extends('master')
@section('main')
      <div class="app-title">
        <div class="container">
          <h1><i class="fa fa-th-list"></i>Danh sách môn học</h1>
          <a class="btn btn-secondary" href="themmoimonhoc"><i class="fa fa-fw fa-lg fa-user-plus"></i>Thêm mới môn học</a>
        </div>
      </div>
      <div class="row">
        <div class="container"></div>
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                     <th>Mã môn học</th>
					           <th>Tên môn học</th>
          					 <th>Tên ngành</th>
          					 <th>Thời lượng học</th>
          					 <th>Sửa</th>
          					 <th>Xóa</th>
                  </tr>
                </thead>
                <tbody>
					</tr>
					@foreach($arrmonhoc as $objmonhoc)
					<tr>
						<td>{{$objmonhoc->mamonhoc}}</td>
						<td>{{$objmonhoc->tenmonhoc}}</td>
            <td>{{$objmonhoc->tennganh}}</td>
            <td>{{$objmonhoc->thoiluonghoc}}</td>
						<td><a href="suamonhoc?mamonhoc={{$objmonhoc->mamonhoc}}"><i class="fa fa-fw fa-lg fa-pencil"></i></a></td>
						<td><a onclick="return confirm('Bạn chắc xóa không')" href="xoamonhoc?mamonhoc={{$objmonhoc->mamonhoc}}"><i class="fa fa-fw fa-lg fa-eraser"></i></a></td>
					</tr>
					@endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
@endsection