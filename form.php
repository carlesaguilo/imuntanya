        <form id="formInfo" onSubmit="return acceptarContacteReduit(<?php echo $_SESSION["idIdioma"]; ?>);" action="/index.php?id=<?php echo $contingutSeleccionat->get_URLSEMANTICA(); ?>&amp;task=contactoRed" method="post" name="formEnt">
			<h3><?php echo $txt_DemaniInformacio;?></h3>
			<p>
			<label for="infoEmpresa"><?php echo $txt_Empresa;?>:</label>
			<input type="text" id="infoEmpresa" size="20" name="nom">
			</p>
			<p>
			<label for="infoEmail"><?php echo $txt_Correuelectronic;?><span class="obligatori">*</span>:</label>
			<input id="infoEmail" type="text" size="20" name="email">
			</p>
			<p>
			<label for="idProducte"><?php echo $txt_Producte;?>:</label>
			<select name="producto" id="idProducte">
			  <?php for ($i = 1; $i < $nodesMenuEsquerra->count(); $i++) { $n = $nodesMenuEsquerra->offsetGet($i); ?>
				 <option <?php if ($node->get_ID()==$n->get_ID()) { echo 'selected';} ?> value="<?php echo $n->get_DEFINICIO(); ?>"><?php echo $n->get_DEFINICIO(); ?></option> 
			  <?php }?>			  
           </select> 
           </p><br/>
           <p>
             <label for="idProducte">Capcha:</label>
	         <img style="padding-left:12px;" src="/admin/captcha.php" height="28" width="150"/><br/>
	         <input type="text" size="12" name="captcha" />
		   </p>			   
           <button type="submit"><?php echo $txt_send;?></button>
            <div class="aclarir">&nbsp;</div>
		</form>