<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <base href="{{asset('')}}"> 

    <link rel="stylesheet" href="{{asset('banhang/asset/style.css')}}">
   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
      
  <div class="container mt-3 mb-5 Admin_Size_image">
    <div class="row ">
      <div class="col-6 offset-3 d-flex justify-content-center align-items-center flex-column Border-form">
        <h1 class="text-uppercase mt-5 text-success"><font face="Comic sans MS" size="10"> Admin </font></h1>
        
        <form class=" d-flex flex-column mb-5 mt-5 w-100" action="{{route('postAdminlogin')}}" method="POST">
        {{ csrf_field() }}

                @if(count($errors) > 0)
                    <div class="alert alert-success">
                        @foreach($errors->all() as $err)
                            {{$err}}
                        @endforeach
                    </div>
                @endif
                
                @if( session('thongbao'))
                    <div class="alert alert-danger">
                        {{session('thongbao')}}
                    </div>
                @endif

                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> <i class="fas fa-envelope"></i> Username</b> </lable>
                        <input type="text" placeholder="Username" name="name">
                    </div>
                    
                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> <i class="fas fa-lock-open"></i>Password</b> </lable>
                        <input type="password" placeholder="Password" name="password">
                    </div>
                    
                    <div class="mb-3">
                        <button type="submit" class="btn btn-danger"> Login
                        </button>
                    </div>
                </form>
      </div>
    </div>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>   