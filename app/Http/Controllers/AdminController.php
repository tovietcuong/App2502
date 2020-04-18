<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Validator;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\adminmodel;

use App\giaovienmodel;

use App\sinhvienmodel;

use App\lophocmodel;

use App\monhocmodel;



class adminController extends Controller
{
	public function danhsachadmin()
	{
		$arrad=adminmodel::getAll();
		return view("admin.danhsachadmin",["arrad"=>$arrad]);
	}

    public function suaadmin(Request $request)
	{
		$maad=$request->maad;
		$objad=adminmodel::getById($maad);
		return view("admin.suaadmin",["objad" =>$objad]);
	}

	// public function thongtinadmin(Request $request)
	// {
	// 	$maad=$request->maad;
	// 	$objad=adminmodel::getById($maad);
	// 	return view("admin.thongtinadmin",["objad" =>$objad]);
	// }


	public function suaadminprocess(Request $request)
	{
		$messages = [
		    // 'required' 	=> 'Trường :attribute bắt buộc nhập.', nếu muốn thay thế 
		    'regex'	=> 'Số điện thoại sai định dạng ',

		];
		$validator = Validator::make($request->all(), [
            'txtsodienthoaiad' => ['regex:/(\\+84|0)\\d{9,10}/']
        ], $messages);

		$maad=$request->txtmaad;
        if ($validator->fails()) {
            return redirect()->route('suaadmin',['maad'=>$maad])
                    ->withErrors($validator)
                    ->withInput();
        } else {
		$objad=new adminmodel();
		$objad->maad=$request->txtmaad;
		$objad->tenad=$request->txttenad;
		$objad->ngaysinh=$request->txtngaysinhad;
		$objad->gioitinh=$request->txtgioitinhad;
		$objad->diachi=$request->txtdiachiad;
		$objad->sodienthoai=$request->txtsodienthoaiad;
		$objad->email=$request->txtemailad;
		$objad->taikhoan=$request->txttaikhoanad;
		$objad->matkhau=$request->txtmatkhauad;
		adminmodel::updatead($objad);
		return redirect("admin/danhsachadmin");
	}
	}
	public function themmoiadmin()
	{
		return view("admin.themmoiadmin");
	}
	public function themmoiadminprocess(Request $request)
	{
		$messages = [
		    // 'required' 	=> 'Trường :attribute bắt buộc nhập.', nếu muốn thay thế 
		    'unique'	=> 'Tài khoản đã tồn tại',
		    'regex'	=> 'Số điện thoại sai định dạng ',

		];
		$validator = Validator::make($request->all(), [
            'txttaikhoanad' => 'unique:tbl_admin,taikhoan',
            'txtsodienthoaiad' => ['regex:/(\\+84|0)\\d{9,10}/']
        ], $messages);

        if ($validator->fails()) {
            return redirect('admin/themmoiadmin')
                    ->withErrors($validator)
                    ->withInput();
        } else {

		$objad=new adminmodel();
		$objad->tenadmin=$request->txttenad;
		$objad->ngaysinh=$request->txtngaysinhad;
		$objad->gioitinh=$request->txtgioitinhad;
		$objad->diachi=$request->txtdiachiad;
		$objad->sodienthoai=$request->txtsodienthoaiad;
		$objad->email=$request->txtemailad;
		$objad->taikhoan=$request->txttaikhoanad;
		$objad->matkhau=$request->txtmatkhauad;	
		adminmodel::insertad($objad);
		return redirect("admin/danhsachadmin");
	}
}
	public function xoaadmin(Request $request)
	{
		$maad=$request->maad;
		adminmodel::deletead($maad);
		return redirect("admin/danhsachadmin");
	}

	public function __construct()
	{
		$this->middleware('loginAdmin');
	}

	public function index()
	{
		$countGiaoVien=count(giaovienmodel::getAll());
		$countLopHoc=count(lophocmodel::getAll());
		$countMonHoc=count(monhocmodel::getAll());
		$countSinhVien=count(sinhvienmodel::getAll());
		return view("admin.index",['sogiaovien'=>$countGiaoVien,'solophoc'=>$countLopHoc,'somonhoc'=>$countMonHoc,'sosinhvien'=>$countSinhVien]);
	}

	

}
