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
<div id="cad">
    <h1>Login</h1>
    <form method="POST">
        <input type="text" name="nome" placeholder="Nome completo" maxlength="30">
        <input type="text" name="telefone" placeholder="telefone" maxlength="30">
        <input type="email" name="email" placeholder="Usuário" maxlength="40">
        <input type="password" name="senha" placeholder="Senha" maxlength="15">
        <input type="password" name="confsenha" placeholder="Confirmar senha" maxlength="15">
        <input id="car" type="submit" value="Enviar">
    </form>
</div>
<?php
//verificar se clicou no botão
    if (isset( $_POST['nome']))
    {
        $nome= addslashes( $_POST['nome']);
        $telefone=addslashes( $_POST['telefone']);
        $email=addslashes( $_POST['email']);
        $senha=addslashes( $_POST['senha']);
        $confirmar_senha=addslashes($_POST['confsenha']);
    }
    //verificar se está preenchido
    if(!empty($nome) && !empty($telefone)&& !empty($email) && !empty($senha) && !empty($confirmar_senha) ){
        $u->conectar("login", "localhost", "root", "");
        if($u->msgErro==""){
            if($senha==$confirmar_senha){
               if ($u->cadastrar($nome, $telefone, $email, $senha)){
                ?>
                <div id="msg-sucesso">
                Cadastrado com sucesso! Acesse para entrar!
                </div>
                <?php
               }
               else{
                   ?>
                <div id="msg-erro">
               Email já cadastrado!
               </div>
                <?php
               }
            }
            else{
                ?>
                <div id="msg-erro">
                Senha e confirmar senha não correspondem!
               </div>
                <?php
            }
        }
        else{
            ?>
            <div class="msg-erro">
           <?php echo'Erro: '.$u->msgERRO; ?>
            </div>
            <?php
        }
    }
    else{
             ?>
                <div id="msg-erro">
                Preencha os campos
               </div>
            <?php
    }

?>
</body>
</html>