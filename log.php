<?php
    require_once 'classes/usuarios.php';
    $u= new Usuario;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="css/log.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<div id="body">
    <h1>Login</h1>
    <form method="POST">
        <input type="email" placeholder="Usuário" name="email">
        <input type="password" placeholder="Senha" name="senha">
        <input id="car" type="submit" value="Entrar">
        <a href="cadaster.php">Não é cliente? <strong>Cadastre-se</strong></a>
    </form>
</div>

<?php
    if (isset( $_POST['email']))
    {
        $email=addslashes( $_POST['email']);
        $senha=addslashes( $_POST['senha']);
    
    //verificar se está preenchido
    if(!empty($email) && !empty($senha)){
        $u->conectar("login", "localhost", "root", "");
        if($u->msgErro==""){
        if ($u-> logar($email, $senha)){

            header("location: index.php");
        }
        else{
            ?>
            <div id="msg-erro">
             Email e/ou senha estão incorretos!
            </div>
            <?php
        }
    }
    else{
        ?>
        <?php echo 'Erro: '. $u-> msgErro; ?>
        <?php
    }
    }   
    else{
        ?>
        <div id="msg-erro">
        Preencha todos os campos!
        </div>
        <?php
    }
}
?>

</body>
</html>