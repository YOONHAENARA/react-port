//hamburger menu
$(document).ready(function () {
    $(".hamburger").click(function () {
        $(this).toggleClass("is-active");
        $('.hammenu_wrap').slideToggle();
        $('body').toggleClass('fix');
    });
    $('.nav_link').click(function(){
        $('.hammenu_wrap').hide();
        $('.hamburger').removeClass("is-active");
    });


    //IMG change
    let active = 0;
    const slides = document.querySelectorAll('.img_wrap img')
    document.querySelector('.change_btn').addEventListener('click', () => {
        slides[active].classList.remove('active')
        active = active < slides.length - 1 ? active + 1 : 0
        slides[active].classList.add('active')
    })

    //site hover 
    $(".hover").mouseleave(
        function () {
            $(this).removeClass("hover");
        }
    );

    //script
    //toggle modal
    $(".info4 a").click(function () {
        $(".info4 .modal").addClass("show");
    });
    $(".info4 .close").click(function () {
        $(".info4 .modal").removeClass("show");
    });

    //code modal
    $('.viewBtn').on('click', function () {
        $(this).parent('.img_b').parent('.img_box').siblings('.modal_wrapper').addClass('open');

    });
    $('.close_modal').on('click', function () {
        $('.modal_wrapper').removeClass('open');
    });

    $('.code_view').on('click', function () {
        $(this).parent('.modal').find('.script_modal').addClass('show');
        $(this).parent('.img').siblings('.script_modal').addClass('show');
    });

    $('.close_btn').on('click', function () {
        $(this).parent('.script_modal').removeClass('show');
    });


    //skrollr
    var s = skrollr.init({
        edgeStrategy: 'set',
        easing: 'linear'
    });
    $(".split").each(function () {
        let txt = $(this).text();
        let split = txt.split("").join("</span><span aria-hidden='true'>");
        split = "<span aria-hidden='true'>" + split + "</span>";
        $(this).html(split).attr("aria-label", txt);
    });
    $(window).scroll(function () {
        let scrollTop = $(window).scrollTop();

        $(".scroll").text(scrollTop);

        //sitelist
        var listIndex = $('.sec4 .sitelist');
        var tit = $('.sec4 .sitelist .gradient_bg h5');
        var num = $('.sec4 .sitelist .box .num');

        for (var i = 0; i < listIndex.length; i++) {
            if (scrollTop > listIndex.eq(i).offset().top - (400)) {
                gsap.to(tit.eq(i).find('span'), {
                    duration: 0.6,
                    opacity: 1,
                    y: 0,
                    stagger: 0.1
                })
            }
            if (scrollTop > listIndex.eq(i).offset().top - (300)) {
                gsap.to(num.eq(i), {
                    duration: 1,
                    opacity: 1,
                    y: 0,
                    stagger: 0.5
                })
            }
        }
    });

});
