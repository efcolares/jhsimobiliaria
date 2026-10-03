<?
session_start();
if (!$_SESSION['user'])
{ 
	header("location:index.php");
}
?>

<?

require_once('../Connections/principal.php');
mysql_select_db($database_principal, $principal);

if ($_POST['ordem']=='atualizarsenha')
{
	$ataulizar = mysql_query("UPDATE senha SET senha='$_POST[senha]' WHERE permissao = '".$_SESSION['usuario']."'");
	
	echo "<script>alert('Senha Atualizada !');</script>";
	echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=principal.php'>";
}
?>

<style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000000;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>



<? 
	$query_listult = sprintf("SELECT * FROM senha WHERE id = '".$_SESSION['id']."'");
	$listult = mysql_query($query_listult, $principal) or print(mysql_error());
	$row_listult = mysql_fetch_assoc($listult);
?>

<form action="principal.php?conteudo=alterarsenha&ordem=atualizarsenha" method="post" enctype="multipart/form-data" name="form1">	  
<table width="50%" border="0" align="center" cellpadding="3" cellspacing="0" class="texto_site">
  <tr>
    <td width="100%" colspan="3">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="3" align="center">Nova Senha 
      <input name="senha" type="password" id="senha" size="15" />
      <input name="Submit" type="submit" id="Submit" value="Alterar">

      <input name="ordem" type="hidden" id="ordem" value="atualizarsenha"></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  </table>
</form>

