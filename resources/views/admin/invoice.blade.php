<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <center>
        <h3>Customer: {{$data->name}}</h3>
        <h3>Alamat  : {{$data->rec_address}}</h3>
        <h3>Telepon : {{$data->phone}}</h3>

        <h2>Product : {{$data->product->title}}</h2>
        <h2>Harga   : {{$data->product->price}}</h2>

        <img height="250" width="300px" src="products/{{$data->product->image}}">
    </center>

</body>
</html>