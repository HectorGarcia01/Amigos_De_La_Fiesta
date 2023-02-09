<!DOCTYPE html>
<html>
  <head>
      <title>CAMBIO DE CONTRASEÑA</title>
      <link rel="stylesheet" href="css/Registro1.css">
  </head>
  <body>
    <header>
        <div class="modal-wrap">
            <div class="modal-header"><span class="is-active"></span><span></span></div>
            <div class="modal-bodies">
              <div class="modal-body modal-body-step-1 is-showing">
                <div class="title">CAMBIO DE CONTRASEÑA</div>
                <div class="description">Hola registra aca lo solicitado</div>
                
                <form action="php/ControladorCambioContraseña.php" method="post">
                  <input type="text" name="DPI_Usuario" placeholder="DPI*" required /> 
                  <input type="text" name="Usuario" placeholder="Usuario*" required/>
                  <input type="password" name="ContraseñaNueva" placeholder="Contraseña Nueva*" required/>
                  <input type="password" name="RepContraseñaNueva" placeholder="Repita Contraseña*" required/>

                  </br>
                  <div class="text-right">
                    <div class="BotonesGuardar">
                      <input type="submit" class="button" name="btnToro" value="GUARDAR"/>
                    </div>
                  </div>
                </form>
              </div>
            </div>

          </div>
          <div class="text-center">
            <div class="rerun-button">ReRun</div>
          </div> 
    </header> 
    <script src="js/Perfil.js"></script>
  </body>
</html>