<div align="left" id="bodyPrincipal">
        <?php if ($node->get_MIGAS()==1){ ?> <div id="migas"><?php echo $txt_inici;?> > <?php echo $nodeAdmin->getPosicioWeb($nodes,$node,$contingutSeleccionat); ?></div><?php } ?>
        <h1><?php echo $contingutSeleccionat->get_TITOLPAGINA(); ?> </h1> 
        
        <div class="menuEsquerraContact">
          <?php echo $contingutSeleccionat->get_CODIHTML(); ?> 
        </div>
        <div class="menuDretaContact">
           <?php include_once $_SESSION["PATH_WEB"].'/templates/'.$plantilla.'/formGran.php';?> 
        </div>
        	
        <div style="clear: both;">&nbsp;</div>          
</div>