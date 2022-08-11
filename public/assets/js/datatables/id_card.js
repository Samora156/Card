"use strict";
$(document).ready(function () {
    // creating click event on anchor tag.
    $('.card-body .desain .gambar a').click(function (e) {
        let href = e.target.parentElement.getAttribute('href');
        $('.tabcontent').each(function (_index, element) {
            if (`#${element.id}` != href) {
                $(element).removeClass('active');
            }
        })
        $('.container .blog-content span').click(function () {
            $(href).removeClass('active');
        })
        $(href).toggleClass('active');
        $('.tabcontent').css({
            height: "30rem"
        });
    })
})