<div id="contentarea">
        <?php if ($node->get_MIGAS()==1){ ?> <div id="migas"><?php echo $nodeAdmin->getPosicioWeb($nodes,$node,$contingutSeleccionat); ?></div><?php } ?>
        <?php echo $contingutSeleccionat->get_CODIHTML(); ?> 	
        <div style="clear: both;">&nbsp;</div>          
</div>