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

    table
    {
        border: 2px solid skyblue;
        text-align: center;
    }

    th
    {
        background-color: skyblue;
        padding: 10px;
        font-size: 18px;
        font-weight: bold;
        text-align: center;
        color: black;
    }

    .table_center
    {
        display: flex;
        justify-content: center;
        align-items: center;
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

          <h3>Semua Order</h3>
          <br>
          
        <div class="table_center">
          <table>
            <tr>
                <th>Customer</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Produk</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th>Status Pembayaran</th>
                <th>Status</th>
                <th>Ubah Status</th>
                <th>Print</th>
            </tr>

            @foreach($data as $data)

            <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->rec_address}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->product->title}}</td>
                <td>{{$data->product->price}}</td>
                <td>
                    <img width="150" src="products/{{$data->product->image}}">
                </td>

                <td>{{$data->payment_status}}</td>

                <td>

                    @if($data->status == 'in progress')

                    <span style="color:red">{{$data->status}}</span>

                    @elseif($data->status == 'on the way')

                    <span style="color:yellow;">{{$data->status}}</span>

                    @else
                    <span style="color:lightgreen;">{{$data->status}}</span>
                    @endif

                </td>

                <td>
                    <a class="btn btn-primary" href="{{url('on_the_way',$data->id)}}">On the Way</a>
                    <a class="btn btn-success" href="{{url('delivered',$data->id)}}">Delivered</a>
                
                </td>

                <td>
                    <a class="btn btn-secondary" href="{{url('print_pdf',$data->id)}}">Print PDF</a>
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