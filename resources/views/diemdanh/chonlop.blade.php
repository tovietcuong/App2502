@extends('master')
@section('main')
  <form action="{{ route('chonmon') }}" method="get">
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


  {{--  <form action="{{ route('chonmon') }}" method="get">
  Chọn lớp: <select id="malop" name="malop" >
    <option disabled selected>Chọn</option>
    @foreach($dslop as $lop)
    <option value="{{$lop->malop}}">{{$lop->tenlop}}</option>
    @endforeach
  </select>
</form>
@endsection
@push('bottom')
<script>
  $(document).ready(function(){
    $("#malop").change(function(){
      $('form').submit();
    })
  })
</script> --}}
@endpush