<?
	require_once('/home/waibrasi/Scripts/valedosapucai/Connections/valedosapucai.php');
	mysql_select_db($database_principal, $principal);
?>
<label>Cidade:</label>
<select name="cidade" id="cidade">

<?
	$estado = $_GET['estado'];
	$__pega_cidade= mysql_query("SELECT * FROM cidades WHERE Cid_EstadoID='$estado' ORDER BY Cid_Nome") or die ("</select>N&atilde;o foi poss&iacute;vel pegas as Cidades cadastradas no Sistema !<br><br>".mysql_error()."<BR><BR>Contacte a waiBrasil informando o erro acima que o corrigiremos !<br><BR>Desculpe-nos pelo transtorno."); //Pegando cidades no banco de dados

	while($__dados_cidade = mysql_fetch_array($__pega_cidade))
	{
		
		?> <option value="<? echo convutf8($__dados_cidade["Cid_Nome"]); ?>" > <? echo convutf8($__dados_cidade["Cid_Nome"]); ?> </option> <?
	}							
?>
</select>