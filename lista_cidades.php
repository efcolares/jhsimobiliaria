<?
	require_once('Connections/principal.php');
	mysql_select_db($database_principal, $principal);

error_reporting(1);

	$categoriaid = $_POST['categoriaid'];
	$tipoid = $_POST['tipoid'];


?>

<option value="Todos">Cidade</option>
<?




if ($categoriaid and !$tipoid) {

	$__pega_sublink= mysql_query("SELECT DISTINCT cidade FROM imoveis WHERE categoria='$categoriaid' AND imobiliaria = '$_SESSION[creci]' AND exibir_este_imovel = 's' AND ativo = 'sim' ORDER BY cidade ASC") or die ("</select>N&atilde;o foi poss&iacute;vel retornar com as Cidades cadastrados no Sistema !<br><br>".mysql_error()."<BR><BR>Contacte a waiBrasil informando o erro acima que o corrigiremos !<br><BR>Desculpe-nos pelo transtorno."); //Pegando cidades no banco de dados

} else if ($categoriaid and $tipoid) {

	$__pega_sublink= mysql_query("SELECT DISTINCT cidade FROM imoveis WHERE categoria='$categoriaid' AND tipo='$tipoid' AND imobiliaria = '$_SESSION[creci]' AND exibir_este_imovel = 's' AND ativo = 'sim' ORDER BY cidade ASC") or die ("</select>N&atilde;o foi poss&iacute;vel retornar com as Cidades cadastrados no Sistema !<br><br>".mysql_error()."<BR><BR>Contacte a waiBrasil informando o erro acima que o corrigiremos !<br><BR>Desculpe-nos pelo transtorno."); //Pegando cidades no banco de dados
	
	
} else {
	
	
	$__pega_sublink= mysql_query("SELECT DISTINCT cidade FROM imoveis WHERE imobiliaria = '$_SESSION[creci]' AND exibir_este_imovel = 's' AND ativo = 'sim' ORDER BY cidade ASC") or die ("</select>N&atilde;o foi poss&iacute;vel retornar com as Cidades cadastrados no Sistema !<br><br>".mysql_error()."<BR><BR>Contacte a waiBrasil informando o erro acima que o corrigiremos !<br><BR>Desculpe-nos pelo transtorno."); //Pegando cidades no banco de dados
	
	
}

	
	

	while($__dados_sublink = mysql_fetch_array($__pega_sublink))
	{
		$ArrumaAcentuos = convutf8($__dados_sublink["cidade"]);
		?> <option value="<? echo $__dados_sublink["cidade"]; ?>" ><? echo $ArrumaAcentuos; ?></option>
	

<? } ?>
