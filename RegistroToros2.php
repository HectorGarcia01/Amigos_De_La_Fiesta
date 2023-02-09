<?php
  require_once("php/Conexion.MySQL.php");
  $sqlG = mysqli_query($conn, "SELECT* FROM Ganaderia");
  $sqlT = mysqli_query($conn, "SELECT* FROM Torero");
  $sqlA = mysqli_query($conn, "SELECT* FROM Apoderado");
  $sqlP = mysqli_query($conn, "SELECT* FROM Padrino");
?>
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
                
                <form action="php/ControladorRegistroToro2.php" method="post">
                  <input type="text" name="ID_Toro" placeholder="ID DEL TORO *" required />
                  <input type="text" name="Nombre_Toro" placeholder="NOMBRE DEL TORO"/>
                  <input type="text" name="Color_Toro" placeholder="COLOR"/>
                  <input type="text" name="Orden_Toreado" placeholder="ORDEN EN QUE FUE TOREADO"/>
                  <input type="date" name="Fecha_NacT" placeholder="FECHA DE NACIMIENTO"/>
                  
                  <select name="FKNombre_Ganaderia" class="SelectBD">
                    <option value="">Seleccione una Ganaderia</option>
                    <?php foreach ($sqlG as $opcionG): ?>
                      <option value="<?php echo $opcionG['Codigo_Ganaderia']?>"><?php echo $opcionG['Nombre_Ganaderia']?></option>
                    <?php endforeach ?>
                  </select>

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
                  </br>
                  <div class="text-right">
                    <div class="BotonesGuardar">
                      <input type="submit" class="button" name="btnToro" value="TERMINAR"/>
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