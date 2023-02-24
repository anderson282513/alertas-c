
<?php include ("includes/header.php")?>
<?php include('conexion.php')?>

    <div class="form">

           <ul class="tab-group">
              <li class="tab active"><a href="#registro">Registro</a></li>
              <li class="tab"><a href="#login">Iniciar sesion</a></li>
           </ul>

      <div class="tab-content">

          <!--seccion de registro-->
        <div id="registro">
        <form action="registro.php" method="POST">
        <h1>Resgistrar vendedor</h1>  
          <div class="form-group">
            <input name="Nombre" required autocomplete="off" rows="1" class="form-control" placeholder="Nombre"/>
          </div>
          <div class="form-group">
            <input name="Telefono" required autocomplete="off" rows="1" class="form-control" placeholder="Telefono"/>
          </div>
          <div class="form-group">
            <input name="Correo" required autocomplete="off" rows="1" class="form-control" placeholder="Correo"/>
          </div>
          <div class="form-group">
            <input type="password" required autocomplete="off" name="Clave" rows="1" class="form-control" placeholder="Contraseña"/>
          </div>
          <input type="submit" name="btn_continuar" class="btn btn-success btn-block" value="CONTINUAR">
        </form>
        </div>

        <!--seccion de login-->
        <div id="login">
        <form action="login.php" method="POST">
          <h1>Iniciar sesion</h1>  
          <div class="form-group">
            <textarea name="Correo2" required autocomplete="off" rows="1" class="form-control" placeholder="Correo"></textarea>
          </div>
          <div class="form-group">
            <textarea name="Clave2" required autocomplete="off" rows="1" class="form-control" placeholder="Contraseña"></textarea>
          </div>
          <input type="submit" name="btn_login" class="btn btn-success btn-block" value="INICIAR SESION">
        </form>
        </div>

      </div>
    </div>

    <?php include ("includes/footer.php")?>