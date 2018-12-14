<!DOCTYPE html>
<?php
//Iniciando la conexión llamando al archivo config.php
include_once '../config.php';
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

                    <h2>Posts</h2>
                    <a class="btn btn-primary" href="insert-post.php">New Post</a>

                   <table class="table">
                       <tr>
                           <th>Title</th>
                           <th>Edit</th>
                           <th>Delete</th>
                       </tr>
                       <?php foreach ($blogPosts as $blogPosts): ?>
                       <tr>
                           <td><?php echo $blogPosts['titulo'] ?></td>
                           <td>Edit</td>
                           <td>Delete</td>
                       </tr>
                       <?php endforeach?>
                   </table>

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
