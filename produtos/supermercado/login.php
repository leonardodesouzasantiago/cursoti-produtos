<?php require_once("conexao.php"); ?>
<?php
    session_start();

    if( !isset($_SESSION["usuario"])){
       /* header("location:inicio.php");*/
    }
    if(isset($_POST["usuario"])){
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

        $_login = "SELECT * ";
        $_login .=" FROM cliente ";
        $_login .=" WHERE usuario = '{$usuario}' and senha = '{$senha}' ";

        $acesso = mysqli_query($conect, $_login);

        if(!$acesso){
            die("Falha na consulta ao banco de dados");
        }

        $informacao = mysqli_fetch_assoc($acesso);

        if(empty($informacao)){
            $mensagem = "Login sem sucesso.";
        }else{
            $_SESSION["user_portal"] = $informacao["idCliente"];
            header("location: inicio.php");
        }
    }
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Integração com MySQL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/login.css" rel="stylesheet">
    </head>

    <body>
        <header>
            <div id="header_central">
                <img src="_itens/logo_andes.gif">
                <img src="_itens/text_bnwcoffee.gif">
            </div>
        </header>
        
        <main>  
            <div id="janela_login">
                <form action="login.php" method="post">
                    <h2>Tela de Login</h2>
                    <input type="text" name="usuario" placeholder="Usuário">
                    <input type="password" name="senha" placeholder="Senha">
                    <input type="submit" value="Login">

                    <?php
                        if(isset($mensagem)){
                    ?>
                        <p><?php echo $mensagem ?></p>     
                    <?php       
                        }
                    ?>
                    
                </form>
            </div>
        </main>
    </body>
    <?php include_once("_incluir/rodape.php")?>
</html>

<?php
    // Fechar conexao
    mysqli_close($conect);
?>