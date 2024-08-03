// Testimonial Slider
$( document ).ready(function() {
    $(function() {
        var owl = $(".testimonial-wrapper");
        owl.owlCarousel({
            items: 1.5,
            margin: 20,
            loop: true,
            nav: true,
            autoplay: false,
            autoplayHoverPause: true,
            responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            991: {
                items: 1.5
            }
            }
        });
    });
});
// CHECK OUT OR RECENT WEBSITE PROJECTS Tab
$( document ).ready(function() {
    $('#all').click(function(){
        $('.web-deisgn').removeClass('active');
        $(this).addClass('active');
        $('.project-detail.category-web-development').show();
        $('.project-detail.category-digital-marketing').show();
    });

    $('#category-digital-marketing').click(function(){
        $('.web-deisgn').removeClass('active');
        $(this).addClass('active');
        $('.project-detail.category-web-development').hide();
        $('.project-detail.category-digital-marketing').show();
    });

    $('#category-web-development').click(function(){
        $('.web-deisgn').removeClass('active');
        $(this).addClass('active');
        $('.project-detail.category-web-development').show();
        $('.project-detail.category-digital-marketing').hide();
    });
});

// FAQs Home page

$( document ).ready(function() {
    const accordionBtns = document.querySelectorAll(".faq-wrap .accordion");

    accordionBtns.forEach((accordion) => {
    accordion.onclick = function () {
        this.classList.toggle("is-open");

        let content = this.nextElementSibling;

        content.classList.toggle("is-open");
    };
    });
});

// WEB DESIGN & DEVELOPMENT SERVICES
$( document ).ready(function() {
    $(function() {
        var owl = $(".webservice-wrapper.owl-carousel");
        owl.owlCarousel({
            items: 2.5,
            margin: 20,
            loop: true,
            nav: true,
            autoplay: true,
            autoplayHoverPause: true,
            responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1.5
            },
            991: {
                items: 2.5
            }
            }
        });
    });
});

// WEB DESIGN & DEVELOPMENT SERVICES About us
$( document ).ready(function() {
    $(function() {
        var owl = $(".about-webservice.owl-carousel");
        owl.owlCarousel({
            items: 2,
            margin: 20,
            loop: true,
            nav: true,
            autoplay: true,
            autoplayHoverPause: true,
            responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            991: {
                items: 2
            }
            }
        });
    });
});


// Blog filter btn
$(document).ready(function() {
    $('.blog-category .blog-filter-btn:first-child').addClass('active');
    $('.post-msg').hide();
    $('.blog-category .blog-filter-btn').click(function() {
        $('.blog-category .blog-filter-btn').removeClass('active');
        $(this).addClass('active');
        var getId = $('.blog-category .blog-filter-btn.active').attr('id');
        $('.project-main-wrap').hide();
        $('.post-msg').empty();
        if ($('.project-main-wrap.' + getId).length > 0) {
            $('.project-main-wrap.' + getId).show();   
        } else {
            $('.post-msg').show();
            $('.post-msg').html('<p class="medium-content-text text-center">No post found</p>');
        }
    });
    $('.blog-category .blog-filter-btn#all').click(function() {
        $('.project-main-wrap').show();
        $('.post-msg').empty();
    });
});


// FAQ filter btn

$( document ).ready(function() {
    $('.blog-category.uiux-category .blog-filter-btn:first-child').addClass('active');
    $('.blog-category.uiux-category .uiux-btn').click(function(){
        $('.blog-category.uiux-category .uiux-btn').removeClass('active');
        $(this).addClass('active');
        var getId = $('.blog-category.uiux-category .uiux-btn.active').attr('id');
        $('.project-detail').hide();
        $('.project-detail.'+getId).show();

    });
    $('.blog-category.uiux-category .active#all').click(function(){
        $('.project-detail').show();
    });
});