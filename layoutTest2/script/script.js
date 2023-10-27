$(function () {
    // 슬라이드
    let currentIndex = 0;
    $(".sliderWrap").append($(".slider").first().clone(true));
    setInterval(() => {
        currentIndex++;
        $(".sliderWrap").animate({ marginLeft: -1200 * currentIndex }, 800);

        if (currentIndex == 3) {
            setTimeout(() => {
                currentIndex = 0;
                $(".sliderWrap").animate({ marginLeft: 0 }, 0);
            });
        }
    }, 3000);






    // 메뉴
    $(".nav > ul > li").mouseover(function () {
        $(this).find(".submenu").stop().slideDown(200);
    });
    $(".nav > ul > li").mouseout(function () {
        $(this).find(".submenu").stop().slideUp(200);
    });







    // 팝업
    $(".popup_btn").click(function () {
        $(".popup_view").show();
    });
    $(".popup_close").click(function () {
        $(".popup_view").hide();
    });
});















