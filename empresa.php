<?
	$query_imobiliaria = sprintf("SELECT * FROM imobiliarias WHERE www = '$_SESSION[www]' or www2 = '$_SESSION[www]'");
	$imobiliaria = mysql_query($query_imobiliaria, $principal) or print(mysql_error());
	$row_imobiliaria = mysql_fetch_assoc($imobiliaria);
?>

<style type="text/css">

.corpo_home {
	position:relative;
	float:left;
	width:100%;
	text-align:center;
	margin:0 auto;
}

.titulo_home {
	text-align:left;	
}

.description_home {
	text-align:left;
	
}

.corpo_not {
	position:relative;
	float:left;
	width:49%;
	text-align:center;
	margin:0 auto;
}

.corpo_dep {
	position:relative;
	float: right;
	width:49%;
	text-align:center;
	margin:0 auto;
}


</style>



<h1><? echo ($row_imobiliaria['nome']); ?></h1>
 <br>
<br>
<p><? echo nl2br($row_imobiliaria['description']); ?></p>
  
  <br>
<br>

	  
<h1>Nossos Servi&ccedil;os</h1>
		<p>- Escrituras;<br>
		
		- Contrato de aluguel;<br>
		
		- Contrato de compra e venda;<br>

		- Perito avaliador pelo Conselho Federal de Corretores de Im&oacute;veis;<br>

		- Avalia&ccedil;&atilde;o mercadol&oacute;gica;<br>

		- Administra&ccedil;&atilde;o de im&oacute;veis;<br>

        - Convenção de condomínios;<br>

			- Despachante imobiliário.. <br></p>


