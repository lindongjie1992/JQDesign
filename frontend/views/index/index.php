<?php

use frontend\assets\AppAsset;

AppAsset::addJs($this, 'js/index.js');
$this->title = "首页";
?>

<?php $this->beginBlock('screen') ?>
<div class="screen">
    <div class="loader"></div>
    <div class="check-img img p1"></div>
    <div class="check-img img p2"></div>
</div>
<?php $this->endBlock() ?>

<!--第一屏 -->
<div id="main">
    <div class="section section1">
        <div class="content">
            <div class="check-img bg"></div>
            <div class="check-img icon"></div>
        </div>
    </div>
    <!--第二屏 案例-->
    <div class="section section2">
        <div class="wapper">
            <div class="title fl">
                <p style="font-size: 18px">设计案例</p>
                <p style="font-size: 12px;color: #999">Design case</p>
            </div>
            <nav class="nav fr">
                <a class="tab-nav" href="javascript:void(0)">全部</a>
                <a class="tab-nav" href="javascript:void(0)" target="_blank">UI</a>
                <a class="tab-nav" href="javascript:void(0)">网页</a>
                <a class="tab-nav" href="javascript:void(0)">平面</a>
                <a class="tab-nav" href="javascript:void(0)">其他</a>
            </nav>
            <div class="line"></div>
        </div>
        <div class="pic">
            <!-- 第一个tab start -->
            <div class="tab-content">
                <div class="pic-wapper">
                    <div>
                        <div class="box"
                             style="background: url(/img/img/index_case9.png) center top no-repeat;background-size:cover;">
                        </div>
                        <div class="info">
                            <h2 class="title">无人智慧酒店解决方案 — 一站式服务商</h2>
                            <p class="desc">青云智控[网页]</p>
                        </div>
                    </div>
                    <div>
                        <div class="box"
                             style="background: url(/img/img/index_case10.png) center top no-repeat;background-size:cover;">
                        </div>
                        <div class="info">
                            <h2 class="title">儿童智能陪伴机器人—小墨</h2>
                            <p class="desc">墨子集团[APP]</p>
                        </div>
                    </div>
                    <div>
                        <div class="box"
                             style="background: url(/img/index_case3.jpg) center top no-repeat;background-size:cover;">
                        </div>
                        <div class="info">
                            <h2 class="title">山 水</h2>
                            <p class="desc">中青旅集团 [APP]</p>
                        </div>
                    </div>
                    <div>
                        <div class="box"
                             style="background: url(/img/index_case11.png) center top no-repeat;background-size:cover;">
                        </div>
                        <div class="info">
                            <h2 class="title">视觉识别系统设计</h2>
                            <p class="desc">墨子集团 [品牌]</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 第一个tab end -->
            <!-- 第二个tab start -->
            <div class="tab-content">
                <div class="pic-wapper">
                    <div>
                        <div class="box"
                             style="background: url(/img/index_case1.gif) center top no-repeat;background-size:cover;">
                        </div>
                        <div class="info">
                            <h2 class="title">墨子智能</h2>
                            <p class="desc">墨子集团[APP]</p>
                        </div>
                    </div>
                    <div>
                        <div class="box"
                             style="background: url(/img/index_case2.jpg) center top no-repeat;background-size:cover;">
                        </div>
                        <div class="info">
                            <h2 class="title">墨子经销商</h2>
                            <p class="desc">墨子集团[APP]</p>
                        </div>
                    </div>
                    <div>
                        <div class="box"
                             style="background: url(/img/index_case3.jpg) center top no-repeat;background-size:cover;">
                        </div>
                        <div class="info">
                            <h2 class="title">山 水</h2>
                            <p class="desc">中青旅集团[APP]</p>
                        </div>
                    </div>
                    <div>
                        <div class="box"
                             style="background: url(/img/index_case2.jpg) center top no-repeat;background-size:cover;">
                        </div>
                        <div class="info">
                            <h2 class="title">智游住</h2>
                            <p class="desc">青云智控[APP]</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 第二个tab end -->
            <!-- 第三个tab start -->
            <div class="tab-content">
                <div class="pic-wapper">
                    <div>
                        <div class="box"
                             style="background: url(/img/index_case1.gif) center top no-repeat;background-size:cover;">
                        </div>
                        <div class="info">
                            <h2 class="title">墨子官网</h2>
                            <p class="desc">墨子集团[网页]</p>
                        </div>
                    </div>
                    <div>
                        <div class="box"
                             style="background: url(/img/index_case2.jpg) center top no-repeat;background-size:cover;">
                        </div>
                        <div class="info">
                            <h2 class="title">墨子预热官网</h2>
                            <p class="desc">墨子集团[网页]</p>
                        </div>
                    </div>
                    <div>
                        <div class="box"
                             style="background: url(/img/index_case2.jpg) center top no-repeat;background-size:cover;">
                        </div>
                        <div class="info">
                            <h2 class="title">青云官网</h2>
                            <p class="desc">青云智控[网页]</p>
                        </div>
                    </div>
                    <div>
                        <div class="box"
                             style="background: url(/img/index_case2.jpg) center top no-repeat;background-size:cover;">
                        </div>
                        <div class="info">
                            <h2 class="title">泽佳官网</h2>
                            <p class="desc">泽佳技术[网页]</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 第三个tab end -->
            <!-- 第4个tab start -->
            <div class="tab-content">
                <div class="pic-wapper">
                    <div>
                        <div class="box"
                             style="background: url(/img/index_case1.gif) center top no-repeat;background-size:cover;">
                        </div>
                        <div class="info">
                            <h2 class="title">墨子品牌物料</h2>
                            <p class="desc">墨子集团[平面]</p>
                        </div>
                    </div>
                    <div>
                        <div class="box"
                             style="background: url(/img/index_case2.jpg) center top no-repeat;background-size:cover;">
                        </div>
                        <div class="info">
                            <h2 class="title">墨子画册</h2>
                            <p class="desc">墨子集团[平面]</p>
                        </div>
                    </div>
                    <div>
                        <div class="box"
                             style="background: url(/img/index_case2.jpg) center top no-repeat;background-size:cover;">
                        </div>
                        <div class="info">
                            <h2 class="title">墨子展架</h2>
                            <p class="desc">墨子集团[平面]</p>
                        </div>
                    </div>
                    <div>
                        <div class="box"
                             style="background: url(/img/index_case2.jpg) center top no-repeat;background-size:cover;">
                        </div>
                        <div class="info">
                            <h2 class="title">墨子折页</h2>
                            <p class="desc">墨子集团[平面]</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 第4个tab end -->
            <!-- 第五个tab start -->
            <div class="tab-content">
                <div class="pic-wapper">
                    <div>
                        <div class="box"
                             style="background: url(/img/index_case13.png) center top no-repeat;background-size:cover;">
                        </div>
                        <div class="info">
                            <h2 class="title">自助机_长屏</h2>
                            <p class="desc">青云智控[自助机]</p>
                        </div>
                    </div>
                    <div>
                        <div class="box"
                             style="background: url(/img/index_case14.png) center top no-repeat;background-size:cover;">
                        </div>
                        <div class="info">
                            <h2 class="title">机器人</h2>
                            <p class="desc">青云智控[自助机]</p>
                        </div>
                    </div>
                    <div>
                        <div class="box"
                             style="background: url(/img/index_case7.jpg) center top no-repeat;background-size:cover;">
                        </div>
                        <div class="info">
                            <h2 class="title">插画</h2>
                            <p class="desc">随笔练习[插画]</p>
                        </div>
                    </div>
                    <div>
                        <div class="box"
                             style="background: url(/img/index_case8.gif) center top no-repeat;background-size:cover;">
                        </div>
                        <div class="info">
                            <h2 class="title">自我快闪</h2>
                            <p class="desc">随笔练习[动效]</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 第五个tab end -->
        </div>


        <div class="m-more">
            <a href="#" style="color: #333333;font-size: 14px;">MORE</a>
        </div>
    </div>

    <!--第三屏 关于-->
    <div class="section section3">
        <div class="about">
            <div class="check-img com fl"></div>
            <div class="content fl">
                <div class="cell">
                    <h3>关于</h3>
                    <p style="font-size: 12px;color:#999;font-weight: normal;margin-top: -10px">ABOUT US</p>
                    <P style="font-size: 14px;color:#666;font-weight: normal;margin-top: 60px;line-height: 30px">
                        JQDESIGN（杰奇设计），独立UI设计师、网站建站师、品牌设计师。善于页面排版设计，插画设计，
                        企业宣传视频制作。长于运用简洁的设计元素表达深刻品牌内涵；用最简单简洁的设计手法，阐述品牌
                        故事。 理念：艺术来源于生活，用心阐述奇点。
                    </P>
                    <div class="a-more">
                        <a href="#" style="color: #333333;font-size: 14px;margin-top: 200px;">MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--第四屏 服务-->
    <div class="section section4">
        <div class="box">
            <div class="w1175">
                <div class="top clearfix">
                    <div class="title fl">
                        <h3>服务领域</h3>
                        <p>Service area</p>
                    </div>
                    <div class="nav fr">
                        <img src="/img/index_home4_nav.png">
                    </div>
                </div>
                <div class="content clearfix">
                    <div class="pic">
                        <img src="/img/index_home4_web.png">
                        <img src="/img/index_case4.jpg">
                        <img src="/img/index_case3.jpg">
                        <img src="/img/index_home4_web.png">
                    </div>
                    <div class="info-list-wapper">
                        <ul id="info-list" class="info-list">
                            <li>
                                <div class="info">
                                    <h3>网站设计/Web design</h3>
                                    <p>网站是企业在互联网领域的形象代言，企业通过网站展示企业形象，
                                        宣传企业产品与服务，通过网站获得用户反馈。我们可以为您提供量
                                        身定制企业网站服务，并可以根据互联网的不断发展，提供持续的技
                                        术支持，让您的品牌在互联网领域扩展延伸。</p>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <h3>网站设计/Web design2222</h3>
                                    <p>网站是企业在互联网领域的形象代言，企业通过网站展示企业形象，
                                        宣传企业产品与服务，通过网站获得用户反馈。我们可以为您提供量
                                        身定制企业网站服务，并可以根据互联网的不断发展，提供持续的技
                                        术支持，让您的品牌在互联网领域扩展延伸。</p>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <h3>网站设计/Web design33333</h3>
                                    <p>网站是企业在互联网领域的形象代言，企业通过网站展示企业形象，
                                        宣传企业产品与服务，通过网站获得用户反馈。我们可以为您提供量
                                        身定制企业网站服务，并可以根据互联网的不断发展，提供持续的技
                                        术支持，让您的品牌在互联网领域扩展延伸。</p>
                                </div>
                            </li>
                        </ul>
                        <div class="btn_l fl">
                            <i class="iconfont icon-arrowleft"></i>
                        </div>
                        <div class="btn_r fl">
                            <i class="iconfont icon-arrowright"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--第五屏 文章-->
    <div class="section section5">
        <div class="wapper">
            <div class="title fl">
                <p style="font-size: 18px">精选文章</p>
                <p style="font-size: 12px;color: #999">Article</p>
            </div>
        </div>
        <div class="time">
            <a href="javascript:void(0)">5-16</a>
            <a href="javascript:void(0)">5-17</a>
            <a href="javascript:void(0)">5-18</a>
        </div>
        <div class="line"></div>
        <div class="tab_content">
            <div class="content1">
                <div class="box">
                    <div class="box-cont">
                        <img src="/img/index_novel1.png" alt="">
                    </div>
                </div>
                <div class="info">
                    <h2 class="title">交互设计师应该具备哪些思维方式</h2>
                    <p class="desc">交互设计</p>
                </div>
            </div>
            <div class="content1">
                <div class="box">
                    <div class="box-cont">
                        <img src="/img/index_novel2.png" alt="">
                    </div>
                </div>
                <div class="info">
                    <h2 class="title">交互设计师应该具备哪些思维方式</h2>
                    <p class="desc">交互设计</p>
                </div>
            </div>
            <div class="content1">
                <div class="box">
                    <div class="box-cont">
                        <img src="/img/index_novel3.png" alt="">
                    </div>
                </div>
                <div class="info">
                    <h2 class="title">交互设计师应该具备哪些思维方式</h2>
                    <p class="desc">交互设计</p>
                </div>
            </div>
        </div>
        <div class="m-more">
            <a href="#" style="color: #333333;font-size: 14px;">MORE</a>
        </div>
    </div>


    <!--第六屏 联系 -->
    <div class="section section6">
        <div class="wapper">
            <div class="check-img top">
            </div>
        </div>
        <div class="cont clearfix">
            <div class="inf fl">
                <h2>
                    杰奇设计（JQDESIGN）
                </h2>
                <p>微信：qwqueen1<br>电话：18717171969<br>邮箱：2430643863@qq.com</p>
                <div class="cord"></div>
            </div>
            <div class="table fr">
                <form class="contact-form" action="#">
                    <div class="form-group clearfix">
                        <div class="item">
                            <label for="true_name">姓名</label>
                            <input class="input-txt" autocomplete="off" name="true_name" id="true_name" type="text">
                        </div>
                        <div class="item">
                            <label for="email">邮箱</label>
                            <input class="input-txt" autocomplete="off" name="email" id="email" type="text">
                        </div>
                        <div class="item">
                            <label for="phone">电话</label>
                            <input class="input-txt" autocomplete="off" name="phone" id="phone" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="item">
                            <label for="content">内容</label>
                            <input class="input-txt" autocomplete="off" name="content" id="content" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="item">
                            <a class="submit-btn" href="javascript:void(0);">提交</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

