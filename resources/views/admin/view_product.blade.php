<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css')

   <style type="text/css">

    .div_deg
    {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 60px
    }

    .table_deg
    {
        border: 2px solid grey;
        margin-top: -50px;
    }

    th
    {
        background-color: skyblue;
        color: black;
        font-size: 19px;
        font-weight: bold;
        padding: 15px;
    }

    td
    {
        border: 1px solid skyblue;
        text-align: center;
        color: black;
    }

    input[type='search']
    {
       width: 500px;
       height: 40px;
    }

    </style>

  </head>
  <body>

    @include('admin.sidebar')
    <!-- Sidebar Navigation end-->

    <section class="content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h1 class="m-0 float-left">Semua Produk</h1>
                <form action="{{url('product_search')}}" method="get" class="float-right">
                  @csrf
                  <input type="search" name="search">
                  <input type="submit" class="btn btn-secondary" value="Cari">
                </form>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama Produk</th>
                    <th>Deskripsi</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Gambar</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                  </tr>
                  </thead>
                  <tbody>

                  @foreach($product as $products)

                  <tr>
                    <td>{{$products->title}}</td>
                    <td>{!!Str::limit($products->description,100)!!}</td>
                    <td>{{$products->category}}</td>
                    <td>{{$products->price}}</td>
                    <td>{{$products->quantity}}</td>
                    <td>
                        <img height="120" width="120" src="products/{{$products->image}}">
                    </td>
                    <td>
                        <a class="btn btn-success" href="{{url('update_product',$products->slug)}}">Edit</a>
                    </td>

                    <td>
                        <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_product',$products->id)}}">Hapus</a>
                    </td>
                  </tr>
                  
                  @endforeach

                  </tfoot>
                </table>
              </div>
              <div class="div_deg">
                {{$product->onEachSide(1)->links()}}
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- JavaScript files-->
    
    @include('admin.js')
  </body>
</html>