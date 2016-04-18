	<div id="galeria">
		<h3><?php echo $txt_Galeriaimatges;?></h3>
		<div id="slides">
            <div class="slides_container">
            <?php for ($i = 1; $i < $adjuntoImagen1Columna->count(); $i++) { $a = $adjuntoImagen1Columna->offsetGet($i);
                     if (($i==1) || (($i%6)==0)){ echo "<div>";}?> 
			           <a href="<?php echo $a->get_FITXER();?>" rel="lightbox[roadtrip]"><img alt="<?php echo $a->get_NOM();?>" src="<?php echo $a->get_FITXER();?>" width="130" ></a>
               <?php   if (((($i+1)%6)==0) || (($i+1)==$adjuntoImagen1Columna->count())){ echo "</div>";}?>  
              <?php }?>	   
		   </div>
		</div>
	</div><!-- Final Galeria -->