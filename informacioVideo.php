<div id="boxInfoVideo">
 <h2><?php echo $txt_multimedia;?> </h2>
          <?php for ($i = 1; $i < $adjuntoDescargasVideo->count(); $i++) { $a = $adjuntoDescargasVideo->offsetGet($i);?> 
             <a title="<?php echo $a->get_NOM();?>" href="<?php echo $a->get_LINK();?>"><div class="descarrega"><?php echo utf8_decode($a->get_NOM());?></div></a>
          <?php }?>
</div>          