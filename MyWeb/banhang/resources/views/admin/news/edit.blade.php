@extends('admin.home')
@section('content-right')
    <div class="container mt-3">
    <div class="row"> 
            <div class="col-md-6 offset-md-3">
                <h5 class="text-info"> Tin tức </h5> </div>
            </div>
    <div class="row">
            <div class="col-md-6 offset-md-3">
                <p class="mb-3 mt-3 text-success"> 
                @if( Session::has('message')) {{Session::get('message')}}
                @endif
                </p>
            </div>
    </div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="{{route('news.update', $t->id)}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PUT" />
                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> Title </b> </lable>
                        <input type="text" id="title" placeholder="Title" name="title" value="{{$t->title}}">
                    </div>
                    
                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> Content </b> </lable>
                        <textarea id="news" name="content" value="{{$t->content}}" readonly></textarea>
                    </div>


                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> New </b> </lable>
                        <input type="text" id="new" placeholder="New" name="new" value="{{$t->new}}">
                    </div>

                    <button type="submit"> SAVE
                    </button>
                    
                </form>
            </div>
        </div>
    </div>
@endsection