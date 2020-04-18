<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class cahocmodel extends Model
{
    //các function cơ bản 
    static function getAll()
    {
    	$sql="select * from tbl_cahoc";
    	$arrcahoc=DB::select($sql);
    	return $arrcahoc;
    }

    static function getById($macahoc)
    {
    	$sql="select * from tbl_cahoc where macahoc=$macahoc";
    	$arr=DB::select($sql);
    	return $arr[0];
    }

    static function insertcahoc($objcahoc)
    {
    	$sql="insert into tbl_cahoc(giobatdau,gioketthuc) values('$objcahoc->giobatdau','$objcahoc->gioketthuc')";
    	DB::insert($sql);
    }

    static function deletecahoc($macahoc)
    {
    	$sql="delete from tbl_cahoc where macahoc=$macahoc";
    	DB::delete($sql);
    }

    static function updatecahoc($objcahoc)
    {
    	$sql="update tbl_cahoc set giobatdau='$objcahoc->giobatdau',gioketthuc='$objcahoc->gioketthuc' where macahoc=$objcahoc->macahoc";
    	DB::update($sql);
    }
}
