function acceptarEmailSolInfo(idioma) {
    var txtemail = "El campo email es obligatorio"; 
    var txtcapcha = "Introducir el texto captcha"; 
    var txtemailNoCorrecto = "El campo email no es correcto"; 

  
  if (idioma==7){ //Catala
      txtemail = "El camp email \u00e9s obligatori"; 
      txtcapcha = "Introducir el texto captcha"; 
      txtemailNoCorrecto = "El camp email no \u00e9s correcte";    
  }
  
  if (idioma==4){ //Ingles
      txtemail = "The field E-mail is mandatory"; 
      txtcapcha = "Introducir el texto captcha"; 
      txtemailNoCorrecto = "The field E-mail is not correct";      
  }
   
  if (document.formSendPdf.email.value == ""){
		 window.alert(txtemail);
		 return false;
  } 	 	  
  if (document.formSendPdf.email.value != ""){
		if (document.formSendPdf.email.value.indexOf("@",0) == -1){
			 alert(txtemailNoCorrecto);
			 return false;
        }else{
		   if (document.formSendPdf.email.value.indexOf(".",0) == -1){
				 alert(txtemailNoCorrecto);
				 return false;
		   }
        }
  }    
 
  // return true;
  document.formSendPdf.submit();
}
 
function mostrar() {
            div = document.getElementById('flotante');
            div.style.display = '';
 }

 function cerrar() {
            div = document.getElementById('flotante');
            div.style.display = 'none';
 }
        
function acceptarSuscripcio(idioma) {
  var txtemail = "El campo email es obligatorio"; 
  var txtemailNoCorrecto = "El campo email no es correcto"; 
  
  if (idioma==7){ //Catala
      txtemail = "El camp email \u00e9s obligatori"; 
      txtemailNoCorrecto = "El camp email no \u00e9s correcte";   
  }
  
  if (idioma==4){ //Ingles
      txtemail = "The field E-mail is mandatory"; 
      txtemailNoCorrecto = "The field E-mail is not correct";    
  }
   
  if (document.formEnt.email.value == ""){
		 window.alert(txtemail);
		 return false;
  } 	 	  
  if (document.formEnt.email.value != ""){
		if (document.formEnt.email.value.indexOf("@",0) == -1){
			 alert(txtemailNoCorrecto);
			 return false;
        }else{
		   if (document.formEnt.email.value.indexOf(".",0) == -1){
				 alert(txtemailNoCorrecto);
				 return false;
		   }
        }
  } 

  document.formEnt.submit();
}

function acceptarContacteReduit(idioma) {
	var horariSeleccionat = false;	
    var txtcondicionsLegals = "Debe de aceptar las condiciones legales";	
    var txtnombre = "El campo empresa es obligatorio"; 
    var txtemail = "El campo email es obligatorio"; 
    var txtcapcha = "Introducir el texto captcha"; 
    var txtemailNoCorrecto = "El campo email no es correcto"; 

  
  if (idioma==7){ //Catala
	  txtcondicionsLegals = "Ha d\u0027acceptar les condicions legals";
      txtnombre = "El camp empresa \u00e9s obligatori"; 
      txtemail = "El camp email \u00e9s obligatori"; 
      txtcapcha = "Introducir el texto captcha"; 
      txtemailNoCorrecto = "El camp email no \u00e9s correcte";    
  }
  
  if (idioma==4){ //Ingles
	  txtcondicionsLegals = "Must accept the legal conditions";
      txtnombre = "The field Name is mandatory"; 
      txtemail = "The field E-mail is mandatory"; 
      txtcapcha = "Introducir el texto captcha"; 
      txtemailNoCorrecto = "The field E-mail is not correct";      
  }
    
  if (document.formEnt.nom.value == ""){
		 window.alert(txtnombre);
		 return false;
  }      
  if (document.formEnt.email.value == ""){
		 window.alert(txtemail);
		 return false;
  } 	 	  
  if (document.formEnt.email.value != ""){
		if (document.formEnt.email.value.indexOf("@",0) == -1){
			 alert(txtemailNoCorrecto);
			 return false;
        }else{
		   if (document.formEnt.email.value.indexOf(".",0) == -1){
				 alert(txtemailNoCorrecto);
				 return false;
		   }
        }
  } 
  if (document.formEnt.captcha.value == ""){
		 window.alert(txtcapcha);
		 return false;
  }    
 
  // return true;
  document.formEnt.submit();
}

function acceptarContacte(idioma) {
	var horariSeleccionat = false;	
  var txtcondicionsLegals = "Debe de aceptar las condiciones legales";	
  var txtnombre = "El campo nombre es obligatorio"; 
  var txttelefono = "El campo telefono es obligatorio"; 
  var txtlocalitat = "El campo localidad es obligatorio"; 
  var txtemail = "El campo email es obligatorio"; 
  var txtemailNoCorrecto = "El campo email no es correcto"; 
  var txthorari = "Debe de seleccionar un horario"; 
  var txtcomentario = "El campo mensaje es obligatorio"; 
  var txtcapcha = "Introducir el texto captcha"; 
  
  if (idioma==7){ //Catala
	  txtcondicionsLegals = "Ha d\u0027acceptar les condicions legals";
      txtnombre = "El camp nom \u00e9s obligatori"; 
      txttelefono = "El camp tel\u00e8fon \u00e9s obligatori";
      txtlocalitat = "El camp localitat \u00e9s obligatori"; 
      txtemail = "El camp email \u00e9s obligatori"; 
      txtemailNoCorrecto = "El camp email no \u00e9s correcte";
      txthorari = "Ha de seleccionar un horari"; 
      txtcomentario = "El camp missatge \u00e9s obligatori";       
      var txtcapcha = "Introducir el texto captcha"; 
  }
  
  if (idioma==4){ //Ingles
	  txtcondicionsLegals = "Must accept the legal conditions";
      txtnombre = "The field Name is mandatory"; 
      txttelefono = "The field Telephone is mandatory";
      txtemail = "The field E-mail is mandatory"; 
      txtemailNoCorrecto = "The field E-mail is not correct";
      txtcomentario = "The field message is mandatory";   
      var txtcapcha = "Introducir el texto captcha"; 
  }


 // if (document.formEnt.condicionsLegals.checked == false){
//		 window.alert(txtcondicionsLegals);
//		 return false;
 // }       
  if (document.formEnt.nom.value == ""){
		 window.alert(txtnombre);
		 return false;
  }   
  if (document.formEnt.telefono.value == ""){
		 window.alert(txttelefono);
		 return false;
  }  
 // if (document.formEnt.ciudad.value == ""){
//		 window.alert(txtlocalitat);
//		 return false;
//}    
  if (document.formEnt.email.value == ""){
		 window.alert(txtemail);
		 return false;
  } 	 	  
  if (document.formEnt.email.value != ""){
		if (document.formEnt.email.value.indexOf("@",0) == -1){
			 alert(txtemailNoCorrecto);
			 return false;
        }else{
		   if (document.formEnt.email.value.indexOf(".",0) == -1){
				 alert(txtemailNoCorrecto);
				 return false;
		   }
        }
  } 
  
  
 // for(var i=0; i<document.formEnt.horario.length; i++){ 
//	   if(document.formEnt.horario[i].checked==true){ 
//		   horariSeleccionat = true;	   
//	   }
 // }  
 // if (horariSeleccionat == false){
//	     window.alert(txthorari);
//	     return false;
 // }    

  
  // return true;
    if (document.formEnt.captcha.value == ""){
    	 window.alert(txtcapcha);
	     return false;
     }   
  
  document.formEnt.submit();
}


function acceptarContacteGeneral(idioma) {
	var horariSeleccionat = false;	
  var txtcondicionsLegals = "Debe de aceptar las condiciones legales";	
  var txtnombre = "El campo nombre es obligatorio"; 
  var txttelefono = "El campo telefono es obligatorio"; 
  var txtlocalitat = "El campo localidad es obligatorio"; 
  var txtemail = "El campo email es obligatorio"; 
  var txtemailNoCorrecto = "El campo email no es correcto"; 
  var txthorari = "Debe de seleccionar un horario"; 
  var txtcomentario = "El campo mensaje es obligatorio"; 
  var txtcapcha = "Introducir el texto captcha"; 
  
  if (idioma==7){ //Catala
	  txtcondicionsLegals = "Ha d\u0027acceptar les condicions legals";
      txtnombre = "El camp nom \u00e9s obligatori"; 
      txttelefono = "El camp tel\u00e8fon \u00e9s obligatori";
      txtlocalitat = "El camp localitat \u00e9s obligatori"; 
      txtemail = "El camp email \u00e9s obligatori"; 
      txtemailNoCorrecto = "El camp email no \u00e9s correcte";
      txthorari = "Ha de seleccionar un horari"; 
      txtcomentario = "El camp missatge \u00e9s obligatori";       
      var txtcapcha = "Introducir el texto captcha"; 
  }
  
  if (idioma==4){ //Ingles
	  txtcondicionsLegals = "Must accept the legal conditions";
      txtnombre = "The field Name is mandatory"; 
      txttelefono = "The field Telephone is mandatory";
      txtemail = "The field E-mail is mandatory"; 
      txtemailNoCorrecto = "The field E-mail is not correct";
      txtcomentario = "The field message is mandatory";   
      var txtcapcha = "Introducir el texto captcha"; 
  }


 // if (document.formEnt.condicionsLegals.checked == false){
//		 window.alert(txtcondicionsLegals);
//		 return false;
 // }       
  if (document.formEnt.nom.value == ""){
		 window.alert(txtnombre);
		 return false;
  }   
  if (document.formEnt.telefono.value == ""){
		 window.alert(txttelefono);
		 return false;
  }  
  if (document.formEnt.missatje.value == ""){
		 window.alert(txtcomentario);
		 return false;
}    
  if (document.formEnt.email.value == ""){
		 window.alert(txtemail);
		 return false;
  } 	 	  
  if (document.formEnt.email.value != ""){
		if (document.formEnt.email.value.indexOf("@",0) == -1){
			 alert(txtemailNoCorrecto);
			 return false;
        }else{
		   if (document.formEnt.email.value.indexOf(".",0) == -1){
				 alert(txtemailNoCorrecto);
				 return false;
		   }
        }
  } 
  
  
 // for(var i=0; i<document.formEnt.horario.length; i++){ 
//	   if(document.formEnt.horario[i].checked==true){ 
//		   horariSeleccionat = true;	   
//	   }
 // }  
 // if (horariSeleccionat == false){
//	     window.alert(txthorari);
//	     return false;
 // }    

  
  // return true;
    if (document.formEnt.captcha.value == ""){
    	 window.alert(txtcapcha);
	     return false;
     }   
  
  document.formEnt.submit();
}


function resetForm() { 
	   document.formEnt.reset();
	   document.formEnt.motivoConsulta[0].checked = true;
}

var map = null;
var infoWindow = null;

function cargarGoogleMaps() {
	
	var myLatlng = new google.maps.LatLng(41.626382, 0.907917);
	var myLatlng2 = new google.maps.LatLng(33.576156, -7.625799);

	var myOptions = {
	  zoom: 12,
	  center: myLatlng,
	  mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	
	var myOptions2 = {
	  zoom: 12,
	  center: myLatlng2,
	  mapTypeId: google.maps.MapTypeId.ROADMAP
	}	
	
	var map = new google.maps.Map(document.getElementById("map1"), myOptions);
	var map2 = new google.maps.Map(document.getElementById("map2"), myOptions2);
	
	var infoWindow = new google.maps.InfoWindow();
	var infoWindow2 = new google.maps.InfoWindow();
	
	var marker = new google.maps.Marker({
	    position: myLatlng,
	    draggable: false,
	    map: map,
	    title:"IMUNTANYA"
	});
	
	var marker2 = new google.maps.Marker({
	    position: myLatlng2,
	    draggable: false,
	    map: map2,
	    title:"IMUNTANYA"
	});	
	
    var logo= "/templates/imuntanya/UserFiles/Image/principal/logo.png";
    var titol= "IMUNTANYA";
    var direccion= "Pol&iacute;gon industrial Golparc, 54<br>" +
                   "25241 Golm&eacute;s<br>" +
                   "Tel. (+ 34) <strong> 973 60 48 18</strong><br>";  
    var email= "";
    var html="<table width='270' bgcolor='#FFFFFF' height='150' border='0' cellspacing='0' cellpadding='0'>" +
                 "<tr>" + 
                    "<td class='localizacionDireccionGoogleMap' style='padding-top:0px; padding-left:0px; font-size:12px;' valign='middle'><strong>" +
                    titol + "</strong></td>" +
                 "</tr>" +
                 "<tr>" +
                    "<td valign='top' style='padding-left:0px; padding-top:0px;' class='localizacionDireccionGoogleMap'>" +
                        direccion +
                    "</td>" +
                 "</tr>" +
                 "<tr>" +
                 "<td style='padding-left:0px;'><img src='" + logo + "' width='100'></td>" +
                "</tr>" +                   
             "</table>";  	
    
    var logo2= "/templates/imuntanya/UserFiles/Image/principal/logo.png";
    var titol2= "IMUNTANYA";
    var direccion2= "223 Bd. Abdelmoumen, 4e &eacute;tage<br>" +
                   "20100 Casablanca <br>" +
                   "Tel. (+ 34) <strong> 609 36 21 59</strong><br>";  
    var email2= "";
    var html2="<table width='270' bgcolor='#FFFFFF' height='150' border='0' cellspacing='0' cellpadding='0'>" +
                 "<tr>" + 
                    "<td class='localizacionDireccionGoogleMap' style='padding-top:0px; padding-left:0px; font-size:12px;' valign='middle'><strong>" +
                    titol2 + "</strong></td>" +
                 "</tr>" +
                 "<tr>" +
                    "<td valign='top' style='padding-left:0px; padding-top:0px;' class='localizacionDireccionGoogleMap'>" +
                        direccion2 +
                    "</td>" +
                 "</tr>" +
                 "<tr>" +
                 "<td style='padding-left:0px;'><img src='" + logo2 + "' width='100'></td>" +
                "</tr>" +                   
             "</table>";      
 
    
	google.maps.event.addListener(marker, 'click', function(){
		infoWindow.setContent(html);
		infoWindow.open(map, marker);

    });

	google.maps.event.addListener(marker2, 'click', function(){
		infoWindow2.setContent(html2);
		infoWindow2.open(map2, marker2);

    });	
} 


var ytplayer;
ytplayer = document.getElementById("myytplayer");
function play() {
   ytplayer = document.getElementById("myytplayer");
   if (ytplayer) {
      ytplayer.playVideo();
   }
}

function Cargaplay(video) {
  var ytplayer;
  ytplayer = document.getElementById("myytplayer");
  if (ytplayer) {
    ytplayer.loadVideoByUrl(video, 0);
  }
}

function MM_swapImgRestore() { //v3.0
	  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
	}

function MM_preloadImages() { //v3.0
	  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
	    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
	    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
	  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
	    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
	  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
	  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
	  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
	  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
	   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}


