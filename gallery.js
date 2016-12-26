if($(window).width() >= 768){
$(document).ready(function(){
    $('.myslick').slick({
      infinite: true,
      speed: 500,
      centerMode: false,
        focusOnSelect: true,
        mobileFirst: true,
        variableWidth: true
    });
});
}
//var debounceTimeout;
//$(window).on("resize", function(){
//    clearTimeout(debounceTimeout);
//    debounceTimeout = setTimeout(function(){
//        $(".ps-current img:visible").css("max-height","99.9%");
//        setTimeout(function(){
//            $(".ps-current img:visible").removeAttr("style");
//        }, 10)
//    }, 300);
//});