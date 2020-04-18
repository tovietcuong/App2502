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
	<form action="suagiaovienprocess" method="post" class="form_horizontal">
		<input type="hidden" name="_token" value="{{csrf_token()}}" />
		<div class="container">
          <div class="tile">
          	<h3 class="text-center">Cập nhật giáo viên</h3>
            <div class="tile-body">
            <div class="form-group row">
                  <label class="control-label col-md-2">Mã giáo viên</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="txtmagv" value="{{$objgv->magv}}" readonly />
                  </div>
            </div>	
            <div class="form-group row">
                  <label class="control-label col-md-2">Họ và tên</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="txttengv" value="{{$objgv->tengv}}" placeholder="Nhập họ và tên" required/>
                  </div>
            </div>
            <div class="form-group row">
                  <label class="control-label col-md-2">Ngày sinh</label>
                  <div class="col-md-8">
                    <input class="form-control " type="date" name="txtngaysinhgv" value="{{$objgv->ngaysinh}}" required/>
                  </div>
            </div>
            <div class="form-group row">
                  <label class="control-label col-md-2">Giới tính</label>
                  <div class="col-md-9">
                    <div class="animated-radio-button">
             			<label>
                			<input type="radio" name="txtgioitinhgv" value="1" @if($objgv->gioitinh==1) checked @endif/><span class="label-text">Nam</span>
              			</label>
           	 		</div>
                    <div class="animated-radio-button">
             			<label>
                			<input type="radio" name="txtgioitinhgv" value="0" @if($objgv->gioitinh==0) checked @endif/><span class="label-text">Nữ</span>
              			</label>
           	 		</div>
                  </div>
            </div>
           	<div class="form-group row">
                  <label class="control-label col-md-2">Địa chỉ</label>
                  <div class="col-md-8">
                    <input class="form-control" rows="4" name="txtdiachigv" value="{{$objgv->diachi}}" placeholder="Nhập địa chỉ" required/>
                  </div>
            </div>
            <div class="form-group row">
                  <label class="control-label col-md-2">Số điện thoại</label>
                  <div class="col-md-8">
                    <input class="form-control " type="text" name="txtsodienthoaigv" value="{{$objgv->sodienthoai}}" placeholder="Nhập số điện thoại" required/>
                  </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-md-2">Email</label>
                  <div class="col-md-8">
                    <input class="form-control " type="email" name="txtemailgv" value="{{$objgv->email}}" placeholder="Nhập email" required/>
                  </div>  
            </div>
            <div class="form-group row">
                  <label class="control-label col-md-2">Tài khoản</label>
                  <div class="col-md-8">
                    <input class="form-control " type="text" name="txttaikhoangv" value="{{$objgv->taikhoan}}" placeholder="Nhập tài khoản" readonly required/>
                  </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-md-2">Mật khẩu</label>
                  <div class="col-md-8">
                    <input class="form-control " type="password" name="txtmatkhaugv" value="{{$objgv->matkhau}}" placeholder="Nhập mật khẩu" required/>
                  </div>  
            </div>
            <div class="form-group row">
                  <label class="control-label col-md-2">Tình trạng</label>
                  <div class="col-md-9">
                    <div class="animated-radio-button">
             			<label>
                			<input type="radio" name="txttinhtranggv" value="1" @if($objgv->tinhtranggv==1) checked @endif/><span class="label-text">Đang dạy</span>
              			</label>
           	 		</div>
                    <div class="animated-radio-button">
             			<label>
                			<input type="radio" name="txttinhtranggv" value="0" @if($objgv->tinhtranggv==0) checked @endif/><span class="label-text">Nghỉ dạy</span>
              			</label>
           	 		</div>
                  </div>
            </div>
            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Cập nhật</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="danhsachgiaovien"><i class="fa fa-fw fa-lg fa-times-circle"></i>Hủy</a>
                </div>
              </div>
            </div> 
            </div> 
          </div>
        </div>
	</form>
@endsection