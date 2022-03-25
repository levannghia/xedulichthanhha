/* Validation form */
ValidationFormSelf("validation-newsletters");
ValidationFormSelf("validation-contact"); 
 
/* Exists */
$.fn.exists = function(){
    return this.length;
};

 

 
/* Paging category ajax */
if($(".paging-product").exists())
{
    $(".paging-product").each(function(){
        var list = $(this).data("list");
        var cat = $(this).data("cat");
        loadPagingAjax("ajax/ajax_product.php?perpage=8&idList="+list+"&idCat="+cat,'.paging-product-category-'+list+cat);
    })
}
/* Back to top */
NN_FRAMEWORK.Common = function(){
     $(".content-ck iframe,.content-ck embed").each(function(e,n){$(this).wrap("<div class='video-container'></div>")});
     $(".content-ck table").each(function(e,t){$(this).wrap("<div class='table-responsive'></div>")}); 


     $(window).bind("load resize", function(){
         var api = $(".peShiner").peShiner({ api: true, paused: true, reverse: true, repeat: 1, color: 'white'});
         api.resume();
         
     });
}
NN_FRAMEWORK.BackToTop = function(){
    $(window).scroll(function(){
        if(!$('.scrollToTop').length) $("body").append('<div class="scrollToTop"><img src="'+GOTOP+'" alt="Go Top"/></div>');
        if($(this).scrollTop() > 100) $('.scrollToTop').fadeIn();
        else $('.scrollToTop').fadeOut();
    });

    $('body').on("click",".scrollToTop",function() {
        $('html, body').animate({scrollTop : 0},800);
        return false; 
    });

};

/* Alt images */
NN_FRAMEWORK.AltImages = function(){
    $('img').each(function(index, element) {
        if(!$(this).attr('alt') || $(this).attr('alt')=='')
        {
            $(this).attr('alt',WEBSITE_NAME);
        }
    });
};

/* Fix menu */
NN_FRAMEWORK.FixMenu = function(){
    $(window).scroll(function(){
        if($(window).scrollTop() >= $(".header").height()) $(".menu").css({position:"fixed",left:'0px',right:'0px',top:'0px',zIndex:'999'});
                else $(".menu").css({position:"relative"});
    });
};
 

/* Popup */
NN_FRAMEWORK.Popup = function(){
    if($("#popup").exists())
    {
        $('#popup').modal('show');
    }
};

 
/* Tabs */
NN_FRAMEWORK.Tabs = function(){
    if($(".ul-tabs-pro-detail").exists())
    {
        $(".ul-tabs-pro-detail li").click(function(){
            var tabs = $(this).data("tabs");
            $(".content-tabs-pro-detail, .ul-tabs-pro-detail li").removeClass("active");
            $(this).addClass("active");
            $("."+tabs).addClass("active");
        });
    }
    if($(".ul-tabs-project").exists())
    {
        $(".ul-tabs-project li").click(function(){
            var tabs = $(this).data("tabs");
            $(".content-tabs-project, .ul-tabs-project li").removeClass("active");
            $(this).addClass("active");
            $("."+tabs).addClass("active");
        });
    }
};

/* Mmenu */
NN_FRAMEWORK.Mmenu = function(){
    if($("nav#menu").exists())
    {
        $('nav#menu').mmenu();
        console.log("ok");
    }
};
 
/* Search */
NN_FRAMEWORK.Search = function(){
    if($(".icon-search").exists())
    {
        $(".icon-search").click(function(){
            if($(this).hasClass('active'))
            {
                $(this).removeClass('active');
                $(".search-grid").stop(true,true).animate({opacity: "0",width: "0px"}, 200);   
            }
            else
            {
                $(this).addClass('active');                            
                $(".search-grid").stop(true,true).animate({opacity: "1",width: "230px"}, 200);
            }
            document.getElementById($(this).next().find("input").attr('id')).focus();
            $('.icon-search i').toggleClass('fa fa-search fa fa-times');
        });
    }
};

/* Videos */
NN_FRAMEWORK.Videos = function(){
    

    if($(".video").exists())
    {
        $('[data-fancybox="video"]').fancybox({
            transitionEffect: "fade",
            transitionDuration: 800,
            animationEffect: "fade",
            animationDuration: 800,
            arrows: true,
            infobar: false,
            toolbar: true,
            hash: false
        });
    }
};

/* Owl */
NN_FRAMEWORK.OwlPage = function(){
    if($(".owl-slideshow").exists())
    {
        $('.owl-slideshow').owlCarousel({
            items: 1,
            rewind: true,
            autoplay: true,
            loop: false,
            lazyLoad: false,
            mouseDrag: false,
            touchDrag: false,
            animateIn: 'animate__animated animate__fadeInLeft',
            animateOut: 'animate__animated animate__fadeOutRight',
            margin: 0,
            smartSpeed: 500,
            autoplaySpeed: 3500,
            nav: false,
            dots: false
        });
        $('.prev-slideshow').click(function() {
            $('.owl-slideshow').trigger('prev.owl.carousel');
        });
        $('.next-slideshow').click(function() {
            $('.owl-slideshow').trigger('next.owl.carousel');
        });
    }
    if($(".owl-partner").exists())
    {
        $('.owl-partner').owlCarousel({
            items: 6,
            rewind: true,
            autoplay: true,
            loop: false,
            lazyLoad: false,
            mouseDrag: true,
            touchDrag: true,
            margin: 20,
            smartSpeed: 250,
            autoplaySpeed: 1000,
            nav: false,
            dots: false,
            responsiveClass:true,
            
        });
        $('.prev-partner').click(function() {
            $('.owl-partner').trigger('prev.owl.carousel');
        });
        $('.next-partner').click(function() {
            $('.owl-partner').trigger('next.owl.carousel');
        });
    }
    

    if($('.slider_tc').length>0) {$(".slider_tc").slick({slidesToShow:3,slidesToScroll:1,infinite:!0,autoplay:!0,autoplaySpeed:5e3,arrows:!1});}
    if($('.slider-fields1').length>0) {$(".slider-fields1").slick({slidesToShow:4,slidesToScroll:1,infinite:!0,autoplay:!0,autoplaySpeed:5e3,arrows:!1});}
    if($('.slider-fields').length>0) {$(".slider-fields").slick({slidesToShow:1,slidesToScroll:1,infinite:!0,autoplay:!0,autoplaySpeed:5e3,arrows:!1,dots:true});}
    if($('.box-branch').length>0) {$(".box-branch").slick({slidesToShow:2,slidesToScroll:1,infinite:!0,autoplay:!0,autoplaySpeed:5e3,arrows:!1});}
    if($('.slider_sp').length>0) {$(".slider_sp").slick({slidesToShow:3,slidesToScroll:1,infinite:!0,autoplay:!0,autoplaySpeed:5e3,arrows:!0,vertical:true});}
    if($('.slider-news').length>0) {$(".slider-news").slick({slidesToShow:3,slidesToScroll:1,infinite:!0,autoplay:!0,autoplaySpeed:5e3,arrows:!1,vertical:true});}
    if($('.slider-news1').length>0) {$(".slider-news1").slick({slidesToShow:7,slidesToScroll:1,infinite:!0,autoplay:!0,autoplaySpeed:5e3,arrows:!1,vertical:true});}
    if($('.qc_box').length>0) {$(".qc_box").slick({slidesToShow:1,slidesToScroll:1,infinite:!0,autoplay:!0,autoplaySpeed:5e3,arrows:!1,fade:!0 }); } 

};

$('.btnXDT').click(function() {
    $(this).addClass("active")
    $('.btnTCD').removeClass("active");
})
$('.btnTCD').click(function() {
    $(this).addClass("active")
    $('.btnXDT').removeClass("active");
})

$('.video1 .owl-carousel').owlCarousel({
    loop: true,
    margin: 40,
    nav: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
})
 
/* Owl pro detail */
NN_FRAMEWORK.OwlProDetail = function(){
    if($(".owl-thumb-pro").exists())
    {
        $('.owl-thumb-pro').owlCarousel({
            items: 4,
            lazyLoad: false,
            mouseDrag: true,
            touchDrag: true,
            margin: 10,
            smartSpeed: 250,
            nav: false,
            dots: false
        });
        $('.prev-thumb-pro').click(function() {
            $('.owl-thumb-pro').trigger('prev.owl.carousel');
        });
        $('.next-thumb-pro').click(function() {
            $('.owl-thumb-pro').trigger('next.owl.carousel');
        });
    }
};

 

/* Ready */
$(document).ready(function(){
   
    NN_FRAMEWORK.Common();   
    NN_FRAMEWORK.AltImages();
    NN_FRAMEWORK.BackToTop();
    NN_FRAMEWORK.FixMenu(); 
    NN_FRAMEWORK.OwlPage();
    NN_FRAMEWORK.OwlProDetail(); 
    NN_FRAMEWORK.Tabs();
    NN_FRAMEWORK.Videos(); 
    NN_FRAMEWORK.Mmenu(); 
    NN_FRAMEWORK.Search();
    NN_FRAMEWORK.Popup();
});