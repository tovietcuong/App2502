@extends('master')
@section('main')

<div class="app-title">
	<div class="container">
<div class="col-5">     
        <div id="comment">
          <h1><i class="fa fa-bar-chart-o"></i>Thống kê điểm danh</h1>
          <table style="width: 120%" >
          	<tr>
          	<td>_ : Đi học</td>
          	 <td> K : Nghỉ</td>
          	 <td> P : Có phép</td>
          	 <td> M : Muộn</td>
          	</tr>
          	<tr>
          	<p><strong>Tên lớp:{{$lop->tenlop}}</strong></p>	
			<p><strong>Tên môn học:{{$monhoc->tenmonhoc}}</strong></p>
			<p><strong>Tên giáo viên:{{$gv->tengv}}</strong></p>
          	</tr>	
          </table>	  
        </div>
      </div>
{{-- <div class="col-7">
	<div  class="pull-right" > --}}

</div>
</div>
</div>
      
      <div class="row">
      <input type='button' id='btn' class="btn btn-primary" value='Print' onclick='printDiv();'>
      </div>
      <div class="row">
        <div class="container"></div>
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="DivIdToPrint">
              	<tr>
                <thead>
                  <tr>
                    <th>Mã sinh viên</th>
					<th>Tên sinh viên</th>
					@foreach($arrngay as $obj)
					<th>{{$obj->ngay}}</th>
					@endforeach
                  </tr>
                </thead>
                <tbody>
                	@foreach($array_sinh_vien as $key => $value )
                	<tr>
	                	<td class="text-center">{{ $value->masv }}</td>
	        			<td class="text-center">{{ $value->tensv }}</td>
	        			<?php 
	        				$i=$key;
	        			?>
        				@for($k = 0; $k < count($arr); $k++ )
							<?php	
								if($i == $k){
								
								if($i <= count($arr)){
									$i += count($array_sinh_vien);
									
							?>
							<td class="text-center">
								@switch($arr[$k]['diemdanh']->tinhtrang)
									@case(1)
										{{"_"}}
										@break
									@case(2)
										{{"M"}}
										@break
									@case(3)
										{{"K"}}
										@break
									@case(4)
										{{"P"}}
										@break
								@endswitch
							</td>
							<?php  
									}	
								} 
							?>
						@endfor	
					</tr>
					@endforeach		
                </tbody> 
              </table>
            </div>
          </div>
        </div>
{{--         <p>Số sinh viên{{count($array_sinh_vien)}}</p>
        <p>Số điểm danh{{count($arr)}}</p> --}}
@endsection
@section("script")
	<script type="text/javascript">
		function printDiv() 
		{

			var divToPrint=document.getElementById('DivIdToPrint');
			var divToPrint1=document.getElementById('comment');

			var newWin=window.open('','Print-Window');

			newWin.document.open();

			newWin.document.write('<html><body onload="window.print()">'+'<p >'+divToPrint1.innerHTML+'</p>'+'<table style="width:100%" border="1px">'+divToPrint.innerHTML+'</table></body></html>');

			newWin.document.close();

			setTimeout(function(){newWin.close();},10);

		}
	</script>
	{{-- <script src="{{asset('Datatable/datatables.min.js')}}"></script> --}}
@endsection