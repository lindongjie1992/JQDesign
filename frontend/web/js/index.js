/**
 * 首屏加载
 */
$(function () {
    var screen = $('.screen');
    var imgs = screen.find('.img');
    var loader = screen.find('.loader');
    var pageWapper = $('.page-wapper');
    if(window.sessionStorage.getItem('init')){
        setTimeout(function(){
            screen.fadeOut();
            pageWapper.show();
            initPage();
        },1000);
    } else {
        $('.screen,.page-wapper').imagesLoaded({ background: '.check-img' }).done( function( instance ) {
            setTimeout(function(){
                loader.fadeOut();
                imgs.show();
                setTimeout(function () {
                    imgs.eq(0).css('opacity', 0);
                    setTimeout(function () {
                        screen.css('transform', 'translateY(-100%)');
                        pageWapper.show();
                        initPage();
                        window.sessionStorage.setItem('init',true);
                    }, 2000);
                }, 1500);
            },1500);
        }).fail( function( instance ) {
            alert('网站加载失败');
        });
    }
});

/*$(function(){
    var screen = $('.screen');
    var loader = screen.find('.loader');
    screen.fadeOut();
    $('.page-wapper').show();
    initPage();
})*/


function initPage() {
    //初始化fullpage
    $('#main').fullpage({
        anchors: ['index', 'design', 'about', 'service', 'article', 'contact']
    });

    /**
     * 实现选项卡功能
     * 1、获取按钮（tab-nav）和容器（tab-content）
     * 2、按钮点击后获取当前按钮索引 （索引从0开始）
     * 3、隐藏所有的容器（tab-content） ，然后让按钮获取的索引来决定显示哪个容易
     */
    $(function () {
        var tabBtns = $('.tab-nav');
        var tabContents = $('.tab-content');
        //默认显示第一个
        tabContents.eq(0).css('opacity', 1);
        tabBtns.on('click', function () {
            var cid = $(this).data('id');
            var index = $(this).index(); //当前按钮点击的索引
            tabBtns.removeClass('active').eq(index).addClass('active');
            tabContents.siblings().css('opacity', 0).eq(index).css('opacity', 1);
            var url = baseUrl + '/index/get-case';
            $.get(url,{
                cid : cid
            },function(res){
                var picWapper = $('.section2 .pic-wapper');
                if(res.status && res.data.length > 0){
                    var tpl = $('#case-item').html();
                    var html = template(tpl, {list: res.data});
                    picWapper.hide().html(html).fadeIn();
                } else {
                    picWapper.hide().html('<div class="no-data text-center">暂无数据</div>').fadeIn();
                }
            });
        });
        tabBtns.eq(0).trigger('click').addClass('active');
    });


    /**
     * 实现服务按钮滚动切换
     */
    $(function () {
        var img = $('.section4 .pic img'); //切换的图片
        var prevBtn = $('.section4 .btn_l'); //上一页
        var nextBtn = $('.section4 .btn_r'); //下一页
        var infoList = $('#info-list');
        var aLi = infoList.find('li');
        var flag = true;
        var index = 0;
        infoList.css('width', aLi.outerWidth(true) * infoList.find('li').length);
        img.eq(index).css('opacity', 1);
        prevBtn.on('click', function () {
            if (flag) {
                if (index >= 1) {
                    index--;
                } else {
                    index = aLi.length - 1;
                }
                flag = false;
                infoList.prepend(infoList.find('li').eq(infoList.find('li').length - 1)).css('left', -aLi.outerWidth(true));
                infoList.animate({
                    left: 0
                }, function () {
                    flag = true;
                });
                img.css('opacity', 0).eq(index).css('opacity', 1);
            }
        });
        nextBtn.on('click', function () {
            if (flag) {
                if (index < aLi.length - 1) {
                    index++;
                } else {
                    index = 0;
                }

                flag = false;
                infoList.animate({
                    left: -aLi.outerWidth(true)
                }, function () {
                    infoList.append(infoList.find('li').eq(0)).css('left', aLi.outerWidth(true)).css('left', 0);
                    flag = true;
                });
                img.css('opacity', 0).eq(index).css('opacity', 1);
            }
        });
    });
}