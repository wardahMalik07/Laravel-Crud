<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form</h1>
    <form action="/frm" method="Post">
        @csrf
        <input type="text" name="Prod" Placeholder="Product Name"><br><br>
        <input type="number" name="price" Placeholder="Product Price"><br><br>
        <button>Submit</button>
    </form>
</body>
</html>