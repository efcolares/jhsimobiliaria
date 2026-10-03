<? 
	require_once('/home/waibrasi/Scripts/valedosapucai/Connections/valedosapucai.php');
	set_include_path('/home/waibrasi/Scripts/');
?>

<!doctype html>
<html>
<head>

<? include ("/home/waibrasi/Scripts/headbody.php"); ?>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="background-image:url(imagens/layout/fundo.jpg); background-repeat:repeat-y; background-position:center; background-repeat:repeat-y;">
  <tr>
    <td height="263" align="center" valign="middle" style="background-image:url(imagens/layout/CASE1.jpg); background-position: right; background-repeat:no-repeat;">&nbsp;</td>
    <td width="1000" align="center" valign="bottom" style="background-image:url(imagens/layout/topo.jpg); background-position:center; background-repeat:no-repeat;"><table width="100%" border="0" align="center" cellpadding="10" cellspacing="0">
      <tr>
        <td height="30" align="center" valign="middle"><? include ("/home/waibrasi/Scripts/valedosapucai/menu.php");  ?></td>
      </tr>
    </table></td>
    <td align="center" valign="middle" style="background-image:url(imagens/layout/CASD1.jpg); background-position:left; background-repeat:no-repeat;">&nbsp;</td>
  </tr>
  
  <tr>
    <td align="center" valign="bottom" style="background-image:url(imagens/layout/CASE_chave.jpg); background-position:right top; background-repeat:no-repeat;">&nbsp;</td>
    <td width="1000" align="center" valign="middle">
	<? include ("/home/waibrasi/Scripts/valedosapucai/filtro_imoveis_div_bairros.php"); ?>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr>
	    <td height="400px" align="center" valign="middle"><?
                  switch(htmlspecialchars($_REQUEST['conteudo'])){
		case '':
                include "/home/waibrasi/Scripts/valedosapucai/empresa_div.php";
                break;
				        case 'empresa':
                include "/home/waibrasi/Scripts/valedosapucai/empresa_div.php";
                break;
						case 'imoveis':
                include "/home/waibrasi/Scripts/valedosapucai/imoveis_div.php";
                break;
						case 'imoveis_destaque':
                include "/home/waibrasi/Scripts/valedosapucai/imoveis_destaque.php";
                break;
						case 'imoveis_inicial':
                include "/home/waibrasi/Scripts/valedosapucai/imoveis_inicial.php";
                break;
					    case 'fotografias':
                include "/home/waibrasi/Scripts/valedosapucai/fotografias.php";
                break;
				        case 'localizacao':
                include "/home/waibrasi/Scripts/valedosapucai/localizacao.php";
                break;
						case 'contato':
                include "/home/waibrasi/Scripts/valedosapucai/contato.php";
                break;

			        default:
                include "index_".$_SESSION['usuario'].".php";
                break;
}
?></td>
	    </tr>
    </table></td>
    <td align="center" valign="bottom">&nbsp;</td>
  </tr>
  <tr>
    <td height="238" align="center" valign="top" style="background-image:url(imagens/layout/CAIE.jpg); background-position:right top; background-repeat:no-repeat;">&nbsp;</td>
    <td width="1000" align="center" valign="middle" style="background-image:url(imagens/layout/CAI.jpg); background-position:center top; background-repeat:no-repeat;">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="198"><br>
<span class="endereco branco"><? echo ("$_SESSION[endereco]"); ?>, <? echo $_SESSION['numero']; ?>, esquina com a Rua Prof. Corn&eacute;lio de Faria<br />(Pr&oacute;xima &agrave; Ponte da Apae) - <? echo $_SESSION['cidade']; ?>/<? echo $_SESSION['estado']; ?></span><br>
          <? if ($_SESSION['telefone']) { ?>
            <span class="telefone branco"><? echo $_SESSION['telefone']; ?><? if ($_SESSION['celular1']) { ?> / <? echo $_SESSION['celular1']; ?> - VIVO <? } ?></span>
            <? } ?>
            </td>
          <td align="right" valign="middle"><span class="telefone branco">CRECI: <? echo $_SESSION['creci']; ?><br />CNAI: 07423<br />
            <? echo $_SESSION['email']; ?></span></td>
        </tr>
        <tr>
          <td height="40" colspan="2" align="center" valign="bottom"><? include ("/home/waibrasi/Scripts/clientes/loguinho_rodape.php"); ?></td>
        </tr>
    </table></td>
    <td align="center" valign="top" style="background-image:url(imagens/layout/CAID.jpg); background-position:left top; background-repeat:no-repeat;">&nbsp;</td>
  </tr>
</table>
<? echo $_SESSION['googleanalytics']; ?>
</body>
</html>