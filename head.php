<!doctype html>

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

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $currentLang; ?>" lang="<?php echo $currentLang; ?>" dir="<?php echo $currentDirection; ?>" xmlns:fb="http://ogp.me/ns/fb#" >
<head>
	
	<?php include_once $_SESSION["PATH_WEB"].'/includes/metaTags.php'; ?>
	<?php include_once $_SESSION["PATH_WEB"].'/includes/styles.php'; ?>
	
	<!-- SCRIPTS -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<?php include_once $_SESSION["PATH_WEB"].'/includes/scripts.php'; ?>
	
	<!-- FAVICONS -->
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/favicon-194x194.png" sizes="194x194">
	<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="/manifest.json">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#8d9c01">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">
	
	<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
	<script type="text/javascript">
	    window.cookieconsent_options = {"message":"<?php echo $txt_AvisoCookies;?>","dismiss":"<?php echo $txt_AcceptoCookies; ?>","learnMore":"<?php echo $txt_llegirmes; ?>","link":"http://imuntanya.com/<?php echo $txt_TerminosUso; ?>","theme":"dark-bottom"};
	</script>
	
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script>
	<!-- End Cookie Consent plugin -->

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
            <?php if($idioma->get_ID()!=9) { ?>
			   <li <?php if ($node->get_IDIOMA() == $idioma->get_ID()){ echo "class='current'";}?>><a title="<?php echo $idioma->get_TEXT();?>" href="/index.php?task=idioma&idioma=<?php echo $idioma->get_ID();?>"><?php echo (substr($idioma->get_TEXT(), 0, 2)) ;?></a></li>	   
            <?php  }  else {?>  
             <li <?php if ($node->get_IDIOMA() == $idioma->get_ID()){ echo "class='current'";}?>><a title="<?php echo $idioma->get_TEXT();?>" href="/index.php?task=idioma&idioma=<?php echo $idioma->get_ID();?>">عربي</a></li>		
		   <?php }
			    }
			   ?>  		
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
