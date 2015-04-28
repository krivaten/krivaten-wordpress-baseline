jQuery(function($){
	$(document).ready(function(){
		var userAgent = navigator.userAgent;

		/**
		 * Form effects
		 */
		$("ul.gfield_checkbox li input").change(function() {
			$(this).next('label').toggleClass("active");
		});
		$("ul.gfield_radio li input").change(function() {
			$(this).closest(".gfield_radio").find(".active").removeClass("active");
			$(this).next('label').toggleClass("active");
		});


		/**
		 * Form effects on iPhone
		 */
		$('label[for]').click(function () {
			var el = $(this).attr('for');
			if ($('#' + el + '[type=radio], #' + el + '[type=checkbox]').attr('selected', !$('#' + el).attr('selected'))) {return;}
			else {$('#' + el)[0].focus();}
		});


		/**
		 * Trigger navbar toggle
		 */
		$('[data-toggle="toggle-drawer"]').click(function(evt) {;
			console.log(evt)
			var navbar = $('.navbar'),
				target = navbar.find('.navbar-drawer'),
				windowWidth = $(window).width(),
				innerTargetHeight;

			// If navbar has navbar-active class, remove height
			if (navbar.hasClass('navbar-drawer-open')) {
				target.height('');

			// Otherwise, add height
			} else {
				// Get height of inner target
				innerTargetHeight = target.find('.navbar-drawer-content').outerHeight();
				console.log('HERE', innerTargetHeight);
				// Set height of target
				target.height(innerTargetHeight);
			}

			// Toggle navbar-active class
			$('.navbar').toggleClass('navbar-drawer-open');
		});
	});
});
