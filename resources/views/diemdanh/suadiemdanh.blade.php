@extends('master')
@section('main')
	<form action="suadiemdanhprocess" method="post" class="form_horizontal">
		<input type="hidden" name="_token" value="{{csrf_token()}}" />
		<div class="container">
          <div class="tile">
          	<h3 class="text-center">Cập nhật điểm danh</h3>
            <div class="tile-body">
            <div class="form-group row">
                  <label class="control-label col-md-2">Mã điểm danh</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="txtmadiemdanh" value="{{$objdiemdanh->madiemdanh}}" />
                  </div>
            </div>	
            <div class="form-group row">
                  <label class="control-label col-md-2">Mã lịch</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="txtmalich" value="{{$objdiemdanh->malich}}"/>
                  </div>
            </div>
            <div class="form-group row">
                  <label class="control-label col-md-2">Ngày</label>
                  <div class="col-md-8">
                    <input class="form-control" type="date" name="txtngay" value="{{$objdiemdanh->ngay}}"/>
                  </div>
            </div>
            <div class="form-group row">
                  <label class="control-label col-md-2">Giờ bắt đầu</label>
                  <div class="col-md-8">
                    <input class="form-control" type="time" name="txtgiobatdau" value="{{$objdiemdanh->giobatdau}}"/>
                  </div>
            </div>
            <div class="form-group row">
                  <label class="control-label col-md-2">Giờ kết thúc</label>
                  <div class="col-md-8">
                    <input class="form-control" type="time" name="txtgioketthuc" value="{{$objdiemdanh->gioketthuc}}"/>
                  </div>
            </div>
            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Cập nhật</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="danhsachdiemdanh"><i class="fa fa-fw fa-lg fa-times-circle"></i>Hủy</a>
                </div>
              </div>
            </div> 
            </div> 
          </div>
        </div>
	</form>
@endsection