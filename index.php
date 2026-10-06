<?
session_start();

if($_SERVER["HTTPS"] != "on")
	
{
			echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]."'>";  
    		exit();
}

require_once('/home/waibrasi/Scripts/valedosapucai/Connections/valedosapucai.php');
mysql_select_db($database_principal, $principal);

$query_imob = sprintf("SELECT * FROM imobiliarias WHERE creci = '$_SESSION[creci]' ORDER BY RAND()");
$imob = mysql_query($query_imob, $principal) or print(mysql_error());
$row_imob = mysql_fetch_assoc($imob);






?>

<!DOCTYPE html>
<html lang="pt-br" class="no-js">

	<head>
		<meta http-equiv="Content-type" conteudo="text/html; charset=utf-8">
		<meta name="ROBOTS" conteudo="INDEX, FOLLOW">
		<meta http-equiv="X-UA-Compatible" conteudo="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>      

		

<link rel="shortcut icon" href="favicon.ico" >
<meta name="theme-color" content="#1e225a">

<style type="text/css">


	
	#fotofundo {
		
		position: relative;
		display: block;
		width: 100%;
	
		float:left;
		margin:0 auto 0 auto;
		opacity: 0.8;
		<? if ($_GET['conteudo'] == '')		{ ?>
		display: block;
top:-300px;
		<? } else { ?>
			display: none;
	top:0;
		<? } ?>

   
    height: auto; /* height of container */
    object-fit: cover;
	
    
		
		z-index: -9;
 

	}
	
	
	#fotofundo img {width:100%;}
	
	
	

	#limite_horizontal {
	
<?	if ($_GET['conteudo'] != 'Localizacao') { ?>
	
	
	
	
	position: relative;
		display: block;
	width:96%;
	max-width:1280px;
	height:auto;
	
	margin:0 auto 0 auto;
	
		text-align: center;
		
				align-items: center;
		
		z-index: 999;

		
<?		} else { ?>
	
	
	position: relative;
	width:100%;
		
		
	
	margin:0 auto 0 auto;


		
		
		z-index: 999;
	
	
<? } ?>
	

		
		
		
		}



	
	
	#buscaimoveis {
	
	
		position:relative;
		display:block;
		width:auto;
		max-width: 1240px;
		<? if ($_GET['conteudo'] == '') { ?>
	
		height: 60px;
		
		
		<? } else { ?>
		
		height: 125px;
	
	<? } ?>
		margin:0 auto 40px auto;
		
		vertical-align: middle;
		
	
		padding-top: 20px;
		
	background: #B9BDEF;
		
		text-align: center;
		
		border-radius: 20px;
		
-webkit-box-shadow: 0px 10px 5px 0px rgba(230,230,230,1);
-moz-box-shadow: 0px 10px 5px 0px rgba(230,230,230,1);
box-shadow: 0px 10px 5px 0px rgba(230,230,230,1);
	

	
}
	
	
	

	
	
		
	#linha_topo {
		
		position:relative;
		display: block;
		float:left;
		margin:0 auto 10px auto;
		width:100%;
		height: auto;
		vertical-align: middle;
		text-align:center;
		
		
		<? if ($_GET['conteudo'] == '')		{ ?>
		background-color:rgba(33,38,100,0);
			<? } else { ?>
background: rgb(37,44,131);
background: radial-gradient(circle, rgba(37,44,131,1) 0%, rgba(33,38,100,1) 50%, rgba(33,38,100,1) 100%);
		<? } ?>
		
		
		
		
	}
	
	
	#rodape_logo {
	

	
	position: relative;
	display:block;
	margin:20px auto 20px auto;
	width:auto;
	height: auto;
	vertical-align: middle;
	padding-top: 20px;

	left:40px;
	
	

	
	
	
}
	
	#rodape_logo img {
		width:240px;
	}

	
	
	
		#conteudo {
	
	position:relative;
		display: block;
			top:0;
	width:100%;
		height: auto;
	float:left;
	<? if ($_GET['conteudo'] == '')		{ ?>
		margin:-260px auto 60px auto;
			<? } else { ?>
	margin:60px auto 60px auto;
		<? } ?>
	text-align:center;
	
	
	
	
	
	z-index:1;
}

	
#logo_topo {
	
	position: relative;
	width:100%;
	height: auto;
	display:block;
text-align: center;


	
text-align: center;
	
	margin:10px auto 10px auto;
left:60px;
	
}
	

	
	
	#busca_submit {
		   transition: background-color 0.5s ease, color 0.5s ease, transform 0.5s ease;
	}
	#busca_submit:hover {
		transform: scale(1.2);
	}
	
	
	
	@media (max-width: 1600px) {
		
		
	
	

	
	
	
	}
	
	
	
	@media (max-width: 1440px) {
	
		

	
	
	
	}
	
	
		
	@media (max-width: 1024px) {
	
		

	
	
	
	}
	
	
	@media (max-width: 768px) {
		
		

		
			#conteudo {
				<? if ($_GET['conteudo'] == '')		{ ?>
				margin-top: -480px;
				<? } else { ?>
				margin-top: 60px;
		<? } ?>
		}
		
		
		
			#rodape_logo {
	

	
		left:10%;

	
	
}
		#rodape_logo img {
			width:320px;
			
		}
		
			#fotofundo {

		
		position: relative;
		display: block;
		
	
		float:left;
		margin:0 auto 0 auto;
		opacity: 0.8;
		<? if ($_GET['conteudo'] == '')		{ ?>
		display: block;
top:-505px;
				width: 95%;
		<? } else { ?>
				width: 100%;
			display: none;
	top:0;
		<? } ?>

   
    height: auto; /* height of container */
    object-fit: cover;
  
		
		z-index: -9;
 

	}
		
				
		
		#fotofundo img {width:285%;}
		
			#buscaimoveis {
	
	
	position:relative;
	width:auto;
	
	margin: 0 auto 20px auto;
				<? if ($_GET['conteudo'] == '') { ?>
	
		height: 130px;
		
		
		<? } else { ?>
		
		height: 195px;
	
	<? } ?>

	
	text-align: center;
	
	vertical-align: middle;
	

	
	border-radius: 10px;

	
}
		
		
		

		
	}
	
	
	
</style>      




<? include ("/home/waibrasi/Scripts/headbody_imobiliarias_2024.php"); ?>








		<div id="linha_topo">
			<div id="limite_horizontal">

				
<div id="topo_left">
	



<div id="horario_atendimento">
<i class="fas fa-clock"></i> De Segundas ás Sextas-feiras das 8:30h ás 17:30h.<br>
</div>
<br>
<div id="endereco_linha_topo">
<i class="fas fa-map-marker"></i> <? echo $_SESSION['endereco']; ?>, <? echo $_SESSION['numero']; ?>- <? echo $_SESSION['bairro']; ?> - <? echo $_SESSION['cidade']; ?>/<? echo $_SESSION['siglaestado']; ?></div>

</div>												
				
<div id="topo_center">
<div id="logo_topo">
<a href="/"><img src="https://<? echo $_SESSION['www']; ?>/imagens/logo_topo.png" /></a></div>
<div id="infologo_topo">
<div id="creci_topo"><? echo convutf8("CRECI-MG:11.606 / CNAI - 07423"); ?></div>
<div id="servicos_topo"><? echo convutf8("VENDAS - AVALIAÇÕES - ADMINISTRAÇÃO"); ?></div>
</div>

</div>				

				
												
<div id="topo_right">
				
	<div id="telefone_topo"><a href="https://api.whatsapp.com/send?phone=55<? echo celular_sem_simbolos($_SESSION['telefone']); ?>" target="_blank"><i class="fab fa-whatsapp" aria-hidden="true"></i> <? echo $_SESSION['telefone']; ?></a></div>
                  
<div id="celular"><a href="https://api.whatsapp.com/send?phone=55<? echo celular_sem_simbolos($_SESSION['celular1']); ?>" target="_blank"><i class="fab fa-whatsapp" aria-hidden="true"></i> <? echo $_SESSION['celular1']; ?></a></div>
					
<div id="redes_sociais">
           <a href="https://web.facebook.com/jhscorretordeimoveis" target="_blank"><i class="fab fa-facebook"></i> Facebook</a>
            <a href="https://www.instagram.com/jhs_imoveis_ita/" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
	</div>			
			
							
				</div>
		

				
				
			</div>
              
<? if ($_GET['conteudo'] == '') { ?>
				  
				   
				    
				      <div id="fotofundo">
					  <img src="https://<? echo $_SESSION['www']; ?>/imagens/fundo_site.jpg" /></div>
          
          <? } ?>
		</div>

                 
                  
                   
 

          
          
          
              
        <div id="conteudo">           	

				   
				    
                   
                   
                   <div id="limite_horizontal">
                   
                 <div id="barra_busca">  <div id="buscaimoveis">
                 
                 
<? if ($_GET['conteudo'] == 'fotografias' or $_GET['conteudo'] == 'imoveis') { ?>
                 
                
<? include ("/home/waibrasi/Scripts/valedosapucai/filtro_imoveis_div_css20192.php"); ?>

      
      <? } else if ($_GET['conteudo'] == '') { ?>
      
           
             	 
              	  
              	 <? include ("/home/waibrasi/Scripts/valedosapucai/filtro_imoveis_2023_jhs.php"); ?>
               	 
               	
               	
               	
           
               
               
               <? } ?></div>
       </div>
       
  
       

				   <?
                  switch(htmlspecialchars($_REQUEST['conteudo'])){
				case '':
                include "empresa_div.php";
                break;
						  
						  
						  	case 'teste':
                include "empresa_div.php";
                break;
				        
				
				case 'Quem Somos':
                include "paginas.php";
				break;
						  
						  
				case 'dados':
                include "dados.php";
				break;	  
						  
				case 'Empreendimentos':
                include "paginas.php";
				break;
				
						case 'imoveis':
                include "/home/waibrasi/Scripts/valedosapucai/imoveis_2023.php";
                break;
				
				case 'imoveis_home':
                include "/home/waibrasi/Scripts/valedosapucai/imoveis_home_2023.php";
                break;
						  
						  case 'fotografias2023':
                include "/home/waibrasi/Scripts/valedosapucai/fotografias_imobiliarias_2023.php";
                break;
				
				case 'fotografias':
                include "/home/waibrasi/Scripts/valedosapucai/fotografias_imobiliarias_2023.php";
                break;
				
				case 'Localizacao':
                include "localizacao.php";
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
              </div>
              
              
 <? if ($_GET['conteudo'] == ''){ ?>
             <div id="banner">              
<div id="limite_horizontal">
  
  <? include "/home/waibrasi/Scripts/valedosapucai/bannerbox_imoveis.php"; ?>
</div>
</div>
              
              
              <? } ?>
              
              
              <div id="footer">
                    
                    
                <div id="limite_horizontal">
                        
    
                        
            
             <div id="rodape_logo">
                
                <img src="https://<? echo $_SESSION['www']; ?>/imagens/logo_topo.png" />
					</div>
       
            
                
                <div id="quadro_corretores">


<div id="creci_topo"><? echo convutf8("CRECI-MG:11.606 / CNAI - 07423"); ?></div>
<div id="servicos_topo"><? echo convutf8("VENDAS - AVALIAÇÕES - ADMINISTRAÇÃO"); ?></div>


</div>
                
                    
<div id="info_rodape" class="fonte">                    
                    
                    <!--
                                        
                    <div id="telefone_rodape"><i class="fab fa-whatsapp"></i> <a href="https://api.whatsapp.com/send?phone=55<? //echo $celular; ?>"><? //echo $_SESSION['celular1']; ?></a><br>

                    </div>
-->
                    <div id="horario_atendimento_rodape">
<i class="fas fa-clock"></i> De Segundas ás Sextas-feiras das 8:30h ás 17:30h
</div>
                    <div id="endereco_rodape"><i class="fas fa-map-marker"></i> <? echo $_SESSION['endereco']; ?>, <? echo $_SESSION['numero']; ?> - <? echo $_SESSION['bairro']; ?> - <? echo $_SESSION['cidade']; ?>/<? echo $_SESSION['siglaestado']; ?></div>
                    <br>

                    
                                        <div id="email_rodape"><i class="fas fa-envelope"></i> <a href="mailto:<? echo $_SESSION['email']; ?>"><? echo $_SESSION['email']; ?></a></div>
                    

                </div>



				  </div>


		<div id="loguinhowai"><? include ("/home/waibrasi/Scripts/clientes/loguinho_rodape.php"); ?></div>

</div>            

<? if ($_GET['conteudo'] == 'naoexiste' and !$_SESSION['visitado']){ 
   //mensagem boas vindas
	?>
  
   
   <div class="fancybox" id="example2" style="display:none;">
       
       
       
        <p>INFORMAMOS QUE NO PERÍODO DE 21 DE DEZEMBRO A 05 DE JANEIRO ESTAREMOS DE RECESSO.<br>

			
RETORNAREMOS NOSSAS ATIVIDADES NORMAIS NO DIA 06 DE JANEIRO DE 2025.<br><br>


A PARTIR DE ENTÃO ESTAREMOS À DISPOSIÇÃO.<br>
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
	if (!$_SESSION['visitado']){ 
   $_SESSION['visitado'] = session_id();
	}
} ?>




<? echo $_SESSION['googleanalytics']; ?>
<? include "wp.php"; ?>

</body>
</html>
