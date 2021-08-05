<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--fuente de letra-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500&display=swap" rel="stylesheet">
    <!--fuente de letra-->
    <link rel="stylesheet" href="style.css">  
</head>
<body>
    <div class="contenedor">
    <h1>articulos</h1>
    <section class="articulos">
    <ul>
        <?php foreach ($articulos as $key => $articulo): ?>
                <li><?php echo $articulo['id'].' -. '.$articulo['nombre'].' -. '.$articulo['email']; ?></li>            
        <?php endforeach?>
    </ul>
    </section>

    <section class="paginacion">
        <ul>

            <?php if($pagina == 1): ?>
                <li class="disabled">&laquo;</li>            
            <?php else: ?>
                <li><a href="?pagina= <?php - 1 ?>  ">&laquo;</a></li>
            <?php endif ?>
            <!--ciclo de paginas-->
            <?php            
            for ($i=1; $i <=$numeroPaginas ; $i++) { 
                if ($pagina==$i) {
                    echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
                }else{
                    echo "<li><a href='?pagina=$i'>$i</a></li>";
                }
            }
            ?>

            <?php if($pagina == $numeroPaginas): ?>
                <li class="disabled">&raquo;</li>            
            <?php else: ?>
                <li><a href="?pagina= <?php + 1 ?>  ">&raquo;</a></li>
            <?php endif ?>

        </ul>
    </section>
    </div>
</body>
</html>