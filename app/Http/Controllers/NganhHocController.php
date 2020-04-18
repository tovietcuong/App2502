<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Validator;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\nganhhocmodel;

class NganhHocController extends Controller
{
	public function danhsachnganhhoc()
	{
		$arrnganh=nganhhocmodel::getAll();
		return view("nganhhoc.danhsachnganhhoc",["arrnganh"=>$arrnganh]);
	}

    public function suanganhhoc(Request $request)
	{
		$manganh=$request->manganh;
		$objnganh=nganhhocmodel::getById($manganh);
		return view("nganhhoc.suanganhhoc",["objnganh" =>$objnganh]);
	}
	public function suanganhhocprocess(Request $request)
	{
		$objnganh=new nganhhocmodel();
		$objnganh->manganh=$request->txtmanganh;
		$objnganh->tennganh=$request->txttennganh;
		nganhhocmodel::updatenganh($objnganh);
		return redirect("admin/danhsachnganhhoc");
	}
	public function themmoinganhhoc()
	{
		return view("nganhhoc.themmoinganhhoc");
	}
	public function themmoinganhhocprocess(Request $request)
	{
		$messages = [
		    // 'required' 	=> 'Trường :attribute bắt buộc nhập.', nếu muốn thay thế 
		    'unique'	=> 'Ngành đã tồn tại',

		];
		$validator = Validator::make($request->all(), [
            'txttennganh' => 'unique:tbl_nganhhoc,tennganh',
        ], $messages);

        if ($validator->fails()) {
            return redirect('admin/themmoinganhhoc')
                    ->withErrors($validator)
                    ->withInput();
        } else {

		$objnganh=new nganhhocmodel();
		$objnganh->tennganh=$request->txttennganh;
		nganhhocmodel::insertnganh($objnganh);
		return redirect("admin/danhsachnganhhoc");
	}
}
	public function xoanganhhoc(Request $request)
	{
		$manganh=$request->manganh;
		nganhhocmodel::deletenganh($manganh);
		return redirect("admin/danhsachnganhhoc");
	}
}
