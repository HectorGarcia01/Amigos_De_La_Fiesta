<!DOCTYPE html>
<html lang="es">
  <head>
      <title>REGISTRO DE ACTIVIDADES</title>
      <link rel="stylesheet" href="css/Registro1.css">
  </head>
  <body>
    <header>
        <div class="modal-wrap">
            <div class="modal-header"><span class="is-active"></span><span></span></div>
            <div class="modal-bodies">
              <div class="modal-body modal-body-step-1 is-showing">
                <div class="title">Registro de Ferias</div>
                <div class="description">Hola registra aca lo solicitado</div>
                
                <form action="php/ControladorRegistroFiestas.php" method="post">
                  <input type="text" name="ID_Feria" placeholder="ID DE LA FERIA *"/> 
                  <input type="text" name="Nombre_Feria" placeholder="NOMBRE DE LA FERIA"/>
                  <input type="date" name="Año_Cele" placeholder="AÑO DE CELEBRACION"/>
                  <input type="text" name="No_Corrida" placeholder="NO. DE CORRIDA"/>
                  <input type="number" name="Cant_Toros" placeholder="CANTIDAD DE TOROS" class="EstiloInput"/>

                  </br>
                  <hr></hr>
                  </br></br>

                  <input type="text" name="ID_Plaza" placeholder="ID DE PLAZA *"/>
                  <input type="text" name="Nombre_Plaza" placeholder="NOMBRE DE PLAZA"/>
                  <input type="text" name="Localidad_Plaza" placeholder="LOCALIDAD DE PLAZA"/>
                  <input type="text" name="Direccion_Plaza" placeholder="DIRECCION DE PLAZA"/>
                  <input type="text" name="Aforo_Plaza" placeholder="AFORO DE PLAZA"/>
                  </br>
                  <div class="text-right">
                    <div class="BotonesGuardar">
                      <input type="submit" name="btnFiesta" class="button" value="TERMINAR"/>
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
  </body>
</html>