

<!-- page content -->

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










          <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
              <button id="send" type="submit" class="btn btn-success">Registrar evento</button>
            </div>
          </div>


        </div>
      </div>



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

      <!-- <script type="text/javascript">
        function Country(){
          $('#countrydll').empty();
          $('#countrydll').append("<option>Loading......</option>");

          $.ajax({
            type:"POST",
            url:_base_url + "/guarderia/maestro/Maestro_ajax/get_acciones_2",
            //"<?php echo site_url('maestro/Maestro_ajax/get_acciones_2')?>",
            //<?=base_url()?>maestro/Maestro_ajax/get_acciones_2

            contentType:"application/json; charset=utf-8",
            dataType:"json",
            success: function(data){
                $('#countrydll').empty();
                $('#countrydll').append("<option value='0'> --Select country-- </option>");

                $.each(data, function(i, item){
                    $('#countrydll').append('<option> '+data+' </option>');

                });


            },
            complete: function(){
            }
          });

        }

        $(document).ready(function(){
          Country();
        });
      </script> -->








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
