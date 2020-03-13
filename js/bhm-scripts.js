$(document).ready(function(){

    // var $fixed = $('.menu-menu-1-container');

    // $fixed.on("scroll", function(e) {
    //     if(this.scrollTop > 145) {
    //         $fixed.addClass("fixed-nav");
    //     } else {
    //         $fixed.removeClass("fixed-nav");
    //     }
    // });

    $(window).on("scroll", function(){
        if($(this).scrollTop() >= 160) {
            $(".main-navigation").addClass("fixed-nav");
        } else {
            $(".main-navigation").removeClass("fixed-nav");
        }
    });

    ScrollReveal().reveal('.reveal',  { delay: 250 }, { reset: true });

    var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};
    var hamburgers = document.querySelectorAll(".hamburger");
    if (hamburgers.length > 0) {
      forEach(hamburgers, function(hamburger) {
        hamburger.addEventListener("click", function() {
          this.classList.toggle("is-active");
          $(".overlay").toggleClass("overlay-open");
        }, false);
      });
    }

});