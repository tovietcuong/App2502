<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('sinhvien.themsinhvien');
// });
Route::group(['prefix'=>'admin'],function () {
	Route::get('','AdminController@index')->name('admin.index')->middleware('loginAdmin');
	Route::get('danhsachadmin','AdminController@danhsachadmin')->name('danhsachadmin');
	Route::get('themmoiadmin','AdminController@themmoiadmin');
	Route::post('themmoiadminprocess','AdminController@themmoiadminprocess');
	Route::get('suaadmin','AdminController@suaadmin')->name('suaadmin');
	Route::post('suaadminprocess','AdminController@suaadminprocess');
	Route::get('xoaadmin','AdminController@xoaadmin');
	// Route::get('thongtinadmin','AdminController@thongtinadmin')->name('admin.thongtinadmin');


	Route::get('danhsachsinhvien','SinhVienController@danhsachsinhvien')->name('danhsachsinhvien');
	Route::get('themmoisinhvien','SinhVienController@themmoisinhvien')->middleware('loginAdmin');
	Route::post('themmoisinhvienprocess','SinhVienController@themmoisinhvienprocess');
	Route::get('suasinhvien','SinhVienController@suasinhvien')->name('suasinhvien')->middleware('loginAdmin');
	Route::post('suasinhvienprocess','SinhVienController@suasinhvienprocess');	
	Route::get('xoasinhvien','SinhVienController@xoasinhvien')->middleware('loginAdmin');

	Route::get('danhsachgiaovien','GiaoVienController@danhsachgiaovien')->name('danhsachgiaovien');
	Route::get('themmoigiaovien','GiaoVienController@themmoigiaovien');
	Route::post('themmoigiaovienprocess','GiaoVienController@themmoigiaovienprocess');
	Route::get('suagiaovien','GiaoVienController@suagiaovien')->name('suagiaovien');;
	Route::post('suagiaovienprocess','GiaoVienController@suagiaovienprocess');	
	Route::get('xoagiaovien','GiaoVienController@xoagiaovien');

	Route::get('danhsachcahoc','CaHocController@danhsachcahoc')->name('danhsachcahoc');
	Route::get('themmoicahoc','CaHocController@themmoicahoc')->middleware('loginAdmin');
	Route::post('themmoicahocprocess','CaHocController@themmoicahocprocess');
	Route::get('suacahoc','CaHocController@suacahoc')->middleware('loginAdmin');
	Route::post('suacahocprocess','CaHocController@suacahocprocess');	
	Route::get('xoacahoc','CaHocController@xoacahoc')->middleware('loginAdmin');

	Route::get('danhsachlichhoc','LichHocController@danhsachlichhoc')->name('danhsachlichhoc');
	Route::get('themmoilichhoc','LichHocController@themmoilichhoc')->name('themmoilichhoc')->middleware('loginAdmin');
	Route::post('themmoilichhocprocess','LichHocController@themmoilichhocprocess');
	Route::get('sualichhoc','LichHocController@sualichhoc')->middleware('loginAdmin');
	Route::post('sualichhocprocess','LichHocController@sualichhocprocess');	
	Route::get('xoalichhoc','LichHocController@xoalichhoc')->middleware('loginAdmin');

	Route::get('danhsachlophoc','LopHocController@danhsachlophoc')->name('danhsachlophoc');
	Route::get('themmoilophoc','LopHocController@themmoilophoc');
	Route::post('themmoilophocprocess','LopHocController@themmoilophocprocess');
	Route::get('sualophoc','LopHocController@sualophoc');
	Route::post('sualophocprocess','LopHocController@sualophocprocess');	
	Route::get('xoalophoc','LopHocController@xoalophoc');

	Route::get('danhsachmonhoc','MonHocController@danhsachmonhoc')->name('danhsachmonhoc');
	Route::get('themmoimonhoc','MonHocController@themmoimonhoc');
	Route::post('themmoimonhocprocess','MonHocController@themmoimonhocprocess');
	Route::get('suamonhoc','MonHocController@suamonhoc')->name('suamonhoc');
	Route::post('suamonhocprocess','MonHocController@suamonhocprocess');	
	Route::get('xoamonhoc','MonHocController@xoamonhoc');

	Route::get('danhsachnganhhoc','NganhHocController@danhsachnganhhoc')->name('danhsachnganhhoc');
	Route::get('themmoinganhhoc','NganhHocController@themmoinganhhoc');
	Route::post('themmoinganhhocprocess','NganhHocController@themmoinganhhocprocess');
	Route::get('suanganhhoc','NganhHocController@suanganhhoc')->name('suanganhhoc');
	Route::post('suanganhhocprocess','NganhHocController@suanganhhocprocess');	
	Route::get('xoanganhhoc','NganhHocController@xoanganhhoc');

	Route::get('danhsachdiemdanh','DiemDanhController@danhsachdiemdanh')->name('danhsachdiemdanh');
	Route::get('themmoidiemdanh','DiemDanhController@themmoidiemdanh')->middleware('loginAdmin');
	Route::post('themmoidiemdanhprocess','DiemDanhController@themmoidiemdanhprocess');
	Route::get('suadiemdanh','DiemDanhController@suadiemdanh')->name('suadiemdanh')->middleware('loginAdmin');
	Route::post('suadiemdanhprocess','DiemDanhController@suadiemdanhprocess');	
	Route::get('xoadiemdanh','DiemDanhController@xoadiemdanh')->middleware('loginAdmin');

	Route::get("chonlop","ThongKeController@chonlop")->name('admin.chonlop');
	Route::get("chonmon","ThongKeController@chonmon")->name('admin.chonmon');
	Route::get("thongke","ThongKeController@thongke")->name('admin.thongke');

});

Route::group(['prefix'=>'giaovien'],function(){
	Route::get('','GiaoVienController@index')->name('giaovien.index')->middleware('loginGiaoVien');	
	Route::get('danhsachdiemdanh','DiemDanhController@danhsachdiemdanh')->name('giaovien.danhsachdiemdanh');
	Route::post	('diemdanhchitiet','DiemDanhChiTietController@diemdanhchitiet')->name('diemdanhchitiet')->middleware('loginGiaoVien');
	Route::get('danhsachsinhvien','SinhVienController@danhsachsinhvien')->name('giaovien.danhsachsinhvien');
	Route::get('danhsachlichhoc','LichHocController@danhsachlichhoc')->name('giaovien.danhsachlichhoc');
	Route::get('danhsachcahoc','CaHocController@danhsachcahoc')->name('giaovien.danhsachcahoc');
	Route::get	('diemdanh','DiemDanhChiTietController@diemdanh')->name('diemdanh')->middleware('loginGiaoVien');

	Route::get("chonlop","DiemDanhChiTietController@chonlop")->name('giaovien.chonlop');
	Route::get("chonmon","DiemDanhChiTietController@chonmon")->name('chonmon');
	Route::get("diemdanh","DiemDanhChiTietController@diemdanh")->name('diemdanh');
	Route::post("diemdanhinsert","DiemDanhChiTietController@diemdanhinsert")->name('diemdanhinsert');
});

Route::group(["prefix" => "login"],function(){
	Route::get("/",'LoginController@loginView')->name('login');
	Route::get("loginprocess",'LoginController@login')->name('loginprocess');
	Route::get('doiMatKhau', 'LoginController@doiMatKhau')->name('doiMatKhau');
	
	Route::get("logout",'LoginController@logout')->name('logout');
});	
Route::get("demo", function(){
	return view('demo');
});