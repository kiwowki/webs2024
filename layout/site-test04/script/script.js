$(function(){
    // 메뉴
    $(".nav > ul > li").mouseover(function(){
        $(this).find(".submenu").stop().slideDown();
    });
    $(".nav > ul > li").mouseout(function(){
        $(this).find(".submenu").stop().slideUp();
    });

    // 슬라이드
    $(".sliderWrap").append($(".slider").first().clone(true));

    let currentIndex = 0;

    setInterval(function(){
        currentIndex++;
        $(".sliderWrap").animate({marginLeft: -100 * currentIndex + "%"}, 600)
        if(currentIndex == 3){
            setTimeout(function(){
                currentIndex = 0;
                $(".sliderWrap").animate({marginLeft: 0}, 0)
                }, 600);
        }
    }, 3000);
});