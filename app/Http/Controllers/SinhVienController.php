<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Validator;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\sinhvienmodel;

use App\lophocmodel;

class SinhVienController extends Controller
{
    public function danhsachsinhvien()
    {
        $arrsv=sinhvienmodel::getAll();
        return view("sinhvien.danhsachsinhvien",["arrsv"=>$arrsv]);
    }

    public function suasinhvien(Request $request)
    {
        $arrlop = lophocmodel::getAll();
        $masv=$request->masv;
        $objsv=sinhvienmodel::getById($masv);
        return view("sinhvien.suasinhvien",["objsv" =>$objsv,'arrlop'=>$arrlop]);
    }
    public function suasinhvienprocess(Request $request)
    {
        $messages = [
            // 'required'   => 'Trường :attribute bắt buộc nhập.', nếu muốn thay thế 
            'regex' => 'Số điện thoại sai định dạng ',

        ];
        $validator = Validator::make($request->all(), [
            'txtsodienthoaisv' => ['regex:/(\\+84|0)\\d{9,10}/']
        ], $messages);

        $masv=$request->txtmasv;
        if ($validator->fails()) {
            return redirect()->route('suasinhvien',['masv'=>$masv])
                    ->withErrors($validator)
                    ->withInput();
        } else {
        $objsv=new sinhvienmodel();
        $objsv->masv=$request->txtmasv;
        $objsv->tensv=$request->txttensv;
        $objsv->malop=$request->ddllop;
        $objsv->ngaysinh=$request->txtngaysinhsv;
        $objsv->gioitinh=$request->txtgioitinhsv;
        $objsv->diachi=$request->txtdiachisv;
        $objsv->sodienthoai=$request->txtsodienthoaisv;
        $objsv->email=$request->txtemailsv;
        $objsv->taikhoan=$request->txttaikhoansv;
        $objsv->matkhau=$request->txtmatkhausv;
        sinhvienmodel::updatesv($objsv);
        return redirect("admin/danhsachsinhvien");
    }
}
    public function themmoisinhvien()
    {
        $arrlop = lophocmodel::getAll();
        return view("sinhvien.themmoisinhvien",['arrlop'=>$arrlop]);
    }
    public function themmoisinhvienprocess(Request $request)
    {
        $messages = [
            // 'required'   => 'Trường :attribute bắt buộc nhập.', nếu muốn thay thế 
            'regex' => 'Số điện thoại sai định dạng ',

        ];
        $validator = Validator::make($request->all(), [
            'txtsodienthoaisv' => ['regex:/(\\+84|0)\\d{9,10}/']
        ], $messages);

        if ($validator->fails()) {
            return redirect('admin/themmoisinhvien')
                    ->withErrors($validator)
                    ->withInput();
        } else {

        $objsv=new sinhvienmodel();
        $objsv->tensv=$request->txttensv;
        $objsv->malop=$request->ddllop;
        $objsv->ngaysinh=$request->txtngaysinhsv;
        $objsv->gioitinh=$request->txtgioitinhsv;
        $objsv->diachi=$request->txtdiachisv;
        $objsv->sodienthoai=$request->txtsodienthoaisv;
        $objsv->email=$request->txtemailsv;
        $objsv->taikhoan=$request->txttaikhoansv;
        $objsv->matkhau=$request->txtmatkhausv; 
        $objsv->tinhtrangsv=$request->txttinhtrangsv;   
        sinhvienmodel::insertsv($objsv);
        return redirect("admin/danhsachsinhvien");
    }
}
    public function xoasinhvien(Request $request)
    {
        $masv=$request->masv;
        sinhvienmodel::deletesv($masv);
        return redirect("admin/danhsachsinhvien");
    }
}
