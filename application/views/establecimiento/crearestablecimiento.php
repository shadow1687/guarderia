<!-- page content -->
      <div class="right_col" role="main">
        <div class="">



          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Crear nuevo establecimiento </h2>

                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <form class="form-horizontal form-label-left" action='Establecimiento/crear' method='POST' novalidate>

                    <span class="section">Información básica</span>

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombre <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="nombre" class="form-control col-md-7 col-xs-12" data-validate-length-range="20" name="nombre" placeholder="" required="required" type="text">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Dirección <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="direccion" class="form-control col-md-7 col-xs-12" data-validate-length-range="20" name="direccion" placeholder="" required="required" type="text">
                      </div>
                    </div>


                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Email <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="email" class="form-control col-md-7 col-xs-12" data-validate-length-range="8" name="email" placeholder="" required="required" type="email">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Teléfono <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="telefono" class="form-control col-md-7 col-xs-12" data-validate-length-range="20" name="telefono" placeholder="" required="required" type="text">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Ciudad <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="ciudad" class="form-control col-md-7 col-xs-12" data-validate-length-range="20" name="ciudad" placeholder="" required="required" type="text">
                      </div>
                    </div>
<!--
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Observaciones <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea id="observaciones" required="required" name="observaciones" class="form-control col-md-7 col-xs-12"></textarea>
                      </div>
                    </div>
-->
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-md-offset-3">
                        <button type="submit" class="btn btn-primary">Cancelar</button>
                        <button id="send" type="submit" class="btn btn-success">Aceptar</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
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

    </body>
  </html>
