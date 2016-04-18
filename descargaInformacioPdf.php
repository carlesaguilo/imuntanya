<div id="boxInfoPdf">
  <h2><?php echo $txt_Descarregarinformacio;?> </h2>
          <?php for ($i = 1; $i < $adjuntoDescargasPdf->count(); $i++) { $a = $adjuntoDescargasPdf->offsetGet($i);?> 
             <a target="_blank" title="<?php echo $a->get_NOM();?>" href="javascript:mostrar();" ><div class="descarrega"><?php echo $a->get_NOM();?></div></a>
          <?php }?>
        <div id="flotante" style="display:none;">  
        <form id="formSendPdf" onSubmit="return acceptarEmailSolInfo(<?php echo $_SESSION["idIdioma"]; ?>);" action="/index.php?id=<?php echo $contingutSeleccionat->get_URLSEMANTICA(); ?>&amp;task=envioEmailPdf" method="post" name="formSendPdf">
			<p><br>
			<label for="infoEmail">Introduzca su email y haga clic en enviar, recibira un correo con el enlace al documento</span>:</label>
			<div style="float:left; margin-top:10px;"><b>Introduzca su email: </b></div><div style="margin-top:6px;"><input style="border: 1px solid #c9c9c9;" id="infoEmail" type="text" size="20" name="email"></div>
			</p>   
           <button type="submit"><?php echo $txt_send;?></button>
            <div class="aclarir">&nbsp;</div>
		</form> 
		</div>         
</div>          