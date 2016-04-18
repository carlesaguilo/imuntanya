<div align="left" id="bodyPrincipal">
        <?php if ($node->get_MIGAS()==1){ ?> <div id="migas"><?php echo $txt_inici;?> > <?php echo $nodeAdmin->getPosicioWeb($nodes,$node,$contingutSeleccionat); ?></div><?php } ?>
        <h1><?php echo $contingutSeleccionat->get_TITOLPAGINA(); ?> </h1> 
        
        <div class="menuEsquerra">
          <?php if ($adjuntoImagenes->count()>1) {include_once $_SESSION["PATH_WEB"].'/templates/'.$plantilla.'/slideshow2.php';}   ?>
          <?php echo $contingutSeleccionat->get_CODIHTML(); ?> 
        </div>
        <div class="menuDreta">
          <?php echo $contingutSeleccionat->get_DESCRIPCIOWEB(); ?> <br>
          <?php if ($formulariGeneral=="FORMULARIO") {include_once $_SESSION["PATH_WEB"].'/templates/'.$plantilla.'/formGeneral.php';}   ?> <br>
          <?php if ($adjuntoDescargasPdf->count()>1) {include_once $_SESSION["PATH_WEB"].'/templates/'.$plantilla.'/descargaInformacioPdf.php';}   ?> <br>
          <?php if ($adjuntoDescargasVideo->count()>1) {include_once $_SESSION["PATH_WEB"].'/templates/'.$plantilla.'/informacioVideo.php';}   ?> <br>
        </div>
        	
        <div style="clear: both;">&nbsp;</div>          
</div>