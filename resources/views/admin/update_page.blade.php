<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css')

   <style type="text/css">

        h1
        {
            color: white;
        }

        label
        {
            display: inline-block;
            width: 250px;
            font-size: 18px!important;
            color: white!important;
        }

        input[type='text']
        {
            width: 300px;
            height: 50px;
        }

        textarea
        {
            width: 450px;
            height: 80px;
        }

        .input_deg
        {
            padding: 15px;
        }

        h2
        {
            color: white;
        }

   </style>
  </head>
  <body>
    @include('admin.header')

    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

          <h2>Perbarui Produk</h2>

          <div class="div_deg">

            <form action="{{url('edit_product',$data->id)}}" method="post"
            enctype="multipart/form-data">

            @csrf

                <div>
                    <label for="">Nama</label>
                    <input type="text" name="title" value="{{$data->title}}">
                </div>

                <div>
                    <label for="">Deskripsi</label>
                    <textarea name="description">{{$data->description}}</textarea>
                </div>

                <div>
                    <label>Produk Kategori</label>
                    <select name="category">
                        <option value="{{$data->category}}">{{$data->category}}</option>

                        @foreach($category as $category)

                        <option value="{{$category->category_name}}">{{$category->category_name}}</option>

                        @endforeach
                    </select>
                </div>

                <div>
                    <label>Harga</label>
                    <input type="number" name="price" value="{{$data->price}}">
                </div>

                <div>
                    <label>Jumlah</label>
                    <input type="number" name="quantity" value="{{$data->quantity}}">
                </div>

                <div>
                    <label>Gambar Lama</label>
                    <img width="150" src="/products/{{$data->image}}">
                </div>

                <div>
                    <label>Gambar Baru</label>
                    <input type="file" name="image">
                </div>

                <div>
                    <input class="btn btn-success" type="submit" value="Perbarui Produk">
                </div>

            </form>
          </div>
      </div>
    </div>
    <!-- JavaScript files-->

    @include('admin.js')

  </body>
</html>
