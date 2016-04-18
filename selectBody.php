<tr>
<td align="center"> 
<?php
    //Seleccionem el body segons la zona
    switch ($node->get_ZONA()){
       case "BARRA MENU INICIO":   
		   include_once $_SESSION["PATH_WEB"].'/templates/'.$plantilla.'/portada.php';        
	       break;    	
       case "BARRA PEU PAGINA|SITE MAP":   
		   include_once $_SESSION["PATH_WEB"].'/templates/'.$plantilla.'/siteMap.php';        
	       break;
       case "BARRA MENU PRINCIPAL|CONTACTAR":   
		   include_once $_SESSION["PATH_WEB"].'/templates/'.$plantilla.'/contactar.php';        
	       break;    
       case "BARRA MENU PRINCIPAL|PLANTILLA2":   
		   include_once $_SESSION["PATH_WEB"].'/templates/'.$plantilla.'/body2.php';        
	       break;
	   case "BARRA MENU PRINCIPAL|VID":   
		   include_once $_SESSION["PATH_WEB"].'/templates/'.$plantilla.'/visorVideos.php';        
	       break; 	       
       case "FILLS MENU|MENU ESQUERRA":   
		   include_once $_SESSION["PATH_WEB"].'/templates/'.$plantilla.'/bodyMenuEsquerra.php';        
	       break;	       
       case "BARRA MENU PRINCIPAL|NOTICIAS":   
		   include_once $_SESSION["PATH_WEB"].'/templates/'.$plantilla.'/noticies.php';        
	       break;	 
       case "BARRA MENU PRINCIPAL|MENU IMATGES":   
		   include_once $_SESSION["PATH_WEB"].'/templates/'.$plantilla.'/bodyMenuImatges.php';        
	       break;		       
    default:
	       //body per defecte         
		   include_once $_SESSION["PATH_WEB"].'/templates/'.$plantilla.'/body.php';
    }      
?>    
    </td>
  </tr>