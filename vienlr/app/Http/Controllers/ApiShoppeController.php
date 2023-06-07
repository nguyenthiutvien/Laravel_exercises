<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Tshoppe;			
			
use Illuminate\Support\Facades\File;			

class ApiShoppeController extends Controller
{
    //
    public function getProducts()					
{					
$products = Tshoppe::all();					
return response()->json($products);					
}					
public function getOneProduct($id)					
{					
$product = Tshoppe::find($id);					
return response()->json($product);					
}					
public function addProduct(Request $request)					
{					
$product = new Tshoppe();					
$product->name = $request->input('name');					
$product->image = $request->input('image');								
$product->unit_price = intval($request->input('price'));										
$product->unit = $request->input('shopOwner');					
				
$product->save();					
return $product;					
}					
public function deleteProduct($id)					
{					
$product = Tshoppe::find($id);					
$fileName = 'source/image/product/' . $product->image;					
if (File::exists($fileName)) {					
File::delete($fileName);					
}					
$product->delete();					
return ['status' => 'ok', 'msg' => 'Delete successed'];					
}					
public function editProduct(Request $request, $id)					
{					
$product = Tshoppe::find($id);					
					
$product->name = $request->input('name');					
$product->image = $request->input('image');								
$product->unit_price = intval($request->input('price'));										
$product->unit = $request->input('shopOwner');						
					
$product->save();					
return response()->json(['status' => 'ok', 'msg' => 'Edit successed']);					
}					
					
public function uploadImage(Request $request)					
{					
// process image					
if ($request->hasFile('uploadImage')) {					
$file = $request->file('uploadImage');					
$fileName = $file->getClientOriginalName();					
					
$file->move('source/image/product', $fileName);					
					
return response()->json(["message" => "ok"]);					
} else return response()->json(["message" => "false"]);					
}					
}
