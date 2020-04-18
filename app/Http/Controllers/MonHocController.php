<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Validator;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\monhocmodel;

use App\nganhhocmodel;

class MonHocController extends Controller
{
	public function danhsachmonhoc()
	{
		$arrmonhoc=monhocmodel::getAll();
		return view("monhoc.danhsachmonhoc",['arrmonhoc'=>$arrmonhoc]);
	}

    public function suamonhoc(Request $request)
	{
		$arrnganh = nganhhocmodel::getAll();
		$mamonhoc=$request->mamonhoc;
		$objmonhoc=monhocmodel::getById($mamonhoc);
		return view("monhoc.suamonhoc",['objmonhoc' =>$objmonhoc,'arrnganh'=>$arrnganh]);
	}
	public function suamonhocprocess(Request $request)
	{
		// $messages = [
		//     // 'required' 	=> 'Trường :attribute bắt buộc nhập.', nếu muốn thay thế 
		//     'unique'	=> 'Môn học đã tồn tại',
		//     'regex'	=> 'Thời lượng học là số',

		// ];
		// $validator = Validator::make($request->all(), [
  //           'txtthoiluonghoc' => ['regex:/\d/']
  //       ], $messages);

		// $mamonhoc=$request->mamonhoc;
  //       if ($validator->fails()) {
  //           return redirect()->route('suamonhoc',['mamonhoc'=>$mamonhoc])
  //                   ->withErrors($validator)
  //                   ->withInput();
  //       } else {
		$objmonhoc=new monhocmodel();
		$objmonhoc->mamonhoc=$request->txtmamonhoc;
		$objmonhoc->tenmonhoc=$request->txttenmonhoc;
		$objmonhoc->manganh=$request->ddlnganh;
		$objmonhoc->thoiluonghoc=$request->txtthoiluonghoc;
		monhocmodel::updatemonhoc($objmonhoc);
		return redirect("admin/danhsachmonhoc");
	}
// }
	public function themmoimonhoc()
	{
		$arrnganh = nganhhocmodel::getAll();

		return view("monhoc.themmoimonhoc",['arrnganh'=>$arrnganh]);
	}
	public function themmoimonhocprocess(Request $request)
	{
		$messages = [
		    // 'required' 	=> 'Trường :attribute bắt buộc nhập.', nếu muốn thay thế 
		    'unique'	=> 'Môn học đã tồn tại',
		    'regex'	=> 'Thời lượng học là số',
		];
		$validator = Validator::make($request->all(), [
            'txttenmonhoc' => 'unique:tbl_monhoc,tenmonhoc',
            'txtthoiluonghoc' => ['regex:/\d/']
        ], $messages);

        if ($validator->fails()) {
            return redirect('admin/themmoimonhoc')
                    ->withErrors($validator)
                    ->withInput();
        } else {
		$objmonhoc=new monhocmodel();
		$objmonhoc->tenmonhoc=$request->txttenmonhoc;
		$objmonhoc->manganh=$request->ddlnganh;
		$objmonhoc->thoiluonghoc=$request->txtthoiluonghoc;
		monhocmodel::insertmonhoc($objmonhoc);
		return redirect("admin/danhsachmonhoc");
	}
}
	public function xoamonhoc(Request $request)
	{
		$mamonhoc=$request->mamonhoc;
		monhocmodel::deletemonhoc($mamonhoc);
		return redirect("admin/danhsachmonhoc");
	}
}
