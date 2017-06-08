

<!-- page content -->
<form class="form-horizontal form-label-left" action='../Maestro_ajax/registrar_evento' method='POST' novalidate>
      <div class="right_col" role="main">
        <div class="">



          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

              <div class="x_panel">
                <div class="x_title">
                  <h2>Registrar eventos </h2>

                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                            <!--    <div class="row">
                                    <div class="btn-group" data-toggle="buttons">
                                      <label class="btn btn-default">
                                        <input type="radio" name="evento" id="option1" value="llego"> Llegó
                                      </label>
                                      <label class="btn btn-default">
                                        <input type="radio" name="evento" id="option2" value="durmio"> Durmió
                                      </label>
                                      <label class="btn btn-default">
                                        <input type="radio" name="evento" id="option3" value="comio"> Comió
                                      </label>
                                      <label class="btn btn-default">
                                        <input type="radio" name="evento" id="option1" value="jugo"> Jugó
                                      </label>
                                      <label class="btn btn-default">
                                        <input type="radio" name="evento" id="option3" value="retiro"> Se retiró
                                      </label>
                                    </div>
                                  </div>
                                -->
                                <div id="acciones" class="your-class slider">


                                </div>


                </div>
                </div>
            </div>
          </div>





          <div class="x_content">
              <table id="tbl_alumno" aria-describedby="datatable_info" role="grid" id="datatable" class="table table-striped table-bordered dataTable no-footer">
              <thead>
                <tr role="row">
                  <th>DNI</th>
                  <th>Apelido y Nombre</th>
                  <th>Fecha Nacimiento</th>
                  <th>Edad</th>
                  <th>e-mail</th>
                  <th>Dirección</th>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>





          <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
              <button id="send" type="submit" class="btn btn-success">Registrar evento</button>
            </div>
          </div>


        </div>
      </div>


    </form>
      <!-- /page content -->
      <!-- validator -->

      <!-- footer content -->
          <footer>
            <div class="pull-right">
              Gestor de guarderia
            </div>
            <div class="clearfix"></div>
          </footer>
          <!-- /footer content -->
        </div>
      </div>

      <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

      <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

      <script src="<?=base_url()?>slick/slick.min.js"></script>
    





      <script>

      function fillDiv(){
                 $.ajax({
                   type: "POST",
                   url:"<?=base_url()?>maestro/Maestro_ajax/get_acciones",
                   dataType: 'json',
                  contentType: 'application/json',
                   success: function(data) {

                     //alert('Load was performed.');
                   }
                 });
               }


         $(document).ready(function(){

           fillDiv();
          $('#acciones').append("<div><i class=\"fa fa-apple fa-5x\"></i></div>");
          $('#acciones').append("<div><i class=\"fa fa-home fa-5x\"></i></div>");
          $('#acciones').append("<div><i class=\"fa fa-bus fa-5x\"></i></div>");
          $('#acciones').append("<div><i class=\"fa fa-camera fa-5x\"></i></div>");
          $('#acciones').append("<div><i class=\"fa fa-cutlery fa-5x\"></i></div>");
          $('#acciones').append("<div><i class=\"fa fa-camera fa-5x\"></i></div>");
          $('#acciones').append("<div><i class=\"fa fa-cutlery fa-5x\"></i></div>");


           $('.your-class').slick({
              centerMode: true,
              centerPadding: '60px',
              slidesToShow: 5,
              dots: true,
              responsive: [
                {
                  breakpoint: 768,
                  settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                  }
                }
              ]
           });
         });
       </script>


      <!-- jQuery
      <script src="<?=base_url()?>static/panel/vendors/jquery/dist/jquery.min.js"></script>
      -->

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
