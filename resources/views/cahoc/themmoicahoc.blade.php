@extends('master')
@section('main')
	<form action="themmoicahocprocess" method="post" class="form_horizontal">
		<input type="hidden" name="_token" value="{{csrf_token()}}" />
		<div class="container">
          <div class="tile">
          	<h3 class="text-center">Thêm mới ca học</h3>
            <div class="tile-body">
            <div class="form-group row">
                  <label class="control-label col-md-2">Giờ bắt đầu</label>
                  <div class="col-md-8">
                    <input class="form-control" type="time" name="txtgiobatdaucahoc" value="{{old('txtgiobatdaucahoc')}}" required />
                  </div>
            </div>
            <div class="form-group row">
                  <label class="control-label col-md-2">Giờ kết thúc</label>
                  <div class="col-md-8">
                    <input class="form-control " type="time" name="txtgioketthuccahoc" value="{{old('txtgioketthuccahoc')}}" required/>
                  </div>
            </div>
            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Thêm mới</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="danhsachcahoc"><i class="fa fa-fw fa-lg fa-times-circle"></i>Hủy</a>
                </div>
              </div>
            </div> 
            </div> 
          </div>
        </div>
	</form>
@endsection