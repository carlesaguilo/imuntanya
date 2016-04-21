	<?php if ($grupoFila1->count()>1){ ?>
	<div id="galeria">
		<h3><?php $a = $grupoFila1->offsetGet(1); echo utf8_decode($a->get_LINK());?></h3>
		<div id="slides1">
            <div class="slides_container">
            <?php for ($i = 1; $i < $grupoFila1->count(); $i++) { $a = $grupoFila1->offsetGet($i);
                     if (($i==1) || (($i%6)==0)){ echo "<div>";}?> 
			           <a href="<?php echo $a->get_FITXER();?>" rel="lightbox[roadtrip]"><img alt="<?php echo $a->get_NOM();?>" src="<?php echo $a->get_FITXER();?>"  width="130" height="86"></a>
               <?php   if (((($i+1)%6)==0) || (($i+1)==$grupoFila1->count())){ echo "</div>";}?>  
              <?php }?>	   
		   </div>
		</div>
	</div><!-- Final galeria2 -->
	<?php } ?>
	
	<?php if ($grupoFila2->count()>1){ ?>
	<div id="galeria">
		<h3><?php $a = $grupoFila2->offsetGet(1); echo utf8_decode($a->get_LINK());?></h3>
		<div id="slides2">
            <div class="slides_container">
            <?php for ($i = 1; $i < $grupoFila2->count(); $i++) { $a = $grupoFila2->offsetGet($i);
                     if (($i==1) || (($i%4)==0)){ echo "<div>";}?> 
			           <a href="<?php echo $a->get_FITXER();?>" rel="lightbox[roadtrip]"><img alt="<?php echo $a->get_NOM();?>" src="<?php echo $a->get_FITXER();?>"  width="130" height="86"></a>
               <?php   if (((($i+1)%4)==0) || (($i+1)==$grupoFila2->count())){ echo "</div>";}?>  
              <?php }?>	   
		   </div>
		</div>
	</div><!-- Final galeria2 -->
	<?php } ?>
	
	<?php if ($grupoFila3->count()>1){ ?>
	<div id="galeria">
		<h3><?php $a = $grupoFila3->offsetGet(1); echo utf8_decode($a->get_LINK());?></h3>
		<div id="slides3">
            <div class="slides_container">
            <?php for ($i = 1; $i < $grupoFila3->count(); $i++) { $a = $grupoFila3->offsetGet($i);
                     if (($i==1) || (($i%4)==0)){ echo "<div>";}?> 
			           <a href="<?php echo $a->get_FITXER();?>" rel="lightbox[roadtrip]"><img alt="<?php echo $a->get_NOM();?>" src="<?php echo $a->get_FITXER();?>"  width="130" height="86"></a>
               <?php   if (((($i+1)%4)==0) || (($i+1)==$grupoFila3->count())){ echo "</div>";}?>  
              <?php }?>	   
		   </div>
		</div>
	</div><!-- Final galeria2 -->
	<?php } ?>
	
	<?php if ($grupoFila4->count()>1){ ?>
	<div id="galeria">
		<h3><?php $a = $grupoFila4->offsetGet(1); echo utf8_decode($a->get_LINK());?></h3>
		<div id="slides4">
            <div class="slides_container">
            <?php for ($i = 1; $i < $grupoFila4->count(); $i++) { $a = $grupoFila4->offsetGet($i);
                     if (($i==1) || (($i%4)==0)){ echo "<div>";}?> 
			           <a href="<?php echo $a->get_FITXER();?>" rel="lightbox[roadtrip]"><img alt="<?php echo $a->get_NOM();?>" src="<?php echo $a->get_FITXER();?>" width="130" height="86"></a>
               <?php   if (((($i+1)%4)==0) || (($i+1)==$grupoFila4->count())){ echo "</div>";}?>  
              <?php }?>	   
		   </div>
		</div>
	</div><!-- Final galeria2 -->
	<?php } ?>
	
	<?php if ($grupoFila5->count()>1){ ?>
	<div id="galeria">
		<h3><?php $a = $grupoFila5->offsetGet(1); echo utf8_decode($a->get_LINK());?></h3>
		<div id="slides5">
            <div class="slides_container">
            <?php for ($i = 1; $i < $grupoFila5->count(); $i++) { $a = $grupoFila5->offsetGet($i);
                     if (($i==1) || (($i%4)==0)){ echo "<div>";}?> 
			           <a href="<?php echo $a->get_FITXER();?>" rel="lightbox[roadtrip]"><img alt="<?php echo $a->get_NOM();?>" src="<?php echo $a->get_FITXER();?>" width="130" height="86"></a>
               <?php   if (((($i+1)%4)==0) || (($i+1)==$grupoFila5->count())){ echo "</div>";}?>  
              <?php }?>	   
		   </div>
		</div>
	</div><!-- Final galeria2 -->
	<?php } ?>
	
	<?php if ($grupoFila6->count()>1){ ?>
	<div id="galeria">
		<h3><?php $a = $grupoFila6->offsetGet(1); echo utf8_decode($a->get_LINK());?></h3>
		<div id="slides6">
            <div class="slides_container">
            <?php for ($i = 1; $i < $grupoFila6->count(); $i++) { $a = $grupoFila6->offsetGet($i);
                     if (($i==1) || (($i%4)==0)){ echo "<div>";}?> 
			           <a href="<?php echo $a->get_FITXER();?>" rel="lightbox[roadtrip]"><img alt="<?php echo $a->get_NOM();?>" src="<?php echo $a->get_FITXER();?>"  width="130" height="86"></a>
               <?php   if (((($i+1)%4)==0) || (($i+1)==$grupoFila6->count())){ echo "</div>";}?>  
              <?php }?>	   
		   </div>
		</div>
	</div><!-- Final galeria2 -->
	<?php } ?>
	
	