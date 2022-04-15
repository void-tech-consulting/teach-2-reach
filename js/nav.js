// Script to manage menu toggling
jQuery(document).ready(function ($) {

    const body = $('body');
    const toggle = $('.menu-toggle');
    const menu = $('.menu-wrapper');

    // Menu toggle click handler
    function toggleMenu() {

        // Scroll to top of page incase toggle is 
        // partially out of view
        window.scrollTo(0, 0);

        if (menu.hasClass('active')) {
            menu.removeClass('active');             // Hide the overlay
            body.removeClass('noscroll')            // Enable scrolling body
            toggle.attr('name', 'menu-outline')     // Change icon to menu

        } else {
            menu.addClass('active');                // Show the overlay
            body.addClass('noscroll')               // Disable scrolling body
            toggle.attr('name', 'close-outline')    // Change icon to menu
        }
    }

    toggle.on('click', toggleMenu);
    console.log("here");
    // ===========================
    $(".menu-item-has-children").hover( function () {
        // var menu = $('.sub-menu');
        $('.sub-menu').css('display','block');
        // console.log("start");
    }, function(){
        // console.log("end");
        $('.sub-menu').css('display','none');
    }
    );





    // $(".menu-item-has-children").hover( function () {
    //     console.log('test');
    //     var menu = this.querySelector('.sub-menu');
    //     var actives = document.querySelectorAll('.sub-active');
    //     console.log(actives);
    //     actives.forEach(el => {
    //     if (el !== menu) {
    //         el.classList.remove("sub-active");
    //     }
    //     });
    //     menu.classList.toggle("sub-active");
    // }, function() {

    // };

    
    // );
    // $("a[href='#'").on("click", function (e) {
    //     e.preventDefault();
    //     });

});