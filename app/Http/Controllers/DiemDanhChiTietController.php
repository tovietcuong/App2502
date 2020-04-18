<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\diemdanhchitietmodel;

use App\lophocmodel;

use App\monhocmodel;

use App\sinhvienmodel;

use App\giaovienmodel;  


class DiemDanhChiTietController extends Controller {

  public function chonlop()
   {
   $ds= lophocmodel::getAll();
    return view("diemdanh.chonlop",['dslop'=>$ds]);
   }
   public function chonmon(Request $rq)
   {  
      $malop = $rq->malop; 
      $dsmonhoc=monhocmodel::getMonHocByMaLop($malop);
      $dsgv=giaovienmodel::getAll();
      return view("diemdanh.chonmon",[
        'dsmonhoc'=>$dsmonhoc,
        'dsgv'=>$dsgv,
        'malop'=>$malop
      ]);
   }
  public function diemdanh(Request $rq)
  {
    $malop = $rq->malop;
    $mamonhoc = $rq->mamonhoc;
    $magv = $rq->magv;
    $ngay=$rq->ngay;
    $array_diem_danh = diemdanhchitietmodel::kiemtradiemdanh($malop,$mamonhoc,$ngay);
    $array = array();
    if(count($array_diem_danh)>0)
    {
       foreach ($array_diem_danh as $each) {
         $array[$each->masv] = $each->tinhtrang;
       }
    }
    $array_sinh_vien = sinhvienmodel::getArraySinhVienByLop($malop);
    return view("diemdanh.diemdanh",[
        'malop'=>$malop,
        'mamonhoc'=>$mamonhoc,
        'magv'=>$magv,
        'ngay'=>$ngay,
        'array'=>$array,
        'array_sinh_vien'=>$array_sinh_vien 
      ]);
  }
  public function diemdanhinsert(Request $rq)
  {
    $malop = $rq->malop;
    $mamonhoc = $rq->mamonhoc;
    $magv = $rq->magv;
    $ngay = $rq->ngay;
    $giobatdau = $rq->giobatdau;
    $gioketthuc = $rq->gioketthuc;
    $masv = $rq->masv;
    $tinhtrang = $rq->tinhtrang;
    diemdanhchitietmodel::inserted($mamonhoc,$malop,$magv,$ngay,$giobatdau,$gioketthuc,$masv,$tinhtrang);
    return redirect()->route('giaovien.chonlop');
  }
  

}
