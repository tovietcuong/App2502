<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class monhocmodel extends Model
{
    //các function cơ bản 
    static function getAll()
    {
        $sql="select * from tbl_monhoc inner join tbl_nganhhoc on tbl_monhoc.manganh=tbl_nganhhoc.manganh";
        $arrmonhoc=DB::select($sql);
        return $arrmonhoc;
    }

    static function getById($mamonhoc)
    {
        $sql="select * from tbl_monhoc where mamonhoc=$mamonhoc";
        $arr=DB::select($sql);
        return $arr[0];
    }

    static function insertmonhoc($objmonhoc)
    {
        $sql="insert into tbl_monhoc(tenmonhoc,manganh,thoiluonghoc) values('$objmonhoc->tenmonhoc',$objmonhoc->manganh,$objmonhoc->thoiluonghoc)";
        DB::insert($sql);
    }

    static function deletemonhoc($mamonhoc)
    {
        $sql="delete from tbl_monhoc where mamonhoc=$mamonhoc";
        DB::delete($sql);
    }

    static function updatemonhoc($objmonhoc)
    {
        $sql="update tbl_monhoc set mamonhoc=$objmonhoc->mamonhoc,tenmonhoc='$objmonhoc->tenmonhoc',manganh=$objmonhoc->manganh,thoiluonghoc=$objmonhoc->thoiluonghoc where mamonhoc=$objmonhoc->mamonhoc";
        DB::update($sql);
    }

    public static function getMonHocByMaLop($malop)
   {
      $ds=DB::select("select tbl_monhoc.mamonhoc,tenmonhoc from tbl_lophocbienche 
        left join tbl_nganhhoc on tbl_lophocbienche.manganh=tbl_nganhhoc.manganh
        left join tbl_monhoc on tbl_monhoc.manganh=tbl_nganhhoc.manganh
        where malop = $malop");
      return $ds;
   }
}
