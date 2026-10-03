<?
require_once('Connections/principal.php');
mysql_select_db($database_principal, $principal);

$query_carros = sprintf("SELECT * FROM veiculos WHERE id_revendedora = '$_SESSION[id]' ORDER BY RAND()");
$carros = mysql_query($query_carros, $principal) or print(mysql_error());
$row_carros = mysql_fetch_assoc($carros);


$query_banner_inicial = sprintf("SELECT * FROM banner_loja WHERE usuario = '$_SESSION[usuario]' ORDER BY ordem ASC");
$banner_inicial = mysql_query($query_banner_inicial, $principal) or print(mysql_error());
$row_banner_inicial = mysql_fetch_assoc($banner_inicial);


?>

<!DOCTYPE html>
<html lang="pt-br" class="no-js">


	<head>
		<meta http-equiv="Content-type" section="text/html; charset=utf-8">
		<meta name="ROBOTS" section="INDEX, FOLLOW">
		<meta http-equiv="X-UA-Compatible" section="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
        <meta name="theme-color" content="#111">



<style type="text/css">



.slide_likebox {
 float:right;
 width:288px;
 height:345px; 
 background: url(https://lh6.googleusercontent.com/-VW_GzzYnZJ0/TkiZQFcBc2I/AAAAAAAABmg/fa9_qWV8Cu4/fb_bg.png) no-repeat !important;
 display:block;
 right:-250px;
 padding:0;
 position:fixed;
 top: 130px;
 z-index:9999999999;
 border-radius:10px;
 -moz-border-radius:10px; 
 -webkit-border-radius:10px; 
 }
 div.likeboxwrap {
 margin-top:2px;
 margin-left:-5px;
 width:238px; 
 height:325px;
 background-color:#fff;
 overflow:hidden;
 border-radius:10px;
 -moz-border-radius:10px; 
 -webkit-border-radius:10px; 
 }
 div.likeboxwrap iframe {margin:-1px}
 
 
 .caption1{
    position:relative;
    bottom:0px;
    left:0px;
    z-index:10;
    width: 100%;
   color:white;
    background: none repeat scroll 0% 0% rgba(80, 80, 80, 0.75);
    background-color: rgba(80, 80, 80, 0.75);
    background-image: none;
    background-repeat: repeat;
    background-attachment: scroll;
    background-position: 0% 0%;
    background-clip: border-box;
    background-origin: padding-box;
    background-size: auto auto;
	z-index:999999999;
}

	#celular img {
		
		
		width:20%;
	}

	#limite_header {
	
<?	if ($_GET['conteudo'] != 'Localizacao') { ?>
	
	
	
	
	position: relative;
	width:100%;
	max-width:1000px;
	
	
	margin:0 auto 0 auto;
	padding: 40px;
	float: none;

		
<?		} else { ?>
	
	
		position: relative;
	width:100%;
		max-width:100%;
	
	margin:0 auto 0 auto;
	padding: 40px;
	float: none;
	
	
<? } ?>
	
	
		}

	
	

</style>      




<? include ("/home/waibrasi/Scripts/headbody_v2018.php"); ?>


<header>


      



<div id="header_fundo"></div>
                    
                    
                    
              
<div id="limite_header">
                    
                    
<div id="logo_topo"><img src="https://<? echo $_SESSION['www']; ?>/imagens/logo_topo.png" /></div>
                    

<div id="info_topo">
<div id="endereco_topo">
<i class="fas fa-map-marker"></i> <? echo $_SESSION['endereco']; ?>, <? echo $_SESSION['numero']; ?> - <? echo $_SESSION['cidade']; ?>/<? echo $_SESSION['estado']; ?></div>
<div id="telefone_topo"><a href="tel:<? echo $_SESSION['telefone']; ?>"><i class="fa fa-phone" aria-hidden="true"></i> <? echo $_SESSION['telefone']; ?></a></div>
                  
<div id="celular"><a href="tel:<? echo $_SESSION['celular1']; ?>"><i class="fas fa-mobile-alt"></i> <? echo $_SESSION['celular1']; ?></a></div>

<br>

<div id="creci_topo"><? echo convutf8("CRECI-MG:11.606 / CNAI - 07423"); ?></div>
<div id="servicos_topo"><? echo convutf8("VENDAS - AVALIAÇÕES - ADMINISTRAÇÃO"); ?></div>









</div>




</div>




                  
                                     
                  
                   <div id="menu">
                   <div id="limite_menu">
              <? include ("menu2015.php"); ?>
					   </div>
              </div>
                   
                   
                   
                   </div>
        </header>
          
          
          <div id="buscaimoveis"><? include ("/home/waibrasi/Scripts/valedosapucai/filtro_imoveis_div_bairros.php"); ?></div>
          
          
           <? if ($_GET['conteudo'] == '444' or $_GET['conteudo'] == 'A'){ ?>
              <div id="banner"><? include ("/home/waibrasi/Scripts/clientes/bannerbox.php"); ?></div>
              
              
              
              
              
              
              <? } ?>
              
        <section>           	

				   
				    
                   
                   
                   <div id="limite_largura_section">
                   
                 
                 
       

				   <?
                  switch(htmlspecialchars($_REQUEST['conteudo'])){
				case '':
                include "empresa.php";
                break;
				        
				
				case 'A Loja':
                include "empresa.php";
				break;
				
						case 'imoveis':
                include "/home/waibrasi/Scripts/valedosapucai/imoveis_div_opcao.php";
                break;
				
				case 'imoveis_home':
                include "/home/waibrasi/Scripts/valedosapucai/imoveis_home_div.php";
                break;
				
				case 'fotografias':
                include "/home/waibrasi/Scripts/valedosapucai/fotografias_imobiliarias_2017.php";
                break;
				
				case 'Localizacao':
                include "localizacao.php";
                break;				

				case 'contato':
                include "contato.php";
                break;
				
				// TESTANDO FORMULARIO DE FICHA DE FINANCIAMENTO
				case 'fotografiasv':
                include "fotografiasv.php";
                break;
				

			        default:
                include "index.php";
                break;
}
?>
   
                     </div>
              </section>
              
              

              
              
              <footer>
                    
                    
                <div id="limite_largura_footer">
                        
    
                  <br>

              
                
                   <div id="logo_rodape">
                
                <img src="https://<? echo $_SESSION['www']; ?>/imagens/logo_rodape.png" />
                
                </div>
         
            
                
                
                
                    
<div id="info_rodape" class="fonte">                    
                    
                    
                    <div id="servicos_rodape"><? echo convutf8("VENDAS - AVALIAÇÕES - ADMINISTRAÇÃO"); ?></div>
                    
                    <div id="telefone_rodape"><a href="tel:<? echo $_SESSION['telefone']; ?>"><i class="fa fa-phone" aria-hidden="true"></i> <? echo $_SESSION['telefone']; ?></a> / <a href="tel:<? echo $_SESSION['celular1']; ?>"><i class="fas fa-mobile-alt"></i> <? echo $_SESSION['celular1']; ?></a>
                    </div>


                    <div id="endereco_rodape"><i class="fas fa-map-marker"></i> <? echo $_SESSION['endereco']; ?>, <? echo $_SESSION['numero']; ?> - Bairro <? echo $_SESSION['bairro']; ?> - <? echo $_SESSION['cidade']; ?>/<? echo $_SESSION['estado']; ?></div>
                    
                    
                </div>
                
                
             
                    <br>
<br>

                    
                 
                    
                
                <div id="horafuncionamento">
Estamos abertos de Segunda á Sexta das 8 ás 18h e aos Sábados das 8 ás 12h !
                </div>
                
                
                 
                    <br><br>

<br>

		<div id="loguinhowai"><? include ("/home/waibrasi/Scripts/clientes/loguinho_rodape.php"); ?></div>

</footer>            





<? echo $_SESSION['googleanalytics']; ?>

</body>
</html>
