	<div id="main">
        <?php include_once $_SESSION["PATH_WEB"].'/templates/'.$plantilla.'/slideshow.php';   ?>		
        <?php for ($i = 1; $i < $adjuntoCaracteristicasTecnicas->count(); $i++) 
            { 
                $a = $adjuntoCaracteristicasTecnicas->offsetGet($i);
                /*if($_SESSION["idIdioma"]==9) {
                    print_r($a);
                }*/
                //echo "idioma: ".$_SESSION["idIdioma"];
                echo $a->get_CODIHTML();  
            }?> 
	    <?php $ultimesNoticiesAleatories = $contingutSeleccionat->get_ITEM1();
	          if ($nodeNoticias->get_ContenidoS()!=""){ ;
		         for ($i = 1; $i < $nodeNoticias->get_ContenidoS()->count(); $i++) { 
		          	$p = rand(1,$ultimesNoticiesAleatories); 
		            if ($p < ($nodeNoticias->get_ContenidoS()->count())){
		          	   $c = $nodeNoticias->get_ContenidoS()->offsetGet($p);
		          	}else{
		          	   $c = $nodeNoticias->get_ContenidoS()->offsetGet(1);
		          	}   
		         }   	
		       }     	
		 ?>  
		<?php if ($c != ""){?>         	
		<div class="pestanya Noticies">
			<p class="totesNoticies"><a title="<?php echo $c->get_TITOLURL();?>" href="<?php echo $c->get_URLSEMANTICA();?>"><?php echo $txt_mesnoticies;?></a></p>
			<h2><?php echo $txt_NovetatsNoticies;?></h2>
			<div class="entrada">
			<h3 class="titolNoticia"><a title="<?php echo $c->get_TITOLURL();?>" href="<?php echo $c->get_URLSEMANTICA();?>"><?php echo $c->get_TITOLPAGINA();?></a></h3>
			<p class="dataNoticia"><?php echo $c->get_DATA();?></p>
			<p><a title="<?php echo $c->get_TITOLURL();?>" href="<?php echo $c->get_URLSEMANTICA();?>" class="imatgeNoticia"><img src="<?php echo $c->get_ICONO();?>" alt="<?php echo $c->get_TITOLPAGINA();?>" ></a></p>
			<p><?php echo $c->get_DESCRIPCIOWEB();?></p>
			</div>
			<p class="readMore"><a title="<?php echo $c->get_TITOLURL();?>" href="<?php echo $c->get_URLSEMANTICA();?>"><?php echo $txt_llegirmes;?></a></p>
		</div><!-- Final PESTANYA -->
		<?php }?>
    <div class="wrap">&nbsp;</div>
	</div><!-- Final MAIN -->