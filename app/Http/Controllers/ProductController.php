<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public Function show(){
        return view("form");
    }
    public function store(Request $req){
        // print_r($req->all());
        $product['Product_name']=$req->input('Prod');
        $product['Price']=$req->input('price');

        product::create($product);
       return redirect()->route('display');
    }
    public function getprod(){
        $product= product::all();
        return view('displayProd', compact('product'));
    }
    
    public function delProd($id){
        product::where('Product_Id',$id)->delete();
        return redirect()->back();
    }

       //  Fetch Products For Update
       public function fetchProd($Product_Id)
       {
           $product = product::where('Product_Id',$Product_Id)->get();
           return view('update',compact('product'));
       }
     
       public function updateProd(Request $req)
       {
           $id =  $req->input('id');
           $Prod_Name =  $req->input('Prod');
           $Prod_Price =  $req->input('price');
      
          product::where('Product_Id',$id)->update(['Product_name'=>$Prod_Name,'Price'=>$Prod_Price]);
          return redirect()->route('display');
      }

}