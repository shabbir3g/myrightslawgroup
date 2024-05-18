(function ($) {
	"use strict";

	$(document).ready(function () {

		$(".country").click(function () {
			$(".city").slideToggle();
		});







		$(".owl-carousel").owlCarousel({
			items: 1,
			merge: true,
			loop: true,
			margin: 30,
			video: true,
			lazyLoad: true,
			center: true,
			autoPlay: true,
			videoWidth: 400,
			videoHeight: 300,
			responsive: {
				480: {
					items: 2
				},
				600: {
					items: 3
				}
			}
		});

		var theToggle = document.getElementById('toggle');

		// hasClass
		function hasClass(elem, className) {
			return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
		}

		// toggleClass
		function toggleClass(elem, className) {
			var newClass = ' ' + elem.className.replace(/[\t\r\n]/g, " ") + ' ';
			if (hasClass(elem, className)) {
				while (newClass.indexOf(" " + className + " ") >= 0) {
					newClass = newClass.replace(" " + className + " ", " ");
				}
				elem.className = newClass.replace(/^\s+|\s+$/g, '');
			} else {
				elem.className += ' ' + className;
			}
		}

		theToggle.onclick = function () {
			toggleClass(this, 'on');
			return false;
		}

		$('#toggle').on('click', function () {
			// alert("hello");
			$('#mobile-menu').slideToggle();
		});


	});

}(jQuery));



