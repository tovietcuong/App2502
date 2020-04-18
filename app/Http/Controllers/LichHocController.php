<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\Requests;

use App\lichhocmodel;

use App\giaovienmodel;

use App\lophocmodel;

use App\monhocmodel;

class LichHocController extends Controller
{
    public function danhsachlichhoc()
	{
		$arrlich=lichhocmodel::getAll();
		return view("lichhoc.danhsachlichhoc",['arrlich'=>$arrlich]);
	}

    public function sualichhoc(Request $request)
	{
		$arrlop = lophocmodel::getAll();
		$arrgv = giaovienmodel::getAll();
		$arrmonhoc = monhocmodel::getAll();
		$malich=$request->malich; 
		$objlich=lichhocmodel::getById($malich);
		return view("lichhoc.sualichhoc",['objlich'=>$objlich ,'arrgv' =>$arrgv,'arrlop'=>$arrlop,'arrmonhoc'=>$arrmonhoc]);
	}
	public function sualichhocprocess(Request $request)
	{
		$objlich=new lichhocmodel();
		$objlich->malich=$request->txtmalich;
		$objlich->magv=$request->ddlgv;
		$objlich->malop=$request->ddllop;
		$objlich->mamonhoc=$request->ddlmonhoc;
		$objlich->ngaybatdau=$request->txtngaybatdau;
		$objlich->tinhtrang=$request->txttinhtranglich;
		lichhocmodel::updatelichhoc($objlich);
		return redirect("admin/danhsachlichhoc");
	}
	public function themmoilichhoc()
	{
		$arrgv = giaovienmodel::getAll();
		$arrmonhoc = monhocmodel::getAll();
		$arrlop = lophocmodel::getAll();

		return view("lichhoc.themmoilichhoc",['arrgv'=>$arrgv,'arrmonhoc'=>$arrmonhoc,'arrlop'=>$arrlop]);
	}
	public function themmoilichhocprocess(Request $request)
	{

		$objlich=new lichhocmodel();
		$objlich->magv=$request->ddlgv;
		$objlich->malop=$request->ddllop;
		$objlich->mamonhoc=$request->ddlmonhoc;
		$objlich->ngaybatdau=$request->txtngaybatdau;
		$objlich->tinhtrang=$request->txttinhtranglich;
		lichhocmodel::insertlichhoc($objlich);
		return redirect("admin/danhsachlichhoc");
	}
	public function xoalichhoc(Request $request)
	{
		$malich=$request->malich;
		lichhocmodel::deletelichhoc($malich);
		return redirect("admin/danhsachlichhoc");
	}
}
