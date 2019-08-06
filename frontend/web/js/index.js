/**
 * 首屏加载
 */
$(function () {
    var screen = $('.screen');
    var imgs = screen.find('.img');
    var loader = screen.find('.loader');
    var pageWapper = $('.page-wapper');
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
                }, 2000);
            }, 1500);
        },1500);
    }).fail( function( instance ) {
        alert('网站加载失败');
    });
});

function initPage() {
    //初始化fullpage
    $('#main').fullpage({
        sectionsColor: ['#fff', '#fff', '#fff', '#fff', '#fff', '#fff'],
        anchors: ['page1', 'page2', 'page3', 'page4', 'page5', 'page6'],
        navigation: true
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
        tabBtns.eq(0).addClass('active')

        tabBtns.on('click', function () {
            var index = $(this).index(); //当前按钮点击的索引
            tabBtns.removeClass('active').eq(index).addClass('active');
            tabContents.siblings().css('opacity', 0).eq(index).css('opacity', 1);
        });
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
                })
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
                })
                img.css('opacity', 0).eq(index).css('opacity', 1);
            }
        });
    });


    //侧边栏
    $(function () {
        var side = $('.side-nav');
        var sideBtn = side.find('a');
        var cont = side.find('.side-nav-cont');
        var closeBtn = side.find('.close-btn');
        side.on('click', function () {
            return false
        });

        sideBtn.on('click', function () {
            if ($(this).hasClass('msg')) {
                //处理点击联系消息
                $(this).addClass('on');
                setTimeout(function () {
                    cont.addClass('on');
                    closeBtn.addClass('on');
                }, 200);
            }

        });
        $(document).on('click', close);
        closeBtn.on('click', close);

        function close() {
            cont.removeClass('on');
            setTimeout(function () {
                side.find('.msg').removeClass('on');
                closeBtn.removeClass('on');
            }, 200);
        }
    })
}