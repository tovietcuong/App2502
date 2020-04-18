<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class lichhocmodel extends Model
{
    //các function cơ bản 
    static function getAll()
    {
    	$sql="SELECT *
                FROM tbl_lichhoc
                INNER JOIN tbl_giaovien ON tbl_lichhoc.magv=tbl_giaovien.magv
                INNER JOIN tbl_monhoc ON tbl_lichhoc.mamonhoc=tbl_monhoc.mamonhoc
                INNER JOIN tbl_lophocbienche ON tbl_lichhoc.malop=tbl_lophocbienche.malop";
    	$arrlich=DB::select($sql);
    	return $arrlich;
    }

    static function getById($malich)
    {
    	$sql="select * from tbl_lichhoc where malich=$malich";
    	$arr=DB::select($sql);
    	return $arr[0];
    }

    static function insertlichhoc($objlich)
    {
    	$sql="insert into tbl_lichhoc(magv,mamonhoc,malop,ngaybatdau,tinhtrang) values($objlich->magv,$objlich->mamonhoc,$objlich->malop,'$objlich->ngaybatdau',$objlich->tinhtrang)";
    	DB::insert($sql);
    }

    static function deletelichhoc($malich)
    {
    	$sql="delete from tbl_lichhoc where malich=$malich";
    	DB::delete($sql);
    }

    static function updatelichhoc($objlich)
    {
    	$sql="update tbl_lichhoc set magv=$objlich->magv,mamonhoc=$objlich->mamonhoc,malop=$objlich->malop,ngaybatdau='$objlich->ngaybatdau',tinhtrang=$objlich->tinhtrang where malich=$objlich->malich";
    	DB::update($sql);
    }
}
