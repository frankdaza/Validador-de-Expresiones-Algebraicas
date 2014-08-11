<?php 

session_start();

?>


<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Validador de Expresiones Algebraicas.">
    <meta name="author" content="Frank Edward Daza González.">
    <link rel="icon" href="img/glider.png">

    <title>Validador de Expresiones Algebraicas</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sticky-footer.css" rel="stylesheet">

  </head>

  <body>

    <!-- Begin page content -->
    <section class="container">
      <div class="page-header">
        <h1 class="text-center">Validador Expresiones Algebraicas</h1>
      </div>
      
      <form method="POST" action="../controllers/validador.php" class="form-horizontal">        
        <div class="form-group">
          <label class="control-label col-sm-4" for="funcion">Ingrese la función f(x) = </label>
          <div class="col-sm-6">
            <input name="funcion" type="text" id="funcion" class="form-control" required>
          </div>            
        </div>
        <div class="form-group">
          <label class="control-label col-sm-4" for="x">Ingrese el valor para x = </label>
          <div class="col-sm-6">
            <input name="x" type="text" id="x" class="form-control">
          </div>            
        </div>        
        <div style="text-align: center;">
          <a href="index.php" class="btn btn-danger">BORRAR</a>
          <input type="submit" class="btn btn-primary" value="EVALUAR">  
        </div>        
      </form> 
      <br>
      
      <section class="text-center">
        <h2 class="text-center">RESULTADO</h2>
        <?php 

          if (isset($_SESSION["resultado"])) {
            $i = 0;
            while ($i < count($_SESSION["resultado"])) {
              echo $_SESSION["resultado"][$i];
              $i++;
              echo "<br>";
            }          
            unset($_SESSION["resultado"]);
          }

        ?>  
      </section>
      
      
    </section>

    <footer class="footer">
      <div class="container">
        <p class="text-muted text-center">
          &copy; Validador de Expresiones Algebraicas. Design by <a href="http://frankdaza.co" target="_blank">Frank Edward Daza González</a> <br>
          Software Engineering Student &middot; <br>
          2014.
        </p>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
