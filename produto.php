<!DOCTYPE>
<html>
    <head>
        <title> Cadastro ou venda dos produtos </title>

    </head>
    <body>
      <script language="php">
        //Dados de conexão
        $host = 'dominio';
        $bd = 'nomedabase';
        $senhabd = 'senhadabase';
        $userbd = $bd;

        //Receber dados dos formulários

        $codigoDoProduto  = $_POST ['codigo'];
        $tipoDeMercadoria = $_POST ['tipo_de_mercadoria'];
        $nomeDaMercadoria = $_POST ['nome_da_mercadoria'];
        $quantidade       = $_POST ['quantidade'];
        $preco            = $_POST ['preco'];
        $iCompra          = $_POST ['business_type_compra'];
        $iVenda           = $_POST ['business_type_venda'];


      </script>
      <!-- fim do scrpt em php -->
      <?php echo $codigoDoProduto; ?>
    </body>
</html>
