<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3 mb-5">
        <div class="row"> <h5 class="text-info"> Thông tin sản phẩm </h5> </div>
        <div class="row">
            <div class="col-md-5">
                <form action="{{route('products.update', $product->id)}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PUT" />

                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> Name </b> </lable>
                        <input type="text" id="name" placeholder="Name" name="name" value="{{$product->name}}">
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> Producttype_id </b> </lable>
                        <input type="text" id="producttype_id" placeholder="Producttype_id" name="producttype_id" value="{{$product->producttype_id}}">
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> Description </b> </lable>
                        <input type="text" id="description" placeholder="Description" name="description" value="{{$product->description}}"> 
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> Price </b> </lable>
                        <input type="text" id="price" placeholder="Price" name="price" value="{{$product->price}}">
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> Promotion_price </b> </lable>
                        <input type="text" id="promotion_price" placeholder="Promotion_price" name="promotion_price" value="{{$product->promotion_price}}">
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> Image </b> </lable>
                        <input type="text" id="image" placeholder="Image" name="image" value="{{$product->image}}">
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> Unit </b> </lable>
                        <input type="text" id="unit" placeholder="Unit" name="unit" value="{{$product->unit}}">
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <lable> <b> New </b></lable>
                        <input type="text" id="new" placeholder="New" name="new" value="{{$product->new}}">
                    </div>

                    <button type="submit"> SAVE
                    </button>
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>