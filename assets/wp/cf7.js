/**
 * Contact Form 7 — show the success popup after a message is sent.
 *
 * Vanilla JS (no jQuery). Reuses the site's popup module by simulating a click
 * on a [data-popup] trigger for #popup-send, so opening, closing, body-lock and
 * focus are all handled by the existing popup library.
 */
(function () {
	document.addEventListener(
		'wpcf7mailsent',
		function () {
			var trigger = document.createElement('button');
			trigger.type = 'button';
			trigger.setAttribute('data-popup', '#popup-send');
			trigger.style.display = 'none';
			document.body.appendChild(trigger);
			trigger.click();
			document.body.removeChild(trigger);
		},
		false
	);
})();
