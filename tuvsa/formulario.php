<!DOCTYPE html>
 <html lang="es">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>FORMULARIO</title>
 </head>
 <body>

    <div class="container-fluid">
      <div class="row mb-5">
         <div class="col-md-4 mt-5"></div>
          <div class="col-md-4 mt-5">
          <form action="larespuesta.php" method="post">
            <div class="mb-3">
               <label  class="form-label">Correo</label>
               <input type="texto" class="form-control" name="usuario">
               <div class="form-text">Escribe tu usuario</div>
            </div>
            <div class="mb-3">
               <label  class="form-label">Contraseña</label>
               <input type="password" class="form-control" name="password">
            </div>
            
            <button type="submit" class="btn btn-primary">Enviar</button>
         </form>
         </div>
         <div class="col-md-4">
   
         </div>
         </div>
      </div>
    
 </body>
 </html>