<!DOCTYPE html>
<html>
<head> 
   @include('admin.css')

    <style type="text/css">
        input[type='text']
        {
            width: 400px;
            height: 40px;
        }

        .search
        {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        .div_deg
        {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .table_deg
        {
            text-align: center;
            margin: auto;
            border: 2px solid yellowgreen;
            margin-top: 50px;
            width: 400px;
        }

        th
        {
            background-color: skyblue;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
            color: black;
        }

        td
        {
            color: black;
            padding: 10px;
            border: 1px solid skyblue;
        }

    </style>

</head>
<body>

    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
  <section class="content-wrapper">
      <div class="container-fluid">
        <div class="row">


          <h1 style="color: black">Tambah Kategori</h1>

          <div class="div_deg">
        </div>
      </div>
      <div>

      <form action="{{url('add_category')}}" method="post">

      @csrf 

        <div class="search">
          <input type="text" name="category" placeholder="Ketik disini...">
          <input class="btn btn-primary" style="margin-left: 10px;" type="submit" value="Tambah">
        </div>

      </form>
        <table class="table_deg">
            <tr>
                <th>Nama Kategori</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>

            @foreach($data as $data)

            <tr>
                <td>{{$data->category_name}}</td>

                <td>
                  <a class="btn btn-success" href="{{url('edit_category',$data->id)}}">Edit</a>
                </td>

                <td>
                  <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_category',$data->id)}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
        </div>
      </div>
    </div>
  </section>
    <!-- JavaScript files-->
    @include('admin.js')
</body>
</html>