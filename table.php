<!DOCTYPE html>
<html lang="pt">
  <head>
      <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
      <title> PHP TABLE </title>
  </head>
<body>
      <h1> Produto </h1>
      <table border="2px" >
      <tr>
      <td>Código do produto </td>
      <td>Tipo de Mercadoria</td>
      <td>Nome da Mercadoria</td>
      <td>Quantidade        </td>
      <td>Preço             </td>
      </tr>
      <tr>
      <td><?php $packageCode = $_POST ['codigo']; echo $packageCode; ?>           </td>
      <td><?php $packageType = $_POST ['tipo_de_mercadoria']; echo $packageType;?></td>
      <td><?php $packageName = $_POST ['nome_da_mercadoria']; echo $packageName;?></td>
      <td><?php $quantity    = $_POST ['quantidade'];         echo $quantity;   ?></td>
      <td><?php $price       = $_POST ['preco'];              echo $price;      ?></td> 

      </tr>
      </table>

</body>
</html>
