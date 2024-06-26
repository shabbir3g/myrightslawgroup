(function ($) {
	"use strict";

	$(document).ready(function () {
		 
		$('.attorney-members .attorny-profile-info:even').addClass('attorny-profile-lite');

		$(".owl-carousel.charge-boxes").owlCarousel({
			items: 5,
			merge: true,
			loop: true,
			// margin: 30,
			center: true,
			autoPlay: true,
			responsive: {
				480: {
					items: 1
				},
				600: {
					items: 5
				}
			}
		});


		$(".owl-carousel.owl-theme").owlCarousel({
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


		$('.toggle').click(function(e) {
			e.preventDefault();
		
		  let $this = $(this);
		
		  if ($this.next().hasClass('show')) {
			  $this.next().removeClass('show');
			  $this.next().slideUp(350);
		  } else {
			  $this.parent().parent().find('li .inner').removeClass('show');
			  $this.parent().parent().find('li .inner').slideUp(350);
			  $this.next().toggleClass('show');
			  $this.next().slideToggle(350);
		  }

		  	if ($this.hasClass('toggleIcon')) {
			$this.removeClass('toggleIcon');
			}else{
				$this.parent().parent().find('li a').removeClass('toggleIcon');
			  $this.toggleClass('toggleIcon');
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



