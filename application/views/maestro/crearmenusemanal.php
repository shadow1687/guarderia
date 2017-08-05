<!-- page content -->
      <div class="right_col" role="main">
        <div class="">



          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Crear menú semanal </h2>

                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <?php echo validation_errors();?>
                  <form class="form-horizontal form-label-left" action='../Maestro_ajax/crear_menu_semanal' method='POST' novalidate>

                    <span class="section">Información del menú</span>

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Fecha <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="fecha" class="form-control col-md-7 col-xs-12 datepicker" data-validate-length-range="8" name="fecha" required="required" type="text">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Desayuno <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="desayuno" class="form-control col-md-7 col-xs-12" data-validate-length-range="20" name="desayuno" placeholder=""  type="text">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Almuerzo <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="almuerzo" class="form-control col-md-7 col-xs-12" data-validate-length-range="20" name="almuerzo" placeholder="" required="required" type="text">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Merienda <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="merienda" class="form-control col-md-7 col-xs-12" data-validate-length-range="20" name="merienda" placeholder="" required="required" type="text">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Cena <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="cena" class="form-control col-md-7 col-xs-12" data-validate-length-range="20" name="cena" placeholder="" required="required" type="text">
                      </div>
                    </div>


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

    </body>
  </html>
