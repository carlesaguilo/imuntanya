<!-- *************** CODE HTML ***************** -->  
<div align="left" style=" background-color:#ffffff;">
	<div align="left" id="sitemap">
		<h1><?php echo $txt_MapaWeb;?></h1>
		
		<div>
			<div class="boxalignleft">				
					<?php			
					//$nodes = $nodeAdmin->getNodes(0,100,$_SESSION["idIdioma"],"","");
					
					for ($indice = 1; $indice < $nodes->count(); $indice++) {
						$node = new gc_node(0,"",0,"","","","","","","","","","","","",true,false,"","");
						$nodeSeguent = new gc_node(0,"",0,"","","","","","","","","","","","",true,false,"","");
						$node = $nodes->offsetGet($indice);
						if ($indice + 1 < $nodes->count()){
							$nodeSeguent = $nodes->offsetGet($indice + 1);	
							if ($nodeSeguent->get_NIVELL()<$node->get_NIVELL()){
								$node->set_ULTIMDELGRUP(true);		
							}else{
								$node->set_ULTIMDELGRUP(false);
							}
						}else{
					        $node->set_ULTIMDELGRUP(true);
						}	
					
						if ($node->get_DISPONIBLE() == true){
							if (($node->get_ZONA() != "BARRA MENU INICIO") & ($node->get_ZONA() != "BARRA PEU WEB") & ($node->get_ZONA() != "BARRA CAP WEB")) {
					?>					
								<div style="padding-left:30px;">
								    <ul>	
										<li><strong><?php echo $node->get_DEFINICIO(); ?></strong>
										     <?php if ($node->get_CONTENIDOS()->count()>1){?>
										     <ul>
										      <?php for ($ic = 1; $ic < $node->get_CONTENIDOS()->count(); $ic++) {
										               $c = $node->get_CONTENIDOS()->offsetGet($ic);  
										               if (($c->get_VISIBLE()==1) & ($c->get_REURL()=="")){
										      	?> 
										       <li>  <a title='<?php echo $c->get_TITOLURL()?>' href="/<?php echo $c->get_URLSEMANTICA();?>"><?php echo $c->get_TITOLPAGINA(); ?></a></li>
										      <?php }}?>
										     </ul>
										     <?php }?>
										</li>
									</ul>				
		                        </div>
		
												
					<?php   }
						}
					}
					?>	
		   </div>
		</div>   
	</div>
</div>  
<br>
 <!-- *************** CODE HTML ***************** -->   