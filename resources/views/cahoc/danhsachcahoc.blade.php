@extends('master')
@section('main')
      <div class="app-title">
        <div class="container">
          <h1><i class="fa fa-th-list"></i>Danh sách ca học</h1>
          <a class="btn btn-secondary" href="themmoicahoc"><i class="fa fa-fw fa-lg fa-user-plus"></i>Thêm mới ca học</a>
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
					<th>Giờ bắt đầu</th>
					<th>Giờ kết thúc</th>
					<th>Sửa</th>
					<th>Xóa</th>
                  </tr>
                </thead>
                <tbody>
					</tr>
					@foreach($arrcahoc as $objcahoc)
					<tr>
						<td>{{$objcahoc->macahoc}}</td>
						<td>{{$objcahoc->giobatdau}}</td>
						<td>{{$objcahoc->gioketthuc}}</td>
						<td><a href="suacahoc?macahoc={{$objcahoc->macahoc}}"><i class="fa fa-fw fa-lg fa-pencil"></i></a></td>
						<td>
 {{--              <div class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Bạn có chắc chắn muốn xóa ?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        <button type="button" class="btn btn-primary" href="xoacahoc?macahoc={{$objcahoc->macahoc}}">Xóa</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal --> --}}
              <a onclick="return confirm('Bạn chắc xóa không')" href="xoacahoc?macahoc={{$objcahoc->macahoc}}"><i class="fa fa-fw fa-lg fa-eraser"></i></a></td>
          </td>
					</tr>
					@endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
@endsection