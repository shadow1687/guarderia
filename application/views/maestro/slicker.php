<html>
  <head>
  <title>My Now Amazing Webpage</title>
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>js/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>js/slick/slick-theme.css"/>
  </head>
  <body>

    <div class="container">
      <div class="col-md-12 col-sm-12 col-xs-12">

        <div class="x_panel">
<div class="x_content">
  <div class="your-class">
    <div><i class="fa fa-home fa-5x"></i></div>
    <div><i class="fa fa-home fa-5x"></i></div>
    <div><i class="fa fa-home fa-5x"></i></div>
    <div><i class="fa fa-home fa-5x"></i></div>
    <div><i class="fa fa-home fa-5x"></i></div>
    <div><i class="fa fa-home fa-5x"></i></div>
    <div><i class="fa fa-home fa-5x"></i></div>
    <div><i class="fa fa-home fa-5x"></i></div>

  </div>
</div>
</div>
</div>
</div>

  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="<?=base_url()?>js/slick/slick.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('.your-class').slick({
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 5,
  autoplay:true,
  dots:true,
  
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
    });
  </script>

  <!-- Bootstrap -->
  <script src="<?=base_url()?>static/panel/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="<?=base_url()?>static/panel/vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="<?=base_url()?>static/panel/vendors/nprogress/nprogress.js"></script>
  <!-- validator -->
  <script src="<?=base_url()?>static/panel/vendors/validator/validator.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="<?=base_url()?>static/panel/build/js/custom.min.js"></script>

  <!-- iCheck -->
  <script src="<?=base_url()?>static/panel/vendors/iCheck/icheck.min.js"></script>


  </body>
</html>
