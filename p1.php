<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuiFood</title>
</head>
<body>
    <?php 
    require_once 'includes/lojas.php';
    $id = $_GET['i'] ?? 1;
    $busca = $l->query("select * from comidas where id = '$id'");
    if (!$busca){
        echo 'erro';
    } else {
        if ($busca->num_rows == 0){
            echo 'erro';
        } else {
            while ($reg=$busca->fetch_object()){
                echo "<img src='$reg->imagem' width='250'> <br> <h3>$reg->nome</h3> <h4>$reg->preço</h4> <p>$reg->especificações</p>";
            }
        }
    }
    ?>
    <button style="background-color: blue;"><a href="p2.php" style="text-decoration: none; color:white;">Comprar</a></button>
</body>
</html>