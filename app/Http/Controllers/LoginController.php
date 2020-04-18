<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\loginmodel;

use App\taikhoanmodel;

use App\adminmodel;

use App\giaovienmodel;

use Session;

class LoginController extends Controller
{
    public function __construct()
    {
        session()->flush();
    }
    public function logout()
    {
        session()->flush();
        return redirect()->route('login');
    }
	//xử lí đăng nhập của admin
    public function loginView()
    {
    	return view('login');
    }
    public function login(Request $request)
    {
    	$login = new taikhoanmodel();
    	$login->taikhoan = $request->txttaikhoan;
    	$login->matkhau = $request->txtmatkhau;
        $objad = taikhoanmodel::loginAdmin($login);
        if(count($objad) > 0 )
        {
            session()->put('tk_admin',$request->txttaikhoan);
            session()->put('mk_admin',$request->txtmatkhau);
            return redirect()->route('admin.index');
        }
        else
        {
                $objgv = taikhoanmodel::loginGiaoVien($login);
                if(count($objgv) > 0 )
                {
                    session()->put('tk_giaovien',$request->txttaikhoan);
                    session()->put('mk_giaovien',$request->txtmatkhau);
                    return redirect()->route('giaovien.index');
                }
                else
                {
                    return redirect()->route('login')->with('alert','Tài khoản hoặc mật khẩu ko đúng');
                }
            } 
        }


    public function doiMatKhau(Request $request)
    {
        $matKhauCu  = $request->txtMatKhauCu;
        $matKhauMoi = $request->txtMatKhauMoi;
        if(Session::has('tk_admin'))
        {
            $taikhoan = Session::get('tk_admin');
            // $tk = new taikhoan($taikhoan,$matKhauCu);
            $model = new adminmodel();
            $model->taikhoan=$taikhoan;
            $model->matkhau=$matKhauCu;
            $arrad = adminmodel::getadmintheotaikhoan($model);
            if(count($arrad)>0)
            {
                // $tk = new taikhoan($taikhoan,$matKhauMoi);
                $modelLogIn = new taikhoanmodel();
                $modelLogIn->taikhoan=$taikhoan;
                $modelLogIn->matkhau=$matKhauMoi;
                $objad = taikhoanmodel::doiMatKhauAdmin($modelLogIn);
                return redirect()->route('admin.index')->with('alertSuccessDoiMatKhau','Đổi mật khẩu thành công');
            }
            else
            {
                return redirect()->route('admin.index')->with('alertErrorDoiMatKhau','Mật khẩu cũ ko đúng');
            }
        }
        else
        {
            if(Session::has('tk_giaovien'))
            {
                $taikhoan = Session::get('tk_giaovien');
                // $tk = new taikhoan($taikhoan,$matKhauCu);    
                $model = new giaovienmodel();
                $model->taikhoan=$taikhoan;
                $model->matkhau=$matKhauCu;
                $arrgv = giaovienmodel::getgiaovientheotaikhoan($model);
                if(count($arrgv)>0)
                {
                    // $tk = new taikhoan($taikhoan,$matKhauMoi);
                    $modelLogIn = new taikhoanmodel();
                    $modelLogIn->taikhoan=$taikhoan;
                    $modelLogIn->matkhau=$matKhauMoi;
                    $objgv = taikhoanmodel::doiMatKhauGiaoVien($modelLogIn);
                    return redirect()->route('giaovien.index')->with('alertSuccessDoiMatKhau','Đổi mật khẩu thành công');
                }
                else
                {
                    return redirect()->route('giaovien.index')->with('alertErrorDoiMatKhau','Mật khẩu cũ ko đúng');
                }
            }
         }
    }
}

