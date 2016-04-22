	<div id="left">
		<h3><?php echo $nodePare->get_DEFINICIO();?></h3>
        <ul class="menu">
		   <?php $nouGrup = false; 
		         for ($x = 1; $x < $nodesMenuEsquerra->count(); $x++) { $fill = $nodesMenuEsquerra->offsetGet($x); ?>
			      <?php if (($x==1) || ($nouGrup==true)){ $nouGrup = false;?>
		             <li class="parent"><span><?php echo $fill->get_PARAULESCLAU();?></span>
			            <ul>						      
			      <?php }?>
				          <li <?php if ($fill->get_ID() == $node->get_ID()){ echo "class='active'";}?>><a title="<?php echo $fill->get_TITOLURL();?>" href="<?php echo $fill->get_URL();?>"><?php echo $fill->get_DEFINICIO();?></a></li>
				   <?php if (($x==$nodesMenuEsquerra->count()-1) || ($fill->get_PARAULESCLAU() != $nodesMenuEsquerra->offsetGet($x+1)->get_PARAULESCLAU())){ $nouGrup = true;?>
					   </ul> 
		             </li>
				   <?php }?>       
			<?php }?>
		</ul> 
		
	</div>