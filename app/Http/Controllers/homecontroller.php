<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    
	public function showinforview(){
		$new_sanpham = \DB::select('select * from sanpham where loai = "new" order by id asc limit 0,4');
		$sanphamnoibat = \DB::select('select * from sanpham where loai = "noibat" order by id asc limit 0,4');
		$lichlienket = \DB::select('select * from sanpham where loai = "lichlienket" order by id asc limit 0,8');
		return view('index',compact('new_sanpham','sanphamnoibat','lichlienket'));	
	}
	public function lichlienket(){
		$new_sanpham = \DB::select('select * from sanpham where loai = "new" order by id asc limit 0,4');
		$sanpham = \DB::select('select * from sanpham order by id asc limit 0,12');
		return view('lichlienket',compact('new_sanpham','sanpham'));	
	}
	public function vohocsinh(){
		$vohocsinh = \DB::select('select * from vohocsinh order by id asc limit 0,12');
		$new_sanpham = \DB::select('select * from sanpham where loai = "new" order by id asc limit 0,4');
		return view('vohocsinh',compact('vohocsinh','new_sanpham'));	
	}
	public function sachgiaokhoa(){
		$sachgiaokhoa = \DB::select('select * from sachgiaokhoa order by id asc limit 0,12');
		$new_sanpham = \DB::select('select * from sanpham where loai = "new" order by id asc limit 0,4');
		return view('sachgiaoduc',compact('sachgiaokhoa','new_sanpham'));	
	}
	public function danhmuc(){
		return view('danhmuc');	
	}
	public function lienhe(){
		return view('lienhe');	
	}
	public function thongtin(){
		return view('thongtin');	
	}
	public function chitiet($id){
		$chitietsanpham = \DB::select('select * from sanpham where id = "2" ');
		$new_sanpham = \DB::select('select * from sanpham where loai = "new" order by id asc limit 0,4');
		$sanpham = \DB::select('select * from sanpham order by id asc limit 0,4');
		return view('chitiet',compact('new_sanpham','sanpham','chitietsanpham'));	
	}
	public function chitietvo(){
		$chitietsanpham = \DB::select('select * from vohocsinh where id="1" ');
		$new_sanpham = \DB::select('select * from sanpham where loai = "new" order by id asc limit 0,4');
		$sanpham = \DB::select('select * from sanpham order by id asc limit 0,4');
		return view('chitietvo',compact('new_sanpham','sanpham','chitietsanpham'));	
	}
	public function chitietsach(){
		$chitietsanpham = \DB::select('select * from sachgiaokhoa where id="1" ');
		$new_sanpham = \DB::select('select * from sanpham where loai = "new" order by id asc limit 0,4');
		$sanpham = \DB::select('select * from sanpham order by id asc limit 0,4');
		return view('chitietvo',compact('new_sanpham','sanpham','chitietsanpham'));	
	}
}
