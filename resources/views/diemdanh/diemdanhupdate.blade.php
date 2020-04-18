@extends('masterPage')
@section("mainContent")
<form action="{{ route('diemdanhinsert') }}" method="get">
    Lớp: <input type="text" name="malop" value="{{ $malop }}" readonly><br>
    Môn học<input type="text" name="mamonhoc" value="{{ $mamonhoc }}" readonly><br>
 Ngày <input type="date" name="ngay" value="{{ $ngay }}" /><br/>
  <table>
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
            <div class="animated-radio-button">
              <label>
                <span class="label-text">Đi Học</span>
                <input type="radio" name="tinhtrang[{{ $key }}]" checked value="1">
              </label>
            </div>  
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
  <button>OK</button>
</form>
@endsection

