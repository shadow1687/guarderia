            <div class="right_col" role="main">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Wizards <small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <!-- Smart Wizard -->
                    <p>This is a basic form wizard example that inherits the colors from the selected scheme.</p>
                    <div id="relate_wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              Paso 1<br />
                                              <small>Listado de Alumnos</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Paso 2<br />
                                              <small>Listado de Aulas</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                              Paso 3<br />
                                              <small>Listado de Maestras</small>
                                          </span>
                          </a>
                        </li>
                      </ul>
                      <div id="step-1">
                        <div style="min-height:400px">
                              <table id="tbl_alumno" aria-describedby="datatable_info" role="grid" id="datatable" class="table table-striped table-bordered dataTable no-footer">
                              <thead>
                                <tr role="row">
                                  <th>Apelido y Nombre</th>
                                  <th>Edad</th>
                              </thead>
                              <tbody>
                              </tbody>
                            </table>
                        </div>
                      </div>
                      <div id="step-2">
                        <center>
                          <div style="min-height:400px">
                                <table id="tbl_maestro" aria-describedby="datatable_info" role="grid" id="datatable" class="table table-striped table-bordered dataTable no-footer">
                                <thead>
                                  <tr role="row">
                                    <th>Maestr@s</th>
                                </thead>
                                <tbody>
                                </tbody>
                              </table>
                          </div>
                        </center>
                      </div>
                      <div id="step-3">
                        <center>
                          <div style="min-height:400px">
                                <table id="tbl_aula" aria-describedby="datatable_info" role="grid" id="datatable" class="table table-striped table-bordered dataTable no-footer">
                                <thead>
                                  <tr role="row">
                                    <th>Aula</th>
                                    <th>Turno</th>
                                    <th>Lugares</th>
                                </thead>
                                <tbody>
                                </tbody>
                              </table>
                          </div>
                        </center>
                      </div>
                    </div>
                    <!-- End SmartWizard Content -->
