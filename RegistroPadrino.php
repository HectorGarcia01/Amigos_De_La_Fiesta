<!DOCTYPE html>
<html>
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
                <div class="title">Registro de Padrinos</div>
                <div class="description">Hola registra aca lo solicitado</div>
              
                <form action="php/ControladorRegistroPadrino.php" method="post">
                  <input type="text" name="DNI_Padrino" placeholder="DNI PADRINO *"/> 
                  <input type="text" name="Nombre_Padrino" placeholder="NOMBRE"/>
                  <input type="text" name="Apellido_Padrino" placeholder="APELLIDO"/>
                  <input type="number" name="Edad_Padrino" placeholder="EDAD"/>
                  <input type="text" name="Sexo_Padrino" placeholder="SEXO"/>
                  <input type="text" name="Direccion_Padrino" placeholder="DIRECCION"/>
                  <input type="text" name="Telefono_Padrino" placeholder="TELEFONO"/>

                  </br>
                  <hr></hr>
                  </br></br>

                  <div class="description">Registra la informacion para el apoderado</div>
                  <input type="text" name="DNI_Apoderado" placeholder="DNI APODERADO *"/> 
                  <input type="text" name="Nombre_Apoderado" placeholder="NOMBRE "/>
                  <input type="text" name="Apellido_Apoderado" placeholder="APELLIDO"/>
                  <input type="number" name="Edad_Apoderado" placeholder="EDAD"/>
                  <input type="text" name="Sexo_Apoderado" placeholder="SEXO"/>
                  <input type="text" name="Telefono_Apoderado" placeholder="TELEFONO"/>
                  <input type="text" name="Direccion_Apoderado" placeholder="DIRECCION"/>
                  </br>
                  <div class="text-right">
                    <div class="BotonesGuardar">
                      <input type="submit" name="btnPadrino" value="SIGUIENTE" class="button"/>
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