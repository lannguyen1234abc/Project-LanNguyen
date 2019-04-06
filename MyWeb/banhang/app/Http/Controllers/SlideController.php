<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;

class SlideController extends Controller
{
     public function index()
    {
        $slides = Slide::paginate(6);
        return view('admin.slides.index', compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slides.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $slide = new Slide;
        if($request->hasFile('link')){
            $file = $request->file('link');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg'){
                return redirect('admin/slides/create')->with('Lỗi','Chỉ được chọn file có đuôi jpg, png, jpeg');
            }
            $name = $file->getClientOriginalName();
            $link = time().'_'.$name;
            $file->move("banhang/image/logo", $link);
            $slide->link = $link;
        }
        
        $slide->save();
        return redirect()->back()->with('thongbao', 'Thêm Slide thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slide = Slide::find($id);
        return view('admin.slides.show', compact('slide'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $s = Slide::find($id);
        return view('admin.slides.edit', ['s' => $s]);
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
        $slide = Slide::find($id);
        
        
        $slide->link = $request->link;

        if($request->hasFile('link')){
            $file = $request->file('link');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg'){
                return redirect('admin/slides/create')->with('Lỗi','Chỉ được chọn file có đuôi jpg, png, jpeg');
            }
            $name = $file->getClientOriginalName();
            $link = time().'_'.$name;
            $file->move("banhang/image/logo", $link);
            unlink("banhang/image/logo/".$slide->link);
            $slide->link = $link;
        }
        
        $slide->save();
        return redirect()->back()->with('message','Chỉnh sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slide $id)
    {
        Slide::destroy($id->id);
        return redirect()->back();
    }
}
