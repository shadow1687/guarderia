

<!-- page content -->

      <div class="right_col" role="main">
        <div class="">



          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

              <div class="x_panel">
                <div class="x_title">
                  <h2>Menu semanal </h2>

                  <div class="clearfix"></div>
                </div>



<?php
if ($menues != null)
{
foreach($menues as $m)
    {
      ?>
      <div class="col-xs-2 col-sm-2">
      <i><?php   echo  $m->fecha . '<br />'; ?></i>
    </div>


    <div class="col-xs-10 col-sm-10">
          <?php echo  $m->desayuno. '<br />';?>
          <?php echo  $m->almuerzo. '<br />';?>
          <?php echo  $m->merienda. '<br />';?>
          <?php echo  $m->cena. '<br />' ;?>

    </div>



  <?php

    }

}
else
{
  echo 'ningun menu disponible esta semana';

}
?>




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
