<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;


class diemdanhchitietmodel extends Model
{
    //các function cơ bản 
    // public static function getAll($malop,$malich) 
    // {
    //     $sql=" select *,tbl_sinhvien.masv
    //             from tbl_sinhvien
    //             inner join tbl_lop on tbl_sinhvien.malop = tbl_lop.malop
    //             inner join tbl_lichhoc on tbl_lichhoc.malop=tbl_lop.malop
    //             inner join tbl_monhoc on tbl_lichhoc.mamonhoc=tbl_monhoc.mamonhoc
    //             inner join tbl_diemdanh on tbl_lichhoc.malich = tbl_diemdanh.malich
    //             inner join tbl_diemdanhchitiet on tbl_diemdanh.madiemdanh = tbl_diemdanhchitiet.madiemdanh
    //              where tbl_sinhvien.malop = $malop and tbl_lichhoc.malich = $malich
    //             ";
    //     $arrdiemdanhchitiet=DB::select($sql);  
    //     return $arrdiemdanhchitiet;
    // }

    // public static function getById($macahoc)
    // {
    //     $sql="select * from tbl_diemdanhchitiet where madiemdanhchitiet=$madiemdanhchitiet";
    //     $arr=DB::select($sql);
    //     return $arr[0];
    // }

    //  public static function getByMaDiemDanhChiTiet($madiemdanh)
    // {
    //     $sql="select * from tbl_diemdanhchitiet where madiemdanhchitiet=$madiemdanh";
    //     $arr=DB::select($sql);
    //     return $arr[0];
    // }

    // public static function insertdiemdanhchitiet($madiemdanh,$masv)
    // {
    //     $sql=" insert into tbl_diemdanhchitiet(madiemdanh,masv) values($madiemdanh,$masv)";
    //     DB::select($sql);
       
    //     $obj=DB::select("select max(madiemdanhchitiet) as madiemdanhchitiet from tbl_diemdanhchitiet");
    //     $madiemdanhchitietmoinhat = $obj[0];
    //     $objdiemdanh=diemdanhchitietmodel::getByMaDiemDanhChiTiet($madiemdanhchitietmoinhat);
    //     return $objdiemdanh;
    // }

    // static function kiemtrabanghi($objdiemdanhchitiet)
    // {
    //     $sql="select * from tbl_diemdanhchitiet where madiemdanh=$madiemdanh and masv=$masv";
    //     $arr=DB::select($sql);
    //     return count($arr);
    // }

    // static function updatebanghi($objdiemdanhchitiet)
    // {
    //     $sql="update tbl_diemdanhchitiet set thoiluongdahoc=$objdiemdanhchitiet->thoiluongdahoc";
    //     DB::update($sql);
    // }


    public static function kiemtradiemdanh($malop,$mamonhoc,$ngay){
    $ds=DB::select("select masv,tinhtrang from tbl_diemdanh
    left join tbl_diemdanhchitiet on tbl_diemdanh.madiemdanh=tbl_diemdanhchitiet.madiemdanh
    where malop=? and mamonhoc=? and ngay=?",[$malop,$mamonhoc,$ngay]);
    return $ds;
   }
   public static function inserted($mamonhoc,$malop,$magv,$ngay,$giobatdau,$gioketthuc,$masv,$tinhtrang)
   {
      
      $array_diem_danh = DB::select("select madiemdanh from tbl_diemdanh where malop=? and mamonhoc=? and ngay=?",[$malop,$mamonhoc,$ngay]);
      if(count($array_diem_danh)>0){  
        foreach ($array_diem_danh as $each) {
          DB::delete("delete from tbl_diemdanhchitiet where madiemdanh=?",[$each->madiemdanh]);
          DB::delete("delete from tbl_diemdanh where madiemdanh=?",[$each->madiemdanh]);
        }
      }
      DB::insert("insert into tbl_diemdanh(mamonhoc,malop,magv,ngay,giobatdau,gioketthuc) values(?,?,?,?,?,?)",[$mamonhoc,$malop,$magv,$ngay,$giobatdau,$gioketthuc]);
      $array_diem_danh = DB::select("select madiemdanh from tbl_diemdanh where malop=? and mamonhoc=? and ngay=?",[$malop,$mamonhoc,$ngay]);
      $ma_diem_danh = $array_diem_danh[0]->madiemdanh;
      foreach ($masv as $key => $value) 
        DB::insert("insert into tbl_diemdanhchitiet(madiemdanh,masv,tinhtrang) values (?,?,?)",[$ma_diem_danh,
          $value,$tinhtrang[$key]]);
      }
   
}
