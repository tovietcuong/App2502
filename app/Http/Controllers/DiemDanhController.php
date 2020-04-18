<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Validator;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\diemdanhmodel;

use App\lichhocmodel;

use App\lophocmodel;

use App\giaovienmodel;

use App\monhocmodel;

use App\sinhvienmodel;


class DiemDanhController extends Controller
{
	public function danhsachdiemdanh()
	{
		$arrdiemdanh=diemdanhmodel::getAll();
		return view("diemdanh.danhsachdiemdanh",['arrdiemdanh'=>$arrdiemdanh]);
	}

    public function suadiemdanh(Request $request)
	{
		$madiemdanh=$request->madiemdanh;
		$objdiemdanh=diemdanhmodel::getById($madiemdanh);
		return view("diemdanh.suadiemdanh",['objdiemdanh' =>$objdiemdanh]);
	}
	public function suadiemdanhprocess(Request $request)
	{
		$objdiemdanh=new diemdanhmodel();
		$objdiemdanh->madiemdanh=$request->txtmadiemdanh;
		// $objdiemdanh->malich=$request->txtmalich;
		$objdiemdanh->ngay=$request->txtngay;
		$objdiemdanh->giobatdau=$request->txtgiobatdau;
		$objdiemdanh->gioketthuc=$request->txtgioketthuc;
		diemdanhmodel::updatediemdanh($objdiemdanh);
		return redirect("admin/danhsachdiemdanh");
	}
	public function themmoidiemdanh()
	{

		return view("diemdanh.themmoidiemdanh");
	}
	public function themmoidiemdanhprocess(Request $request)
	{
		$messages = [
		    // 'required' 	=> 'Trường :attribute bắt buộc nhập.', nếu muốn thay thế 
		    'regex'	=> 'Mã lịch là số',
		];
		$validator = Validator::make($request->all(), [
            'txtmalich' => ['regex:/\d/']
        ], $messages);

        if ($validator->fails()) {
            return redirect('admin/themmoidiemdanh')
                    ->withErrors($validator)
                    ->withInput();
        } else {

		$objdiemdanh=new diemdanhmodel();
		// $objdiemdanh->magv=$request->ddlgv;
		// $objdiemdanh->mamonhoc=$request->ddlmonhoc;
		// $objdiemdanh->malop=$request->ddllop;
		$objdiemdanh->malich=$request->txtmalich;
		$objdiemdanh->ngay=$request->txtngay;
		$objdiemdanh->giobatdau=$request->txtgiobatdau;
		$objdiemdanh->gioketthuc=$request->txtgioketthuc;
		diemdanhmodel::insertdiemdanh($objdiemdanh);
		return redirect("admin/danhsachdiemdanh");
	}
}
	public function xoadiemdanh(Request $request)
	{
		$madiemdanh=$request->madiemdanh;
		diemdanhmodel::deletediemdanh($madiemdanh);
		return redirect("admin/danhsachdiemdanh");
	}
	
  
  
  
  
	// //ham cua quan ly sinh vien
 //  public function chonlop()
 //   {
 //   $ds= lophocmodel::getAll();
 //    return view("diemdanh.chonlop",['dslop'=>$ds]);
 //   }
 //   public function chonmon(Request $rq)
 //   {  
 //      $malop = $rq->malop; 
 //      $dsmonhoc=monhocmodel::getMonHocByMaLop($malop);
 //      return view("diemdanh.chonmon",[
 //        'dsmonhoc'=>$dsmonhoc,
 //        'malop'=>$malop
 //      ]);
 //   }
 //  public function diemdanh(Request $rq)
 //  {
 //    $malop = $rq->malop;
 //    $mamonhoc = $rq->mamonhoc;
 //    $ngay=$rq->ngay;
 //    $array_diem_danh =diemdanhmodel::kiemtradiemdanh($malop,$mamonhoc,$ngay);
 //    $array = array();
 //    if(count($array_diem_danh)>0)
 //    {
 //       foreach ($array_diem_danh as $each) {
 //         $array[$each->masv] = $each->tinhtrang;
 //       }
 //    }
 //    $array_sinh_vien = sinhvienmodel::getArraySinhVienByLop($malop);
 //    return view("diemdanh.diemdanh",[
 //        'malop'=>$malop,
 //        'mamonhoc'=>$mamonhoc,
 //        'ngay'=>$ngay,
 //        'array'=>$array,
 //        'array_sinh_vien'=>$array_sinh_vien 
 //      ]);
 //  }
 //  public function diemdanhinsert(Request $rq)
 //  {
 //    $malop = $rq->malop;
 //    $mamonhoc = $rq->mamonhoc;
 //    $ngay = $rq->ngay;
 //    $masv = $rq->masv;
 //    $tinhtrang = $rq->tinhtrang;
 //    diemdanhmodel::insert($mamonhoc,$malop,$ngay,$masv,$tinhtrang);
 //  }
}
