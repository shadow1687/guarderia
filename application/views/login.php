<!DOCTYPE html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ingresa al sistema guarderia</title>
    <link rel="stylesheet" href="<?=base_url()?>static/css/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>static/css/flat-ui.min.css">

  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <h2>Login</h2>
          <form action="" method="POST">
            <div class="form-group">
              <label for="username"></label>
              <input type="text" name="username" id="username" class="form-control" placeholder="Username">
            </div>

            <div class="form-group">
              <label for="password"></label>
              <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>

            <input type="submit" value="Ingresar" class="btn btn-primary">

          </form>
        </div>
      </div>
    </div>
  </body>
</html>
