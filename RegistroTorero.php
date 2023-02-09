<?php
  require_once("php/Conexion.MySQL.php");
  $sqlA = mysqli_query($conn, "SELECT* FROM Apoderado");
  $sqlP = mysqli_query($conn, "SELECT* FROM Padrino");
?>
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
                <div class="title">Registro de Toreros</div>
                <div class="description">Hola registra aca lo solicitado</div>
                
                <form action="php/ControladorRegistroTorero.php" method="post">
                  <input type="text" name="DNI_Torero" placeholder="DNI TORERO *" /> 
                  <input type="text" name="Nombre_Torero" placeholder="NOMBRE "/>
                  <input type="text" name="Apellido_Torero" placeholder="APELLIDO"/>
                  <input type="text" name="Apodo_Torero" placeholder="APODO"/>
                  <input type="number" name="Edad_Torero" placeholder="EDAD"/>
                  <input type="text" name="Sexo_Torero" placeholder="SEXO"/>
                  <input type="text" name="Direccion_Torero" placeholder="DIRECCION"/>
                  <input type="date" name="FechaA_Torero" placeholder="FECHA ALTERNATIVA"/>
                  <input type="text" name="PuertaG_Torero" placeholder="PUERTA GRANDE: SI/NO"/>
                  
                  <select name="FKNombre_Apoderado" class="SelectBD">
                    <option value="">Seleccione un Apoderado</option>
                    <?php
                      while($opcionA = mysqli_fetch_row($sqlA)){
                    ?>
                    <option value="<?php echo $opcionA[0]?>"><?php echo $opcionA[1]?></option>
                    <?php }?>
                  </select>

                  <select name="FKNombre_Padrino" class="SelectBD">
                    <option value="">Seleccione un Padrino</option>
                    <?php
                      while($opcionP = mysqli_fetch_row($sqlP)){
                    ?>
                    <option value="<?php echo $opcionP[0]?>"><?php echo $opcionP[1]?></option>
                    <?php }?>
                  </select>
                  </br>
                  </br>
                  <div class="text-right">
                    <div class="BotonesGuardar">
                      <input type="submit" name="btnTorero" value="Siguiente" class="button"/>
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