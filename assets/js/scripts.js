jQuery(document).ready(function() {
    "use strict";

/*===================================================================================*/
/*	OWL CAROUSEL
/*===================================================================================*/
jQuery(function () {
    var dragging = true;
    var owlElementID = "#owl-main";

    function fadeInReset() {
        if (!dragging) {
            jQuery(owlElementID + " .caption .fadeIn-1, " + owlElementID + " .caption .fadeIn-2, " + owlElementID + " .caption .fadeIn-3").stop().delay(800).animate({ opacity: 0 }, { duration: 400, easing: "easeInCubic" });
        }
        else {
            jQuery(owlElementID + " .caption .fadeIn-1, " + owlElementID + " .caption .fadeIn-2, " + owlElementID + " .caption .fadeIn-3").css({ opacity: 0 });
        }
    }

    function fadeInDownReset() {
        if (!dragging) {
            jQuery(owlElementID + " .caption .fadeInDown-1, " + owlElementID + " .caption .fadeInDown-2, " + owlElementID + " .caption .fadeInDown-3").stop().delay(800).animate({ opacity: 0, top: "-15px" }, { duration: 400, easing: "easeInCubic" });
        }
        else {
            jQuery(owlElementID + " .caption .fadeInDown-1, " + owlElementID + " .caption .fadeInDown-2, " + owlElementID + " .caption .fadeInDown-3").css({ opacity: 0, top: "-15px" });
        }
    }

    function fadeInUpReset() {
        if (!dragging) {
            jQuery(owlElementID + " .caption .fadeInUp-1, " + owlElementID + " .caption .fadeInUp-2, " + owlElementID + " .caption .fadeInUp-3").stop().delay(800).animate({ opacity: 0, top: "15px" }, { duration: 400, easing: "easeInCubic" });
        }
        else {
            $(owlElementID + " .caption .fadeInUp-1, " + owlElementID + " .caption .fadeInUp-2, " + owlElementID + " .caption .fadeInUp-3").css({ opacity: 0, top: "15px" });
        }
    }

    function fadeInLeftReset() {
        if (!dragging) {
            jQuery(owlElementID + " .caption .fadeInLeft-1, " + owlElementID + " .caption .fadeInLeft-2, " + owlElementID + " .caption .fadeInLeft-3").stop().delay(800).animate({ opacity: 0, left: "15px" }, { duration: 400, easing: "easeInCubic" });
        }
        else {
            jQuery(owlElementID + " .caption .fadeInLeft-1, " + owlElementID + " .caption .fadeInLeft-2, " + owlElementID + " .caption .fadeInLeft-3").css({ opacity: 0, left: "15px" });
        }
    }

    function fadeInRightReset() {
        if (!dragging) {
            jQuery(owlElementID + " .caption .fadeInRight-1, " + owlElementID + " .caption .fadeInRight-2, " + owlElementID + " .caption .fadeInRight-3").stop().delay(800).animate({ opacity: 0, left: "-15px" }, { duration: 400, easing: "easeInCubic" });
        }
        else {
            jQuery(owlElementID + " .caption .fadeInRight-1, " + owlElementID + " .caption .fadeInRight-2, " + owlElementID + " .caption .fadeInRight-3").css({ opacity: 0, left: "-15px" });
        }
    }

    function fadeIn() {
        jQuery(owlElementID + " .active .caption .fadeIn-1").stop().delay(500).animate({ opacity: 1 }, { duration: 800, easing: "easeOutCubic" });
        jQuery(owlElementID + " .active .caption .fadeIn-2").stop().delay(700).animate({ opacity: 1 }, { duration: 800, easing: "easeOutCubic" });
        jQuery(owlElementID + " .active .caption .fadeIn-3").stop().delay(1000).animate({ opacity: 1 }, { duration: 800, easing: "easeOutCubic" });
    }

    function fadeInDown() {
        jQuery(owlElementID + " .active .caption .fadeInDown-1").stop().delay(500).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
        jQuery(owlElementID + " .active .caption .fadeInDown-2").stop().delay(700).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
        jQuery(owlElementID + " .active .caption .fadeInDown-3").stop().delay(1000).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
    }

    function fadeInUp() {
        jQuery(owlElementID + " .active .caption .fadeInUp-1").stop().delay(500).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
        jQuery(owlElementID + " .active .caption .fadeInUp-2").stop().delay(700).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
        jQuery(owlElementID + " .active .caption .fadeInUp-3").stop().delay(1000).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
    }

    function fadeInLeft() {
        jQuery(owlElementID + " .active .caption .fadeInLeft-1").stop().delay(500).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
        jQuery(owlElementID + " .active .caption .fadeInLeft-2").stop().delay(700).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
        jQuery(owlElementID + " .active .caption .fadeInLeft-3").stop().delay(1000).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
    }

    function fadeInRight() {
        jQuery(owlElementID + " .active .caption .fadeInRight-1").stop().delay(500).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
        jQuery(owlElementID + " .active .caption .fadeInRight-2").stop().delay(700).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
        jQuery(owlElementID + " .active .caption .fadeInRight-3").stop().delay(1000).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
    }

    jQuery(owlElementID).owlCarousel({

        autoPlay: 5000,
        stopOnHover: true,
        navigation: true,
        pagination: true,
        singleItem: true,
        addClassActive: true,
        transitionStyle: "fade",
        navigationText: ["<i class='icon fa fa-angle-left'></i>", "<i class='icon fa fa-angle-right'></i>"],

        afterInit: function() {
            fadeIn();
            fadeInDown();
            fadeInUp();
            fadeInLeft();
            fadeInRight();
        },

        afterMove: function() {
            fadeIn();
            fadeInDown();
            fadeInUp();
            fadeInLeft();
            fadeInRight();
        },

        afterUpdate: function() {
            fadeIn();
            fadeInDown();
            fadeInUp();
            fadeInLeft();
            fadeInRight();
        },

        startDragging: function() {
            dragging = true;
        },

        afterAction: function() {
            fadeInReset();
            fadeInDownReset();
            fadeInUpReset();
            fadeInLeftReset();
            fadeInRightReset();
            dragging = false;
        }

    });

if (jQuery(owlElementID).hasClass("owl-one-item")) {
    jQuery(owlElementID + ".owl-one-item").data('owlCarousel').destroy();
}

jQuery(owlElementID + ".owl-one-item").owlCarousel({
    singleItem: true,
    navigation: false,
    pagination: false
});




jQuery('.home-owl-carousel').each(function(){

    var owl = $(this);
    var  itemPerLine = owl.data('item');
    if(!itemPerLine){
        itemPerLine = 4;
    }
    owl.owlCarousel({
        items : itemPerLine,
        itemsTablet:[768,2],
        navigation : true,
        pagination : false,

        navigationText: ["", ""]
    });
});

jQuery('.homepage-owl-carousel').each(function(){

    var owl = $(this);
    var  itemPerLine = owl.data('item');
    if(!itemPerLine){
        itemPerLine = 4;
    }
    owl.owlCarousel({
        items : itemPerLine,
        itemsTablet:[768,2],
        itemsDesktop : [1199,2],
        navigation : true,
        pagination : false,

        navigationText: ["", ""]
    });
});

jQuery(".blog-slider").owlCarousel({
    items : 2,
    itemsDesktopSmall :[979,2],
    itemsDesktop : [1199,2],
    navigation : true,
    slideSpeed : 300,
    pagination: false,
    navigationText: ["", ""]
});

jQuery(".best-seller").owlCarousel({
    items : 3,
    navigation : true,
    itemsDesktopSmall :[979,2],
    itemsDesktop : [1199,2],
    slideSpeed : 300,
    pagination: false,
    paginationSpeed : 400,
    navigationText: ["", ""]
});

jQuery(".sidebar-carousel").owlCarousel({
    items : 1,
    itemsTablet:[768,2],
    itemsDesktopSmall :[979,2],
    itemsDesktop : [1199,1],
    navigation : true,
    slideSpeed : 300,
    pagination: false,
    paginationSpeed : 400,
    navigationText: ["", ""]
});

jQuery(".brand-slider").owlCarousel({
    items : 6,
    navigation : true,
    slideSpeed : 300,
    pagination: false,
    paginationSpeed : 400,
    navigationText: ["", ""]
});    
jQuery("#advertisement").owlCarousel({
    items : 1,
    itemsDesktopSmall :[979,2],
    itemsDesktop : [1199,1],
    navigation : true,
    slideSpeed : 300,
    pagination: true,
    paginationSpeed : 400,
    navigationText: ["", ""]
});    



});

/*===================================================================================*/
/*  LAZY LOAD IMAGES USING ECHO
/*===================================================================================*/
jQuery(function(){
    echo.init({
        offset: 100,
        throttle: 250,
        unload: false
    });
});

/*===================================================================================*/
/*  RATING
/*===================================================================================*/

jQuery(function(){
    jQuery('.rating').rateit({max: 5, step: 1, value : 4, resetable : false , readonly : true});
});

/*===================================================================================*/
/* PRICE SLIDER
/*===================================================================================*/
jQuery(function () {

// Price Slider
if (jQuery('.price-slider').length > 0) {
    jQuery('.price-slider').slider({
        min: 100,
        max: 700,
        step: 10,
        value: [200, 500],
        handle: "square"

    });

}

});


/*===================================================================================*/
/* SINGLE PRODUCT GALLERY
/*===================================================================================*/
jQuery(function(){
    jQuery('#owl-single-product').owlCarousel({
        items:1,
        itemsTablet:[768,2],
        itemsDesktop : [1199,1]

    });

    jQuery('#owl-single-product-thumbnails').owlCarousel({
        items: 4,
        pagination: true,
        rewindNav: true,
        itemsTablet : [768, 4],
        itemsDesktop : [1199,3]
    });

    jQuery('#owl-single-product2-thumbnails').owlCarousel({
        items: 6,
        pagination: true,
        rewindNav: true,
        itemsTablet : [768, 4],
        itemsDesktop : [1199,3]
    });

    jQuery('.single-product-slider').owlCarousel({
        stopOnHover: true,
        rewindNav: true,
        singleItem: true,
        pagination: true
    });

  
});





/*===================================================================================*/
/*  WOW 
/*===================================================================================*/

jQuery(function () {
    new WOW().init();
});


/*===================================================================================*/
/*  TOOLTIP 
/*===================================================================================*/
jQuery("[data-toggle='tooltip']").tooltip(); 




})

//timer
var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("days").innerHTML = days;
  document.getElementById("hours").innerHTML = hours;
  document.getElementById("minuts").innerHTML = minutes;
  document.getElementById("second").innerHTML = seconds;

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("days").innerHTML = "EXPIRED";
    document.getElementById("hours").innerHTML = "EXPIRED";
    document.getElementById("minuts").innerHTML = "EXPIRED";
    document.getElementById("second").innerHTML = "EXPIRED";
  }
}, 1000);