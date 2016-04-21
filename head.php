<!doctype html>
<!--?php if((isset($_SESSION["selIdioma"]) && $_SESSION["selIdioma"]==9) || (isset($idioma) && $idioma->get_ID()==9)) { ?-->
<?php
	switch ($node->get_IDIOMA()) {
		case 4:
			$currentLang="en-gb";
			$currentDirection="ltr";
			break;
		case 9:
			$currentLang="ar-aa";
			$currentDirection="rtl";
			break;
		case 7:
			$currentLang="ca-es";
			$currentDirection="ltr";
			break;
		case 1:
			$currentLang="es-es";
			$currentDirection="ltr";
			break;
		case 5:
			$currentLang="fr-fr";
			$currentDirection="ltr";
			break;
	}
?>

<?php if($node->get_IDIOMA()==9) { ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $currentLang; ?>" lang="<?php echo $currentLang; ?>" dir="<?php echo $currentDirection; ?>" xmlns:fb="http://ogp.me/ns/fb#" >
<head>
<style>
/*
    .alignara, p, a, div, h1, h2, h3, h4, h5, h6, span { text-align:right !important; }
    #main_menu > li { float:right !important; }
    #main_menu ul li ul li { width:100%; float:right !important; }
    #boxInfoPdf .descarrega, #boxInfoVideo .descarrega { background-position:left !important; }
    #main_menu .parent:hover .menugroupfather {
        position: absolute;
    }
    #main_menu .parent:hover .menugroup {
        right: 334px;
        position: relative;
    }
    #texte ul, .text ul {   list-style-image: none !important; }
*/
    
</style>
<?php 
	} else { 
		 ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr" xmlns:fb="http://ogp.me/ns/fb#" >
<head>
	<style>
	    .alignara { }
	</style>
	<?php } ?>
	
	<?php include_once $_SESSION["PATH_WEB"].'/includes/metaTags.php'; ?>
	<?php include_once $_SESSION["PATH_WEB"].'/includes/styles.php'; ?>
	<?php include_once $_SESSION["PATH_WEB"].'/includes/scripts.php'; ?>
</head>
<body <?php if ($bodyOnLoad!=""){?>onload="<?php echo $bodyOnLoad;?>"<?php }?> <?php if($node->get_IDIOMA()==9) { echo ('class="rtlVersion"'); } ?> >
<div id="all">
	<header id="header">
		
		<div class="logo">
			<a title="INFRAESTUCTURES DE MUNTANYA" href="/"><img src="/templates/imuntanya/UserFiles/Image/principal/logo-imuntanya.svg" alt="Infraestructures de muntanya" width="354" height="66"></a>
			<p class="slogan"><?php echo $txt_especialistesenobracivilaltamuntanya;?></p>
		</div><!--  Final LOGO -->
		
		<ul class="idiomes">
		   <?php for ($indice = 1; $indice < $idiomes->count(); $indice++){ $idioma = $idiomes->offsetGet($indice); ?>
            <?php //if($idioma->get_ID()!=9) { ?>
			   <li <?php if ($node->get_IDIOMA() == $idioma->get_ID()){ echo "class='current'";}?>><a title="<?php echo $idioma->get_TEXT();?>" href="/index.php?task=idioma&idioma=<?php echo $idioma->get_ID();?>"><?php echo (substr($idioma->get_TEXT(), 0, 2)) ;?></a></li>	   
            <?php  //} ?>  		
		   <?php  }?>  		
		</ul><!-- Final IDIOMES -->
		
		<div class="coordenades">
			<p class="emilio"><a href="mailto:imuntanya@imuntanya.com">moc.aynatnumi@aynatnumi</a></p>
			<p class="telf"><a href="tel:973604818">(+34) 973 60 48 18</a></p>
		</div> <!-- Final COORDENADES -->
		
		<div class="showMenu"><a href="#"><span>Men&uacute;</span></a></div>
		
		<nav role="navigation">

			<ul id="main_menu">
			    <?php for ($i = 1; $i < $nodesMenu->count(); $i++) { $n = $nodesMenu->offsetGet($i);   ?> 	
			        <?php if ($n->get_NODESFILLS()!=""){  'Tenim fills'?>
			           <li class="parent"><a title="<?php echo $n->get_TITOLURL();?>" href="<?php echo $n->get_URL();?>"><span><?php echo $n->get_DEFINICIO();?></span></a>
						  <ul class="menugroupfather">
							   <?php $nouGrup = false; 
							         for ($x = 1; $x < $n->get_NODESFILLS()->count(); $x++) { $fill = $n->get_NODESFILLS()->offsetGet($x); ?>
							      <?php if (($x==1) || ($nouGrup==true)){ $nouGrup = false;?>
						             <li class="menugroup"><span class="alignara"><?php echo $fill->get_PARAULESCLAU();?></span>
							            <ul>						      
							      <?php }?>
								          <li><a class="alignara" title="<?php echo $fill->get_TITOLURL();?>" href="<?php echo $fill->get_URL();?>"><span><?php echo $fill->get_DEFINICIO();?></span></a></li>
								   <?php if (($x==$n->get_NODESFILLS()->count()-1) || ($fill->get_PARAULESCLAU() != $n->get_NODESFILLS()->offsetGet($x+1)->get_PARAULESCLAU())){ $nouGrup = true;?>
									   </ul> 
						             </li>
								   <?php }?>       
								<?php }?>
						  </ul>		           
			           </li>
			        <?php }else{ 'No tenim fills'?>
			           <?php if ($n->get_INCLUDES()==""){?>
			               <li><a class="alignara" title="<?php echo $n->get_TITOLURL();?>" href="<?php echo $n->get_URL();?>"><span><?php echo $n->get_DEFINICIO();?></span></a></li>
			           <?php }else{?>
			               <li class="<?php echo $n->get_INCLUDES();?>"><a class="alignara" title="<?php echo $n->get_TITOLURL();?>" href="<?php echo $n->get_URL();?>"><span><?php echo $n->get_DEFINICIO();?></span></a></li>
			           <?php }?>    	
			        <?php }?>
			    <?php }?>	
			</ul><!-- Final MENU PRINCIPAL -->
			
		</nav>
		
	</header><!-- Final HEADER -->
