<!DOCTYPE html>
<html>
  <head>
      <title>REGISTRO DE USUARIOS</title>
      <link rel="stylesheet" href="css/Registro1.css">
  </head>
  <body>
    <header>
        <div class="modal-wrap">
            <div class="modal-header"><span class="is-active"></span><span></span></div>
            <div class="modal-bodies">
              <div class="modal-body modal-body-step-1 is-showing">
                <div class="title">Registro de Usuarios</div>
                <div class="description">Hola registra aca lo solicitado</div>
                
                <form action="php/ControladorRegistroUsuario2.php" method="post">
                  <input type="text" name="DPI_Usuario" placeholder="DPI*" required/> 
                  <input type="text" name="Nombre_Usuario" placeholder="NOMBRE*" required/>
                  <input type="text" name="Apellido_Usuario" placeholder="APELLIDO*" required/>
                  <input type="date" name="Fecha_Nacimiento" required/>
                  <input type="text" name="Sexo_Usuario" placeholder="SEXO*" required/>
                  <input type="text" name="Telefono_Usuario" placeholder="TELEFONO*" required/>
                  <input type="text" name="Direccion_Usuario" placeholder="DIRECCION*" required/>
                  <input type="email" name="Correo_Usuario" placeholder="CORREO*" required/>
                  <input type="text" name="Usuario" placeholder="USUARIO*" required/>
                  <input type="password" name="Contraseña" placeholder="CONTRASEÑA*" required/>
                  <input type="password" name="RepContraseña" placeholder="REPITA LA CONTRASEÑA*" required/>
                  <select name="TipoUsuario" class="SelectBD" >
                      <option value="">PRIVILEGIOS...</option>
                      <option value="DBA" title="CREATE TABLE, DROP DATABASE, DBA, ETC.">Todos los privilegios</option>
                      <option value="Usuario">Ningún privilegio</option>
                  </select>
                  </br>
                  <div class="text-right">
                    <div class="BotonesGuardar">
                      <input type="submit" class="button" name="btnUsuario" value="GUARDAR"/>
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