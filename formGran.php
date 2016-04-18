 <?php if ($resposta!=""){?>            
        <div id="answercontact">
			 <h2><?php echo  $txt_tituloRespuestaEmail; ?></h2>
			 <br><?php echo $resposta; ?>
		</div>    
<?php }else{?> 
        <form id="formInfoGran" onSubmit="return acceptarContacte(<?php echo $_SESSION["idIdioma"]; ?>);" action="/index.php?id=<?php echo $contingutSeleccionat->get_URLSEMANTICA(); ?>&amp;task=contacto" method="post" name="formEnt">
			<h3><?php echo $txt_DemaniInformacio;?></h3>
			<p>
			<label for="infoEmpresa"><?php echo $txt_Empresa;?>:</label>
			<input type="text" id="infoEmpresa" size="40" name="nom">
			</p>
			<p>
			<label for="infoEmail"><?php echo $txt_Correuelectronic;?><span class="obligatori">*</span>:</label>
			<input id="infoEmail" type="text" size="20" name="email">
			</p>
			<p>
			<label for="infoEmail"><?php echo $txt_Telefon;?><span class="obligatori">*</span>:</label>
			<input id="infoEmail" type="text" size="20" name="telefono">
			</p>			
			<p>
			<label for="infoEmail"><?php  echo $txt_Assumpte;?><span class="obligatori">*</span>:</label>
			<textarea class="TEXTAREA"  name="missatje" rows="6"></textarea>
			</p><br/>
           <p>
             <label for="idProducte">Capcha:</label>
	         <img style="padding-left:12px;" src="/admin/captcha.php" height="28" width="150"/><br/>
	         <input type="text" size="12" name="captcha" />
		   </p>			   
           <button type="submit"><?php echo $txt_Enviar;?></button>
            <div class="aclarir">&nbsp;</div>
		</form>
<?php }?>		