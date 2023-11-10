$(function(){
    // 슬라이드 효과 fade
    let currentIndex = 0;
    $(".sliderWrap").append($(".slider").first().clone(true));

    setInterval(() => {
        currentIndex++;
        $(".sliderWrap").animate({marginTop: -400 * currentIndex}, 600);

        if(currentIndex == 3){
            setTimeout(function(){
                $(".sliderWrap").animate({marginTop: 0}, 0);
                currentIndex = 0;
            })
        }
    }, 3000);

    // 메뉴 : 하나씩 나오기
    $(".nav > ul > li").mouseover(function(){
        $(this).find(".submenu").stop().slideDown(200);
    });
    $(".nav > ul > li").mouseout(function(){
        $(this).find(".submenu").stop().slideUp(200);
    });


    // // 탭메뉴
    // const tabBtn = $(".info_menu > a");
    // const tabCont = $(".info_cont > div");
    // tabCont.hide().eq(0).show();

    // tabBtn.click(function(){
    //     const index = $(this).index();

    //     $(this).addClass("active").siblings().removeClass("active");
    //     tabCont.eq(index).show().siblings().hide();
    // });

    // // 팝업
    // $(".popup_btn").click(function(){
    //     $(".popup_view").show();
    // });
    // $(".popup_close").click(function(){
    //     $(".popup_view").hide();
    // });
});