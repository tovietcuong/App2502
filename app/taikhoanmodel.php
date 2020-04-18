<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class taikhoanmodel extends Model
{
	static public function loginAdmin($objad)
	{
		$objad = DB::select("select * from tbl_admin where taikhoan = '$objad->taikhoan' and matkhau = '$objad->matkhau'");
		return $objad;
	}

	static public function loginGiaoVien($objgv)
	{
		$objgv = DB::select("select * from tbl_giaovien where trangthai = 1 and taikhoan = '$objgv->taikhoan' and matkhau = '$objgv->matkhau'");
		return $objgv;
	}

	// public function doiMatKhauAdmin($objad)
 //    {
 //        // DB::table('admin')->where([
 //        //     'taikhoan'=>$tk->taikhoan,
 //        // ])->update([
 //        //     'matkhau'=>$tk->matkhau,
 //        // ]);

 //        DB::update("update tbl_admin set matkhau='$objad->matkhau' where taikhoan='$objad->taikhoan'");

 //    }
 //    public function doiMatKhauGiaoVien($objgv)
 //    {
 //        // DB::table('giaovien')->where([
 //        //     'taikhoan'=>$tk->taikhoan,
 //        // ])->update([
 //        //     'matkhau'=>$tk->matkhau,
 //        // ]);

 //        DB::update("update tbl_giaovien set matkhau='$objgv->matkhau' where taikhoan='$objgv->taikhoan");
 //    }

    static public function doiMatKhauAdmin($objad)
    {
        // DB::table('admin')->where([
        //     'taikhoan'=>$tk->taikhoan,
        // ])->update([
        //     'matkhau'=>$tk->matkhau,
        // ]);

        DB::update("update tbl_admin set matkhau='$objad->matkhau' where taikhoan='$objad->taikhoan'");

    }
    static public function doiMatKhauGiaoVien($objgv)
    {
        // DB::table('giaovien')->where([
        //     'taikhoan'=>$tk->taikhoan,
        // ])->update([
        //     'matkhau'=>$tk->matkhau,
        // ]);

        DB::update("update tbl_giaovien set matkhau='$objgv->matkhau' where taikhoan='$objgv->taikhoan'");
    }

}
