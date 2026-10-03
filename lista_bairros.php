<?
	require_once('Connections/principal.php');
	mysql_select_db($database_principal, $principal);


?>


<select name="bairro" id="bairro">
<option value="Todos">Bairros</option>
<?
	$cidadeget = $_POST['cidade'];
	$__pega_sublink= mysql_query("SELECT DISTINCT bairro FROM imoveis WHERE cidade='$cidadeget' AND imobiliaria = '$_SESSION[creci]' AND exibir_este_imovel = 's' AND ativo = 'sim' ORDER BY bairro") or die ("</select>N&atilde;o foi poss&iacute;vel pegas os Bairros cadastrados no Sistema !<br><br>".mysql_error()."<BR><BR>Contacte a waiBrasil informando o erro acima que o corrigiremos !<br><BR>Desculpe-nos pelo transtorno."); //Pegando cidades no banco de dados

	while($__dados_sublink = mysql_fetch_array($__pega_sublink))
	{
		$ArrumaAcentuos = convutf8($__dados_sublink["bairro"]);
		?> <option value="<? echo $__dados_sublink["bairro"]; ?>" ><? echo $ArrumaAcentuos; ?></option> <?
	}							
?>
</select>