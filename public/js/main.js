
jQuery(document).ready(function($) {
	$('[data-toggle="tooltip"]').tooltip();
    AOS.init({});


    $('.burger-site').click(function(e) {
        e.preventDefault();
        $('.dark-bg').addClass('active');
        $('.st-nav').addClass('active');
        $('html').addClass('overflowHidden');       
    });
    $('.st-nav--close').click(function(e) {
        e.preventDefault();
        $('.st-nav').removeClass('active');
        $('.dark-bg').removeClass('active');
        $('html').removeClass('overflowHidden');     
    });
    $('.dark-bg').click(function() {
        $('.st-nav').removeClass('active');
        $(this).removeClass('active');
        $('html').removeClass('overflowHidden');   
    });
	
    // img lazy load jquery plugin used here
    $('.lazy').lazy({
        scrollDirection: 'vertical',
        effect: 'fadeIn',
        visibleOnly: true,
    });

    // run counter header stat num
    $('.cnt-item__num, .count-bl-item__num, .progress-pros span').counterUp({
        delay: 10,
        time: 1000,
        offset: 70,
        beginAt: 1,
    });

    var waayspointsprogress = $('.our-stockks').waypoint(function() {
        // var thisDiv = this.element;
        // var thisAttributes = thisDiv.getAttribute('aria-valuenow');
        // console.log(thisDiv);
        // thisDiv.style.width =  thisAttributes + '%';
        // offset: '-600px';
        var delay = 700;
        $(".progress-bar").each(function(i) {
          $(this).delay(delay * i).animate({
            width: $(this).attr('aria-valuenow') + '%'
          }, delay);
        });
    })
    // waayspointsprogress.waypoint.disable;


    // tes.animate({param1: value1, param2: value2}, speed)
    $('.part-tab').owlCarousel({
        items: 4,
        margin: 10,
        mouseDrag: false,
        touchDrag: false,
        dots: false,
        nav: false,
        loop: false,
        responsive: {
            0: {
                items: 2,
                margin: 20,
            },
            767: {
                items: 4,
                margin: 10,
            },
        }
    });

    $('.done-project-sl').owlCarousel({
        items: 3,
        margin: 20,
        dots: true,
        nav: false,
        loop: true,
        responsive: {
            0: {
                items: 2,
                margin: 20,
            },
            767: {
                items: 3,
                margin: 20,
            },
        }
    });

    $('.partner-sl').owlCarousel({
        items: 5,
        margin: 40,
        dots: true,
        nav: false,
        loop: true,
        responsive: {
            0: {
                items: 2,
                margin: 10,
            },
            567: {
                items: 3,
                margin: 20,
            },
            767: {
                items: 5,
                margin: 40,
            },
        }
    });

    $('.reviews-sl').owlCarousel({
        items: 1,
        dots: true,
        nav: false,
        loop: true,
        dotsSpeed: 1000,
        
    });


    // Go to the next item
    $('.btn-next').click(function(e) {
        e.preventDefault();
        $('.part-tab').trigger('next.owl.carousel');
    })
    // Go to the previous item
    $('.btn-prev').click(function(e) {
         e.preventDefault();
        $('.part-tab').trigger('prev.owl.carousel', [300]);
    })

    //filter and Add active class to the current button (highlight it)
    var filterBtns = $(".part-tab__link");
    filterBtns.click(function(e) {
        /* Act on the event */
        e.preventDefault();
        $(this).addClass('active');
        $(this).parent('.owl-item').siblings('.owl-item').find('a').removeClass('active');

        if (this.id == 'filter-all') {
            $('.tb-wrap > div.tb-filter').fadeIn(450);
        } else {
            var $el = $('.' + this.id).fadeIn(450);
            $('.tb-wrap > div.tb-filter').not($el).hide();
        }
    });
    filterBtns.eq(0).click();



    $('.ourteam-sl').owlCarousel({
        items: 3,
        margin: 40,
        dots: true,
        center: true,
        nav: false,
        loop: true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive: {
            0 : {
                items: 1,
            },
            559 : {
                items: 2,
            },
            776 : {
                items: 3,
                margin: 25,
            },
            1100 : {
                items: 3,
                margin: 25,
            },
        }
    });
     $('.other-work-sl').owlCarousel({
        items: 4,
        margin: 40,
        dots: true,
        center: false,
        nav: false,
        loop: true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive: {
            0 : {
                items: 1,
            },
            559 : {
                items: 2,
            },
            776 : {
                items: 3,
                margin: 25,
            },
            1100 : {
                items: 4,
                margin: 25,
            },
        }
    });


    // .btn-slide-up
     var btn = $('.btn-slide-up');  
  $(window).scroll(function() {     
    if ($(window).scrollTop() > 300) {
       btn.fadeIn(200);
     } else {
       btn.fadeOut(200);
     }
   });
   btn.on('click', function(e) {
     e.preventDefault();
     $('body,html').animate({scrollTop:0},1000);
   });
     // =====================  scoll top ===============================
    $(".btn-slide a").on("click", function(e) {
      e.preventDefault();
      $("html, body").animate({
        scrollTop: $($(this).attr("href")).offset().top
      }, 1000);
    });

    $('.send_message').click(function(){
        var name=$(this).siblings('div').find('.form_name').val();
        var phone=$(this).siblings('div').find('.form_phone').val();
        if (name!='' && phone!=''){
            $('#modalSucces').addClass('show');
        }
    })
    $('.modal-close').click(function(){
        $('#modalSucces').removeClass('show');
    })

});