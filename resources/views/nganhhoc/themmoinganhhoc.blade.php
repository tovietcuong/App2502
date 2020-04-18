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
	<form action="themmoinganhhocprocess" method="post" class="form_horizontal">
		<input type="hidden" name="_token" value="{{csrf_token()}}" />
		<div class="container">
          <div class="tile">
          	<h3 class="text-center">Thêm mới ngành học</h3>
            <div class="tile-body">
            <div class="form-group row">
                  <label class="control-label col-md-2">Tên ngành học</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="txttennganh" value="{{old('txttennganh')}}" required />
                  </div>
            </div>
            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Thêm mới</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="danhsachnganhhoc"><i class="fa fa-fw fa-lg fa-times-circle"></i>Hủy</a>
                </div>
              </div>
            </div> 
            </div> 
          </div>
        </div>
	</form>
@endsection