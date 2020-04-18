@extends('master')
@section('main')
	<form action="sualophocprocess" method="post" class="form_horizontal">
		<input type="hidden" name="_token" value="{{csrf_token()}}" />
		<div class="container">
          <div class="tile">
          	<h3 class="text-center">Cập nhật lớp học</h3>
            <div class="tile-body">
            <div class="form-group row">
                  <label class="control-label col-md-2">Mã lớp học</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="txtmalop" value="{{$objlop->malop}}" readonly />
                  </div>
            </div>	
            <div class="form-group row">
                  <label class="control-label col-md-2">Tên lớp học</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="txttenlop" value="{{$objlop->tenlop}}"  />
                  </div>
            </div>
            <div class="form-group row">
              <label class="control-label col-md-2">Tên Ngành</label>
              <div class="col-md-8">
                  <select name="ddlnganh" class="form-control">
                    @foreach($arrnganh as $objnganh)
                      <option value="{{$objnganh->manganh}}" @if($objnganh->manganh==$objlop->manganh) selected @endif>{{$objnganh->tennganh}}</option>
                    @endforeach 
                  </select>
                </div>  
            </div>
            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Cập nhật</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="danhsachlophoc"><i class="fa fa-fw fa-lg fa-times-circle"></i>Hủy</a>
                </div>
              </div>
            </div> 
            </div> 
          </div>
        </div>
	</form>
@endsection