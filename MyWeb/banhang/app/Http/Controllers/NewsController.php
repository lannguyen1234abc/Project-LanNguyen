<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tintuc = News::paginate(3);
        return view('admin.news.index', compact('tintuc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $tintuc = new News;
        $tintuc->title = $request->title;
        $tintuc->content = $request ->content;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg'){
                return redirect('admin/news/create')->with('Lỗi','Chỉ được chọn file có đuôi jpg, png, jpeg');
            }
            $name = $file->getClientOriginalName();
            $image = time().'_'.$name;
            $file->move("banhang/image/tintuc", $image);
            $tintuc->image = $image;
        }
        
        $tintuc->new = $request ->new;
        
        $tintuc->save();
        return redirect()->back()->with('thongbao', 'Thêm tin thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tintuc = News::find($id);
        return view('admin.news.show', compact('tintuc'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tintuc = News::find($id);
        return view('admin.news.edit', ['tintuc' => $tintuc]);
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
        $tintuc = News::find($id);
        
        
        $tintuc->title = $request->title;
        $tintuc->content = $request ->content;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg'){
                return redirect('admin/news/create')->with('Lỗi','Chỉ được chọn file có đuôi jpg, png, jpeg');
            }
            $name = $file->getClientOriginalName();
            $image = time().'_'.$name;
            $file->move("banhang/image/tintuc", $image);
            unlink("banhang/image/tintuc/".$tintuc->image);
            $tintuc->image = $image;
        }
        
        $tintuc->new = $request ->new;
        
        $tintuc->save();
        return redirect()->back()->with('message','Chỉnh sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $id)
    {
        News::destroy($id->id);
        return redirect()->back();
    }
}
