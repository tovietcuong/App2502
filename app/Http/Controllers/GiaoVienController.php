<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Validator;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\nganhhocmodel;

use App\sinhvienmodel;

use App\lophocmodel;

use App\monhocmodel;

use App\giaovienmodel;



class GiaoVienController extends Controller
{
	public function danhsachgiaovien()
	{
		$arrgv=giaovienmodel::getAll();
		return view("giaovien.danhsachgiaovien",["arrgv"=>$arrgv]);
	}

    public function suagiaovien(Request $request)
	{
		$magv=$request->magv;
		$objgv=giaovienmodel::getById($magv);
		return view("giaovien.suagiaovien",["objgv" =>$objgv]);
	}
	public function suagiaovienprocess(Request $request)
	{
		$messages = [
		    // 'required' 	=> 'Trường :attribute bắt buộc nhập.', nếu muốn thay thế 
		    'regex'	=> 'Số điện thoại sai định dạng ',

		];
		$validator = Validator::make($request->all(), [
            'txtsodienthoaigv' => ['regex:/(\\+84|0)\\d{9,10}/']
        ], $messages);

		$magv=$request->txtmagv;
        if ($validator->fails()) {
            return redirect()->route('suagiaovien',['magv'=>$magv])
                    ->withErrors($validator)
                    ->withInput();
        } else {

		$objgv = new giaovienmodel();
		$objgv->magv=$request->txtmagv;
		$objgv->tengv=$request->txttengv;
		$objgv->ngaysinh=$request->txtngaysinhgv;
		$objgv->gioitinh=$request->txtgioitinhgv;
		$objgv->diachi=$request->txtdiachigv;
		$objgv->sodienthoai=$request->txtsodienthoaigv;
		$objgv->email=$request->txtemailgv;
		$objgv->taikhoan=$request->txttaikhoangv;
		$objgv->matkhau=$request->txtmatkhaugv;
		$objgv->tinhtranggv=$request->txttinhtranggv;
		giaovienmodel::updategv($objgv);
		return redirect("admin/danhsachgiaovien");
	}
}
	public function themmoigiaovien()
	{
		return view("giaovien.themmoigiaovien");
	}
	public function themmoigiaovienprocess(Request $request)
	{
				$messages = [
		    // 'required' 	=> 'Trường :attribute bắt buộc nhập.', nếu muốn thay thế 
		    'unique'	=> 'Tài khoản đã tồn tại',
		    'regex'	=> 'Số điện thoại sai định dạng ',

		];
		$validator = Validator::make($request->all(), [
            'txttaikhoangv' => 'unique:tbl_giaovien,taikhoan',
            'txtsodienthoaigv' => ['regex:/(\\+84|0)\\d{9,10}/']
        ], $messages);

        if ($validator->fails()) {
            return redirect('admin/themmoigiaovien')
                    ->withErrors($validator)
                    ->withInput();
        } else {

		$objgv=new giaovienmodel();
		$objgv->tengv=$request->txttengv;
		$objgv->ngaysinh=$request->txtngaysinhgv;
		$objgv->gioitinh=$request->txtgioitinhgv;
		$objgv->diachi=$request->txtdiachigv;
		$objgv->sodienthoai=$request->txtsodienthoaigv;
		$objgv->email=$request->txtemailgv;
		$objgv->taikhoan=$request->txttaikhoangv;
		$objgv->matkhau=$request->txtmatkhaugv;	
		$objgv->tinhtranggv=$request->txttinhtranggv;	
		giaovienmodel::insertgv($objgv);
		return redirect("admin/danhsachgiaovien");
	}
}
	public function xoagiaovien(Request $request)
	{
		$magv=$request->magv;
		giaovienmodel::deletegv($magv);
		return redirect("admin/danhsachgiaovien");
	}



	public function index()
	{
		$countChuyenNganh=count(nganhhocmodel::getAll());
		$countLopHoc=count(lophocmodel::getAll());
		$countMonHoc=count(monhocmodel::getAll());
		$countSinhVien=count(sinhvienmodel::getAll());
		return view("giaovien.index",['songanhhoc'=>$countChuyenNganh,'solophoc'=>$countLopHoc,'somonhoc'=>$countMonHoc,'sosinhvien'=>$countSinhVien]);
	}
}
