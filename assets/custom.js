(function ($) {

    var app = {
        onReady: function () {
            //app.slick();
        },
        onLoad: function () {

            // Adds Flex Video to YouTube and Vimeo Embeds
            /* jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]')
                .addClass("embed-responsive-item")
                .wrap("<div class='embed-responsive embed-responsive-16by9'/>"); */
        },
        onScroll: function () {

            /* $(window).on("scroll", function () {
                if ($(this).scrollTop() > 1000) {
                    $("#back-top").fadeIn();
                } else {
                    $("#back-top").fadeOut();
                }
            });
            // scroll body to 0px on click
            $("#back-top").on("click", function () {
                $("#back-top").tooltip("hide");
                $("body,html").animate(
                {
                    scrollTop: 0,
                },
                1500
                );
                return false;
            }); */
        },
        onResize: function () {},
        slick: function () {

            /* $(".slick-testimonial").slick({
                dots: true,
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                draggable: true,
                speed: 500,
                cssEase: "linear",
            }); */
        }
    };

  document.addEventListener("DOMContentLoaded", app.onReady);
  window.addEventListener("load", app.onLoad);

})(jQuery);
