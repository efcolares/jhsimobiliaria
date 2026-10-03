<?
session_start();




if($_SERVER["HTTPS"] != "on")
{
	
			   
	echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]."'>";
    
    exit();
}

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
        <meta name="theme-color" content="#212664">



<style type="text/css">



	#celular img {
		
		
		width:20%;
	}

	#limite_largura_section {


	
<?	if ($_GET['conteudo'] != 'Localizacao') { ?>
	
	
	padding: 0;
	
	width:96%;
	max-width:1240px;
	margin:20px 2% 20px 2%;
	


	

		
<?		} else { ?>
	
	
padding: 0;
	

	margin:0 auto 40px auto;
	

	
	
<? } ?>
	
	
		}

	#example2 {
		position: relative;
		width:100%;
		float:left;
		margin:0 auto 0 auto;
		z-index: 99999999999999999999999999;
	}
	
	#comunicado p {
		text-align: justify;
		padding: 10px;
	}
	

</style>      




<? include ("/home/waibrasi/Scripts/headbody_v2018.php"); ?>


<header>


      



<div id="header_fundo"></div>
                    
                    
                    
              
<div id="limite_header">
                    
                    
<div id="logo_topo"><img src="https://<? echo $_SESSION['www']; ?>/imagens/logo_topo.png" /></div>
                    

<div id="info_topo">
<div id="endereco_topo">
<i class="fas fa-map-marker"></i> <? echo $_SESSION['endereco']; ?>, <? echo $_SESSION['numero']; ?> - <? echo $_SESSION['cidade']; ?>/<? echo $_SESSION['siglaestado']; ?></div>
<div id="telefone_topo"><a href="https://api.whatsapp.com/send?phone=55<? echo celular_sem_simbolos($_SESSION['telefone']); ?>" target="_blank"><i class="fab fa-whatsapp" aria-hidden="true"></i> <? echo $_SESSION['telefone']; ?></a></div>
                  
<div id="celular"><a href="https://api.whatsapp.com/send?phone=55<? echo celular_sem_simbolos($_SESSION['celular1']); ?>" target="_blank"><i class="fab fa-whatsapp" aria-hidden="true"></i> <? echo $_SESSION['celular1']; ?></a></div>

<br>

<div id="creci_topo"><? echo convutf8("CRECI-MG:11.606 / CNAI - 07423"); ?></div>
<div id="servicos_topo"><? echo convutf8("VENDAS - AVALIAÇÕES - ADMINISTRAÇÃO"); ?></div>

<br>

<div id="redes_sociais">
           <a href="https://web.facebook.com/jhscorretordeimoveis" target="_blank"><i class="fab fa-facebook"></i> Facebook</a>
            <a href="https://www.instagram.com/jhs_imoveis_ita/" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
	</div>








</div>




</div>




                  
                                     
                  
                   <div id="menu">
                   <div id="limite_menu">
              <? include ("menu2015.php"); ?>
					   </div>
              </div>
                   
                   
                   
                   </div>
        </header>
          
          
          <div id="buscaimoveis"><? include ("/home/waibrasi/Scripts/valedosapucai/filtro_imoveis_div_css20192.php"); ?></div>
          
          
           <? if ($_GET['conteudo'] == 'aaa'){ ?>
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
                include "/home/waibrasi/Scripts/valedosapucai/imoveis_2023.php";
                break;
				
				case 'imoveis_home':
                include "/home/waibrasi/Scripts/valedosapucai/imoveis_home_div.php";
                break;
				
				case 'fotografias':
                include "/home/waibrasi/Scripts/valedosapucai/fotografias_imobiliarias_2023.php";
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
  
  
     <? if ($_GET['conteudo'] == '' or $_GET['conteudo'] == 'A Loja'){ 
					   
	
	echo "<br>";
	
 include "/home/waibrasi/Scripts/valedosapucai/imoveis_2023.php";
	
	
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
                    
                    <div id="telefone_rodape"><a href="https://api.whatsapp.com/send?phone=55<? echo celular_sem_simbolos($_SESSION['telefone']); ?>" target="_blank"><i class="fab fa-whatsapp" aria-hidden="true"></i> <? echo $_SESSION['telefone']; ?></a> / <a href="https://api.whatsapp.com/send?phone=55<? echo celular_sem_simbolos($_SESSION['celular1']); ?>" target="_blank"><i class="fab fa-whatsapp" aria-hidden="true"></i> <? echo $_SESSION['celular1']; ?></a>
                    </div>


                    <div id="endereco_rodape"><i class="fas fa-map-marker"></i> <? echo $_SESSION['endereco']; ?>, <? echo $_SESSION['numero']; ?> - Bairro <? echo $_SESSION['bairro']; ?> - <? echo $_SESSION['cidade']; ?>/<? echo $_SESSION['siglaestado']; ?></div>
                    <br>
<div id="redes_sociais_rodape">
           <a href="https://web.facebook.com/jhscorretordeimoveis" target="_blank"><i class="fab fa-facebook"></i> Facebook</a>
            <a href="https://www.instagram.com/jhs_imoveis_ita/" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
	</div>
                    
                </div>
                
                
             
                    <br>
<br>

                    
                 
                    
                
                <div id="horafuncionamento">
Estamos abertos de Segunda á Sexta das 8:30h ás 17:30h !
                </div>
                
                
                 
                    <br><br>

<br>
<br>
<br>
<br>
<br>
<br>

		<div id="loguinhowai"><? include ("/home/waibrasi/Scripts/clientes/loguinho_rodape.php"); ?></div>

</footer>            


<? if ($_GET['conteudo'] == 'naoexiste'){ 
   //mensagem boas vindas
	?>
   
   
   <div class="fancybox" id="example2" style="display:none;">
        <p>INFORMAMOS QUE NO PERÍODO DE 23 DE DEZEMBRO A 07 DE JANEIRO ESTAREMOS DE RECESSO.<br>

			
RETORNAREMOS NOSSAS ATIVIDADES NORMAIS NO DIA 08 DE JANEIRO DE 2024.<br><br>


A PARTIR DE ENTÃO ESTAREMOS A DISPOSIÇÃO.<br>
<br>
<br>

Dayana e Hélio (JHS IMOBILIÁRIA)
</p>
    </div>
    

 <script type="text/javascript">
        
			
			
			$.fancybox.open({
    src  : '#example2',
				 type : 'inline',
    opts : {
      onComplete : function() {
        console.info('done!');
      }
    }
   
  });
           

        
    </script>
   
   
   
   <?
   //script para contabilizar visita
   //cria uma sessão
   $_SESSION['visitado'] = session_id();
} ?>





<? echo $_SESSION['googleanalytics']; ?>
<? include ("/home/waibrasi/Scripts/clientes/wp.php"); ?>

</body>
</html>
