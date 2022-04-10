jQuery(document).ready(function ($) {

$(".menu-item-has-children").on("click", function () {
        console.log('test');
        var menu = this.querySelector('.sub-menu');
        var actives = document.querySelectorAll('.sub-active');
        console.log(actives);
        actives.forEach(el => {
        if (el !== menu) {
            el.classList.remove("sub-active");
        }
        });
        menu.classList.toggle("sub-active");
    });
    $("a[href='#'").on("click", function (e) {
        e.preventDefault();
        });

});