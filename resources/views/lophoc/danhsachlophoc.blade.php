@extends('master')
@section('main')
      <div class="app-title">
        <div class="container">
          <h1><i class="fa fa-th-list"></i>Danh sách lớp học</h1>
          <a class="btn btn-secondary" href="themmoilophoc"><i class="fa fa-fw fa-lg fa-user-plus"></i>Thêm mới lớp học</a>
        </div>
      </div>
      <div class="row">
        <div class="container"></div>
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                     <th>Mã lớp</th>
					           <th>Tên lớp</th>
					           <th>Tên ngành</th>
					           <th>Sửa</th>
					           <th>Xóa</th>
                  </tr>
                </thead>
                <tbody>
					</tr>
					@foreach($arrlop as $objlop)
					<tr>
						<td>{{$objlop->malop}}</td>
						<td>{{$objlop->tenlop}}</td>
            <td>{{$objlop->tennganh}}</td>
						<td><a href="sualophoc?malop={{$objlop->malop}}"><i class="fa fa-fw fa-lg fa-pencil"></i></a></td>
						<td><a onclick="return confirm('Bạn chắc xóa không')" href="xoalophoc?malop={{$objlop->malop}}"><i class="fa fa-fw fa-lg fa-eraser"></i></a></td>
					</tr>
					@endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
@endsection