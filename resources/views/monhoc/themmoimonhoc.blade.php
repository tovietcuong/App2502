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
	<form action="themmoimonhocprocess" method="post" class="form_horizontal">
		<input type="hidden" name="_token" value="{{csrf_token()}}" />
		<div class="container">
          <div class="tile">
          	<h3 class="text-center">Thêm mới môn học </h3>
            <div class="tile-body">
            <div class="form-group row">
                  <label class="control-label col-md-2">Tên môn học</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="txttenmonhoc" value="{{old('txttenmonhoc')}}" required />
                  </div>
            </div>
            <div class="form-group row">
            	<label class="control-label col-md-2">Tên Ngành</label>
            	<div class="col-md-8">
                  <select name="ddlnganh" class="form-control">
                  	@foreach($arrnganh as $objnganh)
                  		<option value="{{$objnganh->manganh}}">{{$objnganh->tennganh}}</option>
                  	@endforeach	
                  </select>
                </div>  
            </div>
            <div class="form-group row">
                  <label class="control-label col-md-2">Thời lượng học</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="txtthoiluonghoc" value="{{old('txtthoiluonghoc')}}" required />
                  </div>
            </div>
            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Thêm mới</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="danhsachmonhoc"><i class="fa fa-fw fa-lg fa-times-circle"></i>Hủy</a>
                </div>
              </div>
            </div> 
            </div> 
          </div>
        </div>
	</form>
@endsection