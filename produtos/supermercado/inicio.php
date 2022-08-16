<?php
    require_once("conexao.php");
    session_start();
    if( !isset($_SESSION["user_portal"])){
        header("location:login.php");
    }

    $consulta_produtos = "SELECT idProduto, nome, valor, categoria, descrição, data_vencimento, imagempequena ";
    $consulta_produtos .= "FROM produto";
    //$consulta_produtos .= " WHERE tempoentrega = 5";
    if (isset($_GET["produto"])){
        $nome_produto = $_GET["produto"];
        $consulta_produtos .=" WHERE nome LIKE '%{$nome_produto}%' ";
    }
    $produtos = mysqli_query($conect, $consulta_produtos );

    if( !$produtos){
        die("Falha na consulta ao banco de dados ");
    } 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link href="_css/estilo.css" rel="stylesheet">
    <link href="_css/produtos.css" rel="stylesheet">
    <link href="_css/produto_pesquisa.css" rel="stylesheet">
</head>
<body>
    <?php include_once("_incluir/funcoes.php")?>
    <?php include_once("_incluir/topo.php")?>
    <?php
        
    ?>
    <main>
    <div id="janela_pesquisa">
            <form action="inicio.php" method="get">
                <input type="text" name="produto" placeholder="Nome do produto">
                <input type="image" name="pesquisa" src="_itens/botao_search.png">
            </form>
        </div>
        <div id="listagem-produtos">
            <?php
                while($registro = mysqli_fetch_assoc($produtos)){
            ?>
                <li class="imagem">
                    <a href="detalhe.php?codigo=<?php echo $registro["idProduto"]?>">
                    <img  width="69" height="69" src="<?php echo $registro["imagempequena"]?>">
                </li>
                <li><h3><?php echo $registro["nome"]?></h3></li>
                <li>Valor: <?php echo real_format($registro["valor"])?></li>
                <li>Categoria: <?php echo $registro["categoria"]?></li>
                <li>Data de Vencimento: <?php echo $registro["data_vencimento"]?></li></br></br>
                    </a>
            <?php
                }
            ?>
        </div>
    </main>
    <?php
        mysqli_free_result($produtos);
    ?>
</body>
<?php include_once("_incluir/rodape.php")?>
</html>
