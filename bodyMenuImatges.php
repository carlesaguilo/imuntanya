<div align="left" id="bodyPrincipal">
        <?php if ($node->get_MIGAS()==1){ ?> <div id="migas"><?php echo $txt_inici;?> > <?php echo $nodeAdmin->getPosicioWeb($nodes,$node,$contingutSeleccionat); ?></div><?php } ?>
        <h1><?php echo $contingutSeleccionat->get_TITOLPAGINA(); ?> </h1> 
        
        <?php if ($adjuntoCatalogo !=""){ ?>
        <?php for ($i = 1; $i < $adjuntoCatalogo->count(); $i++) { $a = $adjuntoCatalogo->offsetGet($i); ?>
        <a title="<?php echo $a->get_NOM();?>" href="<?php echo $a->get_LINK();?>">
        <div class="caixaimage">
          <div class="image">
              <img src="<?php echo $a->get_FITXER();?>" alt="<?php echo $a->get_NOM();?>" >
              <h4><span><?php echo $a->get_NOM();?>  </span></h4>
          </div>
        </div>
        </a>
        <?php }?>
       <?php }?>
  
        <div style="clear: both;">&nbsp;</div>          
</div>