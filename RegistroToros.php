<!DOCTYPE html>
<html>
  <head>
      <title>REGISTRO DE TOROS</title>
      <link rel="stylesheet" href="css/Registro1.css">
  </head>
  <body>
    <header>
        <div class="modal-wrap">
            <div class="modal-header"><span class="is-active"></span><span></span></div>
            <div class="modal-bodies">
              <div class="modal-body modal-body-step-1 is-showing">
                <div class="title">Registro de Toros</div>
                <div class="description">Hola registra aca lo solicitado</div>
                
                <form action="php/ControladorRegistroToro.php" method="post">
                  <input type="text" name="Codigo_Ganaderia" placeholder="CODIGO DE GANADERIA *" required /> 
                  <input type="text" name="Nombre_Ganaderia" placeholder="NOMBRE DE LA GANADERIA"/>
                  <input type="text" name="Localidad_Ganaderia" placeholder="LOCALIDAD GANADERIA"/>
                  <input type="text" name="Procedencia_Ganaderia" placeholder="PROCEDENCIA"/>
                  <input type="date" name="Fecha_FundacionG" placeholder="FECHA DE FUNDACION"/>

                  </br>
                  <div class="text-right">
                    <div class="BotonesGuardar">
                      <input type="submit" class="button" name="btnToro" value="SIGUIENTE"/>
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