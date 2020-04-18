@extends('master')
@section('main')
      <div class="app-title">
        <div class="container">
          <h1><i class="fa fa-th-list"></i>Danh sách ngành học</h1>
          <a class="btn btn-secondary" href="themmoinganhhoc"><i class="fa fa-fw fa-lg fa-user-plus"></i>Thêm mới ngành học</a>
        </div>
      </div>
      <div class="row">
        <div class="container"></div>
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                     <th>Mã ngành</th>
					           <th>Tên ngành</th>
					           <th>Sửa</th>
					           <th>Xóa</th>
                  </tr>
                </thead>
                <tbody>
					</tr>
					@foreach($arrnganh as $objnganh)
					<tr>
						<td>{{$objnganh->manganh}}</td>
						<td>{{$objnganh->tennganh}}</td>
						<td><a href="suanganhhoc?manganh={{$objnganh->manganh}}"><i class="fa fa-fw fa-lg fa-pencil"></i></a></td>
						<td><a onclick="return confirm('Bạn chắc xóa không')" href="xoanganhhoc?manganh={{$objnganh->manganh}}"><i class="fa fa-fw fa-lg fa-eraser"></i></a></td>
					</tr>
					@endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
@endsection