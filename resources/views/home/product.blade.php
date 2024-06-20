<style type="text/css">

    .div_deg
    {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 60px
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

        @foreach($product as $products)

        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">            
              <div class="img-box">
                <img src="products/{{$products->image}}" alt="Image" height="500" width="600">
              </div>
              <div class="detail-box">
                <h6>{!!Str::limit($products->title,13)!!}</h6>
                <h6>Harga
                  <span>
                    ${{$products->price}}
                  </span>
                </h6>
              </div> 
              <div style="padding:10px">
                <a class="btn btn-danger" href="{{url('product_details',$products->id)}}">Detail</a>
              
              <a class="btn btn-primary" href="{{url('add_cart',$products->id)}}"><i class="fa fa-cart-plus"></i></a>
              </div>                   
          </div>
        </div>

        @endforeach
        
      </div>
      
    </div>
  </section>