<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cart;
use App\Models\slide;
use App\Models\product;
use App\Models\BillDetail;
use Illuminate\Support\Facades\Session;

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

    public function getIndexAdmin(){
        $product = product::all();
        return view('pageadmin.admin')->with(['product'=>$product,'sumSold'=>count(BillDetail::all())]);
     }
     public function getAdminAdd(){
        return view('pageadmin.formAdd');
     }
    
    public function postAdminAdd(Request $request)
    {
        $product = new product();
    
        if ($request->hasFile('inputImage')) {
            $file = $request->file('inputImage');
            $fileName = $file->getClientOriginalName();
            $file->move('source/image/product', $fileName);
            $product->image = $fileName;
        }
    
        $product->name = $request->inputName;
        $product->description = $request->inputDescription;
        $product->unit_price = $request->inputPrice;
        $product->promotion_price = $request->inputPromotionPrice;
        $product->unit = $request->inputUnit;
        $product->new = $request->inputNew;
        $product->id_type = $request->inputType;
        $product->save();
        return $this->getIndexAdmin();
    }

    public function getAdminEdit($id)
{
 $product = product::find($id);
 return view('pageadmin.formEdit')->with('product', $product);
}
    
    public function postAdminEdit(Request $request)
    {
        $id = $request->editId;
        $product = product::find($id);
    
        if ($request->hasFile('editImage')) {
            $file = $request->file('editImage');
            $fileName = $file->getClientOriginalName();
            $file->move('source/image/product', $fileName);
            $product->image = $fileName;
        }

        if ($request -> file('editImage')!=null){
            $product -> image = $fileName;
        }
    
        $product->name = $request->editName;
        $product->description = $request->editDescription;
        $product->unit_price = $request->editPrice;
        $product->promotion_price = $request->editPromotionPrice;
        $product->unit = $request->editUnit;
        $product->new = $request->editNew;
        $product->id_type = $request->editType;
        $product->save();
        return $this->getIndexAdmin();
    }

    

    


public function postAdminDelete($id){
    $product = product::find($id);
    $product-> delete();
    return $this -> getIndexAdmin();
}
public function getAddToCart(Request $req, $id)																					
{																					
 if (Session::has('user')) {																					
 if (Product::find($id)) {																					
 $product = Product::find($id);																					
 $oldCart = Session('cart') ? Session::get('cart') : null;																					
 $cart = new Cart($oldCart);																					
 $cart->add($product, $id);																					
 $req->session()->put('cart', $cart);																					
 return redirect()->back();																					
 } else {																					
 return '<script>alert("Không tìm thấy sản phẩm này.");window.location.assign("/");</script>';																					
 }																					
 } else {																					
 return '<script>alert("Vui lòng đăng nhập để sử dụng chức năng này.");window.location.assign("/login");</script>';																					
 }																					
}																					
                                                                                    
                                                                                    
                                                                                    
                                            


}
