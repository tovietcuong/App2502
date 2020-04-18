<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class nganhhocmodel extends Model
{
    //các function cơ bản 
    static function getAll()
    {
    	$sql="select * from tbl_nganhhoc";
    	$arrnganh=DB::select($sql);
    	return $arrnganh;
    }

    static function getById($manganh)
    {
    	$sql="select * from tbl_nganhhoc where manganh=$manganh";
    	$arr=DB::select($sql);
    	return $arr[0];
    }

    static function insertnganh($objnganh)
    {
    	$sql="insert into tbl_nganhhoc(tennganh) values('$objnganh->tennganh')";
    	DB::insert($sql);
    }

    static function deletenganh($manganh)
    {
    	$sql="delete from tbl_nganhhoc where manganh=$manganh";
    	DB::delete($sql);
    }

    static function updatenganh($objnganh)
    {
    	$sql="update tbl_nganhhoc set tennganh='$objnganh->tennganh' where manganh=$objnganh->manganh";
    	DB::update($sql);
    }
}
