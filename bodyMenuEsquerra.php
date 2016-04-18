<div id="bodyPrincipal">
        <?php if ($node->get_MIGAS()==1){ ?> <div id="migas"><?php echo $nodeAdmin->getPosicioWeb($nodes,$node,$contingutSeleccionat); ?></div><?php } ?>

	<!-- LEFT -->
    <?php include_once $_SESSION["PATH_WEB"].'/templates/'.$plantilla.'/menuEsquerra.php';?>    
    <!-- Final LEFT -->
	
	<div id="main2">
		<h1 class="titolInterior"><?php echo $contingutSeleccionat->get_TITOLPAGINA(); ?></h1>
	    <?php if ($resposta!=""){?>            
	    <div id="texte">
			 <h2><?php echo  $txt_tituloRespuestaEmail; ?></h2>
		  	 <br><?php echo $resposta; ?>
		 </div>    
	<?php }else{?> 		
		
    <!-- SLIDESHOW -->
	<?php if ($adjuntoImagenes->count()>1) {include_once $_SESSION["PATH_WEB"].'/templates/'.$plantilla.'/slideshow2.php';}?>    
	<!-- Final SLIDESHOW -->

	<?php if ($adjuntoImagen1Columna->count()>1) {include_once $_SESSION["PATH_WEB"].'/templates/'.$plantilla.'/galeriaImagenes.php';}?>  

    <?php echo $contingutSeleccionat->get_CODIHTML(); ?> 
         
	<?php }?> 		
	
	<div id="right">
      <?php include_once $_SESSION["PATH_WEB"].'/templates/'.$plantilla.'/form.php';?> 
		
	  <!-- Descarregar PDFs -->
	  <?php if ($adjuntoDescargasPdf->count()>1) {include_once $_SESSION["PATH_WEB"].'/templates/'.$plantilla.'/descargaInformacioPdf.php';}   ?>   
        
      <!-- Descarregar Videos -->
      <?php if ($adjuntoDescargasVideo->count()>1) {include_once $_SESSION["PATH_WEB"].'/templates/'.$plantilla.'/informacioVideo.php';}   ?>   
                
	</div><!-- Final RIGHT -->
	
    <div class="aclarir">&nbsp;</div>
    
    <?php if ($adjuntoCaracteristicasTecnicas->count()>1){ $a = $adjuntoCaracteristicasTecnicas->offsetGet(1); echo $a->get_CODIHTML();} ?>
	
	<?php if (($grupoFila1->count()>1) || ($grupoFila2->count()>1) || ($grupoFila3->count()>1) || ($grupoFila4->count()>1) || ($grupoFila5->count()>1) || ($grupoFila6->count()>1)) {include $_SESSION["PATH_WEB"].'/templates/'.$plantilla.'/galeriaImagenes2.php';}?>  
	
	
	</div><!-- Final MAIN2 -->
  
</div>