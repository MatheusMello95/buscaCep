<html>
    <head>
        <title> MEU CEP </title>
        <link rel="stylesheet" href="style.css" />
    </head>
	<body>
     <div id="card">
		<form action="index.php" method="post">
         <h2 class="info">Insira o CEP:</h2><br>
         <input type="number" class="cep" name="cep" placeholder="Ex: 99999999"><br>
         <input type="submit" class="button" value="Buscar"><br>


<?php

use Prova\Address;

require_once 'Address.php';

if(!empty($_POST['cep'])) {

   $cep = $_POST['cep'];

   $obj = new Address();

   $address = $obj->get_address($cep);

   echo $address;

    echo "<div class='retorno'>";
    echo "<p class='resp'>CEP Informado: $cep</p></tr>";
    echo "<p class='resp'>Rua: $address->logradouro</p></tr>";
    echo "<p class='resp'>Bairro: $address->bairro</p></tr>";
    echo "<p class='resp'>Estado: $address->uf</p></tr>";
    echo "</div>";
}
?>   </div>
    </body>
</html>
