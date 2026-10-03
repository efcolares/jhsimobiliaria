<?
	include('/home/waibrasi/Scripts/valedosapucai/Connections/valedosapucai.php');
	mysql_select_db($database_principal, $principal);

	
$query_busca1 = "SELECT * FROM imoveis WHERE imobiliaria = '$row_listwww[creci]' AND categoria='2' AND ativo = 'sim' AND exibir_este_imovel = 's' AND valor >= '0' AND valor <= '100000' ORDER BY valor ASC";
$busca1 = mysql_query($query_busca1, $principal) or print(mysql_error());
$row_busca1 = mysql_fetch_assoc($busca1);
	
$query_busca2 = "SELECT * FROM imoveis WHERE imobiliaria = '$row_listwww[creci]' AND categoria='2' AND ativo = 'sim' AND exibir_este_imovel = 's' AND valor >= '100000' AND valor <= '300000' ORDER BY valor ASC";
$busca2 = mysql_query($query_busca2, $principal) or print(mysql_error());
$row_busca2 = mysql_fetch_assoc($busca2);
	
$query_busca3 = "SELECT * FROM imoveis WHERE imobiliaria = '$row_listwww[creci]' AND categoria='2' AND ativo = 'sim' AND exibir_este_imovel = 's' AND valor >= '300000' AND valor <= '500000' ORDER BY valor ASC";
$busca3 = mysql_query($query_busca3, $principal) or print(mysql_error());
$row_busca3 = mysql_fetch_assoc($busca3);	
	
$query_busca4 = "SELECT * FROM imoveis WHERE imobiliaria = '$row_listwww[creci]' AND categoria='2' AND ativo = 'sim' AND exibir_este_imovel = 's' AND valor >= '500000' AND valor <= '1000000' ORDER BY valor ASC";
$busca4 = mysql_query($query_busca4, $principal) or print(mysql_error());
$row_busca4 = mysql_fetch_assoc($busca4);
	
$query_busca5 = "SELECT * FROM imoveis WHERE imobiliaria = '$row_listwww[creci]' AND categoria='2' AND ativo = 'sim' AND exibir_este_imovel = 's' AND valor >= '1000000' AND valor <= '5000000' ORDER BY valor ASC";
$busca5 = mysql_query($query_busca5, $principal) or print(mysql_error());
$row_busca5 = mysql_fetch_assoc($busca5);
	
$query_busca6 = "SELECT * FROM imoveis WHERE imobiliaria = '$row_listwww[creci]' AND categoria='2' AND ativo = 'sim' AND exibir_este_imovel = 's' AND valor >= '5000000' AND valor <= '10000000' ORDER BY valor ASC";
$busca6 = mysql_query($query_busca6, $principal) or print(mysql_error());
$row_busca6 = mysql_fetch_assoc($busca6);
	
$query_busca7 = "SELECT * FROM imoveis WHERE imobiliaria = '$row_listwww[creci]' AND categoria='2' AND ativo = 'sim' AND exibir_este_imovel = 's' AND valor >= '10000000' AND valor <= '20000000' ORDER BY valor ASC";
$busca7 = mysql_query($query_busca7, $principal) or print(mysql_error());
$row_busca7 = mysql_fetch_assoc($busca7);
	
$query_busca8 = "SELECT * FROM imoveis WHERE imobiliaria = '$row_listwww[creci]' AND categoria='2' AND ativo = 'sim' AND exibir_este_imovel = 's' AND valor >= '20000000' AND valor <= '60000000' ORDER BY valor ASC";
$busca8 = mysql_query($query_busca8, $principal) or print(mysql_error());
$row_busca8 = mysql_fetch_assoc($busca8);
	
	
	
$query_busca9 = "SELECT * FROM imoveis WHERE imobiliaria = '$row_listwww[creci]' AND categoria='2' AND ativo = 'sim' AND exibir_este_imovel = 's' AND valor > '60000000' ORDER BY valor ASC";
$busca9 = mysql_query($query_busca9, $principal) or print(mysql_error());
$row_busca9 = mysql_fetch_assoc($busca9);	
	



$query_busca10 = "SELECT * FROM imoveis WHERE imobiliaria = '$row_listwww[creci]' AND categoria='1' AND ativo = 'sim' AND exibir_este_imovel = 's' AND valor >= '20000' AND valor <= '50000' ORDER BY valor ASC";
$busca10 = mysql_query($query_busca10, $principal) or print(mysql_error());
$row_busca10 = mysql_fetch_assoc($busca10);	


$query_busca11 = "SELECT * FROM imoveis WHERE imobiliaria = '$row_listwww[creci]' AND categoria='1' AND ativo = 'sim' AND exibir_este_imovel = 's' AND valor >= '50000' AND valor <= '80000' ORDER BY valor ASC";
$busca11 = mysql_query($query_busca11, $principal) or print(mysql_error());
$row_busca11 = mysql_fetch_assoc($busca11);	



$query_busca12 = "SELECT * FROM imoveis WHERE imobiliaria = '$row_listwww[creci]' AND categoria='1' AND ativo = 'sim' AND exibir_este_imovel = 's' AND valor >= '80000' AND valor <= '120000' ORDER BY valor ASC";
$busca12 = mysql_query($query_busca12, $principal) or print(mysql_error());
$row_busca12 = mysql_fetch_assoc($busca12);	

$query_busca13 = "SELECT * FROM imoveis WHERE imobiliaria = '$row_listwww[creci]' AND categoria='1' AND ativo = 'sim' AND exibir_este_imovel = 's' AND valor >= '120000' AND valor <= '200000' ORDER BY valor ASC";
$busca13 = mysql_query($query_busca13, $principal) or print(mysql_error());
$row_busca13 = mysql_fetch_assoc($busca13);	

$query_busca14 = "SELECT * FROM imoveis WHERE imobiliaria = '$row_listwww[creci]' AND categoria='1' AND ativo = 'sim' AND exibir_este_imovel = 's' AND valor >= '200000' AND valor <= '300000' ORDER BY valor ASC";
$busca14 = mysql_query($query_busca14, $principal) or print(mysql_error());
$row_busca14 = mysql_fetch_assoc($busca14);	

$query_busca15 = "SELECT * FROM imoveis WHERE imobiliaria = '$row_listwww[creci]' AND categoria='1' AND ativo = 'sim' AND exibir_este_imovel = 's' AND valor >= '300000' AND valor <= '500000' ORDER BY valor ASC";
$busca15 = mysql_query($query_busca15, $principal) or print(mysql_error());
$row_busca15 = mysql_fetch_assoc($busca15);	

$query_busca16 = "SELECT * FROM imoveis WHERE imobiliaria = '$row_listwww[creci]' AND categoria='1' AND ativo = 'sim' AND exibir_este_imovel = 's' AND valor >= '500000' ORDER BY valor ASC";
$busca16 = mysql_query($query_busca16, $principal) or print(mysql_error());
$row_busca16 = mysql_fetch_assoc($busca16);	


	if (!$_POST['categoriaid']) {
		
	$categoriaid = 'Todos';
		
	} else {

	$categoriaid = $_POST['categoriaid'];
		
	}


if ($categoriaid == '1') {
	

?>


                  
                      <option value="Todos">Pre&ccedil;o</option>
                      <? if ($row_busca10 != '0') { ?>
                      <option value="10">De R$200,00 Até R$500,00</option>
                      <? } ?><? if ($row_busca11 != '0') { ?>
                      <option value="11">De R$500,00 Até R$800,00</option>
                      <? } ?><? if ($row_busca12 != '0') { ?>
                      <option value="12">De R$800,00 Até R$1.200,00</option>
                      <? } ?><? if ($row_busca13 != '0') { ?>
                      <option value="13">De R$1.200,00 Até R$2.000,00</option>
                      <? } ?><? if ($row_busca14 != '0') { ?>
                      <option value="14">De R$2.000,00 Até R$3.000,00</option>
                      <? } ?><? if ($row_busca15 != '0') { ?>
                      <option value="15">De R$3.000,00 Até R$5.000,00</option>
                      <? } ?><? if ($row_busca16 != '0') { ?>
                      <option value="16">A partir de R$5.000,00</option>                        
                      <? } ?>
                 
            
				  
				 
<? } else if ($categoriaid == '2') { ?>





   
                      <option value="Todos">Pre&ccedil;o</option>
                 <? if ($row_busca5 != '0') { ?>
                      <option value="5">De R$10.000,00 Até R$50.000,00</option>
                      <? } ?><? if ($row_busca6 != '0') { ?>
                      <option value="6">De R$50.000,00 Até R$100.000,00</option>
                      <? } ?><? if ($row_busca7 != '0') { ?>
                      <option value="7">De R$100.000,00 Até R$200.000,00</option>
                        <? } ?><? if ($row_busca8 != '0') { ?>
                      <option value="8">De R$200.000,00 Até R$600.000,00</option>
                      <? } ?><? if ($row_busca9 != '0') { ?>
                      <option value="9">Acima de R$600.000,00</option>
                      <? } ?>
       



<? } else { ?>


                      <option value="Todos">Pre&ccedil;o</option>
                      <? if ($row_busca10 != '0') { ?>
                      <option value="10">De R$200,00 Até R$500,00</option>
                      <? } ?><? if ($row_busca11 != '0') { ?>
                      <option value="11">De R$500,00 Até R$800,00</option>
                      <? } ?><? if ($row_busca12 != '0') { ?>
                      <option value="12">De R$800,00 Até R$1.200,00</option>
                      <? } ?><? if ($row_busca13 != '0') { ?>
                      <option value="13">De R$1.200,00 Até R$2.000,00</option>
                      <? } ?><? if ($row_busca14 != '0') { ?>
                      <option value="14">De R$2.000,00 Até R$3.000,00</option>
                      <? } ?><? if ($row_busca15 != '0') { ?>
                      <option value="15">De R$3.000,00 Até R$5.000,00</option>
                      <? } ?><? if ($row_busca16 != '0') { ?>
                      <option value="16">A partir de R$5.000,00</option>                        
                      <? } ?>


                      <? if ($row_busca1 != '0') { ?>
                      <option value="1">Até R$1.000,00</option>
                      <? } ?><? if ($row_busca2 != '0') { ?>
                      <option value="2">De R$1.000,00 Até R$3.000,00</option>
                      <? } ?><? if ($row_busca3 != '0') { ?>
                      <option value="3">De R$3.000,00 Até R$5.000,00</option>
                      <? } ?><? if ($row_busca4 != '0') { ?>
                      <option value="4">De R$5.000,00 Até R$10.000,00</option>
                      <? } ?><? if ($row_busca5 != '0') { ?>
                      <option value="5">De R$10.000,00 Até R$50.000,00</option>
                      <? } ?><? if ($row_busca6 != '0') { ?>
                      <option value="6">De R$50.000,00 Até R$100.000,00</option>
                      <? } ?><? if ($row_busca7 != '0') { ?>
                      <option value="7">De R$100.000,00 Até R$200.000,00</option>
                        <? } ?><? if ($row_busca8 != '0') { ?>
                      <option value="8">De R$200.000,00 Até R$600.000,00</option>
                      <? } ?><? if ($row_busca9 != '0') { ?>
                      <option value="9">Acima de R$600.000,00</option>
                      <? } ?>


<? } ?>