<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">

  <title>Tale SEO Agency CSS Template by TemplateMo website</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('index/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="{{asset('index/assets/css/fontawesome.css')}}">
  <link rel="stylesheet" href="{{asset('index/assets/css/templatemo-tale-seo-agency.css')}}">
  <link rel="stylesheet" href="{{asset('index/assets/css/owl.css')}}">
  <link rel="stylesheet" href="{{asset('index/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('select/select2.min.css')}}">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!--

  TemplateMo 582 Tale SEO Agency

  https://templatemo.com/tm-582-tale-seo-agency

  -->
</head>
@include('index.layoute.nave')
<body>

  <!-- ***** Preloader Start ***** -->

  <!-- ***** Header Area End ***** -->



  @yield('contend')



  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2036 <a href="#">Tale SEO Agency</a>. All rights reserved.

          <br>Design: <a href="https://templatemo.com" target="_blank">TemplateMo</a> Distribution: <a
            href="https://themewagon.com">ThemeWagon</a>
        </p>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('index/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('index/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  <script src="{{asset('index/assets/js/isotope.min.js')}}"></script>
  <script src="{{asset('select/select2.min.js')}}"></script>
  <script src="{{asset('index/assets/js/owl-carousel.js')}}"></script>
  <script src="{{asset('index/assets/js/tabs.js')}}"></script>
  <script src="{{asset('index/assets/js/popup.js')}}"></script>
  <script src="{{asset('index/assets/js/custom.js')}}"></script>
  <script type="text/javascript" src="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.js"></script>
  <script>
      jalaliDatepicker.startWatch({
          minDate: "attr",
          maxDate: "attr"
      });  $(document).ready(function() {
          $('.js-example-basic-multiple').select2({maximumSelectionLength: 2}

          );

      });</script>


</body>

</html>
