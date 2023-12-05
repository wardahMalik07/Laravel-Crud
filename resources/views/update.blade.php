<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form</h1>
    @foreach($product as $data)
    <form action="/updateProd" method="Post">
        @csrf
        <input type="hidden" name="id" value="{{$data->Product_Id}}" Placeholder="Product Id"><br>
        <input type="text" name="Prod" value="{{$data->Product_name}}" Placeholder="Product Name"><br><br>
        <input type="number" name="price"  value="{{$data->Price}}" Placeholder="Product Price"><br><br>
        <button>Update</button>
    </form>
    @endforeach
</body>
</html>