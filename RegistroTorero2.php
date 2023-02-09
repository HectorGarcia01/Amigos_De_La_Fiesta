<?php
  require_once("php/Conexion.MySQL.php");
  $sqlF = mysqli_query($conn, "SELECT* FROM Feria");
  $sqlT = mysqli_query($conn, "SELECT* FROM Torero");
  $sqlA = mysqli_query($conn, "SELECT* FROM Apoderado");
  $sqlP = mysqli_query($conn, "SELECT* FROM Padrino");
  $sqlPla = mysqli_query($conn, "SELECT* FROM Plaza");
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
                
                <form action="php/ControladorRegistroTorero2.php" method="post">
                  <div class="description">Registra los regalos</div>
                  <input type="text" name="ID_Regalo" placeholder="ID REGALO *" />
                  <input type="number" name="NOreja_Regalo" placeholder="NO. OREJAS"/>
                  <input type="number" name="NRabo_Regalo" placeholder="NO. RABOS"/>

                  <select name="FKNombre_Torero" class="SelectBD">
                    <option value="">Seleccione un Torero</option>
                    <?php foreach ($sqlT as $opcionT): ?>
                      <option value="<?php echo $opcionT['DNI_Torero']?>"><?php echo $opcionT['Nombre_Torero']?></option>
                    <?php endforeach ?>
                  </select>

                  <select name="FKNombre_Apoderado" class="SelectBD">
                    <option value="">Seleccione un Apoderado</option>
                    <?php foreach ($sqlA as $opcionA): ?>
                      <option value="<?php echo $opcionA['DNI_Apoderado']?>"><?php echo $opcionA['Nombre_Apodrado']?></option>
                    <?php endforeach ?>
                  </select>

                  <select name="FKNombre_Padrino" class="SelectBD">
                    <option value="">Seleccione un Padrino</option>
                    <?php foreach ($sqlP as $opcionP): ?>
                      <option value="<?php echo $opcionP['DNI_Padrino']?>"><?php echo $opcionP['Nombre_Padrino']?></option>
                    <?php endforeach ?>
                  </select>

                  </br>
                  <hr></hr>
                  </br></br>

                  <div class="description">Registra los datos de la corrida</div>
                  <input type="text" name="NOrden_Corrida" placeholder="NO. DEL ORDEN DE LA CORRIDA *"/>
                  <input type="number" name="Cantidad_Toreros" placeholder="CANTIDAD DE TOREROS"/>

                  <select name="FKNombre_Feria" class="SelectBD">
                    <option value="">Seleccione una Fleria</option>
                    <?php foreach ($sqlF as $opcionF): ?>
                      <option value="<?php echo $opcionF['ID_Feria']?>"><?php echo $opcionF['Nombre_Feria']?></option>
                    <?php endforeach ?>
                  </select>

                  <select name="FKNombre_Plaza" class="SelectBD">
                    <option value="">Seleccione un Plaza</option>
                    <?php foreach ($sqlPla as $opcionPla): ?>
                      <option value="<?php echo $opcionPla['ID_Plaza']?>"><?php echo $opcionPla['Nombre_Plaza']?></option>
                    <?php endforeach ?>
                  </select>

                  </br>
                  </br>
                  <div class="text-right">
                    <div class="BotonesGuardar">
                      <input type="submit" value="TERMINAR" class="button"/>
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