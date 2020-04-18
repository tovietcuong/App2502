@extends('master')
@section('main')
<div class="app-title">
        <div>
          <h1><i class="fa fa-bar-chart-o"></i>Thống kê</h1>
        </div>
      </div>
  <form action="{{ route('admin.chonmon') }}" method="get">
    <div class="form-group row">
              <label class="control-label col-md-2">Chọn lớp</label>
              <div class="col-md-8">
 <select id="malop" onchange="submit()" name="malop" class="form-control" >
    <option disabled selected>Chọn</option>
    @foreach($dslop as $lop)
    <option value="{{$lop->malop}}">{{$lop->tenlop}}</option>
    @endforeach
  </select>
</div>
</div>
</form>
@endsection
@push('bottom')
<script>
  $(document).ready(function(){
    $("#malop").change(function(){
      $('form').submit();
    })
  })
</script>