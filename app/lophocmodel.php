<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class lophocmodel extends Model
{
    //các function cơ bản 
    static function getAll()
    {
    	$sql="select * from tbl_lophocbienche inner join tbl_nganhhoc on tbl_lophocbienche.manganh=tbl_nganhhoc.manganh";
    	$arrlop=DB::select($sql);
    	return $arrlop;
    }


    static function getById($malop)
    {
    	$sql="select * from tbl_lophocbienche where malop=$malop";
    	$arr=DB::select($sql);
    	return $arr[0];
    }

    static function insertlophoc($objlop)
    {
    	$sql="insert into tbl_lophocbienche(tenlop,manganh) values('$objlop->tenlop',$objlop->manganh)";
    	DB::insert($sql);
    }

    static function deletelophoc($malop)
    {
    	$sql="delete from tbl_lophocbienche where malop=$malop";
    	DB::delete($sql);
    }

    static function updatelophoc($objlop)
    {
    	$sql="update tbl_lophocbienche set malop=$objlop->malop,tenlop='$objlop->tenlop',manganh=$objlop->manganh where malop=$objlop->malop";
    	DB::update($sql);
    }
}
