@extends('master')
@section('main')
  <form action="diemdanh" method="get" class="form_horizontal">
      <div class="app-title">
        <div class="container">
          <h1><i class="fa fa-th-list"></i>Điểm danh chi tiết</h1>
        </div>
      </div>
      <div class="row">
        <div class="container"></div>
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
    					       <th>Tên sinh viên</th>
              			 <th>Tên lớp</th>
              			 <th>Thời lượng học</th>
                     <th>Thời lượng đã học</th>
              			 <th>Điểm danh</th>
                  </tr>
                </thead>
                <tbody>
					</tr>
					@foreach($arrdiemdanhchitiet as $objdiemdanh)
          
					<tr>
                  <input type="hidden" name="arrsv[]" value="{{$objdiemdanh->masv}}">
                    <input type="hidden" name="madiemdanh[]" value="{{$objdiemdanh->madiemdanh}}">
						      <td>{{$objdiemdanh->tensv}}</td>
                  <td>{{$objdiemdanh->tenlop}}</td>
			            <td>{{$objdiemdanh->thoiluonghoc}}</td>
			            <td>{{$objdiemdanh->thoiluongdahoc}}</td>
                  <td>
                  {{-- <form action="#" method="get" class="form-horizontal">
                      <input type="hidden" name="madiemdanh" value="{{$objdiemdanh->madiemdanh}}">
                      <input type="hidden" name="masv" value="{{$objdiemdanh->masv}}"> --}}
                  <select name="tinhtrang[]" class="form-control" {{-- onchange="submit()" --}} required>              
                      <option value="1">Có</option> 
                      <option value="2">Đi muộn</option> 
                      <option value="3">Nghỉ</option>  
                      {{-- <option value="4">Nghỉ có phép</option>   --}}                
                  </select> 
                  {{-- </form> --}}
                  </td>			            
					@endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Xác nhận</button>
                </div>
              </div>
            </div>
      </form>
@endsection