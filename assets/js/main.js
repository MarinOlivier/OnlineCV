/**
 * Created by olivier on 21/09/15.
 */

$(document).ready(function() {

    $('navbar-li').click(function(){
        $(this).addClass("active");
    });

    $('.navbar-li').mouseover(function () {
        $(this).css("border-bottom", "solid white 3px");
        $(this).css("transition", "border-bottom .5s ease, background 1s ease");

        //$(this).animate({borderBottomColor: "red"}, 300);
    });

    $('.navbar-li').mouseout(function () {
        if (!$(this).hasClass("active")) {
            $(this).css("border-bottom", "solid transparent 3px");
            $(this).css("transition", "border-bottom .5s ease");
        }

    });

    if($( window ).width() > 992) {
        $(window).on('scroll', function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > 40) {
                /*$('.navbar').css("-moz-box-shadow", "0px 5px 10px 0px #656565");
                $('.navbar').css("-webkit-box-shadow", "0px 5px 10px 0px #656565");
                $('.navbar').css("-o-box-shadow", "0px 5px 10px 0px #656565");
                $('.navbar').css("box-shadow", "0px 5px 10px 0px #656565");*/

                $('.navbar-li').css('margin-top', '0px');
                $('.navbar-li').css('margin-bottom', '0px');

                $('.logo').css('width', '60px');
                $('.logo').css('height', '60px');
                $('.logo').css('margin-left', '15%');

                $(".navbar-li").css("transition", "margin-top .7s ease, margin-bottom .7s ease, position .7s ease," +
                                    "background .7s ease, box-shadow .7s ease");

                $(".logo").css("transition", "width .7s ease, height .7s ease, margin-left .7s ease");


            }
            else {
                /*
                $('.navbar').css("-moz-box-shadow", "none");
                $('.navbar').css("-webkit-box-shadow", "none");
                $('.navbar').css("-o-box-shadow", "none");
                $('.navbar').css("box-shadow", "none");*/

                $('.navbar-li').css('margin-top', '20px');
                $('.navbar-li').css('margin-bottom', '20px');

                $('.logo').css('width', '100px');
                $('.logo').css('height', '100px');
                $('.logo').css('margin-left', '10%');

                $(".navbar-li").css("transition", "margin-top .7s ease, margin-bottom .7s ease, position .7s ease," +
                    "background .7s ease, box-shadow .7s ease");

                $(".logo").css("transition", "width .7s ease, height .7s ease, margin-left .7s ease");
            }
        });
    }
    else {
        $(window).on('scroll', function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > 40) {
                $('.navbar').css("position", "fixed");
                $('.content').css("padding-top", "60px");
            }
            else {
                $('.navbar').css("position", "relative");
                $('.content').css("padding-top", "0px");
            }

            $('.navbar').css("transition", "position .7s ease");


        });
    }

    $('.navbar').onePageNav();


});