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
	<form action="themmoigiaovienprocess" method="post" class="form_horizontal">
		<input type="hidden" name="_token" value="{{csrf_token()}}" />
		<div class="container">
          <div class="tile">
          	<h3 class="text-center">Thêm mới giáo viên</h3>
            <div class="tile-body">
            <div class="form-group row">
                  <label class="control-label col-md-2">Họ và tên</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="txttengv" placeholder="Nhập họ và tên" value="{{old('txttengv')}}" required />
                  </div>
            </div>
            <div class="form-group row">
                  <label class="control-label col-md-2">Ngày sinh</label>
                  <div class="col-md-8">
                    <input class="form-control " type="date" name="txtngaysinhgv" value="{{old('txtngaysinhgv')}}" required />
                  </div>
            </div>
            <div class="form-group row">
                  <label class="control-label col-md-2">Giới tính</label>
                  <div class="col-md-9">
                    <div class="animated-radio-button">
             			<label>
                			<input type="radio" @if(old('txtgioitinhgv')==1) checked @endif name="txtgioitinhgv" value="1"/><span class="label-text">Nam</span>
              			</label>
           	 		</div>
                    <div class="animated-radio-button">
             			<label>
                			<input type="radio" @if(old('txtgioitinhgv')==0) checked @endif name="txtgioitinhgv" value="0"/><span class="label-text">Nữ</span>
              			</label>
           	 		</div>
                  </div>
            </div>
           	<div class="form-group row">
                  <label class="control-label col-md-2">Địa chỉ</label>
                  <div class="col-md-8">
                    <input class="form-control" rows="4" name="txtdiachigv" placeholder="Nhập địa chỉ" value="{{old('txtdiachigv')}}" required/>
                  </div>
            </div>
            <div class="form-group row">
                  <label class="control-label col-md-2">Số điện thoại</label>
                  <div class="col-md-8">
                    <input class="form-control " type="text" name="txtsodienthoaigv" placeholder="Nhập số điện thoại" value="{{old('txtsodienthoaigv')}}" required regex/>
                  </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-md-2">Email</label>
                  <div class="col-md-8">
                    <input class="form-control " type="email" name="txtemailgv" placeholder="Nhập email" value="{{old('txtemailgv')}}" required/>
                  </div>  
            </div>
            <div class="form-group row">
                  <label class="control-label col-md-2">Tài khoản</label>
                  <div class="col-md-8">
                    <input class="form-control " type="text" name="txttaikhoangv" placeholder="Nhập tài khoản" value="{{old('txttaikhoangv')}}" required />
                  </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-md-2">Mật khẩu</label>
                  <div class="col-md-8">
                    <input class="form-control " type="password" name="txtmatkhaugv" placeholder="Nhập mật khẩu" value="{{old('txtmatkhaugv')}}" required/>
                  </div>  
            </div>
            <div class="form-group row">
                  <label class="control-label col-md-2">Tình trạng</label>
                  <div class="col-md-9">
                    <div class="animated-radio-button">
             			<label>
                			<input type="radio" @if(old('txttinhtranggv')==1) Selected @endif name="txttinhtranggv" value="1"/><span class="label-text">Đang dạy</span>
              			</label>
           	 		</div>
                    <div class="animated-radio-button">
             			<label>
                			<input type="radio" @if(old('txttinhtranggv')==0) Selected @endif name="txttinhtranggv" value="0"/><span class="label-text">Nghỉ dạy</span>
              			</label>
           	 		</div>
                  </div>
            </div>
            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Thêm mới</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="danhsachgiaovien"><i class="fa fa-fw fa-lg fa-times-circle"></i>Hủy</a>
                </div>
              </div>
            </div> 
            </div> 
          </div>
        </div>
	</form>
@endsection