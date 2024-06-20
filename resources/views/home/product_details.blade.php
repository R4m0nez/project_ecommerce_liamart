<!DOCTYPE html>
<html>

<head>
    @include('home.css')

    <style type="text/css">
      .div_center
      {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 30px;
      }
    </style>
</head>

<body>
  <div class="hero_area">
    @include('home.header')
    <!-- end header section -->

  </div>

  <!-- product details -->
  <style type="text/css">

    .div_deg
    {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 60px
    }

    .detail-box
    {
      padding: 15px;
    }

    </style>

<section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Produk Terbaru
        </h2>
      </div>
      <div class="row">


        <div class="col-md-12">
          <div class="box">   

              <div class="div_center">
                <img width="400" src="/products/{{$data->image}}" alt="Image" height="500" width="600">
              </div>

              <div class="detail-box">
                <h6>{{$data->title}}</h6>
                <h6>Harga
                  <span>
                    ${{$data->price}}
                  </span>
                </h6>
              </div>  
              
              <div class="detail-box">
                <h6>Kategori: {{$data->category}}</h6>

                <h6>Tersedia
                  <span>
                    {{$data->quantity}}
                  </span>
                </h6>
              </div>

              <div class="detail-box">
                  <p>{{$data->description}}</p>
              </div>

              <div class="btn btn-primary">
                  <a href="{{url('add_cart',$data->id)}}"><i class="fa fa-cart-plus"> Tambah ke Keranjang</i></a>
              </div>
              
          </div>
        </div>

        
      </div>
      
    </div>
  </section>
  <!-- end produk details -->
  
  <!--info section -->
    @include('home.footer')
  <!-- end info section -->
</body>

</html>