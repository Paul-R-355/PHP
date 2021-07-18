<?php 
//$tamanio='30px';
//$tamanio=$_COOKIE['font-size'];

if (isset($_COOKIE['font-size'])) {//compruebo si la cookie existe
    $tamanio=$_COOKIE['font-size']; //usa htmlentities() para protegerte
} else {
    $tamanio='15px';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=p, initial-scale=1.0">
    <title>texto</title>
    <style>
    p{
        font-size: <?php echo $tamanio; ?>;
    }    
    </style>
</head>
<body>
    <p>
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    </p>
</body>
</html>