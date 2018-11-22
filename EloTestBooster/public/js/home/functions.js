(function ($) {
    "use strict";
    $(document).ready(function ($) {
        $(".hero").on('click', function() {
            var obj = $(this),
                target = $("#selected-champions"),
                parent = $(this).parent('div');

                if(parent.attr('id') == 'selected-champions') {
                    obj.detach().prependTo('#champions');
                } else {
                    obj.detach().appendTo(target);
                }
                
        });

        // $(".rank-select").on("change", function() {
        //     var img_element = $(this).prev('img'),
        //         image_name = $(this).val(),
        //         // alert(image_name);
        //         image_url = 'images/divisions/'+image_name+'_1.png';
        //     img_element.attr('src', image_url);
        // });

        $("#SoloNetWin input.range").rangeslider({
            polyfill: false,
            onSlideEnd: function() 
            {
                
            },
            onInit: function() {
                $("output").html(this.$element.val());
            },
            onSlide: function(position, value) {
                $("output").html(value);
            }
        });
        
        $("#SoloPlacementBoosting input.range").rangeslider({
            polyfill: false,
            onSlideEnd: function() 
            {
          
            },
            onInit: function() {
                $("output").html(this.$element.val());
            },
            onSlide: function(position, value) {
                $("output").html(value);
            }
        });

        $("#SoloNormalMatches input.range").rangeslider({
            polyfill: false,
            onSlideEnd: function() 
            {
               
            },
            onInit: function() {
                $("output").html(this.$element.val());
            },
            onSlide: function(position, value) {
                $("output").html(value);
            }
        });

        /* :not([name="desired-rank"],[name="desired-division"]) */ 

    	// $('#division select').on('change', function() {
     //        var data = $('#division select').serialize();
     //        $.ajax({
     //            url:SITE_URL + '/changeDivision',
     //            data:data,
     //            method:'POST',
     //            type:'JSON',
     //            success:function(data) {
     //                $("#division").find('.price-center span').html(data.price);
     //                $("#image_1").attr('src',data.image_1);
     //                $("#image_2").attr('src',data.image_2);
     //            },
     //            error:function(data) {
     //                $("#division").find('.price-center span').html('0');
     //            }
     //        });
     //    });

		/* Fancybox */
        $(".fancybox").on("click", function () {
            $.fancybox({
                href: this.href,
                type: $(this).data("type")
            });
            return false;
        }); // on
        $(".various").fancybox({
            maxWidth    : 1000,
            maxHeight   : 600,
            fitToView   : true,
            width       : '70%',
            height      : '70%',
            autoSize    : true,
            closeClick  : false,
            openEffect  : 'none',
            closeEffect : 'none'
        });
		/* Filter iostop */
		var container = $('.isotope').isotope({
            itemSelector: '.item',
            layoutMode: 'fitRows',
            getSortData: {
                name: '.item'
            }
        });
        $('.btn-filter').on( 'click', '.button', function() {
            var filterValue = $(this).attr('data-filter');
            container.isotope({ filter: filterValue });
        });
        $('.btn-filter').each( function( i, buttonGroup ) {
            var buttonGroup = $(buttonGroup);
            buttonGroup.on( 'click', '.button', function() {
                buttonGroup.find('.active').removeClass('active');
                $(this).addClass('active');
            });
        });
		var $grid = $('.grid_blog').isotope({
			layoutMode: 'fitRows',
			itemSelector: '.grid-item'
		});
		
		// layout Isotope after each image loads
		$grid.imagesLoaded().progress( function() {
		  $grid.isotope('layout');
		});
		
		var $grid = $('.isotope').isotope({
          layoutMode: 'masonry',
          itemSelector: '.item',
            getSortData: {
                name: '.item'
            },
            transitionDuration:"0.7s",
            masonry : {
                columnWidth:".item"
            }
        });
        // filter items on button click
        $('.button-group').on( 'click', 'button', function() {
          var filterValue = $(this).attr('data-filter');
          $grid.isotope({ filter: filterValue });
          $('.button-group button').removeClass('is-checked');
          $(this).addClass('is-checked');
        });
		
		/* Scrollbar */
		jQuery('.scrollbar-comment').scrollbar();
		jQuery('.scrollbar-inner').scrollbar();
		var wd = $(window).width();    
		var heightScroll = $('.left-video-scroll').height();
		var heightSlide = $('.latest-review .testimonial-content').height();
		$('.desc-game .scroll-wrapper').css('max-height', heightScroll - 40 + 'px'); 
		$('.latest-review .owl-controls .owl-nav > div').css('height', heightSlide  + 'px'); 
		$('<style type="text/css">.border-top:before{ border-right-width: '+wd / 2 +'px; }</style>').appendTo('body');  
		$('<style type="text/css">.border-top:after{ border-left-width: '+wd / 2 +'px; }</style>').appendTo('body');    
		/* Character thumbnail*/
		$('.character-thumbnail .owl-item:first-child').addClass("checked");
		$(".character-thumbnail .owl-item").click(function () {
			$('.character-thumbnail .owl-item').removeClass("checked");
			$(this).addClass("checked");
		});
		
		Character.init();
        Blog.init();
        Event.init();
        Portfolio.init();
		
		/* Hamburger toogle icon */
		$(".header-top .menu-toggle").on( "click", function () {
            $(this).parent().toggleClass("scroll-open");
            $('#main').toggleClass("menu-open");
			return false;
        });
		/* Tooltip */
		$('[data-toggle="tooltip"]').tooltip();
		
		//Accodion
            jQuery('.panel-title').click(function(e) {
                e.preventDefault();
                jQuery(".panel-title").removeClass('active');
                jQuery(this).addClass('active');
            });
            function toggleChevron(e) {
                jQuery(e.target)
                .prev('.panel-heading')
                .find(".indicator")
                .toggleClass('indicator-mimus');
            }
            jQuery('#accordion').on('hidden.bs.collapse', toggleChevron);


		//One page
		$('.mega-menu > li > a[href*=#]:not([href=#])').click(function(){
			$('.mega-menu > li > a').removeClass('active');
			$(this).addClass('active');
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
				|| location.hostname == this.hostname) 
			{
			  
			  var target = $(this.hash),
			  headerHeight = $(".site-header").height() + 5; // Get fixed header height
					
			  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
					  
			  if (target.length) 
			  {
				$('html,body').animate({
				  scrollTop: target.offset().top - 60
				}, 500);
				return false;
			  }
			}
		});
		
		$('.main-slider a.btn[href*=#]:not([href=#])').click(function(){
			$('.main-slider a.btn').removeClass('active');
			$(this).addClass('active');
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
				|| location.hostname == this.hostname) 
			{
			  
			  var target = $(this.hash),
			  headerHeight = $(".site-header").height() + 5; // Get fixed header height
					
			  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
					  
			  if (target.length) 
			  {
				$('html,body').animate({
				  scrollTop: target.offset().top - 60
				}, 500);
				return false;
			  }
			}
		});
		
		/* Slider iphone */
		$('.button-app').on( "click",function(){
			$('.button-app').addClass('active');
			$('.app-screen-1').addClass('open');
			$('.button-app2').removeClass('active');
			$('.app-screen-2').removeClass('open');
			$('.button-app3').removeClass('active');
			$('.app-screen-3').removeClass('open');
			return false;
		}); 
		$('.button-app2').on( "click",function(){
			$('.button-app2').addClass('active');
			$('.app-screen-2').addClass('open');
			$('.button-app').removeClass('active');
			$('.app-screen-1').removeClass('open');
			$('.button-app3').removeClass('active');
			$('.app-screen-3').removeClass('open');
			return false;
		});
		$('.button-app3').on( "click",function(){
			$('.button-app3').addClass('active');
			$('.app-screen-3').addClass('open');
			$('.button-app').removeClass('active');
			$('.app-screen-1').removeClass('open');
			$('.button-app2').removeClass('active');
			$('.app-screen-2').removeClass('open');
			return false;
		});
		$('.next_layout_1').on( "click",function(){
			$('.button-app2').addClass('active');
			$('.app-screen-2').addClass('open');
			$('.button-app').removeClass('active');
			$('.app-screen-1').removeClass('open');
			$('.button-app3').removeClass('active');
			$('.app-screen-3').removeClass('open');
			return false;
		});
		$('.next_layout_2').on( "click",function(){
			$('.button-app3').addClass('active');
			$('.app-screen-3').addClass('open');
			$('.button-app').removeClass('active');
			$('.app-screen-1').removeClass('open');
			$('.button-app2').removeClass('active');
			$('.app-screen-2').removeClass('open');
			return false;
		});
		$('.next_layout_3').on( "click", function(){
			$('.button-app').addClass('active');
			$('.app-screen-1').addClass('open');
			$('.button-app2').removeClass('active');
			$('.app-screen-2').removeClass('open');
			$('.button-app3').removeClass('active');
			$('.app-screen-3').removeClass('open');
			return false;
		});
		/* Cascade Slider */
		$('#cascade-slider').cascadeSlider({
		  itemClass: 'cascade-slider_item',
		  arrowClass: 'cascade-slider_arrow'
		});
		// Cart
		$(".showlogin").on( 'click', function(){
            $(".woocommerce .login").slideToggle();
			return false;
        });
		$(".showcoupon").on( 'click', function(){
            $(".checkout_coupon").slideToggle();
			return false;
        });
		$(".shipping-calculator-button").on( 'click', function(){
            $(".shipping-calculator-form").slideToggle();
			return false;
        });
		/* ==============================================
		Contact Form
		=============================================== */
		var Contact = {
			initialized: false,
			initialize: function() {
				if (this.initialized) return;
				this.initialized = true;
				this.build();
				this.events();
			},
			build: function() {
				this.validations();
			},
			events: function() {
			},
			validations: function() {
				$("#contactform").validate({
					submitHandler: function(form) {
						$.ajax({
							type: "POST",
							url: "php/contact-form.php",
							data: {
								"name": $("#contactform #name").val(),
								"email": $("#contactform #email").val(),
								"subject": $("#contactform #subject").val(),
								"message": $("#contactform #message").val()
							},
							dataType: "json",
							success: function (data) {
								if (data.response == "success") {
									$("#contactSuccess").removeClass("hidden");
									$("#contactError").addClass("hidden");
									$("#contactform #name, #contactform #email, #contactform #subject, #contactform #message")
										.val("")
										.blur()
										.closest(".control-group")
										.removeClass("success")
										.removeClass("error");

									if(($("#contactSuccess").position().top - 80) < $(window).scrollTop()){
										$("html, body").animate({
											 scrollTop: $("#contactSuccess").offset().top - 80
										}, 300);								
									}
								} else {
									$("#contactError").removeClass("hidden");
									$("#contactSuccess").addClass("hidden");

									if(($("#contactError").position().top - 80) < $(window).scrollTop()){
										$("html, body").animate({
											 scrollTop: $("#contactError").offset().top - 80
										}, 300);								
									}
								}
							}
						});
					},
					rules: {
						name: {
							required: true
						},
						email: {
							required: true,
							email: true
						},
						subject: {
							required: true
						},
						message: {
							required: true
						}
					},
					highlight: function (element) {
						$(element)
							.closest(".control-group")
							.removeClass("success")
							.addClass("error");
					},
					success: function (element) {
						$(element)
							.closest(".control-group")
							.removeClass("error")
							.addClass("success");
					}
				});
			}
		};
		Contact.initialize();
		
	}); 
	
    $(window).load(function () {
		//Scroll to top
        var wd = $(window).width();
        if ($('.scroll-to-top').length) {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 1) {
                    $('.scroll-to-top').css({bottom: "25px"});
					$('.site-header').addClass("is-sticky");
					//if(wd > 991){
						//$('.site-header').addClass("is-sticky");
					//}
                } else {
                    $('.scroll-to-top').css({bottom: "-100px"});
                    $('.site-header').removeClass("is-sticky");
                }
            });
            $('.scroll-to-top').click(function () {
                $('html, body').animate({scrollTop: '0px'}, 800);
                return false;
            });
        }
    });
    $(window).resize(function () {
		/* Resize height video */
		var wd = $(window).width();
		var heightScroll = $('.left-video-scroll').height();
		$('.desc-game .scroll-wrapper').css('max-height', heightScroll - 40  + 'px'); 
		var heightSlide = $('.latest-review .testimonial-content').height();
		$('.scroll-wrapper').css('max-height', heightScroll  + 'px'); 
		$('.latest-review .owl-controls .owl-nav > div').css('height', heightSlide  + 'px'); 
		$('<style type="text/css">.border-top:before{ border-right-width: '+wd / 2 +'px; }</style>').appendTo('body');
		$('<style type="text/css">.border-top:after{ border-left-width: '+wd / 2 +'px; }</style>').appendTo('body');
    });
	
    $(".blog-main .blog-img a > img.img-responsive").load(function(){
        var w=this.width
        $(this).removeAttr('width')
        var actualWidth=$(this).width()
        $('.blog-main .blog-img').css('width', actualWidth + 'px');        
    });
   
    // fix placeholder IE 9
    $('[placeholder]').focus(function () {
        var input = $(this);
        if (input.val() === input.attr('placeholder')) {
            input.val('');
            input.removeClass('placeholder');
        }
    }).blur(function () {
        var input = $(this);
        if (input.val() === '' || input.val() === input.attr('placeholder')) {
            input.addClass('placeholder');
            input.val(input.attr('placeholder'));
        }
    }).blur().parents('form').submit(function () {
        $(this).find('[placeholder]').each(function () {
            var input = $(this);
            if (input.val() === input.attr('placeholder')) {
                input.val('');
            }
        });
    });
    //Count 
    setTimeout(function(){
        jQuery('#counter').text('0');
        jQuery('#counter-1').text('0');
        jQuery('#counter-2').text('0');
        jQuery('#counter-3').text('0');
        setInterval(function(){
            //var curval=parseInt(jQuery('#counter').text().replace(' ',''));
            var curval=parseInt(jQuery('#counter').text());
            var curval1=parseInt(jQuery('#counter-1').text());
            var curval2=parseInt(jQuery('#counter-2').text());
            var curval3=parseInt(jQuery('#counter-3').text());
            if(curval<=1990){
                //jQuery('#counter').text(sdf_FTS((curval+20),0,' '));
                jQuery('#counter').text(curval+1);
            }
            if(curval1<=4999){
                jQuery('#counter-1').text(curval1+1);
            }
            if(curval2<=9999){
                jQuery('#counter-2').text(curval2+1);
            }
            if(curval3<=2389){
                jQuery('#counter-3').text(curval3+1);
            }
        }, 2);
        
    }, 1000);
	
    /* Sub Menu */
    jQuery(function(){
        jQuery(".dropdown-menu > li > .caret").on("click",function(e){
              jQuery(this).toggleClass('active');
              var current=jQuery(this).next();
              var grandparent=jQuery(this).parent().parent();
              if(jQuery(this).hasClass('caret'))
              grandparent.find(".menu-navigation li ul li ul:visible").not(current).hide();
              current.toggle();
              e.stopPropagation();
			  return false;
        });
    });
    
    /* Menu sidebar */
    $("<p></p>").insertAfter(".widget_nav_menu .menu > li > a");
    var $p = $(".widget_nav_menu .menu > li p");
    $(".widget_nav_menu .menu > li p:first").append('<span><i class="fa fa-angle-double-right"></i></span>');
    $(".widget_nav_menu .menu > li p:not(:first)").append('<span><i class="fa fa-angle-double-right"></i></span>');
    $(".widget_nav_menu .menu > li >ul:not(:first)").hide();
    $(".widget_nav_menu .menu > li").each(function () {
        if ($(this).find("ul > li").length == 0) {
            $(this).find('p').remove();
        }
    });
    
    $p.click(function () {
        $('.widget_nav_menu .menu > li').removeClass('active');
        $(this).parents("li").addClass('active');
        var $accordion = $(this).nextAll('ul');
        if ($accordion.is(':hidden') === true) {

            $(".widget_nav_menu .menu > li > ul").slideUp();
            $accordion.slideDown();

            $p.find('span').remove();
            $p.append('<span><i class="fa fa-angle-double-right"></i></span>');
            $(this).find('span').remove();
            $(this).append('<span><i class="fa fa-angle-double-down"></i></span>');
        }
        else {
            $accordion.slideUp();
            $(this).find('span').remove();
            $(this).append('<span><i class="fa fa-angle-double-right"></i></span>');
        }
    });
    
	// Tab products
    $('ul.wc-tabs li.description_tab a').on( "click", function (e) {
        var wd = $(window).width();
        e.preventDefault();
        $(".tab-content").addClass('show_desc');
        $(".tab-content").removeClass('show_review');
        $(".tab-content").removeClass('show_custom_1');
        $(".tab-content").removeClass('show_custom_2');
		return false;
    });
    $('ul.wc-tabs li.reviews_tab a').on( "click", function (e) {
        var wd = $(window).width();
        e.preventDefault();
        $(".tab-content").addClass('show_review');
        $(".tab-content").removeClass('show_desc');
        $(".tab-content").removeClass('show_custom_1');
        $(".tab-content").removeClass('show_custom_2');
		return false;
    });
    $('ul.wc-tabs li.tab-custom1_tab a').on( "click", function (e) {
        var wd = $(window).width();
        e.preventDefault();
        $(".tab-content").addClass('show_custom_1');
        $(".tab-content").removeClass('show_desc');
        $(".tab-content").removeClass('show_review');
        $(".tab-content").removeClass('show_custom_2');
		return false;
    });
    $('ul.wc-tabs li.tab-custom2_tab a').on( "click", function (e) {
        var wd = $(window).width();
        e.preventDefault();
        $(".tab-content").addClass('show_custom_2');
        $(".tab-content").removeClass('show_desc');
        $(".tab-content").removeClass('show_review');
        $(".tab-content").removeClass('show_custom_1');
		return false;
    });
	
    $('#commentform .form-submit .submit').addClass("btn btn-primary");
    $('.header-v3').addClass("bg-gradient");
	
    //quantily
    $('div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)').addClass('buttons_added').append('<div class="qty-number"><span class="increase-qty plus" onclick="">+</span></div>').prepend('<div class="qty-number"><span class="increase-qty minus" onclick="">-</span></div>');
    // Target quantity inputs on product pages
    $('input.qty:not(.product-quantity input.qty)').each(function () {
        var min = parseFloat($(this).attr('min'));

        if (min && min > 0 && parseFloat($(this).val()) < min) {
            $(this).val(min);
        }
    });

    $(document).off('click', '.plus, .minus').on('click', '.plus, .minus', function () {
        // Get values
        var $qty = $(this).closest('.quantity').find('.qty'),
                currentVal = parseFloat($qty.val()),
                max = parseFloat($qty.attr('max')),
                min = parseFloat($qty.attr('min')),
                step = $qty.attr('step');

        // Format values
        if (!currentVal || currentVal === '' || currentVal === 'NaN')
            currentVal = 0;
        if (max === '' || max === 'NaN')
            max = '';
        if (min === '' || min === 'NaN')
            min = 0;
        if (step === 'any' || step === '' || step === undefined || parseFloat(step) === 'NaN')
            step = 1;
        // Change the value
        if ($(this).is('.plus')) {
            if (max && (max === currentVal || currentVal > max)) {
                $qty.val(max);
            } else {
                $qty.val(currentVal + parseFloat(step));
            }
        } else {
            if (min && (min === currentVal || currentVal < min)) {
                $qty.val(min);
            } else if (currentVal > 0) {
                $qty.val(currentVal - parseFloat(step));
            }

        }
        // Trigger change event
        $qty.trigger('change');
    });
	
    /*Animation*/
    window.scrollReveal = new scrollReveal({
        mobile: false
    });
	
    //Character
    var Character = {
        _initialized: false,
        init: function () {
            if (this._initialized)
                return false;
            this._initialized = true;
            this.characterGallery();
        },
        characterGallery: function () {
            if (!$('.character-gallery'))
                return;
            $('.character-gallery').each(function () {
                var viewport = $(this).find('.character-viewport').first();
                var thumbnails = $(this).find('.character-thumbnail').first();
                var thumbs_display = thumbnails.attr('data-thumbs') ? thumbnails.attr('data-thumbs') : 6;
                var flag = false;
                if (!viewport.length || !thumbnails.length)
                    return;

                viewport.owlCarousel({
                    items: 1,
                    nav: false,
                    dotClass: 'owl-page',
                    dotsClass: 'owl-pagination',
                    animateOut: 'fadeOut',
                    mouseDrag: false,
                    autoHeight: true
                }).on('changed.owl.carousel', function (e) {
                    if (!flag) {
                        flag = true;
                        thumbnails.trigger('to.owl.carousel', [e.item.index, 200, true]);
                        flag = false;
                    }
                });

                thumbnails.owlCarousel({
                    nav: true,
                    dots: false,
                    mouseDrag: false,
                    items: thumbs_display,
                    navContainerClass: 'owl-buttons',
                    center: false,
                    navRewind: false,
                    responsive: {
                        0: {items: 2},
                        479: {items: 3},
                        768: {items: 4},
                        979: {items: 4},
                        1199: {items: thumbs_display}
                    },
                    afterInit: function (el) {
                        el.find('.owl-item').eq(0).addClass('active');
                    }
                });

                thumbnails.on('click', '.owl-item', function (e) {
                    viewport.trigger('to.owl.carousel', [$(this).index(), 500]);
                });

            });
        },
    };
    //blog
    var blog_paged = $('#blog-loadmore').data('paged');
    var blog_page = blog_paged ? blog_paged + 1 : 2;
    var Blog = {
        _initialized: false,
        init: function () {
            if (this._initialized)
                return false;
            this._initialized = true;
            this.blogLoadmore();
        },
        blogLoadmore: function () {
            $('#blog-loadmore').click(function (event) {
                event.preventDefault();
                var el = $(this);
                var blog_wrap = $('.blog-entries-wrap.has-loadmore');
                var url = $(this).attr('href');
                $('.blog-loadmore').append('<i class="fa fa-spinner fa-spin"></i>');
                el.addClass('hide-loading');
                $.ajax({
                    type: 'GET',
                    url: url,
                    data: {paged: blog_page},
                    success: function (response) {
                        $('.blog-loadmore').find('i').remove();
                        el.removeClass('hide-loading');
                        var result = $(response).find('.blog-entries-wrap.has-loadmore').html();
                        blog_wrap.append(result);
                        if ($().isotope) {
                            $(result).imagesLoaded(function () {
                                if (blog_wrap.data('isotope')) {
                                    blog_wrap.isotope('insert', $(result));
                                }
                            });
                        }
                        blog_page++;
                        if (blog_page > parseInt(el.data('totalpage'))) {
                            el.parent().remove();
                        }
                    }
                });
            });
        }
    };
    //event
    var event_paged = $('#event-loadmore').data('paged');
    var event_page = event_paged ? event_paged + 1 : 2;
    var Event = {
        _initialized: false,
        init: function () {
            if (this._initialized)
                return false;
            this._initialized = true;
            this.eventLoadmore();
        },
        eventLoadmore: function () {
            $('#event-loadmore').click(function (event) {
                event.preventDefault();
                var el = $(this);
                var event_wrap = $('.event-entries-wrap.has-loadmore');
                var url = $(this).attr('href');
                $('.event-loadmore').append('<i class="fa fa-spinner fa-spin"></i>');
                el.addClass('hide-loading');
                $.ajax({
                    type: 'GET',
                    url: url,
                    data: {paged: event_page},
                    success: function (response) {
                        $('.event-loadmore').find('i').remove();
                        el.removeClass('hide-loading');
                        var result = $(response).find('.event-entries-wrap.has-loadmore').html();
                        event_wrap.append(result);
                        event_page++;
                        if (event_page > parseInt(el.data('totalpage'))) {
                            el.parent().remove();
                        }
                    }
                });
            });
        }
    };
	
    //portfolio
    var portfolio_paged = $('#portfolio-loadmore').data('paged');
    var portfolio_page = portfolio_paged ? portfolio_paged + 1 : 2;
    var Portfolio = {
        _initialized: false,
        init: function () {
            if (this._initialized)
                return false;
            this._initialized = true;
            this.showPortfolioLightbox();
            this.portfolioLoadmore();
        },
        showPortfolioLightbox: function () {
            $(".portfolio-lightbox").fancybox({
                openEffect: 'none',
                closeEffect: 'none'
            });
        },
        portfolioLoadmore: function () {
            $('#portfolio-loadmore').click(function (event) {
                event.preventDefault();
                var el = $(this);
                var portfolio_wrap = $('.portfolio-entry-wrap');
                var url = $(this).attr('href');
                $('.portfolio-loadmore').append('<i class="fa fa-spinner fa-spin"></i>');
                el.addClass('hide-loading');
                $.ajax({
                    type: 'GET',
                    url: url,
                    data: {paged: portfolio_page},
                    success: function (response) {
                        $('.portfolio-loadmore').find('i').remove();
                        el.removeClass('hide-loading');
                        var result = $(response).find('.portfolio-entry-wrap').html();
                        if ($().isotope) {
                            $(result).imagesLoaded(function () {
                                if (portfolio_wrap.data('isotope')) {
                                    portfolio_wrap.isotope('insert', $(result));
                                }
                            });
                        }
                        portfolio_wrap.append(result);
                        portfolio_page++;
                        if (portfolio_page > parseInt(el.data('totalpage'))) {
                            el.parent().remove();
                        }
                    }
                });
            });
        }
    };
})(jQuery);

// Height - Width screen
var h = jQuery(window).height();
var w = jQuery(window).width();
if(w > 767){
    jQuery(window).load(function(){
        jQuery('.page-404-container').css('height', h + 'px'); 
        jQuery('.page-404').css('height', h + 'px');
    });
    jQuery(window).resize(function () {
        var w = jQuery(window).width(); 
        jQuery('.page-404-container').css('height', h + 'px');  
        jQuery('.page-404').css('height', h + 'px');
    });
}
function toggleFilter(obj){
    if(jQuery(obj).parent().find('.content-filter').hasClass('active')){
        jQuery(obj).parent().find('.content-filter').removeClass('active');
    }else{
        jQuery('.content-filter').removeClass('active');
        jQuery(obj).parent().find('.content-filter').addClass('active');
    }
}
function is_Chrome(){
 return /^((?!chrome).)*chrome/i.test(navigator.userAgent);
}
if(navigator.userAgent.indexOf('Chrome') > -1) {
    jQuery('html').addClass('chrome');
}
//Check if Safari
function isSafari() {
  return /^((?!chrome).)*safari/i.test(navigator.userAgent);
}
//Check if MAC
if(navigator.userAgent.indexOf('Mac')>1){
   jQuery('html').addClass('macbook');
}
// Add class IE
var ms_ie = false;
var ua = window.navigator.userAgent;
var old_ie = ua.indexOf('MSIE ');
var new_ie = ua.indexOf('Trident/');
if ((old_ie > -1) || (new_ie > -1)) {
	ms_ie = true;
}
if ( ms_ie ) {
   jQuery('html').addClass('ie');
}
