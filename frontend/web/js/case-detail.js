$(function() {
    var img = $(".case-detail img");
    img.each(function(){
        if(!$(this).attr("data-original") ){
            $(this).attr("data-original", $(this).attr("src")).attr("src", "/img/loading.gif");
        }
        //将src赋值到data-original，src赋值为预先准备的loding.gif
    });
    img.lazyload({effect: "fadeIn"});
});

