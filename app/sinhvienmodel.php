<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class sinhvienmodel extends Model
{
    //các function cơ bản 
    static function getAll()
    {
    	$sql="select * from tbl_sinhvien inner join tbl_lophocbienche on tbl_sinhvien.malop=tbl_lophocbienche.malop";
    	$arrSv=DB::select($sql);
    	return $arrSv;
    }

    static function getById($masv)
    {
    	$sql="select * from tbl_sinhvien where masv=$masv";
    	$arr=DB::select($sql);
    	return $arr[0];
    }

    static function insertsv($objsv)
    {
    	$sql="insert into tbl_sinhvien(tensv,malop,ngaysinh,gioitinh,diachi,sodienthoai,email) values('$objsv->tensv',$objsv->malop,'$objsv->ngaysinh',$objsv->gioitinh,'$objsv->diachi','$objsv->sodienthoai','$objsv->email')";
    	DB::insert($sql);
    }

    static function deletesv($masv)
    {
    	$sql="delete from tbl_sinhvien where masv=$masv";
    	DB::delete($sql);
    }

    static function updatesv($objsv)
    {
    	$sql="update tbl_sinhvien set tensv='$objsv->tensv',malop=$objsv->malop,ngaysinh='$objsv->ngaysinh',gioitinh=$objsv->gioitinh,diachi='$objsv->diachi',sodienthoai='$objsv->sodienthoai',email='$objsv->email' where masv=$objsv->masv";
    	DB::update($sql);
    }

    public static function getArraySinhVienByLop($malop)
    {
     $ds = DB::select("select * from tbl_sinhvien where malop = ?",[$malop]);
    return $ds;
    }

}
