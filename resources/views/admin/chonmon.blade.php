@extends('master')
@section('main')
<div class="app-title">
        <div>
          <h1><i class="fa fa-bar-chart-o"></i>Thống kê</h1>
        </div>
      </div>
<form action="{{ route('admin.thongke') }}" method="get">
                    <input type="hidden" name="malop" value="{{ $malop }}">
    <div class="form-group row">
              <label class="control-label col-md-2">Môn học</label>
              <div class="col-md-8">
	<select name="mamonhoc" id="mamonhoc" class="form-control">
    @foreach($dsmonhoc as $monhoc)
    <option value="{{$monhoc->mamonhoc}}">{{$monhoc->tenmonhoc}}</option>
    @endforeach
  </select>
</div>
</div>
    <div class="form-group row">
              <label class="control-label col-md-2">Giáo viên</label>
              <div class="col-md-8">
    <select name="magv" id="magv" class="form-control">
      @foreach($dsgv as $giaovien)
        <option value="{{$giaovien->magv}}">{{$giaovien->tengv}}</option>
      @endforeach
    </select>
    </div>
</div>
    <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Xác nhận</button>
                </div>
              </div>
            </div>
</form>
@endsection