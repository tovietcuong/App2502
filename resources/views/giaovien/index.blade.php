@extends('master')
@section('main')
{{-- XIN CHÀO ADMIN --}}
{{-- <main class="app-content"> --}}
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Trang chủ</h1>
          <p>Xin chào giáo viên</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-gears fa-3x"></i>
            <div class="info">
              <h4>Chuyên ngành</h4>
              <p><b>{{$songanhhoc}}</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-university fa-3x"></i>
            <div class="info">
             <h4>Lớp học</h4>
              <p><b>{{$solophoc}}</b></p> 
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-graduation-cap fa-3x"></i>
            <div class="info">              
              <h4>Sinh viên</h4>
              <p><b>{{$sosinhvien}}</b></p>
            </div>
          </div>
        </div>
{{--         <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-check fa-3x"></i>
            <div class="info">
              <h4>Điểm danh</h4>
              <p><b>500</b></p>
            </div>
          </div>
        </div> --}}
{{--       </div> --}}
@endsection