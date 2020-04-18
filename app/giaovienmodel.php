<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class giaovienmodel extends Model
{
    //các function cơ bản 
    static function getAll()
    {
    	$sql="select * from tbl_giaovien";
    	$arrgv=DB::select($sql);
    	return $arrgv;
    }


    static function getById($magv)
    {
    	$sql="select * from tbl_giaovien where magv=$magv";
    	$arr=DB::select($sql);
    	return $arr[0];
    }

    static function insertgv($objgv)
    {
    	$sql="insert into tbl_giaovien(tengv,ngaysinh,gioitinh,diachi,sodienthoai,email,taikhoan,matkhau,tinhtranggv) values('$objgv->tengv','$objgv->ngaysinh',$objgv->gioitinh,'$objgv->diachi','$objgv->sodienthoai','$objgv->email','$objgv->taikhoan','$objgv->matkhau',$objgv->tinhtranggv)";
    	DB::insert($sql);
    }

    static function deletegv($magv)
    {
    	$sql="delete from tbl_giaovien where magv=$magv";
    	DB::delete($sql);
    }

    static function updategv($objgv)
    {
    	$sql="update tbl_giaovien set tengv='$objgv->tengv',ngaysinh='$objgv->ngaysinh',gioitinh=$objgv->gioitinh,diachi='$objgv->diachi',sodienthoai='$objgv->sodienthoai',email='$objgv->email',taikhoan='$objgv->taikhoan',matkhau='$objgv->matkhau',tinhtranggv=$objgv->tinhtranggv where magv=$objgv->magv";
    	DB::update($sql);
    }

    static function getgiaovientheotaikhoan($objgv)
    {
        $arrgv = DB::select("select * from tbl_giaovien where tinhtranggv = 1 and taikhoan='$objgv->taikhoan' and matkhau='$objgv->matkhau'");
        return $arrgv;
    }

}
