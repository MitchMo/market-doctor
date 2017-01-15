$(window).load(function() {
    if($(window).width() < 768)
    {
        //$(".navbar-fixed-top").addClass("top-nav-collapse");
        //$(".navbar-brand").removeClass("display-none");
        //$(".navbar-nav").removeClass("display-none");

        $('#advertising-title').removeClass('hide');
        $('#marketing-title').removeClass('hide');
        $('#digital-title').removeClass('hide');
    }
});


// jQuery to collapse the navbar on scroll
function collapseNavbar() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
        $(".navbar-brand").removeClass("display-none");
        $(".navbar-nav").removeClass("display-none");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
        $(".navbar-brand").addClass("display-none");
        $(".navbar-nav").addClass("display-none");
    }
}

$(window).scroll(function() {

    //console.log($(window).width());

    if($(window).width() > 760)
    {
        //collapseNavbar();

        var scroll = $(window).scrollTop();
        if(scroll < 944)
        {
            $('#advertising-title').removeClass('animated fadeInLeft').addClass('animated fadeOutLeft');
            $('#marketing-title').removeClass('animated fadeInRight').addClass('animated fadeOutRight');
            $('#digital-title').removeClass('animated fadeInLeft').addClass('animated fadeOutLeft');
        }
        if(scroll >= 944 && scroll <= 2165)
        {
            $('#digital-title').removeClass('animated fadeOutLeft hide').addClass('animated fadeInLeft');
            $('#marketing-title').removeClass('animated fadeInRight').addClass('animated fadeOutRight');
            $('#advertising-title').removeClass('animated fadeInLeft').addClass('animated fadeOutLeft');

        }
        else if(scroll >= 2166 && scroll <= 2935)
        {
            $('#advertising-title').removeClass('animated fadeOutLeft hide').addClass('animated fadeInLeft');
            $('#marketing-title').removeClass('animated fadeInRight').addClass('animated fadeOutRight');
            $('#digital-title').removeClass('animated fadeInLeft').addClass('animated fadeOutLeft');
        }
        else if(scroll >= 2936 && scroll <= 4156) {
            $('#marketing-title').removeClass('animated fadeOutRight hide').addClass('animated fadeInRight');
            $('#advertising-title').removeClass('animated fadeInLeft').addClass('animated fadeOutLeft');
            $('#digital-title').removeClass('animated fadeInLeft').addClass('animated fadeOutLeft');

        }
    }
});

//$(document).ready(collapseNavbar);

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
  if ($(this).attr('class') != 'dropdown-toggle active' && $(this).attr('class') != 'dropdown-toggle') {
    $('.navbar-toggle:visible').click();
  }
});
