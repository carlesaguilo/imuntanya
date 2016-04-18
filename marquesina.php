<!-- !VISOR ARTICULOS -->
<script language="JavaScript">
var sp;
function InitPage(){
	<?php 
	    $paginaMarquesina="";
	    for ($i = 1; $i < $nodeNot->get_ContenidoS()->count(); $i++) { $c = $nodeNot->get_ContenidoS()->offsetGet($i);
	       if ((($i-1)%3) ==0){ $paginaMarquesina =$c->get_URLSEMANTICA();}
	       if ($contingutSeleccionat->get_ID()==$c->get_ID()){
	       	  break;		
	       }	
	    }
	?>
	 sp = new Spry.Widget.SlidingPanels("ticker", {duration:1000, fps:80, defaultPanel:'item-<?php echo $paginaMarquesina;?>', enableAnimation:true, enableKeyboardAnimation:false});
	 <?php for ($i = 1; $i < $nodeNot->get_ContenidoS()->count(); $i++) { $c = $nodeNot->get_ContenidoS()->offsetGet($i);
	           if ((($i-1)%3) ==0){
	           	  $pos = (floor($i/3) + 1);
	           	  echo "Spry.$$('#linkpag".$pos."').addEventListener('click', function(){sp.showPanel('item-".$c->get_URLSEMANTICA()."');return false; }, false); ";
	           }
	       } 	
	?>
}
Spry.Utils.addLoadListener(InitPage);
</script>
			<div id="newsTicker">
				<div style="overflow: hidden;" id="ticker" class="SlidingPanels">
					<div style="left: 0px; top: 0px;" class="SlidingPanelsContentGroup">
					    <?php $p=0; for ($i = 1; $i < $nodeNot->get_ContenidoS()->count(); $i++) { $c = $nodeNot->get_ContenidoS()->offsetGet($i);?> 
			            <div <?php if ((($i-1)%3) ==0){ echo "id='item-".$c->get_URLSEMANTICA()."'";}?> class="SlidingPanelsContent">
							<div class="content">
                                 <a title="<?php echo $c->get_TITOLURL();?>" href="<?php echo $c->get_URLSEMANTICA();?>"><div class="imagen"><?php if ($c->get_ICONO()!=""){?><img border="0" src="<?php echo $c->get_ICONO();?>" alt="<?php echo $c->get_TITOLPAGINA();?>" width="69" ><?php }?></div></a>
							     <p><h2><a title="<?php echo $c->get_TITOLURL();?>" href="<?php echo $c->get_URLSEMANTICA();?>"><?php echo $c->get_ITEM1();?></a></h2></p>
							     <span><?php echo $c->get_DATA()." ".$c->get_ITEM2();?></span>
							     <p><?php echo $c->get_ITEM3();?> </p>
						  </div>
						  <?php if (($i%3)==0){ echo "<div class='next'><a id='linkpag".($p+2)."' href='#'>".$txt_seguent." </a></div>";}?>
						  <?php if ($i > 1) {if ((($i-1)%3)==0){ echo "<div class='prev'><a id='linkpag".($p+1)."' href='#'>".$txt_anterior." </a></div>"; $p = $p + 1;}} ?>
						</div>
						<?php } ?> 				
                    </div>
                </div>
                <?php if ($nodeNot->get_ContenidoS()->count()>3){?>
				<p class="navLinks">
				<?php $paginas = round ($nodeNot->get_ContenidoS()->count()/3); 
				      for ($i = 1; $i <= $paginas; $i++) { 
					     echo "<a href='#' id='linkpag".$i."'>".$i."</a>";
					     if (($i+1) <= $paginas) { echo " | ";}       
				      }
			     ?>   
			    </p>
			    <?php }?>
            </div>
<!-- !VISOR ARTICULOS -->