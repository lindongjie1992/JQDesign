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