<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Validator;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\cahocmodel;

class CaHocController extends Controller
{
	public function danhsachcahoc()
	{
		$arrcahoc=cahocmodel::getAll();
		return view("cahoc.danhsachcahoc",["arrcahoc"=>$arrcahoc]);
	}

    public function suacahoc(Request $request)
	{
		$macahoc=$request->macahoc;
		$objcahoc=cahocmodel::getById($macahoc);
		return view("cahoc.suacahoc",["objcahoc" =>$objcahoc]);
	}
	public function suacahocprocess(Request $request)
	{
		$objcahoc=new cahocmodel();
		$objcahoc->macahoc=$request->txtmacahoc;
		$objcahoc->giobatdau=$request->txtgiobatdaucahoc;
		$objcahoc->gioketthuc=$request->txtgioketthuccahoc;
		cahocmodel::updatecahoc($objcahoc);
		return redirect("admin/danhsachcahoc");
	}
	public function themmoicahoc()
	{
		return view("cahoc.themmoicahoc");
	}
	public function themmoicahocprocess(Request $request)
	{

		$objcahoc=new cahocmodel();
		$objcahoc->giobatdau=$request->txtgiobatdaucahoc;
		$objcahoc->gioketthuc=$request->txtgioketthuccahoc;	
		cahocmodel::insertcahoc($objcahoc);
		return redirect("admin/danhsachcahoc");
	}
	public function xoacahoc(Request $request)
	{
		$macahoc=$request->macahoc;
		cahocmodel::deletecahoc($macahoc);
		return redirect("admin/danhsachcahoc");
	}
}
