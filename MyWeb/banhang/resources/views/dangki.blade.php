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
  <div class="container Image_Dangki mb-5">
        <div class="row">
            <div class="col-md-6 offset-md-3 d-flex justify-content-center align-items-center flex-column Border-form">
                <h1 class="text-uppercase mt-3 text-success"><font face="Comic sans MS" size="10"> register </font></h1>
                
                <form class=" d-flex flex-column mb-5 mt-3 w-100" action="postDangki" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="POST" />
                
                @if( session('thanhcong'))
                    <div class="alert alert-success">
                        {{session('thanhcong')}}
                    </div>
                @endif
                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> <i class="fa fa-user" aria-hidden="true"></i> Name</b> </lable>
                        <input type="text" id="name" placeholder="Name" name="name">
                    </div>
                    @if($errors->has('name'))
                        <div class="alert alert-success">
                            {{$errors->first('name')}}
                        </div>
                    @endif

                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> <i class="fas fa-envelope"></i> Email</b> </lable>
                        <input type="email" id="email" placeholder="Email" name="email">
                    </div>
                    @if($errors->has('email'))
                        <div class="alert alert-success">
                            {{$errors->first('email')}}
                        </div>
                    @endif

                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> <i class="fas fa-phone"></i> Phone number</b> </lable>
                        <input type="text" id="phone_number" placeholder="Phone_number" name="phone_number">
                    </div>
                    @if($errors->has('phone_number'))
                        <div class="alert alert-success">
                            {{$errors->first('phone_number')}}
                        </div>
                    @endif

                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> <i class="fas fa-home"></i> Address </b> </lable>
                        <input type="text" id="address" placeholder="Address" name="address">
                    </div>
                    @if($errors->has('address'))
                        <div class="alert alert-success">
                            {{$errors->first('address')}}
                        </div>
                    @endif

                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> <i class="fas fa-lock-open"></i>Password</b> </lable>
                        <input type="password" id="password" placeholder="Password" name="password">
                    </div>
                    @if($errors->has('password'))
                        <div class="alert alert-success">
                            {{$errors->first('password')}}
                        </div>
                    @endif

                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> <i class="fas fa-sync-alt"></i> Re Password</b> </lable>
                        <input type="password" id="re_password" placeholder="Re_password" name="re_password">
                    </div>
                    @if($errors->has('re_password'))
                        <div class="alert alert-success">
                            {{$errors->first('re_password')}}
                        </div>
                    @endif

                    <div class="mb-3">
                        <button class="btn btn-danger"> CREATE
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>