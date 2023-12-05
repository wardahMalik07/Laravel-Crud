<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Product_Id</th>
      <th scope="col">Product_name</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        @foreach($product as $item)
      <th scope="row">{{$item->Product_Id}}</th>
      <td>{{$item->Product_name}}</td>
      <td>{{$item->Price}}</td>
      <!-- <td><a href="delprod/{{$item->Product_Id}}" class="btn btn-danger">Delete</a></td> -->
      <td><a href="fetchProd/{{$item->Product_Id}}" class="btn btn-success">UPDATE</a></td>
      <td><a href="{{ route('del', ['id' => $item->Product_Id]) }}" class="btn btn-danger">Delete</a></td>
    </tr>
@endforeach
  </tbody>
</table>
</body>
</html>