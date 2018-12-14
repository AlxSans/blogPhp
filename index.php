<!DOCTYPE html>
<?php 
//Iniciando la conexión llamando al archivo config.php
include_once 'config.php';
//Iniciando la consulta a la base de datos SELECCIONADOS *TODOS DESDE laTabla ORDENADO POR [condición] PRIMERO
$query = $pdo->prepare('SELECT * FROM blog_posts ORDER BY id DESC');
//Ejecutando 
$query->execute();
//Ordenando los datos
$blogPosts = $query->fetchAll(PDO::FETCH_ASSOC);

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

               <?php

                  foreach ($blogPosts as $blogPosts ) {
                    # code...
                    echo '<div class="blog-post">';
                    echo '<h2>'.$blogPosts['titulo'].'</h2>';
                    echo '<p>Jan 1, 2018 by <a href="">Alejandro Sandoval</a></p>';
                    echo '<div class="blogPostImage">';
                    echo '<img src="images/php.png" alt="">';
                    echo ' </div>';
                    echo '<div class="blogPostContent">';
                    echo $blogPosts['contenido'];
                    echo ' </div>';
                    echo ' </div>';
                  }

                  ?>

            </div>
        		<div class="col-md-4">
              <h2>Side Bar</h2>
        			 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
        		</div>

        	

         
				
        </div>

            //Agregando un footer
            <div class="row">
                <div class="col-md-12">

                    <footer>
                        This is a footer
                        <a href="admin/">Admin Panel</a>
                    </footer>

                </div>

            </div>
      </div>


  	</div>
</body>
</html>
