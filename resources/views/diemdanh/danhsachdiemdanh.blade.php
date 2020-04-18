@extends('master')
@section('main')
      <div class="app-title">
        <div class="container">
          <h1><i class="fa fa-th-list"></i>Danh sách điểm danh</h1>
         {{--  @if(Session::has('tk_admin'))
          <a class="btn btn-secondary" href="themmoidiemdanh"><i class="fa fa-fw fa-lg fa-user-plus"></i>Thêm mới điểm danh</a>
          @endif --}}
        </div>
      </div>
      <div class="row">
        <div class="container"></div>
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
    					       <th>Tên giáo viên</th>
              			 <th>Tên môn</th>
              			 <th>Tên lớp</th>
              			 <th>Ngày</th>
              			 <th>Giờ bắt đầu</th>
              			 <th>Giờ kết thúc</th>
              			 {{-- <th>Điểm danh</th> --}}
                     {{-- @if(Session::has('tk_admin'))
              			 <th>Sửa</th>
              			 <th>Xóa</th>
                     @endif --}}
                  </tr>
                </thead>
                <tbody>
					</tr>
					@foreach($arrdiemdanh as $objdiemdanh)
					<tr>
						      <td>{{$objdiemdanh->tengv}}</td>
			            <td>{{$objdiemdanh->tenmonhoc}}</td>
			            <td>{{$objdiemdanh->tenlop}}</td>
			            <td>{{$objdiemdanh->ngay}}</td>
			            <td>{{$objdiemdanh->giobatdau}}</td>
			            <td>{{$objdiemdanh->gioketthuc}}</td>
			            {{-- <td>
                    <form action="{{route('diemdanhchitiet')}}" method="post">
                      <input type="hidden" name="_token" value="{{csrf_token()}}" />
                      <input type="hidden" name="malop" value="{{$objdiemdanh->malop}}">
                      <input type="hidden" name="malich" value="{{$objdiemdanh->malich}}">
                      <button type="submit"><i class="fa fa-fw fa-lg fa-check-square-o"></i></button>
                    </form>   
                  </td> --}}
                  {{-- @if(Session::has('tk_admin'))
						      <td><a href="suadiemdanh?madiemdanh={{$objdiemdanh->madiemdanh}}"><i class="fa fa-fw fa-lg fa-pencil"></i></a></td>
						      <td><a onclick="return confirm('Bạn chắc xóa không')" href="xoadiemdanh?madiemdanh={{$objdiemdanh->madiemdanh}}"><i class="fa fa-fw fa-lg fa-eraser"></i></a></td>
                  @endif --}}
					</tr>
					@endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
@endsection