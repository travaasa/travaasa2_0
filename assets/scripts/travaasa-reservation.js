$(document).ready(function(e) {
	enableMenuSystem();
	getQuotes(loc);
});
//
function getQuotes(loc) {
	if (loc == "hana" || loc == "austin") {
		// do nothing
	} else {
		loc = "all";
	}
	$.ajax({
	  url: "http://clvint.atdoner.com/Travaasa/SITE/assets/xml/testimonials.xml",
	  dataType: "xml",
	  beforeSend: function ( xhr ) {
		$(".fittext_quotes").addClass("loading");
	  }
	}).done(function ( data ) {
		$(".fittext_quotes").removeClass("loading");
		var oTestimonials;
		if (loc == "hana" || loc == "austin") {
			oTestimonials = $(data).find("testimonial[property='" + loc + "']");
		} else {
			oTestimonials = $(data).find("testimonial");
		}
		var oRandom = $(oTestimonials).get().sort(function(){ 
		  return Math.round(Math.random())-0.5
		}).slice(0,3);
		$.each(oRandom, function (indx,val) {
			$("#quote_"+(indx+1).toString()).html("<em>&quot;"+$(this).find("review").text()+"&quot;</em>");
		});
		$(".fittext_quotes").fitText(1.3, { minFontSize: '12px', maxFontSize: '19px' });
	});
}
//
function setLocation(loc, section) {
	if (!loc) { loc = "home"; }
	switch (loc.toLowerCase()) {
		case "hana":
			$("#current_location").html("HANA, MAUI");
			break;
		case "austin":
			$("#current_location").html("AUSTIN, TX");
			break;
		default:
			$("#current_location").html("LOCATION");
	}
	if (!section) { section = "main"; }
	$(".lnk_"+section).addClass("on");
}
//
function enableMenuSystem() {
	$(".menu_main").each(function() {
		$(this).hoverIntent({
			timeout: 100,
			over: function () {
				$(this).addClass("open");
				var current = $('.menu_sub:eq(0)', this);
				current.slideDown(100);
			},
			out: function () {
				$(this).removeClass("open");
				var current = $('.menu_sub:eq(0)', this);
				current.slideUp(200);
			}
		});
		$(this).click(function (e) {
			//e.preventDefault();
			var current = $('.menu_sub:eq(0)', this);
			if ($(this).hasClass("open")) {
				$(this).removeClass("open");
				current.slideUp(200);
			} else {
				$(this).addClass("open");
				current.slideDown(100);
			}
		});
	});
}