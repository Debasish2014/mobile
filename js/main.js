(function ($) {
    "use strict";
    /*----------------------------
     jQuery MeanMenu
    ------------------------------ */
    jQuery('nav#dropdown').meanmenu();
    /*----------------------------
     wow js active
    ------------------------------ */
    new WOW().init();
    /*----------------------------
     owl active
    ------------------------------ */
    $(".features-curosel").owlCarousel({
        autoPlay: false,
        slideSpeed: 2000,
        items: 5,
        pagination: false,
        navigation: true,
        navigationText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3],
        itemsMobile: [767, 2]
    });
    $(".catagories-curosel").owlCarousel({
        autoPlay: false,
        slideSpeed: 2000,
        items: 8,
        pagination: false,
        navigation: true,
        navigationText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        itemsDesktop: [1199, 8],
        itemsDesktopSmall: [979, 6],
        itemsMobile: [768, 3]
    });
    $(".features").owlCarousel({
        autoPlay: false,
        slideSpeed: 2000,
        items: 3,
        pagination: false,
        navigation: true,
        navigationText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3],
        itemsMobile: [767, 1]
    });
    $(".Latest_Post").owlCarousel({
        autoPlay: false,
        slideSpeed: 2000,
        items: 3,
        pagination: false,
        navigation: true,
        navigationText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3],
        itemsMobile: [767, 1]
    });
    /*----------------------------
    owl active index-3  start
    ------------------------------ */
    $(".futurum").owlCarousel({
        autoPlay: false,
        slideSpeed: 2000,
        items: 1,
        pagination: false,
        navigation: true,
        navigationText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [979, 2],
        itemsMobile: [767, 1]
    });
    $(".item_all_another").owlCarousel({
        autoPlay: false,
        slideSpeed: 2000,
        items: 3,
        pagination: false,
        navigation: true,
        navigationText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 4],
        itemsMobile: [767, 2]
    });
    /*----------------------------
owl active index-3 start
------------------------------ */
    $(".item_all").owlCarousel({
        autoPlay: false,
        slideSpeed: 2000,
        items: 6,
        pagination: false,
        navigation: true,
        navigationText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        itemsDesktop: [1199, 5],
        itemsDesktopSmall: [979, 4],
        itemsMobile: [767, 2]
    });
    /*----------------------------
    owl active shop-details  start
    ------------------------------ */
    $(".more-views").owlCarousel({
        autoPlay: false,
        slideSpeed: 2000,
        items: 3,
        pagination: false,
        navigation: true,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [979, 3],
        itemsMobile: [767, 1]
    });
//    $(".content_all").owlCarousel({
//        autoPlay: false,
//        slideSpeed: 2000,
//        items: 1,
//        pagination: false,
//        navigation: true,
//        navigationText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
//        itemsDesktop: [1199, 1],
//        itemsDesktopSmall: [979, 1],
//        itemsMobile: [767, 1]
//    });
    $(".UpSell").owlCarousel({
        autoPlay: false,
        slideSpeed: 2000,
        items: 5,
        pagination: false,
        navigation: true,
        navigationText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [979, 3],
        itemsMobile: [767, 1]
    });
    $(".what-client-say").owlCarousel({
        autoPlay: false,
        slideSpeed: 2000,
        items: 1,
        pagination: true,
        navigation: false,
        navigationText: false,
        animateOut: 'fade',
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [979, 1],
        itemsMobile: [767, 1]
    });
    /*----------------------------
    owl active shop-details  start
    ------------------------------ */
    $(".more-views").owlCarousel({
        autoPlay: false,
        slideSpeed: 2000,
        items: 3,
        pagination: false,
        navigation: true,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [979, 3],
        itemsMobile: [767, 1]
    });
//    $(".content_all").owlCarousel({
//        autoPlay: false,
//        slideSpeed: 2000,
//        items: 1,
//        pagination: false,
//        navigation: true,
//        navigationText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
//        itemsDesktop: [1199, 4],
//        itemsDesktopSmall: [979, 3],
//        itemsMobile: [767, 1]
//    });
    $(".UpSell").owlCarousel({
        autoPlay: false,
        slideSpeed: 2000,
        items: 5,
        pagination: false,
        navigation: true,
        navigationText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [979, 3],
        itemsMobile: [767, 1]
    });
    $(".what-client-say").owlCarousel({
        autoPlay: false,
        slideSpeed: 2000,
        items: 1,
        pagination: true,
        navigation: false,
        navigationText: false,
        animateOut: 'fade',
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [979, 3],
        itemsMobile: [767, 1]
    });
    /*----------------------------
    blog-slider active
    ------------------------------ */
    $(".b-slide-all").owlCarousel({
        autoPlay: false,
        slideSpeed: 2000,
        items: 1,
        pagination: false,
        navigation: true,
        navigationText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [979, 1],
        itemsMobile: [767, 1]
    });
    /*----------------------------
     price-slider active
    ------------------------------ */
    $("#slider-range").slider({
        range: true,
        min: 80,
        max: 730,
        values: [88, 721],
        slide: function (event, ui) {
            $("#amount").val(ui.values[0] + " - " + ui.values[1]);
        }
    });
    $("#amount").val($("#slider-range").slider("values", 0) +
                     " - " + $("#slider-range").slider("values", 1));
    /*--------------------------
     scrollUp
    ---------------------------- */
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });
    /*--------------------------
     scrollUp
    ---------------------------- */
    $(window).on('scroll', function () {
        if ($(window).scrollTop() > 200) {
            $("#toTop").fadeIn();
        } else {
            $("#toTop").fadeOut();
        }
    });
    $("#toTop").on('click', function () {
        $("html,body").animate({
            scrollTop: 0
        }, 500)
    });
    /*category left menu*/
    $('.category-heading').on('click', function () {
        $('.category-menu-list').slideToggle(300);
    });
    /*category accordion*/
    $('.rx-parent').on('click', function () {
        $('.rx-child').slideToggle();
        $(this).toggleClass('rx-change');
        s
    });
    /*---------------------
    Image Zoom
    --------------------- */
    $('.simpleLens-big-image').simpleLens({
        loading_image: 'demo/images/loading.gif'
    });
    /*---------------------
            Catagories
    --------------------- */
    var a
    a = $(".catagories").width();
    $(".catagories").height(a);
    var prodimg
    prodimg = $(".primary-image").width();
    $(".primary-image").height(prodimg);
    $(window).resize(function () {
        a = $(".catagories").width();
        $(".catagories").height(a);
    });
    /*---------------------
        item values
    //--------------------- */
    //$("#additem1").on('click', function(){
    //        var value =  $("#qty1").val();
    //        $("#qty1").val(null);
    //        var newValue = parseInt(value);
    //        newValue+=5;
    //        $("#qty1").val(newValue);
    //});
    //$("#removeitem1").on('click', function(){
    //        var value =  $("#qty1").val();
    //        $("#qty1").val(null);
    //        var newValue = parseInt(value);
    //        newValue-=1;
    //        $("#qty1").val(newValue);
    //});
    // $(".additem").on("click", function () {
    //     var $button = $(this);
    //     var oldValue = $button.parent().find("input").val();
    //     if ($button.text() == "+") {
    //         if (oldValue < 10) {
    //             var newVal = parseFloat(oldValue) + 10;
    //         } else {
    //             var newVal = parseFloat(oldValue) + 5;
    //         }
    //     } else {
    //         // Don't allow decrementing below 10
    //         if (oldValue > 10) {
    //             var newVal = parseFloat(oldValue) - 1;
    //         } else {
    //             newVal = 0;
    //         }
    //     }
    //     $button.parent().find("input").val(newVal);
    // });
    
    $('#myModal .save').click(function (e) {
    e.preventDefault();
    addImage(5);
    $('#myModal').modal('hide');
    $(this).tab('show')
    return false;
})
})(jQuery);
