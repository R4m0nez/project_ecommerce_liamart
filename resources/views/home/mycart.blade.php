<!DOCTYPE html>
<html>

<head>
    @include('home.css')

    <style type="text/css">
    .div_deg
    {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 60px;
    }

    table
    {
        border: 2px solid black;
        text-align: center;
        width: 800px;
    }

    th
    {
        border: 2px solid black;
        text-align: center;
        color: white;
        font: 20px;
        font-weight: bold;
        background-color: black;
    }

    td
    {
        border: 1px solid;
    }

    .cart_value
    {
        text-align: center;
        margin-bottom: 70px;
        padding: 18px;
    }

    .order_deg
    {
        padding-right: 100px;
        margin-top: -50px;
    }

    label
    {
        display: inline-block;
        width: 150px;
    }

    .div_gap
    {
        padding: 15px;
    }

    </style>
</head>

<body>
  <div class="hero_area">
    @include('home.header')
    <!-- end header section -->

  </div>

<div class="div_deg">

    <table>
        <tr>
            <th>Nama Produk</th>

            <th>Harga</th>

            <th>Gambar</th>

            <th>Hapus Pesanan</th>
        </tr>

        <?php

        $value = 0;

        ?>

        @foreach($cart as $cart)

        <tr>
            <td>{{$cart->product->title}}</td>
            <td>{{$cart->product->price}}</td>
            <td>
                <img width="150px" src="/products/{{$cart->product->image}}" alt="">
            </td>
            <td>
                <a class="btn btn-danger" href="{{url('delete_cart',$cart->id)}}">Hapus</a>
            </td>
        </tr>

        <?php

        $value = $value + $cart->product->price;

        ?>

        @endforeach

    </table>

    

</div>

    <div class="cart_value">
        <h3>Total Keranjang: Rp{{$value}}</h3>
    </div>

    <div class="order_deg" style="display: flex; justify-content: center; align-items:center;">
        <form action="{{url('confirm_order')}}" method="Post">

            @csrf

            <div class="div_gap">
                <label>Nama Penerima</label>
                <input type="text" name="name" value="{{Auth::user()->name}}">
            </div>

            <div class="div_gap">
                <label>Alamat Penerima</label>
                <textarea name="address" >{{Auth::user()->address}}</textarea>
            </div>

            <div class="div_gap">
                <label>Telepon<label>
                <input type="text" name="phone" value="{{Auth::user()->phone}}">
            </div>

            <div class="div_gap">
                <input class="btn btn-primary" type="submit" Value="Cash on Delivery">

                <a class="btn btn-success" href="{{url('stripe',$value)}}">Pay Using Card</a>
            </div>
        </form>

</div>

  <!-- info section -->
    @include('home.footer')
  <!-- end info section -->
</body>

</html>