/**
 * File functions.js.
 *
 */
(function ($) {

$(document).ready(function () {


    //Wrap image in a new figure element
    $('img').wrap(' <figure class = "imageBorder" > </figure>');


    //Unwrap gallery and map images
    $('.gallery-item img').unwrap(' <figure class = "imageBorder" > </figure>');
    $('img.imageRotate').unwrap(' <figure class = "imageBorder" > </figure>');
    $('.map img').unwrap(' <figure class = "imageBorder" > </figure>');

    //Wrap caption text
    $('.wp-caption-text').wrap(' <div class = "captionDiv" > </div>');

    //gallery caption text
    $('.gallery-item .wp-caption-text').unwrap(' <div class = "captionDiv" > </div>');
    $('.gallery-item .wp-caption-text').wrap(' <div class = "gallery-captionDiv" > </div>');



    $(".menu-item:nth-last-child(1) a").html("<button class='email'></button>");

    $(".menu-item:nth-last-child(2) a").html("<button class='phone'></button>");

    $('button.menu-toggle').html('<div id="nav-icon3"><span><\/span><span></span><span></span><span></span></div>');

    $('button.menu-toggle').html('<div id="nav-icon3"><span><\/span><span></span><span></span><span></span></div>');


    //******************** sticky header *********************//
    var stickyNavTop = $('.menu-front-page-menu-container').height();

    var stickyNav = function () {
        var scrollTop = $(window).scrollTop();

        if (scrollTop > stickyNavTop) {
            $('.menu-front-page-menu-container').addClass('stick');
        } else {
            $('.menu-front-page-menu-container').removeClass('stick');
        }

    };

    $(window).on('load', function () {

        var width = Math.max(window.innerWidth, document.documentElement.clientWidth);

        if (width && width <= 768) {
            $('.menu-front-page-menu-container').removeClass('stick');
        
            $('#sidebar').removeClass('col-sm-2');

        }
    });

    stickyNav();

    $(window).scroll(function () {
        stickyNav();
    });


    //************************ one page nav ***********************************//

    $('#site-navigation').onePageNav({
        currentClass: 'current-one-page-item',
        changeHash: false,
        scrollSpeed: 1500,
        scrollThreshold: 0.5,
        filter: '',
        easing: 'swing',
        begin: function () {
            //I get fired when the animation is starting
        },
        end: function () {
            //I get fired when the animation is ending
        },
        scrollChange: function ($currentListItem) {
            //I get fired when you enter a section and I pass the list item of the section
        }
    });



    //Hide and show toggle button on scroll
    var position, direction, previous;

    $(window).scroll(function () {
        if ($(this).scrollTop() >= position) {
            direction = "down";
            if (direction !== previous) {
                $(".menu-toggle").addClass("hide");

                previous = direction;
            }
        } else {
            direction = "up";
            if (direction !== previous) {
                $(".menu-toggle").removeClass("hide");

                previous = direction;
            }
        }
        position = $(this).scrollTop();
    });



   var container, button, menu, links, subMenus, i, len;


button =  $('button');

    $('button').click(function () {
        if (-1 !== container.className.indexOf('toggled')) {
            container.className = container.className.replace('toggled', '');
            button.setAttribute('aria-expanded', 'false');
            menu.setAttribute('aria-expanded', 'false');
            $("#nav-icon3").removeClass('open');
        } else {
            container.className += 'toggled';
            button.setAttribute('aria-expanded', 'true');
            menu.setAttribute('aria-expanded', 'true');
            $("#nav-icon3").addClass('open');
        }
    });
});





})(jQuery);