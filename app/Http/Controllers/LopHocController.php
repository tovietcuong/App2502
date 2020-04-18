<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Validator;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\lophocmodel;

use App\nganhhocmodel;

class LopHocController extends Controller
{
	public function danhsachlophoc()
	{
		$arrlop=lophocmodel::getAll();
		return view("lophoc.danhsachlophoc",['arrlop'=>$arrlop]);
	}

    public function sualophoc(Request $request)
	{
		$arrnganh = nganhhocmodel::getAll();
		$malop=$request->malop;
		$objlop=lophocmodel::getById($malop);
		return view("lophoc.sualophoc",['objlop' =>$objlop,'arrnganh'=>$arrnganh]);
	}
	public function sualophocprocess(Request $request)
	{		
		$objlop=new lophocmodel();
		$objlop->malop=$request->txtmalop;
		$objlop->tenlop=$request->txttenlop;
		$objlop->manganh=$request->ddlnganh;
		lophocmodel::updatelophoc($objlop);
		return redirect("admin/danhsachlophoc");
	}
	public function themmoilophoc()
	{
		$arrnganh = nganhhocmodel::getAll();

		return view("lophoc.themmoilophoc",['arrnganh'=>$arrnganh]);
	}
	public function themmoilophocprocess(Request $request)
	{
		$messages = [
		    // 'required' 	=> 'Trường :attribute bắt buộc nhập.', nếu muốn thay thế 
		    'unique'	=> 'Lớp đã tồn tại',

		];
		$validator = Validator::make($request->all(), [
            'txttenlop' => 'unique:tbl_lop,tenlop',
        ], $messages);

        if ($validator->fails()) {
            return redirect('admin/themmoilophoc')
                    ->withErrors($validator)
                    ->withInput();
        } else {

		$objlop=new lophocmodel();
		$objlop->tenlop=$request->txttenlop;
		$objlop->manganh=$request->ddlnganh;
		lophocmodel::insertlophoc($objlop);
		return redirect("admin/danhsachlophoc");
	}
}
	public function xoalophoc(Request $request)
	{
		$malop=$request->malop;
		lophocmodel::deletelophoc($malop);
		return redirect("admin/danhsachlophoc");
	}
}
