<!DOCTYPE html>
<html>

<head>
    @include('home.css')
    <style type="text/css">
    
    .heading
    {
        text-align: center;
        margin-top: 20px;
    }
    
    </style>
</head>

<body>
    
  <div class="hero_area">
    @include('home.header')
    <!-- end header section -->

  </div>
  
  <section class="contact_section ">
    <div class="container px-0">
      <div class="heading_container ">
        <h2 class="heading">
          Hubungi
        </h2>
      </div>
    </div>
    <div class="container container-bg">
      <div class="row">
        <div class="col-lg-7 col-md-6 px-0">
          <div class="map_container">
            <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.947504551272!2d111.21469357512271!3d-6.776244193220675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e772e20eb3d333f%3A0x1c318662b3e8d9e2!2sLiaMart!5e0!3m2!1sid!2sid!4v1718759287179!5m2!1sid!2sid"  width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 px-0">
          <form action="#">
            <div>
              <input type="text" placeholder="Name" />
            </div>
            <div>
              <input type="email" placeholder="Email" />
            </div>
            <div>
              <input type="text" placeholder="Phone" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Message" />
            </div>
            <div class="d-flex ">
              <button>
                SEND
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <br><br><br>


   

  <!-- info section -->
    @include('home.footer')
  <!-- end info section -->
</body>

</html>