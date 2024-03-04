/*-------left-panel-bottom-user-profile-logout--------*/

$(document).ready(function() {
    $(".userinfo-dots a").click(function() {
      $('.userprofile-logout').slideToggle(300);
    });
    $('body').click(function(evt){    
      if($(evt.target).closest('.userinfo-dots a, .userprofile-logout').length)
      return;
      $('.userprofile-logout').slideUp(300);
    });
 });



/*----------------*/


/*-------left-panel-top-switchbox-popup--------*/

$(document).ready(function() {
    $(".switch-acc").click(function() {
      $('.switch-box').slideToggle(300);
    });
    $('body').click(function(evt){    
      if($(evt.target).closest('.switch-acc, .switch-box').length)
      return;
      $('.switch-box').slideUp(300);
    });
 });



/*----------------*/

/*-------left-panel-bottom-Support-popup--------*/

$(document).ready(function() {
    $(".support-box").click(function() {
        $('.support-main').slideToggle(300);
    });
    $('body').click(function(evt){    
        if($(evt.target).closest('.support-box, .support-main').length)
        return;
        $('.support-main').slideUp(300);
    });
});

  
    $('.support-h a').on('click', function(){
        $('.support-main').slideUp(300);
    });

/*----------------*/


const mobileBreakpoint = window.matchMedia("(max-width: 1199px )");

$(document).ready(function(){
    // $(".dash-nav-dropdown-toggle").click(function(){
    //     $(this).closest(".dash-nav-dropdown")
    //         .toggleClass("show")
    //         .find(".dash-nav-dropdown")
    //         .removeClass("show");
    //     $(this).parent()
    //         .siblings()
    //         .removeClass("show");
    // });

    $(".menu-toggle").click(function(){
        if (mobileBreakpoint.matches) {
            $(".dash-nav").toggleClass("mobile-show");
            $("body").toggleClass("mobile-show-body");
            $("html").toggleClass("mobile-show-html");
            $(".menu-ovelay").toggleClass("show-overlay");
        } else {
            $(".dash").toggleClass("dash-compact");
        }
    });

    // $(".searchbox-toggle").click(function(){
    //     $(".searchbox").toggleClass("show");
    // });

    // Dev utilities
    // $("header.dash-toolbar .menu-toggle").click();
    // $(".searchbox-toggle").click();
});
