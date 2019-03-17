<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Product;
use App\ProductType;
use App\BillDetail;
use App\Bill;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(6);
        return view('admin.products.index', ['products'=> $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $theloai = ProductType::all();
        return view('admin.products.create', ['theloai'=> $theloai]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
        
        $product->name = $request->name;
        $product->producttype_id = $request ->producttype_id;
        $product->description = $request ->description;
        $product->price = $request ->price;
        $product->promotion_price = $request ->promotion_price;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg'){
                return redirect('admin/products/create')->with('Lỗi','Chỉ được chọn file có đuôi jpg, png, jpeg');
            }
            $name = $file->getClientOriginalName();
            $image = time().'_'.$name;
            $file->move("banhang/image/products", $image);
            $product->image = $image;
        }
        
        $product->unit = $request ->unit;
        $product->new = $request ->new;
        $product->status = $request ->status;
        $product->save();
        return redirect()->back()->with('thongbao', 'Thêm sản phẩm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('admin.products.show', ['product'=> $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        
        $product->name = $request->name;
        $product->producttype_id = $request ->producttype_id;
        $product->description = $request ->description;
        $product->price = $request ->price;
        $product->promotion_price = $request ->promotion_price;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg'){
                return redirect('admin/products/create')->with('Lỗi','Chỉ được chọn file có đuôi jpg, png, jpeg');
            }
            $name = $file->getClientOriginalName();
            $image = time().'_'.$name;
            $file->move("banhang/image/products", $image);
            unlink("banhang/image/products/".$product->image);
            $product->image = $image;
        }
        
        $product->unit = $request ->unit;
        $product->new = $request ->new;
        $product->status = $request ->status;

        $product->save();
        return redirect()->back()->with('message','Chỉnh sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $id)
    {
        $product = Product::find($id);

        foreach ($product as $value) {
            $oldImage = $value->image;
            Storage::delete('./banhang/image/products/'.$oldImage);
        }
        
        Product::destroy($id->id);
        return redirect()->route('products.index');

        /*$product = Product::find($id);
        Bill::destroy($id->id);*/
        //return redirect()->route('products.index');

    }

}
