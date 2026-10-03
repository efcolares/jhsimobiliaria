<?
session_start('usuario');
$caminho_conecta='../Connections/principal.php';
$tabela_funcao='funcaoimg_'.$_SESSION['usuario'].'';
$tabela_destino='imagens';
$nome_img_atualizar=$_POST['img1'];
///////////////////////////////////////////////////////////////////

// Carrega a função imagem ////////////////////////////////////////
include '/home/waibrasi/Scripts/funcaoimg.php';
///////////////////////////////////////////////////////////////////
?>
<title>Imagem atualizada</title>
<script language="JavaScript">
<!--
function WindowClose() {
 parent.close() 
} 

//-->
</script>
<style type="text/css">
<!--
.style1 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
}
-->
</style>
<table  border="0" align="center" cellpadding="2" cellspacing="1">
  <tr>
    <td height="10"><img src="img/spacer.gif" width="1" height="1"></td>
  </tr>
  <tr>
    <td height="40"><span class="style1">Imagem Atualizada</span></td>
  </tr>
  <tr>
    <td height="20"><div align="center"><span class="style1"><span class="style3"><a href="JavaScript:WindowClose()">Fechar</a></span></span></div></td>
  </tr>
</table>