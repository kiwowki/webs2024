$(function(){
    // 슬라이드 효과 fade
    let currentIndex = 0;
    $(".slider").hide().first().show();

    setInterval(() => {
        let nextIndex = (currentIndex + 1) % 3;

        $(".slider").eq(currentIndex).fadeOut(1200);
        $(".slider").eq(nextIndex).fadeIn(1200);

        currentIndex = nextIndex;
    }, 3000);

    // 메뉴 : 하나씩 나오기
    $(".nav > ul > li").mouseover(function(){
        $(this).find(".submenu").stop().slideDown(200);
    });
    $(".nav > ul > li").mouseout(function(){
        $(this).find(".submenu").stop().slideUp(200);
    });

    // 탭메뉴
    const tabBtn = $(".info_menu > a");
    const tabCont = $(".info_cont > div");
    tabCont.hide().eq(0).show();

    tabBtn.click(function(){
        const index = $(this).index();

        $(this).addClass("active").siblings().removeClass("active");
        tabCont.eq(index).show().siblings().hide();
    });

    // 팝업
    $(".popup_btn").click(function(){
        $(".popup_view").show();
    });
    $(".popup_close").click(function(){
        $(".popup_view").hide();
    });
});