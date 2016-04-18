<div align="left" id="bodyPrincipal">
        <?php if ($node->get_MIGAS()==1){ ?> <div id="migas">inici > <?php echo $nodeAdmin->getPosicioWeb($nodes,$node,$contingutSeleccionat); ?></div><?php } ?>
        <h1>NOVETATS</h1> 
        
        <div class="menuEsquerra">
           <div class="titolData"><?php echo $contingutSeleccionat->get_DATA();?> </div>
          <h1><?php echo $contingutSeleccionat->get_TITOLPAGINA(); ?> </h1> 
          <?php echo $contingutSeleccionat->get_CODIHTML(); ?> 
        </div>
        <div class="menuDreta">
           <div class="titolArxius"><?php echo $txt_Arxius;?></div>
           <?php include_once $_SESSION["PATH_WEB"].'/templates/'.$plantilla.'/llistanoticies.php';   ?> 
        </div>
        	
        <div style="clear: both;">&nbsp;</div>          
</div>