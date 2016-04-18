<div align="left" id="bodyPrincipal">
        <?php if ($node->get_MIGAS()==1){ ?> <div id="migas">inici > <?php echo $nodeAdmin->getPosicioWeb($nodes,$node,$contingutSeleccionat); ?></div><?php } ?>
       
        <!-- !VIDEO -->
        <div id="video">
             <h1 ><?php echo $contingutSeleccionat->get_TITOLPAGINA(); ?></h1>
			 <?php include "redsSocialsMeGusta.php"?>
             <div>
                  <div id="main">  You need Flash player 8+ and JavaScript enabled to view this video.   </div>
                      <script type="text/javascript">
							    var params = { allowScriptAccess: "always" };
							    var atts = { id: "myytplayer" };
   							    swfobject.embedSWF("http://www.youtube.com/v/<?php echo $contingutSeleccionat->get_ITEM4();?>&enablejsapi=1&playerapiid=ytplayer&autoplay=1&showsearch=0&rel=0", 
							                       "main", 688, 414, "8", null, null, params, atts);							 
                      </script> 	
                     <br><br>
            </div>
            <div>
                <?php echo $contingutSeleccionat->get_CODIHTML(); ?>
            </div>
        </div>
        <!-- !VIDEO -->

        <div id="menuVideos" >
             <div class="primerespai"><h2><?php echo $txt_Altresvideos;?></h2></div>
             <?php $p=0; for ($i = 1; $i < $nodeVideos->get_ContenidoS()->count(); $i++) { $c = $nodeVideos->get_ContenidoS()->offsetGet($i);?> 
             <div class="video"">
                  <a style="padding-bottom:10px" title="<?php echo $c->get_TITOLURL();?>" href="<?php echo $c->get_URLSEMANTICA();?>"><img alt="<?php echo $c->get_TITOLPAGINA();?>" src="<?php echo $c->get_FOTOPRINCIPAL(); ?>" width="200" border="0"></a>
                  <h3><a title="<?php echo $c->get_TITOLURL();?>" href="<?php echo $c->get_URLSEMANTICA();?>"><?php echo $c->get_ITEM1();?></a></h3>
                  <p><?php echo $c->get_DATA();?></p>
                  <div style="clear:both; "></div>
             </div>
             <?php }?>
        </div> 
       <div style="clear:both; "></div>  
</div>