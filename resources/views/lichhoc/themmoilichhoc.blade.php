@extends('master')
@section('main')
	<form action="themmoilichhocprocess" method="post" class="form_horizontal">
		<input type="hidden" name="_token" value="{{csrf_token()}}" /> 
		<div class="container">
          <div class="tile">
          	<h3 class="text-center">Thêm mới lịch học</h3>
            <div class="tile-body">
            <div class="form-group row">
              <label class="control-label col-md-2">Tên giáo viên</label>
              <div class="col-md-8">
                  <select name="ddlgv" class="form-control">
                    @foreach($arrgv as $objgv)
                      <option value="{{$objgv->magv}}">{{$objgv->tengv}}</option>
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
                  <label class="control-label col-md-2">Ngày bắt đầu</label>
                  <div class="col-md-8">
                    <input class="form-control" type="date" name="txtngaybatdau" />
                  </div>
            </div>
            <div class="form-group row">
                  <label class="control-label col-md-2">Tình trạng</label>
                  <div class="col-md-9">
                    <div class="animated-radio-button">
                  <label>
                      <input type="radio"  @if(old('txttinhtranglich')==1) checked @endif name="txttinhtranglich" value="1"/><span class="label-text">Đang dạy</span>
                    </label>
                </div>
                    <div class="animated-radio-button">
                  <label>
                      <input type="radio"  @if(old('txttinhtranglich')==0) checked @endif name="txttinhtranglich" value="0"/><span class="label-text">Chưa dạy</span>
                    </label>
                </div>
                  </div>
            </div>
            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Thêm mới</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="danhsachlichhoc"><i class="fa fa-fw fa-lg fa-times-circle"></i>Hủy</a>
                </div>
              </div>
            </div> 
            </div> 
          </div>
        </div>
	</form>
@endsection