

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
                                <div class="row">
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

                </div>
                </div>
            </div>
          </div>

          <div class="row">
            <div class="x_content">

                <div class="">
                  <ul class="to_do">
                    <li>
                      <p>
                        <input type="checkbox" name="alumnos[]" id="uno" value="1" class="flat"> Schedule meeting with new client </p>
                    </li>
                    <li>
                      <p>
                        <input type="checkbox" name="alumnos[]" id="dos" value="2" class="flat"> Create email address for new intern</p>
                    </li>
                    <li>
                      <p>
                        <input type="checkbox" name="alumnos[]" id="tres" value="3" class="flat"> Have IT fix the network printer</p>
                    </li>
                    <li>
                      <p>
                        <input type="checkbox" name="alumnos[]" id="cuatro" value="4" class="flat"> Copy backups to offsite location</p>
                    </li>
                    <li>
                      <p>
                        <input type="checkbox" name="alumnos[]" id="cinco" value="5" class="flat"> Food truck fixie locavors mcsweeney</p>
                    </li>

                  </ul>
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

      <!-- jQuery -->
      <script src="<?=base_url()?>static/panel/vendors/jquery/dist/jquery.min.js"></script>
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
