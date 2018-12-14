<!DOCTYPE html>
<?php
//Iniciando la conexión llamando al archivo config.php
include_once '../config.php';


?>
<html>
<head>
    <title>Blog con PHP</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h1>Blog Title</h1>
            <div class="row">

                <div class="col-md-8">

                <h2>New Posts</h2>
                <a class="btn btn-default" href="posts.php">Back</a>

                    <!-- formulario para nuevo post -->

                    <form id="formulario" action="insert-post.php" method="post">

                        <!--Clase bootstrap para formulario -->
                         <div class="form-group">
                             <label for="inputTitle">Titulo</label>
                             <input class="form-control" type="text" name="titulo" id="inputTitle">

                         </div>
                         <textarea class="form-control" name="contenido" id="inputContenido" rows="5"></textarea>
                         <br>
                         <input class="btn btn-primary" type="submit" value="Guardar">

                     </form>


                 </div>
                 <div class="col-md-4">
                     <h2>Side Bar</h2>
                     Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                 </div>





             </div>
             <div class="row">
                 <div class="col-md-12">

                     <footer>
                         This is a footer

                     </footer>

                 </div>

             </div>
         </div>


     </div>
 </body>
 </html>
