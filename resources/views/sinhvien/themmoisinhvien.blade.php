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
	<form action="themmoisinhvienprocess" method="post" class="form_horizontal">
		<input type="hidden" name="_token" value="{{csrf_token()}}" />
		<div class="container">
          <div class="tile">
          	<h3 class="text-center">Thêm mới sinh viên</h3>
            <div class="tile-body">
            <div class="form-group row">
                  <label class="control-label col-md-2">Họ và tên</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="txttensv" placeholder="Nhập họ và tên" value="{{old('txttensv')}}" required/>
                  </div>
            </div>
            <div class="form-group row">
              <label class="control-label col-md-2">Tên lớp</label>
              <div class="col-md-8">
                  <select name="ddllop" class="form-control" required>
                    @foreach($arrlop as $objlop)
                      <option value="{{$objlop->malop}}">{{$objlop->tenlop}}</option>
                    @endforeach 
                  </select>
                </div>  
            </div>
            <div class="form-group row">
                  <label class="control-label col-md-2">Ngày sinh</label>
                  <div class="col-md-8">
                    <input class="form-control " type="date" name="txtngaysinhsv" value="{{old('txtngaysinhsv')}}" required/>
                  </div>
            </div>
            <div class="form-group row">
                  <label class="control-label col-md-2">Giới tính</label>
                  <div class="col-md-9">
                    <div class="animated-radio-button">
             			<label>
                			<input type="radio" @if(old('txtgioitinhsv')==1) checked @endif name="txtgioitinhsv" value="1"/><span class="label-text">Nam</span>
              			</label>
           	 		</div>
                    <div class="animated-radio-button">
             			<label>
                			<input type="radio" @if(old('txtgioitinhsv')==0) checked @endif name="txtgioitinhsv" value="0"/><span class="label-text">Nữ</span>
              			</label>
           	 		</div>
                  </div>
            </div>
           	<div class="form-group row">
                  <label class="control-label col-md-2">Địa chỉ</label>
                  <div class="col-md-8">
                    <input class="form-control" rows="4" name="txtdiachisv" placeholder="Nhập địa chỉ" value="{{old('txtdiachisv')}}" required/>
                  </div>
            </div>
            <div class="form-group row">
                  <label class="control-label col-md-2">Số điện thoại</label>
                  <div class="col-md-8">
                    <input class="form-control " type="text" name="txtsodienthoaisv" placeholder="Nhập số điện thoại" value="{{old('txtsodienthoaisv')}}" required/>
                  </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-md-2">Email</label>
                  <div class="col-md-8">
                    <input class="form-control " type="email" name="txtemailsv" placeholder="Nhập email" value="{{old('txtemailsv')}}" required/>
                  </div>  
            </div>
            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Thêm mới</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="danhsachsinhvien"><i class="fa fa-fw fa-lg fa-times-circle"></i>Hủy</a>
                </div>
              </div>
            </div> 
            </div> 
          </div>
        </div>
	</form>
@endsection