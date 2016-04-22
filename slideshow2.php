		<!-- SLIDESHOW -->
		<div id="slideshow" class="slideInterior">
  			<div class="wrap">
  			  <div id="slide-holder">
  			    <div id="slide-runner"> 
  			        <?php for ($i = 1; $i < $adjuntoImagenes->count(); $i++) { $a = $adjuntoImagenes->offsetGet($i);?> 
  			           <a href=""><img id="slide-img-<?php echo $i;?>" src="<?php echo $a->get_FITXER();?>" class="slide" alt="<?php echo $a->get_NOM();?>" /></a>
  			        <?php }?>	
  			      <div id="slide-controls">
  			        <h2 id="slide-client" class="text"><span></span></h2>
  			        <div id="slide-desc" class="text"></div>
  			        <div id="slide-nav"></div>
  			      </div>
  			    </div>
  			  </div>
  			</div>
		<script type="text/javascript" text="" javascript="">
		if(!window.slider) var slider={};slider.data=[
            <?php for ($i = 1; $i < $adjuntoImagenes->count(); $i++) { $a = $adjuntoImagenes->offsetGet($i);?> 
               {"id":"slide-img-<?php echo $i;?>","client":"","desc":""}<?php if ($i<($adjuntoImagenes->count()-1)){ echo ",";}?>
            <?php }?>	                          		
			];
		</script>		
        </div><!-- Final WRAPPER -->		
		<!-- Final SLIDESHOW -->