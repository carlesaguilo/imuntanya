<div id="llistaNoticies">
 
<?php for ($i = 1; $i < $noticias->count(); $i++) { 
      	if ($i < $noticias->count()){
       	   $c = $noticias->offsetGet($i); ?> 
   <div class="dataNoticia"><?php echo $c->get_DATA();?></div>
   <h3><a title="<?php echo $c->get_TITOLURL();?>" href="<?php echo $c->get_URLSEMANTICA();?>"><?php echo $c->get_TITOLPAGINA();?></a></h3>
   <span><?php echo $c->get_ITEM1();?> </span>
   <br> <br> 
        <?php }?>
 <?php }?>	  
        
</div>