<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class diemdanhmodel extends Model
{
    //các function cơ bản 
    static function getAll()
    {
    	// $sql="select tbl_diemdanh.madiemdanh,tbl_lichhoc.malich,tbl_lichhoc.mamonhoc,tbl_giaovien.tengv,tbl_monhoc.tenmonhoc,tbl_lophocbienche.tenlop,tbl_lophocbienchehocbienche.malop,tbl_diemdanh.ngay,tbl_diemdanh.giobatdau,tbl_diemdanh.gioketthuc  from tbl_diemdanh inner join tbl_lichhoc on tbl_diemdanh.malich=tbl_lichhoc.malich INNER JOIN tbl_giaovien ON tbl_lichhoc.magv=tbl_giaovien.magv INNER JOIN tbl_monhoc ON tbl_lichhoc.mamonhoc=tbl_monhoc.mamonhoc
     //    INNER JOIN tbl_lophocbienche ON tbl_lichhoc.malop=tbl_lophocbienche.malop ";
    	// $arrdiemdanh=DB::select($sql);
    	// return $arrdiemdanh;


        $sql="SELECT *
                FROM tbl_diemdanh
                INNER JOIN tbl_giaovien ON tbl_diemdanh.magv=tbl_giaovien.magv
                INNER JOIN tbl_monhoc ON tbl_diemdanh.mamonhoc=tbl_monhoc.mamonhoc
                INNER JOIN tbl_lophocbienche ON tbl_diemdanh.malop=tbl_lophocbienche.malop";
        $arrdiemdanh=DB::select($sql);
        return $arrdiemdanh;
    }

    static function getById($madiemdanh)
    {
    	$sql="select * from tbl_diemdanh where madiemdanh=$madiemdanh";
    	$arr=DB::select($sql);
    	return $arr[0];
    }

    static function insertdiemdanh($objdiemdanh)
    {
    	$sql="insert into tbl_diemdanh(malich,ngay,giobatdau,gioketthuc) values($objdiemdanh->malich,'$objdiemdanh->ngay','$objdiemdanh->giobatdau','$objdiemdanh->gioketthuc')";
    	DB::insert($sql);
        $arrdiemdanh = DB::select("select MAX(madiemdanh) as madiemdanh from tbl_diemdanh");
        $objdiemdanh = $arrdiemdanh[0];
        $madiemdanh =  $objdiemdanh->madiemdanh;
        $sql1="insert into tbl_diemdanhchitiet(madiemdanh) values($madiemdanh)";
        DB::insert($sql1);
    }

    // static function insertdiemdanh($objdiemdanh)
    // {
    //     $sql="insert into tbl_diemdanh(magv,mamonhoc,malop,ngay,giobatdau,gioketthuc) values($objdiemdanh->magv,$objdiemdanh->mamonhoc,'$objdiemdanh->malop','$objdiemdanh->ngay',$objdiemdanh->giobatdau,$objdiemdanh->gioketthuc)";
    //     DB::insert($sql);
    // }

    static function deletediemdanh($madiemdanh)
    {
    	$sql="delete from tbl_diemdanh where madiemdanh=$madiemdanh";
    	DB::delete($sql);
    }

    // static function updatediemdanh($objdiemdanh)
    // {
    // 	$sql="update tbl_diemdanh set malich=$objdiemdanh->malich,ngay='$objdiemdanh->ngay',giobatdau='$objdiemdanh->giobatdau',gioketthuc='$objdiemdanh->gioketthuc' where madiemdanh=$objdiemdanh->madiemdanh";
    // 	DB::update($sql);
    // }
    // 
    static function updatediemdanh($objdiemdanh)
    {
     $sql="update tbl_diemdanh set magv=$objdiemdanh->magv,mamonhoc=$objdiemdanh->mamonhoc,malop=$objdiemdanh->malop,ngay='$objdiemdanh->ngay',giobatdau='$objdiemdanh->giobatdau',gioketthuc='$objdiemdanh->gioketthuc' where madiemdanh=$objdiemdanh->madiemdanh";
     DB::update($sql);
    }
    
    
    
    
    
    
    //phần sau 
   //  public static function kiemtradiemdanh($malop,$mamonhoc,$ngay){
   //  $ds=DB::select("select masv,tinhtrang from tbl_diemdanh
   //  left join tbl_diemdanhchitiet on tbl_diemdanh.madiemdanh=tbl_diemdanhchitiet.madiemdanh
   //  where malop=? and mamonhoc=? and ngay=?",[$malop,$mamonhoc,$ngay]);
   //  return $ds;
   // }
   // public static function insert($mamonhoc,$malop,$ngay,$masv,$tinhtrang)
   // {
   //    DB::insert("insert into tbl_diemdanh(mamonhoc,malop,ngay,masv,tinhtrang) values=(?,?,?,?,?)",
   //      [$mamonhoc,$malop,$ngay,$masv,$tinhtrang]);
   //    $ma_diem_danh = ("select malop,mamon,tinhtrang from tbl_diemdanh where malop=? and mamon=? and tinhtrang=?");
   //    foreach ($masv as $key => $value) {
   //        DB::insert("insert into tbl_diemdanhchitiet(madiemdanh,masv,tinhtrang) values (?,?,?)",[$ma_diem_danh,$value,$tinhtrang[$key]]);
   //    }
   // }
}
