$(document).ready(function(e) {
	$("img.lazy").lazyload();
	enableMenuSystem();
	$(".fittext").fitText(.8);
	animateReservationBar();
	// smooth scrolling
	$('a.scroll').click(function(){
		$('html, body').animate({
			scrollTop: $('#' + $(this).attr('href').substr(1)).offset().top - 90
		}, 500);
		return false;
	});
	getQuotes(loc);
	// lightbox
	try {
		$('a[data-target="flare"]').peFlareLightbox();
		$('a[data-target="flare"]').click(function(e) {
            if ($(this).attr("href").indexOf("youtube") > 0) {
				$(".peFlareLightboxRenderImage").css("display", "none");
			}
        });
	} catch(e) {
		//	
	}
});
function animateReservationBar() {
	$("#reservations-bar").css("bottom", "-100px");
	$("#reservations-bar").animate({
		bottom:0,
	}, 1500);
}
//
function getQuotes(loc) {
	if (loc == "hana" || loc == "austin") {
		// do nothing
	} else {
		loc = "all";
	}
	$.ajax({
	  url: "/Travaasa/SITE/assets/xml/testimonials.xml",
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
function createSubpageStorylines(bFeature, bSecondary) {
	$(window).resize(function() {
		if (bFeature) { resizeCarousels(".feature", 0); }
		if (bSecondary) { resizeCarousels(".storyline", 260); }
	});
	if (bFeature) { createFeatures(1600, .4); }
	if (bSecondary) { createStorylines(880, .5); }
}
//
function setLocation(loc, section) {
	if (!loc) { loc = "home"; }
	switch (loc.toLowerCase()) {
		case "hana":
			$("#current_location").html("HANA, MAUI");
			$("#hana_location_nav").css("display", "block");
			$("#austin_location_nav").css("display", "none");
			break;
		case "austin":
			$("#current_location").html("AUSTIN, TX");
			$("#hana_location_nav").css("display", "none");
			$("#austin_location_nav").css("display", "block");
			break;
		default:
			$("#current_location").html("LOCATION");
			$("#hana_location_nav").css("display", "none");
			$("#austin_location_nav").css("display", "none");
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
			if (Modernizr.touch){ e.preventDefault(); }
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
//
function createFeatures(itemWidth, itemHeightPercentage) {
	$.each($('.feature'), function(i,v) {
		$(this).parent().height($(this).parent().width() * itemHeightPercentage);
		$(this).parent().find(".carousel_prev").css("display", "none");
		$(this).parent().find(".carousel_next").css("display", "none");
		$(this).carouFredSel({
			responsive: true,
			auto : {
				timeoutDuration: 6000,
				onAfter: function( data ) {
					loadImage( data.items.old.prev() );
					loadImage( data.items.visible.next() );
				},
				pauseOnHover:true
			},
			prev : $(this).parent().find(".carousel_prev"),
			next : $(this).parent().find(".carousel_next"),
			swipe : { onTouch: true, onMouse: true },
			items : { visible: 1, width: itemWidth, height: (itemHeightPercentage*100)+"%" },
			scroll: {
				onAfter: function( data ) {
					loadImage( data.items.old.prev(), itemHeightPercentage );
					loadImage( data.items.visible.next(), itemHeightPercentage );
				}
			},
			onCreate: function( data ) {
				$(this).find(".slide").css("visibility", "visible");
				if ((data.items).length > 1) {
					$(this).parent().find(".carousel_prev").css("display", "block");
					$(this).parent().find(".carousel_next").css("display", "block");
				}
				$(this).parent().parent().height(data.height);
				$.each(data.items, function(i, v) {
					loadImage($(this), itemHeightPercentage);
				});
				loadImage( data.items.next(), itemHeightPercentage );
			}
		});
	});
}
//
function createStorylines(itemWidth, itemHeightPercentage) {
	$.each($('.storyline'), function(i,v) {
		$(this).carouFredSel({
			circular: false,
			infinite: false,
			auto: false,
			responsive: true,
			prev : { button: $(this).parent().find(".carousel_prev"), key: "left" },
			next : { button: $(this).parent().find(".carousel_next"), key: "right" },
			swipe : { onTouch : true, onMouse : true },
			scroll: {
				onAfter: function( data ) {
					$.each(data.items.visible.nextAll(), function(i, v) {
						if (i < 3) {
							loadImage($(this), itemHeightPercentage);
						}
					});
				}
			},
			onCreate: function(data) {
				$(this).find(".slide").css("visibility", "visible");
				$(this).parent().parent().height(data.height+180);
				if (data.items.length > 0) {
					$.each(data.items, function(i, v) {
						loadImage($(this), itemHeightPercentage);
					});
					$.each(data.items.nextAll(), function(i, v) {
						if (i < 3) {
							loadImage($(this), itemHeightPercentage);
						}
					});
				}
			},
			items: { visible: { min:1, max:2 }, width: itemWidth, height: (itemHeightPercentage*100)+"%" }
		});	  
	});
}
//	load the actual image
function loadImage( $img , itemHeightPercentage ) {
	if ( !$img.is( 'img' ) ) {
		$img = $img.find( 'img' );
	}
	if ( $img.is( 'img' ) ) {
		if ( $img.attr( 'src' ).indexOf( 'placeholder' ) != -1 ) {
			$img.attr( 'src', $img.data( 'original' ) ).load(function() { 
				if (!isNaN(itemHeightPercentage)) {
					$img.height($img.width()*itemHeightPercentage);	
					//alert($img.width() + " " + $img.height());
				}
			  	$(window).resize(); 
			}); 
		}
	}
}
//
function resizeCarousels(obj, vertPad) {
	$.each($(obj), function(indx, val) {
		$(val).find("img").height($(val).height());
		$(val).parent().parent().height($(val).height()+vertPad);
	});
}
//
function pauseSlideshows() {
	$('.feature').trigger("pause");
	$('.storyline').trigger("pause");
}
//
function resumeSlideshows() {
	$('.feature').trigger("play");
	$('.storyline').trigger("play");
}

function activateTabbedList() {
	$.each($(".tabbed_list").find("a"), function(i, v) {
		$(this).click(function(e) {
			e.preventDefault();
			showTabContent($(this));
		});
	});
}

function showTabContent(o) {
	$(".tabbed_list").find("li").removeClass("on");
	$(o).parent().addClass("on");
	$(".tab_data").removeClass("tab_data_on");
	$(".tab_data").css("display","none");
	$($(o).attr("href")).css("display","block");
	$($(o).attr("href")).addClass("tab_data_on");
}