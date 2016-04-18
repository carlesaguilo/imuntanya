 <?php if ($resposta!=""){?>            
        <div id="answercontact2">
			 <h2><?php echo  $txt_tituloRespuestaEmail; ?></h2>
			 <br><?php echo $resposta; ?>
		</div>    
<?php }else{?> 
        <form id="formInfo" onSubmit="return acceptarContacteGeneral(<?php echo $_SESSION["idIdioma"]; ?>);" action="/index.php?id=<?php echo $contingutSeleccionat->get_URLSEMANTICA(); ?>&amp;task=contactoGen" method="post" name="formEnt">
			<h3><?php echo $txt_DemaniInformacio;?></h3>
			<p>
			<label for="infoEmpresa"><?php echo $txt_nom;?>:</label>
			<input type="text" id="infoEmpresa" size="20" name="nom">
			</p>
			<p>
			<label for="infoEmail"><?php echo $txt_Correuelectronic;?><span class="obligatori">*</span>:</label>
			<input id="infoEmail" type="text" size="20" name="email">
			</p>
			<p>
			<label for="idProducte"><?php echo $txt_Telefon;?>:</label>
			<input id="idProducte" type="text" size="20" name="telefono">
           </p>
			<p>
			<label for="infoEmail"><?php echo $txt_Assumpte;?><span class="obligatori">*</span>:</label>
			<textarea class="TEXTAREA"  name="missatje" rows="6" cols="29"  ></textarea>
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