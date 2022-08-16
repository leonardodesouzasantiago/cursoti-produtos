<?php require_once("conexao.php"); ?>

<?php
session_start();
    if( !isset($_SESSION["user_portal"])){
        header("location:login.php");
    } 
    
    if (isset($_GET["codigo"])){
        $produtoID = $_GET["codigo"];
    }else{
        Header("Location: inicio.php");
    }

    $consulta = "SELECT * ";
    $consulta .= "FROM produto ";
    $consulta .= "WHERE idProduto = {$produtoID} ";
    $detalhe = mysqli_query($conect, $consulta);

    if(!$detalhe){
        die("Falha no banco de dados");
    }else{
        $dados_detalhe = mysqli_fetch_assoc($detalhe);
        $idProduto = $dados_detalhe["idProduto"];
        $nome = $dados_detalhe["NOME"];
        $valor = $dados_detalhe["VALOR"];
        $categoria = $dados_detalhe["CATEGORIA"];
        $descricao = $dados_detalhe["DESCRIÇÃO"];
        $data_vencimento = $dados_detalhe["DATA_VENCIMENTO"];
        $lote = $dados_detalhe["LOTE"];
        $data_entrada = $dados_detalhe["DATA_ENTRADA"];
        $estoque_atual = $dados_detalhe["ESTOQUE_ATUAL"];
        $imagemgrande = $dados_detalhe["IMAGEMGRANDE"];
    }
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detalhes do Produto</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/produto_detalhe.css" rel="stylesheet" >
    </head>

    <body>
        <?php include_once("_incluir/topo.php")?>
        <?php include_once("_incluir/funcoes.php"); ?> 
        
        <main>  
            <div id="detalhe_produto">
                <ul>
                    <li class="imagem"><img src="<?php echo $imagemgrande?>"></li>
                    <li><h3><?php echo $nome?></h3></li>                    
                    <li>Preço: <?php echo real_format($valor)?></li>
                    <li>Categoria: <?php echo $categoria?></li>
                    <li>Descrição: <?php echo $descricao?></li>
                    <li>Data de Vencimento: <?php echo $data_vencimento?></li>
                    <li>Lote: <?php echo $lote?></li>
                    <li>Estoque: <?php echo $estoque_atual?></li>
                    <li>Data Entrada do Produto: <?php echo $data_entrada?></li>
                </ul>
            </div>
        </main>

        <?php include_once("_incluir/rodape.php")?>
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conect);
?>