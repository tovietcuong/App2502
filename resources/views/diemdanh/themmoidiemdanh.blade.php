@extends('master')
@section('main')
@if (count($errors) > 0)
      <div class="alert alert-danger">
         Có lỗi xuất hiện trong quá trình !!
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
@endif 
	<form action="themmoidiemdanhprocess" method="post" class="form_horizontal">
		<input type="hidden" name="_token" value="{{csrf_token()}}" />
		<div class="container">
          <div class="tile">
          	<h3 class="text-center">Thêm mới điểm danh</h3>
            <div class="tile-body">
            <div class="form-group row">
                  <label class="control-label col-md-2">Mã lịch</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="txtmalich" required />
                  </div>
            </div>
            {{-- <label class="control-label col-md-2">Tên giáo viên</label>
              <div class="col-md-8">
                  <select name="ddlgv" class="form-control">
                    @foreach($arrgv as $objgv)
                      <option value="{{$objgv->magv}}">{{$objgv->tengv}}</option>
                    @endforeach 
                  </select>
                </div>  
            </div>
            <div class="form-group row">
              <label class="control-label col-md-2">Tên môn học</label>
              <div class="col-md-8">
                  <select name="ddlmonhoc" class="form-control">
                    @foreach($arrmonhoc as $objmonhoc)
                      <option value="{{$objmonhoc->mamonhoc}}">{{$objmonhoc->tenmonhoc}}</option>
                    @endforeach 
                  </select>
                </div>  
            </div>
            <div class="form-group row">
              <label class="control-label col-md-2">Tên lớp học</label>
              <div class="col-md-8">
                  <select name="ddllop" class="form-control">
                    @foreach($arrlop as $objlop)
                      <option value="{{$objlop->malop}}">{{$objlop->tenlop}}</option>
                    @endforeach 
                  </select>
                </div>  
            </div> --}}
            <div class="form-group row">
                  <label class="control-label col-md-2">Ngày</label>
                  <div class="col-md-8">
                    <input class="form-control" type="date" name="txtngay" required />
                  </div>
            </div>
            <div class="form-group row">
                  <label class="control-label col-md-2">Giờ bắt đầu</label>
                  <div class="col-md-8">
                    <input class="form-control" type="time" name="txtgiobatdau" required />
                  </div>
            </div>
            <div class="form-group row">
                  <label class="control-label col-md-2">Giờ kết thúc</label>
                  <div class="col-md-8">
                    <input class="form-control" type="time" name="txtgioketthuc" required />
                  </div>
            </div>
            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Thêm mới</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="danhsachdiemdanh"><i class="fa fa-fw fa-lg fa-times-circle"></i>Hủy</a>
                </div>
              </div>
            </div> 
            </div> 
          </div>
        </div>
	</form>
@endsection