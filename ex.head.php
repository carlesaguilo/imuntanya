<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<HTML xmlns:fb="http://ogp.me/ns/fb#">
<HEAD>
<?php include_once $_SESSION["PATH_WEB"].'/includes/metaTags.php'; ?>
<?php include_once $_SESSION["PATH_WEB"].'/includes/styles.php'; ?>
<?php include_once $_SESSION["PATH_WEB"].'/includes/scripts.php'; ?>
</HEAD>
<BODY <?php if ($bodyOnLoad!=""){?>onload="<?php echo $bodyOnLoad;?>"<?php }?>>
<div id="all">
	<div id="header">
		
		<div class="logo">
			<a title="INFRASTUCTURES DE MUNTANYA" href="/"><img src="/templates/imuntanya/UserFiles/Image/principal/logo_imuntanya.png" alt="logo imuntanya" width="354" height="66"></a>
			<p class="slogan"><?php echo $txt_especialistesenobracivilaltamuntanya;?></p>
		</div><!--  Final LOGO -->
		
		<ul class="idiomes">
		   <?php for ($indice = 1; $indice < $idiomes->count(); $indice++){ $idioma = $idiomes->offsetGet($indice); ?>
			   <li <?php if ($node->get_IDIOMA() == $idioma->get_ID()){ echo "class='current'";}?>><a title="<?php echo $idioma->get_TEXT();?>" href="/index.php?task=idioma&idioma=<?php echo $idioma->get_ID();?>"><img src="<?php echo $idioma->get_IMATGE();?>" alt="<?php //echo $idioma->get_TEXT();?>"> </a></li>	   
		   <?php  }?>  		
		</ul><!-- Final IDIOMES -->
		
		<div class="coordenades">
			<p class="emilio"><a href="mailto:imuntanya@imuntanya.com">imuntanya@imuntanya.com</a></p>
			<p class="telf">(+34) 973 60 48 18</p>
		</div> <!-- Final COORDENADES -->
		
		<ul id="main_menu">
		    <?php for ($i = 1; $i < $nodesMenu->count(); $i++) { $n = $nodesMenu->offsetGet($i);   ?> 	
		        <?php if ($n->get_NODESFILLS()!=""){  'Tenim fills'?>
		           <li class="parent"><a title="<?php echo $n->get_TITOLURL();?>" href="<?php echo $n->get_URL();?>"><span><?php echo $n->get_DEFINICIO();?></span></a>
					  <ul>
						   <?php $nouGrup = false; 
						         for ($x = 1; $x < $n->get_NODESFILLS()->count(); $x++) { $fill = $n->get_NODESFILLS()->offsetGet($x); ?>
						      <?php if (($x==1) || ($nouGrup==true)){ $nouGrup = false;?>
					             <li><span><?php echo $fill->get_PARAULESCLAU();?></span>
						            <ul>						      
						      <?php }?>
							          <li><a title="<?php echo $fill->get_TITOLURL();?>" href="<?php echo $fill->get_URL();?>"><span><?php echo $fill->get_DEFINICIO();?></span></a></li>
							   <?php if (($x==$n->get_NODESFILLS()->count()-1) || ($fill->get_PARAULESCLAU() != $n->get_NODESFILLS()->offsetGet($x+1)->get_PARAULESCLAU())){ $nouGrup = true;?>
								   </ul> 
					             </li>
							   <?php }?>       
							<?php }?>
					  </ul>		           
		           </li>
		        <?php }else{ 'No tenim fills'?>
		           <?php if ($n->get_INCLUDES()==""){?>
		               <li><a title="<?php echo $n->get_TITOLURL();?>" href="<?php echo $n->get_URL();?>"><span><?php echo $n->get_DEFINICIO();?></span></a></li>
		           <?php }else{?>
		               <li class="<?php echo $n->get_INCLUDES();?>"><a title="<?php echo $n->get_TITOLURL();?>" href="<?php echo $n->get_URL();?>"><span><?php echo $n->get_DEFINICIO();?></span></a></li>
		           <?php }?>    	
		        <?php }?>
		    <?php }?>	
		</ul><!-- Final MENU PRINCIPAL -->
		
	</div><!-- Final HEADER -->