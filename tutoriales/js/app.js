
(function () {
	
	"use strict";

	if (/https?:\/\/www\./.test(document.location.href)) {
		document.location = document.location.href.replace("www.", "");
	}

	jQuery.fn.isEmpty = function (){
		return this.val().replace(/^\s+|\s+$/, "") === "";
	};

	$(".alert-message .close").click(function (){
		$(this).closest(".alert-message").fadeOut();
		return false;
	});

	function validate () {

		var valid = true;

		var validation = [
			{query: "#name", regex: /./ },
			{query: "#link", regex: /^https?:\/\// },
			{query: "#twitter", regex: /^[0-9a-z_@]*$/i, optional: true }
		];

		$.each(validation, function (i, rule){
			var $ele = $(rule.query);
			$ele.removeClass("error-form");
			if ( ($ele.isEmpty() && !rule.optional) || !rule.regex.test($ele.val()) ) {
				$ele.addClass("error-form");
				valid = false;
			}
		});
		return valid;
	}


	$("#name, #link, #twitter").on('keyup keydown keypress', function (){
		validate();
	});


	$("#link-form").submit(function (){
		validate();
		$( this ).addClass( 'show-errors' );
		if ($( ".error-form" ).length > 0) {
			return false;
		}
		return true;
	});


	$("#link-form input").click(function (params){
		var that = this;
		setTimeout(function (){
			$(that).focus();
		}, 110);
	});

	$('a[title]').addClass("expand").qtip({style: {name: 'dark', tip: true}, position: { adjust: { screen: true } } });

	setTimeout(function (){
		$(".social").animate({opacity: 1});
	}, 200);

	$(".container").on("click", ".btn_video_es, .btn_video_en, .btn_doc", function (event) {
		var showClass = '.' + $(this).attr("class").match(/btn_([_a-z]+)/i)[1];
		var $section = $(this).closest('.span4');
		var $btns = $section.find(showClass).parent();
		var action = $btns.is(":visible") ? "hide" : "show";
		$section.find("li").hide();
		$btns[action]();
		event.preventDefault();
		return false;
	});

	$(".btn_add").click(function (event){
		$("#lang").val($(this).closest("[data-lang]").attr("data-lang"));
	});

	$(window).on('click scroll', holdLoop);

	$(".video_es").attr('rel','prettyPhoto[videos]').prettyPhoto({autoplay: true, default_width: 800, default_height: 540, social_tools: false});
    

	// Nubes de dialogo del comic

	var waitForHold = false;
	var waitTo = -1;

	function holdLoop() {
		waitForHold = true;
		clearTimeout(waitTo);
		waitTo = setTimeout(function () {
			waitForHold = false;
		}, 7000);
	}

	setTimeout(function () {
		var prev = -1;
		var random;
		var $img = $('<img />');
		(function loop (loading) {
			if (waitForHold) {
				setTimeout(loop, 5000);
				return;
			}
			if (!loading) {
				do {
					random = Math.floor(Math.random() * 10);
				} while (random === prev);
				prev = random;
				$img.attr('src', 'img/txt' + random + '.png');
			}
			if ($img.prop("complete")) {
				$img.css({opacity: 0}).show().appendTo(".lol").fadeTo('slow', 1);
				setTimeout(function () {
					$img.fadeTo(2000, 0, function () {
						$(this).hide();
						setTimeout(loop, 5000);
					});
				}, 13000);
			} else {
				$img.one("load", function () {loop(true); });
			}
		})();
	}, 12000);

})();

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-37761575-1']);
_gaq.push(['_trackPageview']);

(function () {
	"use strict";
	var ga = document.createElement('script');
	ga.type = 'text/javascript';
	ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(ga, s);
})();

window.readCookie = function (name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i = 0; i < ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) === ' ') c = c.substring(1, c.length);
		if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
	}
	return null;
}