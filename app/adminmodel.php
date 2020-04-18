<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class adminmodel extends Model
{
    //các function cơ bản 
    static function getAll()
    {
    	$sql="select * from tbl_admin";
    	$arrad=DB::select($sql);
    	return $arrad;
    }

    static function getById($maad)
    {
    	$sql="select * from tbl_admin where maadmin=$maad";
    	$arr=DB::select($sql);
    	return $arr[0];
    }

    static function insertad($objad)
    {
    	$sql="insert into tbl_admin(tenadmin,ngaysinh,gioitinh,diachi,sodienthoai,email,taikhoan,matkhau) values('$objad->tenadmin','$objad->ngaysinh',$objad->gioitinh,'$objad->diachi','$objad->sodienthoai','$objad->email','$objad->taikhoan','$objad->matkhau')";
    	DB::insert($sql);
    }

    static function deletead($maad)
    {
    	$sql="delete from tbl_admin where maadmin=$maad";
    	DB::delete($sql);
    }

    static function updatead($objad)
    {
    	$sql="update tbl_admin set tenadmin='$objad->tenad',ngaysinh='$objad->ngaysinh',gioitinh=$objad->gioitinh,diachi='$objad->diachi',sodienthoai='$objad->sodienthoai',email='$objad->email',taikhoan='$objad->taikhoan',matkhau='$objad->matkhau' where maadmin=$objad->maad";
    	DB::update($sql);
    }

    static function getadmintheotaikhoan($objad)
    {
        $arrad = DB::select("select * from tbl_admin where taikhoan='$objad->taikhoan' and matkhau='$objad->matkhau'");
        return $arrad;
    }
}
