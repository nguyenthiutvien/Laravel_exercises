<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\slide;
use App\Models\product;
use App\Models\comment;
use App\Models\type_product;
class PageController extends Controller
{
    //
    public function getIndex(){	
        $slide = Slide::all();		
        $new_product=product::where('new', 1)->paginate(8);
        $sanpham_khuyenmai=product::where('promotion_price','<>',0)->paginate(4);
        return view('page.trangchu', compact('slide', 'new_product','sanpham_khuyenmai'));	
    }		
    public function getLoaiSp($type){
        $type_product = product::all();
        $sp_theoloai = product::where('id_type',$type)->get();
        $sp_khac = product::where('id_type','<>',$type)-> get();

        $loai = type_product::all();

        $loai_sp = type_product::where('id',$type)->first();
        return view('page.loai_sanpham', compact('sp_theoloai','type_product','sp_khac','loai','loai_sp'));
    }	
    public function getChitiet( Request $request){
        $sanpham= product:: where ('id', $request-> id)->first();
        $splienquan=product::where('id','<>', $sanpham->id, 'and', 'id_type', '=', $sanpham->id_type,)->paginate(3);
        $comments=comment::where ('id_product', $request->id)->get();
        return view('page.chitiet_sanpham', compact('sanpham','splienquan', 'comments'));
    }
  
}
