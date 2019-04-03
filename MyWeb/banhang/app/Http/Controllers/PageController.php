<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductType;
use App\Slide;
use App\Product;
use App\User;
use App\News;
use App\Comment;

class PageController extends Controller
{
    public function home(){
        $slides = Slide::all();
        $news = News::all();
        $type_home = ProductType::all(); //loại sản phẩm
        $new_products = Product::paginate(9);
        
        return view('customer.page.trangchu',compact('slides', 'news','type_home', 'new_products'));

        //return view('page.trangchu',['producttypes'=>$producttypes], ['slides'=>$slides]); 
        
        //sử dụng mảng slide trỏ tới biến truyền vào là slide;
    }
    
    public function product(){
        $type_product = ProductType::all();
        $products = Product::paginate(12);
        
        return view('customer.page.sanpham', compact('type_product', 'products'));
    }
    
    public function producttype($type){
        $types = ProductType::all(); //loại sản phẩm
       
        $product_type = Product::where('producttype_id', $type)->paginate(9);

        $name_type = ProductType::where('id', $type)->first();
        return view('customer.page.loaisanpham', compact('types','product_type','name_type'));
    }

    public function chitiet(Request $re){
        $product = Product::where('id', $re->id)->first();
        $comment = Comment::where('product_id', $re->id)->get();
        //dd($comment);
        //$products = Product::paginate(5);

        return view('customer.page.chitietsanpham', compact('product', 'comment'));
    }
   
    public function introduce(){
        return view('customer.page.gioithieu');
    }
    
    public function contact(){
        return view('customer.page.lienhe');
    }
    
    public function news(){
        $tintuc = News::all();
        $types = ProductType::all();
        return view('customer.page.tintuc', compact('tintuc', 'types'));
    }

    public function cttintuc($id){
        $tt = News::find($id);

        return view('customer.page.cttintuc', compact('tt'));
    }
    
    public function search(Request $re){
        $product = Product::where('name', 'like', '%'.$re->search.'%')
                            ->orwhere('price', $re->search)->get();
        return view('customer.page.search', compact('product'));
    }

    public function home_admin(){
        return view('admin.home');
    }

/*
    public function admin_Login(){
        return view('dangnhap');
    }*/
    
}
