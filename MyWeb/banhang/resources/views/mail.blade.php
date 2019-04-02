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
    <div class="container">
        <div class="row">
            <h2> THÔNG TIN THANH TOÁN: </h2>
            <p> Họ tên: {{$name}} </p>      
            <p> Địa chỉ: {{$address}} </p>
            <p> Số ĐT: {{$phone_number}} </p>

            <table  class="table table-hover table-sm table-bordered text-center">
                <thead class="thead-dark">
                    <tr>
                        <th style="color: red;"> ID sản phẩm </th>
                        <th style="color: red;"> Tên sản phẩm </th>
                        <th style="color: red;"> Số lượng </th>
                        <th style="color: red;"> Price </th>
                        <th style="color: red;"> Promotion Price </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($sanpham as $pr)
                    <tr>
                        <td> {{$pr['item']['id']}} </td>
                        <td> {{$pr['item']['name']}} </td>
                        <td> {{$pr['quantity']}} </td>
                        <td> {{number_format($pr['item']['price'])}} </td> 
                        <td> {{number_format($pr['item']['promotion_price'])}} </td> 
                    </tr>
                    @endforeach
                    <tr>
                        <th colspan="3" > 
                            <div class="d-flex justify-content-start"> Tổng tiền: {{number_format($totalPrice)}}  </div> 
                        </th>
                        <td> 
                            <div class="text-danger"> </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>