jQuery(function(a){a(document).ready(function(){navigator.userAgent;a("ul.gfield_checkbox li input").change(function(){a(this).next("label").toggleClass("active")}),a("ul.gfield_radio li input").change(function(){a(this).closest(".gfield_radio").find(".active").removeClass("active"),a(this).next("label").toggleClass("active")}),a("label[for]").click(function(){var b=a(this).attr("for");a("#"+b+"[type=radio], #"+b+"[type=checkbox]").attr("selected",!a("#"+b).attr("selected"))||a("#"+b)[0].focus()}),a('[data-toggle="toggle-drawer"]').click(function(b){var c,d=a(".navbar"),e=d.find(".navbar-drawer");a(window).width();d.hasClass("navbar-drawer-open")?e.height(""):(c=e.find(".navbar-drawer-content").outerHeight(),e.height(c)),a(".navbar").toggleClass("navbar-drawer-open")})})});