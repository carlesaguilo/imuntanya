	<div id="footer">
	   <?php $n = $nodesFoodWeb->offsetGet(1);
	       	 $c = $n->get_ContenidoS()->offsetGet(1);  
	       	 echo $c->get_CODIHTML();              
	     ?>	
		<div class="terceraPestanya">
		    <?php echo $c->get_DESCRIPCIOWEB(); ?>
			<h3><?php echo $txt_Altresenllacos;?></h3>
			<ul class="menuPeu">
				<li class="current"><a href="/"><?php echo $txt_Inici;?></a></li>
<?php if ($nodesPeuPagina!=""){
		for ($i = 1; $i < $nodesPeuPagina->count(); $i++) {
	         $n = $nodesPeuPagina->offsetGet($i);?>
	         <li><a title="<?php echo $n->get_TITOLURL();?>" href="<?php echo $n->get_URL();?>"><?php echo $n->get_DEFINICIO();?></a></li>
<?php 	} } ?> 				
			</ul>
		</div><!-- Final LINKS SOCIALS -->
		
		<div class="wrap">&nbsp;</div>