<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Price;

class ProductController extends Controller
{
    public function test(){     
        return response(['test'=>'test']);
    }
    public function getOneProduct($id){
        $Pro=Product::find($id);
        // $cate=$Pro->getCategory;
        // $Pro->category=$cate->name;
        
        // $Pro=$price;
        // $Pro->price=$price->value;   
        // $Pri=Price::find($Pro->id);
        // $Pro->PriceDi=$Pri->value;
        // $cate=$Pro->getCategory;
        // $Pro->category=$cate;
        return response(['data'=>$Pro]);
    }
    public function getAllProducts(){
        $products= Product::all();
        return response(['data'=>$products]);
    }
    public function  addProduct(Request $res){
        $product=Product::create($res->all());
        return response([$product]);
      
    }
    public function deleteProduct($req){
        $product=Product::find($req);
        if($product){
            $product->delete();
            $productAfterDelete=Product::all();
            return response($productAfterDelete);
        }
        return response(['message'=>'ID not found']);
    }
    public function updateProduct(Request $req,$id){
        $product =Product::find($id);
        if($product){
            $product->update($req->all());
            return response($product);
        }else{
            return response("ID not found");
        }
    }
}