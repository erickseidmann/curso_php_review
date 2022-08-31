<?php
////filtros de validação ////
/*
funções (filter_input - filter_var)
FILTER_VALIDATE_INT
FILTER_VALIDATE_EMAIL
FILTER_VALIDATE_FLOAT
FILTER_VALIDATE_IP
FILTER_VALIDATE_URL
*/

?>

<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="dados.php" method="GET">
        Nome: <input type="text" name="nome">
        Email: <input type="email" name="email">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>-->
<?php
if(isset($_POST['enviar-formulario'])):
    //array de erro
    $erros = array();

    //validações
    if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
        $erros[] = "desculpe, idade precisa ser uma idade valida";
    endif;
    if(!$idade = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
        $erros[] = "Precisa ser um email valido";
    endif;
    if(!$idade = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
        $erros[] = "Precisa ser um peso valido";
    endif;
    if(!$idade = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
        $erros[] = "Precisa ser um ip valido";
    endif;
    if(!$idade = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
        $erros[] = "Precisa ser uma url valido";
    endif;
    
    if(!empty($erros)):
        foreach($erros as $erro):
            echo"<li> $erro <li>";
        endforeach;
    else:
        echo "Parabens, seus dados estão corretos! ";
    endif;
endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        Idade: <input type="text" name="idade"><br><br>
        Email: <input type="text" name="email"><br><br>
        Peso: <input type="text" name="peso"><br><br>
        IP: <input type="text" name="ip"><br><br>
        URL: <input type="text" name="url"><br><br>
        <button type="submit" name="enviar-formulario">Enviar</button><br><br>
    </form>
</body>
</html>