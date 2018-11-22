jQuery(function ($) {
	var owl = $("#testimonial_slide");
	owl.owlCarousel({
		dots:false,
		loop:true,
		margin:10,
		nav:true,
		navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
		items: 1,
	}); //end: owl
});
    jQuery(function ($) {
        var owl = $("#testimonial_review");
        owl.owlCarousel({
             dots:false,
            loop:true,
            margin:10,
            nav:true,
            navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
            items: 1,
        }); //end: owl
    }); 

     jQuery(function ($) {
        var owl = $("#cascade-slide");
        owl.owlCarousel({
             dots:false,
            loop:true,
            margin:10,
            nav:true,
            navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
            items: 1,
        }); //end: owl
    }); 
    jQuery(function ($) {
        var owl = $("#gallery");
        owl.owlCarousel({
            dots:false,
            loop:true,
            nav:true,
            navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
            items: 1,
        }); //end: owl
    }); 
    jQuery(function ($) {
        var owl = $("#slider-startup");
        owl.owlCarousel({
            dots:true,
            loop:true,
            margin:10,
            nav:false,
            navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
            items: 1,
        }); //end: owl
    });

jQuery(function ($) {
	var owl = $("#brands");
	owl.owlCarousel({
		dots:false,
		loop:true,
		nav:true,
		navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
		items: 4,
		responsiveClass:true,
		responsive:{
			0:{
				items:1
			},
			479:{
				items:2
			},
			600:{
				items:3
			},
			1000:{
				items:4
			}
		}
	}); //end: owl
});
jQuery(document).ready(function($){
	$("#thumbs_list_frame").owlCarousel({
		dots:true,
		loop:true,
		margin:10,
		nav:true,
		navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
		items: 1,
	});
})

 jQuery(function ($) {
    var owl = $("#portfolio-gallery");
    owl.owlCarousel({
        dots:true,
        loop:true,
        margin:10,
        nav:false,
        navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        items: 1,
    }); //end: owl
});
