// When the DOM is ready, run this function
$(document).ready(function() {
    "use strict"; // Start of use strict

    var $client_carousel = $(".client-carousel");
    var $client_carousel3 = $(".client-carousel3");
    var $case_carousel = $(".case-carousel");
    var $home_slider3 = $(".home-slider3");
    var $home_slider4 = $(".home-slider4");
    var $quote_slider = $(".quote-slider");
    var $home_testimonial = $(".home-testimonial");
    var $lawyer_carousel = $(".lawyer-carousel");
    var $latest_news_carousel = $(".latest-news-carousel");
    var $lawyer_carousel2 = $(".lawyer-carousel2");
    var $ri_slider = $(".ri-slider");
    var $ajax_form = $("form.ajax-form");

    // CAROUSEL

    if ($lawyer_carousel.length && $.fn.slick) {
        $lawyer_carousel.slick({
            infinite: true,
            autoplay: false,
            dots: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: $('.prev3'),
            nextArrow: $('.next3'),
        });
    }

    if ($lawyer_carousel2.length && $.fn.slick) {
        $lawyer_carousel2.slick({
            infinite: true,
            autoplay: false,
            dots: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: $('.prev5'),
            nextArrow: $('.next5'),
        });
    }

    if ($ri_slider.length && $.fn.slick) {
        $ri_slider.slick({
            infinite: true,
            autoplay: false,
            dots: false,
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: $('.prev6'),
            nextArrow: $('.next6'),
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                    }
                },
                {
                breakpoint:540,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                    }
                },
                {
                breakpoint:350,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
    }
    if ($client_carousel.length && $.fn.slick) {
        $client_carousel.slick({
            infinite: true,
            autoplay: false,
            dots: false,
            slidesToShow: 5,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: $('.prev'),
            nextArrow: $('.next'),
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                    }
                },
                {
                breakpoint:540,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                    }
                },
                {
                breakpoint:350,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
    }

    if ($client_carousel3.length && $.fn.slick) {
        $client_carousel3.slick({
            infinite: true,
            autoplay: false,
            dots: false,
            slidesToShow: 6,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: $('.prev4'),
            nextArrow: $('.next4'),
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                    }
                },
                {
                breakpoint:540,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                    }
                },
                {
                breakpoint:350,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
    }
    if ($case_carousel.length && $.fn.slick) {
        $case_carousel.slick({
            autoplay: false,
            dots: true,
            arrows: false,
            customPaging: function(slider, i) {
                var thumb = $(slider.$slides[i]).data('thumb');
                return '<a><img src="' + thumb + '"></a>';
            },

            responsive: [{
                breakpoint: 500,
                settings: {
                    infinite: false,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
    }


    $.stellar({
        horizontalOffset: 50,
        verticalOffset: 0,
        responsive: false
    });

    if($ajax_form.length){
      $ajax_form.on('submit', function(e){
        e.preventDefault();

        var $form             = $(this);
        var form              = {};
        var valid             = true;
        var subject           = $(this).data("subject");
        var email_from        = "";

        $form.find("input, textarea, select").each( function(){
            var element_name = $(this).attr("name");
            var element_val  = $(this).val();
            var is_required  = $(this).prop("required");
            var is_radio     = $(this).hasClass("radio-buttons");

            if(is_required && !element_val.trim()){
                valid = false;

                error_field_border($(this));
            } else if(is_radio){
                var radio_name = $(this).find("input[type='radio']").attr("name");
                var radio_val  = $(this).find("input[type='radio']:checked").val();

                if(radio_val && !radio_val.trim()) {
                    form[radio_name] = radio_val;
                }

            } else if(element_name == "email-address"){
                email_from = element_val;

            } else if(element_name && element_val){
                form[element_name] = element_val;

            }
        });

        if(valid) {
            $.ajax({
                type: "POST",
                url: $form.attr('action'),
                data: {
                    form: form
                },
                dataType: 'json',
                success: function (response) {

                    if ( response[0] ) {
                      $form.append("<p class='form-return-message'>" + response[1] + "</p>");

                      $form.find("input, textarea, select").each(function () {
                          if ($(this).prop("tagName") == "SELECT") {
                              $(this).prop('selectedIndex', 0);
                          } else if ($(this).hasClass("radio-buttons")) {
                              $(this).find("input[type='radio']").prop("checked", false);
                          } else {
                              $(this).val("");
                          }
                      });

                      setTimeout(function () {
                          $form.find('.form-return-message').remove();
                      }, 3000);
                    } else {
                      $form.append("<p class='form-return-message'>" + response[1] + "</p>");

                      setTimeout(function () {
                          $form.find('.form-return-message').remove();
                      }, 3000);
                    }
                }
            });
        } else {
            $form.append("<p class='form-return-message'>Couldn't send mail, try again later.</p>");

            setTimeout(function () {
                $form.find('.form-return-message').remove();
            }, 3000);
        }


      });
    }


$('.faq-accordion')
  .on('show.bs.collapse', function(e) {
    $(e.target).prev('.panel-heading').addClass('active');
  })
  .on('hide.bs.collapse', function(e) {
    $(e.target).prev('.panel-heading').removeClass('active');
  });

    $('[data-toggle="tooltip"]').tooltip();

    if ($home_slider3.length && $.fn.slick) {
        $home_slider3.slick({
            autoplay: true,
            dots: false,
            arrows: false,
            responsive: [{
                breakpoint: 500,
                settings: {
                    infinite: false,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
    }

    if ($home_slider4.length && $.fn.slick) {
        $home_slider4.slick({
            autoplay: false,
            dots: false,
            arrows: false,
            responsive: [{
                breakpoint: 500,
                settings: {
                    infinite: false,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
    }

    if ($quote_slider.length && $.fn.slick) {
        $quote_slider.slick({
            autoplay: false,
            dots: false,
            arrows: true,
            prevArrow: $('.prev2'),
            nextArrow: $('.next2'),
            responsive: [{
                breakpoint: 500,
                settings: {
                    infinite: false,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
    }

    if ($home_testimonial.length && $.fn.slick) {
        $home_testimonial.slick({
            autoplay: false,
            dots: false,
            arrows: true,
            prevArrow: $('.prev3'),
            nextArrow: $('.next3'),
            responsive: [{
                breakpoint: 500,
                settings: {
                    infinite: false,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
    }

    if ($latest_news_carousel.length && $.fn.slick) {
        $latest_news_carousel.slick({
            autoplay: false,
            dots: true,
            arrows: false,
            responsive: [{
                breakpoint: 500,
                settings: {
                    infinite: false,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
    }


    new WOW().init();

    $('.tabgroup > div').hide();
    $('.tabgroup > div:first-of-type').show();
    $('.tabs a').on('click', function(e){
      e.preventDefault();
        var $this = $(this),
            tabgroup = '#'+$this.parents('.tabs').data('tabgroup'),
            others = $this.closest('li').siblings().children('a'),
            target = $this.attr('href');
        others.removeClass('active');
        $this.addClass('active');
        $(tabgroup).children('div').hide();
        $(target).show();

    });

    $('#myCarousel').carousel({
        interval:   4000
    });
});