<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\slide;
use App\Models\product;
class PageController extends Controller
{
    //
    public function getIndex(){	
        $slide = Slide::all();		
        $new_product=product::where('new', 1)->paginate(8);
        $sanpham_khuyenmai=product::where('promotion_price','<>',0)->paginate(4);
        return view('page.trangchu', compact('slide', 'new_product','sanpham_khuyenmai'));	
    }		
    public function getLoaiSp(){
        return view('page.loai_sanpham');
    }	
    public function getChitiet( Request $request){
        $sanpham= product:: where ('id', $request-> id)->first();
        $splienquan=products::where('id','<>', $sanpham->id, 'and', 'id_type', '=', $sanpham->id_type,)->paginate(3);
        $comments=comment::where ('id_product', $request->id)->get();
        return view('page.chitiet_sanpham', compact('sanpham','splienquan', 'comments'));
    }
    public function getLienhe(){
        return view('page.lienhe');
    }
    public function getAboutus(){
        return view('page.about_sanpham');
    }
}
