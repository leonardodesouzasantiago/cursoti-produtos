<style>
div #header_saudacao{
    position: absolute;    
    top: 8px;
    left: 1190px;
}    

div #header_saudacao a {
    text-decoration: none;
}

</style>
<header>
<div>

    <?php
        if ( isset($_SESSION["user_portal"]) ) {
            $user = $_SESSION["user_portal"];

            $saudacao = "SELECT NOMECOMPLETO ";
            $saudacao .= "FROM cliente ";
            $saudacao .= "WHERE idCliente = {$user}";

            $saudacao_login = mysqli_query($conect, $saudacao);
            
            if (!$saudacao_login) {
                die("Falha");
            }
            $saudacao_login = mysqli_fetch_assoc($saudacao_login);
            $nomecompleto = $saudacao_login["NOMECOMPLETO"];
    ?>  
    
    <img src="_itens/logo_andes.gif">
    <img src="_itens/text_bnwcoffee.gif">
    
    <div id="header_saudacao"><h4>Bem vindo, <?php echo $nomecompleto ?> - <a href="login.php">Sair</a></h4></div> 
    
    <?php
        }
    ?>
</div>
</header>