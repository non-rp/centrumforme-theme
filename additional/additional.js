/*
	++ formid=125 - https://www.centrumforme.pl/terapevt/
	++ formid=111 - footer
	formid=110 - https://www.centrumforme.pl/parents/#popup-webinary-1 - https://www.centrumforme.pl/parents/#popup-webinary-6 
	formid=128 - https://www.centrumforme.pl/parents/#popup-webinary-7 - https://www.centrumforme.pl/parents/#popup-webinary-8
	formid=152 https://www.centrumforme.pl/teacher/#popup-appointmetn-1 - https://www.centrumforme.pl/teacher/#popup-appointmetn-7
	
*/

document.addEventListener('wpcf7mailsent', function (event) {
	let id = event.detail.contactFormId;
		
	if ( '111' == id || '125' == id ) {
		jQuery('#popup-send').addClass('popup_show');
		jQuery('html').addClass('popup-show').addClass('lock');
		jQuery('.overlay').fadeIn(400);
		
		
		jQuery('.overlay, .popup-appointmetn__close').click(function () {
			jQuery('#popup-send').removeClass('popup_show');
			jQuery('.overlay').fadeOut(400);
			jQuery('html').removeClass('popup-show').removeClass('lock');
			return false;
		});		
	}
	
	if ( '110' == id || '128' == id || '152' == id ) {
		jQuery('.popup-appointmetn').removeClass('popup_show');		
		jQuery('#popup-send').addClass('popup_show');
		jQuery('.overlay').fadeIn(400);
		
		jQuery('.overlay, .popup-appointmetn__close').click(function () {
			jQuery('#popup-send').removeClass('popup_show');
			jQuery('.overlay').fadeOut(400);
			jQuery('html').removeClass('popup-show').removeClass('lock');
			return false;
		});		
	}	
	
}, false); 
   

	    
		/*--- 128,152 --*/