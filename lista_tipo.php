<?
	require_once('Connections/principal.php');
	mysql_select_db($database_principal, $principal);


?>



<option value="Todos">Tipo</option>
<?
	
	if (!$_POST['categoriaid']) {
		
	$categoriaid = 'Todos';
		
	} else {

	$categoriaid = $_POST['categoriaid'];
		
	}


if ($categoriaid != 'Todos') {


	$__pega_tipotb= mysql_query("SELECT DISTINCT tipo FROM imoveis WHERE categoria='$categoriaid' AND imobiliaria = '$_SESSION[creci]' AND exibir_este_imovel = 's' AND ativo = 'sim' ORDER BY tipo ASC") or die ("</select>N&atilde;o foi poss&iacute;vel retornar com os Tipos de Imóveis cadastrados no Sistema !<br><br>".mysql_error()."<BR><BR>Contacte a waiBrasil informando o erro acima que o corrigiremos !<br><BR>Desculpe-nos pelo transtorno."); //Pegando cidades no banco de dados
	
	
} else {
	
	
		$__pega_tipotb= mysql_query("SELECT DISTINCT tipo FROM imoveis WHERE imobiliaria = '$_SESSION[creci]' AND exibir_este_imovel = 's' AND ativo = 'sim' ORDER BY tipo ASC") or die ("</select>N&atilde;o foi poss&iacute;vel retornar com os Tipos de Imóveis cadastrados no Sistema !<br><br>".mysql_error()."<BR><BR>Contacte a waiBrasil informando o erro acima que o corrigiremos !<br><BR>Desculpe-nos pelo transtorno."); //Pegando cidades no banco de dados
	
}
	
	

	while($__dados_tipotb = mysql_fetch_array($__pega_tipotb))
	{
		
		
	
$query_tip20 = "SELECT * FROM tipo WHERE id = '$__dados_tipotb[tipo]'";
$tip20 = mysql_query($query_tip20, $principal) or print(mysql_error());
$row_tip20 = mysql_fetch_assoc($tip20);
?>
		
		
<option value="<? echo $row_tip20["id"]; ?>" ><? echo convutf8($row_tip20["tipo"]); ?></option> <?
	}							
?>
