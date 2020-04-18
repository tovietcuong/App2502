@extends('master')
@section('main')
{{-- @if (count($errors) > 0)
      <div class="alert alert-danger">
         Có lỗi xuất hiện trong quá trình !!
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
@endif  --}}
  <form action="suaadminprocess" method="post" class="form_horizontal">
    <input type="hidden" name="_token" value="{{csrf_token()}}" />
    <div class="container">
          <div class="tile">
            <h3 class="text-center">Cập nhật quản trị viên</h3>
            <div class="tile-body">
            <div class="form-group row">
                  <label class="control-label col-md-2">Mã admin</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="txtmaad" value="{{$objad->maadmin}}" readonly />
                  </div>
            </div>  
            <div class="form-group row">
                  <label class="control-label col-md-2">Họ và tên</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="txttenad" value="{{$objad->tenadmin}}" placeholder="Nhập họ và tên" required />
                  </div>
            </div>
            <div class="form-group row">
                  <label class="control-label col-md-2">Ngày sinh</label>
                  <div class="col-md-8">
                    <input class="form-control " type="date" name="txtngaysinhad" value="{{$objad->ngaysinh}}" required/>
                  </div>
            </div>
            <div class="form-group row">
                  <label class="control-label col-md-2">Giới tính</label>
                  <div class="col-md-9">
                    <div class="animated-radio-button">
                  <label>
                      <input type="radio" name="txtgioitinhad" value="1" @if($objad->gioitinh==1) checked @endif/><span class="label-text">Nam</span>
                    </label>
                </div>
                    <div class="animated-radio-button">
                  <label>
                      <input type="radio" name="txtgioitinhad" value="0" @if($objad->gioitinh==0) checked @endif/><span class="label-text">Nữ</span>
                    </label>
                </div>
                  </div>
            </div>
            <div class="form-group row">
                  <label class="control-label col-md-2">Địa chỉ</label>
                  <div class="col-md-8">
                    <input class="form-control" rows="4" name="txtdiachiad" value="{{$objad->diachi}}" placeholder="Nhập địa chỉ" required/>
                  </div>
            </div>
            <div class="form-group row">
                  <label class="control-label col-md-2">Số điện thoại</label>
                  <div class="col-md-8">
                    <input class="form-control " type="text" name="txtsodienthoaiad" value="{{$objad->sodienthoai}}"   placeholder="Nhập số điện thoại" required/>
                  </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-md-2">Email</label>
                  <div class="col-md-8">
                    <input class="form-control " type="email" name="txtemailad" value="{{$objad->email}}" placeholder="Nhập email" required/>
                  </div>  
            </div>
            <div class="form-group row">
                  <label class="control-label col-md-2">Tài khoản</label>
                  <div class="col-md-8">
                    <input class="form-control " type="text" name="txttaikhoanad" value="{{$objad->taikhoan}}" placeholder="Nhập tài khoản" readonly required/>
                  </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-md-2">Mật khẩu</label>
                  <div class="col-md-8">
                    <input class="form-control " type="password" name="txtmatkhauad" value="{{$objad->matkhau}}" placeholder="Nhập mật khẩu" required/>
                  </div>  
            </div>
            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Cập nhật</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="danhsachadmin"><i class="fa fa-fw fa-lg fa-times-circle"></i>Hủy</a>
                </div>
              </div>
            </div> 
            </div> 
          </div>
        </div>
  </form>
@endsection