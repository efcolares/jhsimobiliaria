<?
if ($_GET['img']=='indisponivel') {
$img = $nomeimg=uniqid('',0); } 
else {
$img = $_GET['img']; }
 ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Alterando Imagem</title>
<style type="text/css">
<!--
.quadro {	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #333333;
	border: 1px solid #000033;
	background-color: #F2F2F2;
	height: 17px;
}
.texto_menor {	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #000033;
	text-decoration: none;
}
-->
</style>
</head>
<body>
<form action="editarimgbd.php" method="post" enctype="multipart/form-data" name="form1">
  <table  border="0" align="center" cellpadding="2" cellspacing="1">
    <tr>
      <td><table  border="0" align="center" cellpadding="1" cellspacing="1">
        <tr>
          <td height="5"><img src="img/spacer.gif" width="1" height="1"></td>
          </tr>
        <tr>
          <td>
		  <img src="../imagens/fotos/70/<?php echo $_GET['img']; ?>.jpg">
		  </td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td><span class="texto_menor">Atualizar imagem atual para:</span><span class="arial_11">
        <input name="img1" type="hidden" id="img1" value="<?php echo $img; ?>">
      </span></td>
    </tr>
    <tr>
      <td><input name="img" type="file" class="quadro" id="img" size="30">
      </td>
    </tr>
    <tr>
      <td>
        <div align="left">
          <input name="Submit" type="submit" class="quadro" value="Confirmar">
        </div>
      </td></tr>
  </table>
</form>
</body>
</html>