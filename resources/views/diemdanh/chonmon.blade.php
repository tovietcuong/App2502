@extends('master')
@section('main')
<form action="{{ route('diemdanh') }}" method="get">
{{--     <div class="form-group row">
                  <label class="control-label col-md-2">Tên lớp học</label>
                  <div class="col-md-8"> --}}
                    <input type="hidden" name="malop" value="{{ $malop }}">
{{--                   </div>
            </div> --}}
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
   <div class="form-group row">
                  <label class="control-label col-md-2">Ngày</label>
                  <div class="col-md-8">
                    <input class="form-control" type="date" name="ngay" value="{{ date("Y-m-d") }}" required />
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




{{-- <form action="{{ route('diemdanh') }}" method="get">
  <input type="hidden" name="malop" value="{{ $malop }}">
  Môn học:
    <select name="mamonhoc" id="mamonhoc">
      @foreach($dsmonhoc as $monhoc)
        <option value="{{$monhoc->mamonhoc}}">{{$monhoc->tenmonhoc}}</option>
      @endforeach
    </select><br/>
  Giáo viên:
    <select name="magv" id="magv">
      @foreach($dsgv as $giaovien)
        <option value="{{$giaovien->magv}}">{{$giaovien->tengv}}</option>
      @endforeach
    </select><br/>
  Ngày: <input type="date" name="ngay" value="{{ date("Y-m-d") }}" /><br/>
    <button>Ok</button>
</form> --}}
@endsection