@extends('master')
@section('main')
{{-- <form action="{{ route('diemdanhinsert') }}" method="post">
  {{ csrf_field() }}
  <div class="app-title">
    <div class="container">
          <h1><i class="fa fa-th-list"></i>Điểm danh</h1>
    <div class="form-group row">
                  <label class="control-label col-md-2">Tên lớp học</label>
                  <div class="col-md-3">
                    <input  type="hidden" name="malop" value="{{$malop}}" />
                    <label  class="form-control">{{$objlop->tenlop}}</label>
                  </div>
            </div>
    <div class="form-group row">
              <label class="control-label col-md-2">Môn học</label>
              <div class="col-md-3">
  <input   type="hidden" name="mamonhoc" value="{{$mamonhoc}}"  />
  <label  class="form-control">{{$objmonhoc->tenmonhoc}}</label>
</div>
</div>
   <div class="form-group row">
              <label class="control-label col-md-2">Ngày</label>
              <div class="col-md-3">
  <input class="form-control" type="date" name="ngay" value="{{$ngay}}" readonly />
</div>
</div>
Giờ bắt đầu <input type="time" name="giobatdau" value="08:00:00" /><br/>
   Giờ kết thúc <input type="time" name="gioketthuc" value="12:00:00" /><br/>
</div>
</div>
    <div class="row"> 
        <div class="container"></div>
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                     <th>Mã sinh viên</th>
                     <th>Tên sinh viên</th>
                     <th>Tình trạng</th>
                  </tr>
                </thead>
                <tbody>
      
      <tr>
        @foreach($array_sinh_vien as $key => $sinh_vien)
        <tr>
        <td>{{ $sinh_vien->masv }}<input type="hidden" name="masv[{{ $key }}]" value="{{ $sinh_vien->masv }}"></td>
        <td>{{ $sinh_vien->tensv }}</td>
        <td>
          @if(isset($array[$sinh_vien->masv]))
            @if($array[$sinh_vien->masv]==1)
            Đi Học <input type="radio" name="tinhtrang[{{ $key }}]" checked value="1">
            @elseif($array[$sinh_vien->masv]==2)
            Muộn <input type="radio" name="tinhtrang[{{ $key }}]" checked value="2">
            @elseif($array[$sinh_vien->masv]==3)
            Nghỉ <input type="radio" name="tinhtrang[{{ $key }}]" checked value="3">
            @elseif($array[$sinh_vien->masv]==4)
            Có Phép <input type="radio" name="tinhtrang[{{ $key }}]" checked value="4">
            @endif
          @else
            Đi Học <input type="radio" name="tinhtrang[{{ $key }}]" value="1"><br>
            Muộn <input type="radio" name="tinhtrang[{{ $key }}]" value="2"><br>
            Nghỉ <input type="radio" name="tinhtrang[{{ $key }}]" value="3"><br>
            Có Phép <input type="radio" name="tinhtrang[{{ $key }}]" value="4"><br>
          @endif
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
          </div>
        </div>
  <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Xác nhận</button>
                </div>
              </div>
            </div>
</form> --}}


<form action="{{ route('diemdanhinsert') }}" method="post">
  {{ csrf_field() }}
    <input type="hidden" name="malop" value="{{ $malop }}" readonly>
    <input type="hidden" name="mamonhoc" value="{{ $mamonhoc }}" readonly>
    <input type="hidden" name="magv" value="{{ $magv }}" readonly>
       <div class="form-group row">
              <label class="control-label col-md-2">Ngày</label>
              <div class="col-md-3">
  <input class="form-control" type="date" name="ngay" value="{{$ngay}}" readonly />
</div>
</div>
         <div class="form-group row">
              <label class="control-label col-md-2">Giờ bắt đầu</label>
              <div class="col-md-3">
    <input type="time" name="giobatdau" value="08:00:00" class="form-control" />
    </div>
</div>
         <div class="form-group row">
              <label class="control-label col-md-2">Giờ kết thúc</label>
              <div class="col-md-3">
    <input type="time" name="gioketthuc" value="12:00:00" class="form-control"/>
        </div>
</div>
  {{-- <table border="1">
    <thead>
      <tr>
        <th>Mã SV</th>
        <th>Tên SV</th>
        <th>Tình Trạng</th>
      </tr>
    </thead>
    <tbody>
      @foreach($array_sinh_vien as $key => $sinh_vien)
      <tr>
        <td>{{ $sinh_vien->masv }}<input type="hidden" name="masv[{{ $key }}]" value="{{ $sinh_vien->masv }}"></td>
        <td>{{ $sinh_vien->tensv }}</td>
        <td>
          @if(isset($array[$sinh_vien->masv]))
            @if($array[$sinh_vien->masv]==1)
            Đi Học <input type="radio" name="tinhtrang[{{ $key }}]" checked value="1">
            @elseif($array[$sinh_vien->masv]==2)
            Muộn <input type="radio" name="tinhtrang[{{ $key }}]" checked value="2">
            @elseif($array[$sinh_vien->masv]==3)
            Nghỉ <input type="radio" name="tinhtrang[{{ $key }}]" checked value="3">
            @elseif($array[$sinh_vien->masv]==4)
            Có Phép <input type="radio" name="tinhtrang[{{ $key }}]" checked value="4">
            @endif
          @else
            Đi Học <input type="radio" name="tinhtrang[{{ $key }}]" checked value="1"><br>
            Muộn <input type="radio" name="tinhtrang[{{ $key }}]" value="2"><br>
            Nghỉ <input type="radio" name="tinhtrang[{{ $key }}]" value="3"><br>
            Có Phép <input type="radio" name="tinhtrang[{{ $key }}]" value="4"><br>
          @endif
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <button>OK</button>
</form> --}}


{{-- <form action="{{ route('diemdanhinsert') }}" method="post">
  {{ csrf_field() }} --}}
<div class="row">
        <div class="container"></div>
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Mã sinh viên</th>
                    <th>Tên sinh viên</th>
                    <th>Tình Trạng</th>
                  </tr>
                </thead>
                <tbody>
          </tr>
           @foreach($array_sinh_vien as $key => $sinh_vien)
          <tr>
          {{-- <div class="form-group row"> --}}
        <td>{{ $sinh_vien->masv }}<input type="hidden" name="masv[{{ $key }}]" value="{{ $sinh_vien->masv }}"></td>
        <td>{{ $sinh_vien->tensv }}</td>
        <td>
          @if(isset($array[$sinh_vien->masv]))
            @if($array[$sinh_vien->masv]==1)
            Đi Học<input type="radio" name="tinhtrang[{{ $key }}]" checked value="1">  
            @elseif($array[$sinh_vien->masv]==2)
            Muộn <input type="radio" name="tinhtrang[{{ $key }}]" checked value="2">
            @elseif($array[$sinh_vien->masv]==3)
            Nghỉ <input type="radio" name="tinhtrang[{{ $key }}]" checked value="3">
            @elseif($array[$sinh_vien->masv]==4)
            Có Phép <input type="radio" name="tinhtrang[{{ $key }}]" checked value="4">
            @endif
          @else
            {{-- <div class="animated-radio-button">
              <label> --}}
                {{-- <span class="label-text"> --}}Đi Học{{-- </span> --}}
                <input type="radio" name="tinhtrang[{{ $key }}]" checked value="1"></d>
              {{-- </label>
            </div>  --}}   
            Muộn <input type="radio" name="tinhtrang[{{ $key }}]" value="2">
            Nghỉ <input type="radio" name="tinhtrang[{{ $key }}]" value="3">
            Có Phép <input type="radio" name="tinhtrang[{{ $key }}]" value="4">
          @endif
        </td>
         {{--  </div> --}}
      </tr>
      @endforeach
</tbody>
  </table>
  <button class="btn btn-primary" type="submit">Xác nhận</button>
</form>
@endsection