<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class thongkemodel extends Model
{
    static function getAll($malop,$mamonhoc,$magv)
    {    	
		$arr=[];
		$arrngay = DB::select("select DISTINCT ngay from tbl_diemdanh where mamonhoc='$mamonhoc' and magv = '$magv' and malop = '$malop'");
		foreach($arrngay as $ngay)
		{
			$arrsv = DB::select("select * from tbl_diemdanh join tbl_diemdanhchitiet on tbl_diemdanh.madiemdanh = tbl_diemdanhchitiet.madiemdanh where tbl_diemdanh.ngay = '$ngay->ngay' and mamonhoc='$mamonhoc' and magv = '$magv' and malop = '$malop' ");
			foreach($arrsv as $sv) 
			{
				$arr[]=[
					'ngay'=>$ngay->ngay,
					'diemdanh'=>$sv,
				];
			}
		}
		return $arr;
    }
    static function ngay($malop,$mamonhoc,$magv)
    {
    	$arrngay = DB::select("select DISTINCT ngay from tbl_diemdanh where mamonhoc='$mamonhoc' and magv = '$magv' and malop = '$malop'");
    	return $arrngay;
    }
}
