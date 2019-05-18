<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajax con PHP y jQuery</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- MAIN CONTENT -->
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <!-- the content -->
				<div class="formFactorial">

          <a id="aa" onclick="CRUD('LISTA','4','OK');" style="cursor: pointer;">OK</a>

          <a id="aa" onclick="CRUD('LISTA','4','FALLO');" style="cursor: pointer;">FALLO</a>

          <a id="aa" onclick="CRUD('TODOS','4','TODOS');" style="cursor: pointer;">TODOS</a>

          <input id="busano" name="busano">

          <input type="radio" onclick="CRUD('LISTA','4','OK');">
          <input type="radio" onclick="CRUD('LISTA','4','FALLO');">


				</div>
		
         <span id="resultado"></span>

         <span id="msn"></span>
         
         <div class="
         "><img id="loading_spinner" src="img/squares.gif"></div>
          
          
          
          
        </div>
      </div>
    </div>
    <!-- /MAIN CONTENT -->

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="content"></div>
      </div>
      <div class="modal-footer">
       <a role="button" name="" class="btn btn-primary" id="btnguardargasto" rel="" onClick="CRUD('GUARDAR','','GUARDAR')">Guardar</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="btnguardar" class="btn btn-primary" onclick="CRUD('NUEVO','4','NUEVO');">NUEVO</button>
      </div>
    </div>
  </div>
</div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/funciones.js"></script>
  </body>
</html>