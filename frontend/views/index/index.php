<?php

use frontend\assets\AppAsset;
AppAsset::addJs($this, 'js/index.js?v=1');
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
<!--    <div class="section section1">-->
<!--        <div class="content">-->
<!--            <div class="check-img bg"></div>-->
<!--            <div class="check-img icon"></div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <!--第二屏 案例-->-->
<!--    <div class="section section2">-->
<!--        <div class="wapper">-->
<!--            <div class="title fl">-->
<!--                <p style="font-size: 18px">设计案例</p>-->
<!--                <p style="font-size: 12px;color: #999">Design case</p>-->
<!--            </div>-->
<!--            <nav class="nav fr">-->
<!--                <a class="tab-nav" href="javascript:void(0)">全部</a>-->
<!--                --><?php //foreach ($project_category as $k => $v): ?>
<!--                    <a class="tab-nav" href="javascript:void(0)" data-id="--><?//=$v['id']?><!--">--><?//=$v['name']?><!--</a>-->
<!--                --><?php //endforeach; ?>
<!--            </nav>-->
<!--            <div class="line"></div>-->
<!--        </div>-->
<!--        <div class="pic">-->
<!--            <div class="tab-content">-->
<!--                <div class="pic-wapper">-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!--        <div class="m-more">-->
<!--            <a href="--><?//=\yii\helpers\Url::to(['index/case-list'])?><!--" style="color: #333333;font-size: 14px;">MORE</a>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <!--第三屏 关于-->-->
<!--    <div class="section section3">-->
<!--        <div class="about">-->
<!--            <div class="check-img com fl"></div>-->
<!--            <div class="content fl">-->
<!--                <div class="cell">-->
<!--                    <h3>关于</h3>-->
<!--                    <p style="font-size: 12px;color:#999;font-weight: normal;margin-top: -10px">ABOUT US</p>-->
<!--                    <P style="font-size: 14px;color:#666;font-weight: normal;margin-top: 60px;line-height: 30px">-->
<!--                        --><?//=$about ?? '资料整理中...'?>
<!--                    </P>-->
<!--                    <div class="a-more">-->
<!--                        <a href="#" style="color: #333333;font-size: 14px;margin-top: 200px;">MORE</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <!--第四屏 服务-->-->
<!--    <div class="section section4">-->
<!--        <div class="box">-->
<!--            <div class="w1175">-->
<!--                <div class="top clearfix">-->
<!--                    <div class="title fl">-->
<!--                        <h3>服务领域</h3>-->
<!--                        <p>Service area</p>-->
<!--                    </div>-->
<!--                    <div class="nav fr">-->
<!--                        <img src="/img/index_home4_nav.png">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="content clearfix">-->
<!--                    <div class="pic">-->
<!--                        <img src="/img/index_home4_web.png">-->
<!--                        <img src="/img/index_case4.jpg">-->
<!--                        <img src="/img/index_case3.jpg">-->
<!--                        <img src="/img/index_home4_web.png">-->
<!--                    </div>-->
<!--                    <div class="info-list-wapper">-->
<!--                        <ul id="info-list" class="info-list">-->
<!--                            <li>-->
<!--                                <div class="info">-->
<!--                                    <h3>网站设计/Web design</h3>-->
<!--                                    <p>网站是企业在互联网领域的形象代言，企业通过网站展示企业形象，-->
<!--                                        宣传企业产品与服务，通过网站获得用户反馈。我们可以为您提供量-->
<!--                                        身定制企业网站服务，并可以根据互联网的不断发展，提供持续的技-->
<!--                                        术支持，让您的品牌在互联网领域扩展延伸。</p>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <div class="info">-->
<!--                                    <h3>网站设计/Web design2222</h3>-->
<!--                                    <p>网站是企业在互联网领域的形象代言，企业通过网站展示企业形象，-->
<!--                                        宣传企业产品与服务，通过网站获得用户反馈。我们可以为您提供量-->
<!--                                        身定制企业网站服务，并可以根据互联网的不断发展，提供持续的技-->
<!--                                        术支持，让您的品牌在互联网领域扩展延伸。</p>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <div class="info">-->
<!--                                    <h3>网站设计/Web design33333</h3>-->
<!--                                    <p>网站是企业在互联网领域的形象代言，企业通过网站展示企业形象，-->
<!--                                        宣传企业产品与服务，通过网站获得用户反馈。我们可以为您提供量-->
<!--                                        身定制企业网站服务，并可以根据互联网的不断发展，提供持续的技-->
<!--                                        术支持，让您的品牌在互联网领域扩展延伸。</p>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                        <div class="btn_l fl">-->
<!--                            <i class="iconfont icon-arrowleft"></i>-->
<!--                        </div>-->
<!--                        <div class="btn_r fl">-->
<!--                            <i class="iconfont icon-arrowright"></i>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!---->
<!--    <!--第五屏 文章-->-->
<!--    <div class="section section5">-->
<!--        <div class="wapper">-->
<!--            <div class="title fl">-->
<!--                <p style="font-size: 18px">精选文章</p>-->
<!--                <p style="font-size: 12px;color: #999">Article</p>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="time">-->
<!--            <a href="javascript:void(0)">5-16</a>-->
<!--            <a href="javascript:void(0)">5-17</a>-->
<!--            <a href="javascript:void(0)">5-18</a>-->
<!--        </div>-->
<!--        <div class="line"></div>-->
<!--        <div class="tab_content">-->
<!--            <div class="content1">-->
<!--                <div class="box">-->
<!--                    <div class="box-cont">-->
<!--                        <img src="/img/index_novel1.png" alt="">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="info">-->
<!--                    <h2 class="title">交互设计师应该具备哪些思维方式</h2>-->
<!--                    <p class="desc">交互设计</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="content1">-->
<!--                <div class="box">-->
<!--                    <div class="box-cont">-->
<!--                        <img src="/img/index_novel2.png" alt="">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="info">-->
<!--                    <h2 class="title">交互设计师应该具备哪些思维方式</h2>-->
<!--                    <p class="desc">交互设计</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="content1">-->
<!--                <div class="box">-->
<!--                    <div class="box-cont">-->
<!--                        <img src="/img/index_novel3.png" alt="">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="info">-->
<!--                    <h2 class="title">交互设计师应该具备哪些思维方式</h2>-->
<!--                    <p class="desc">交互设计</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="m-more">-->
<!--            <a href="#" style="color: #333333;font-size: 14px;">MORE</a>-->
<!--        </div>-->
<!--    </div>-->


    <!--第六屏 联系 -->
    <div class="section section6">
        <div class="wapper">
            <div class="check-img top">
                <img src="/img/index_home6_top.png" alt="">
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
                            <input class="input-txt name" autocomplete="off" name="name" type="text">
                            <p class="error"></p>
                        </div>
                        <div class="item">
                            <label for="email">邮箱</label>
                            <input class="input-txt email" autocomplete="off" name="email" type="email">
                            <p class="error"></p>
                        </div>
                        <div class="item">
                            <label for="phone">电话</label>
                            <input class="input-txt mobile" autocomplete="off" name="mobile" type="text">
                            <p class="error"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="item">
                            <label for="content">内容</label>
                            <input class="input-txt content" autocomplete="off" name="content" type="text">
                            <p class="error"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="item">
                            <a class="submit-btn" href="javascript:void(0);">提交</a>
                        </div>
                    </div>
                    <input class="csrf" type="hidden" value="<?php echo Yii::$app->request->csrfToken; ?>" name="_csrf" >
                </form>
            </div>
        </div>
    </div>

<script id="case-item" type="text/html">
    <%for(var i = 0; i < list.length; i++) {%>
    <div>
        <a href="<?=\yii\helpers\Url::to(['/case-detail'])?>/id/<%:=list[i].id%>">
            <div class="box">
                <img src="<?=Yii::$app->params['domain']?><%:=list[i].pic%>" alt="">
            </div>
            <div class="info">
                <h2 class="title"><%:=list[i].title%></h2>
                <p class="desc"><%:=list[i].description%></p>
            </div>
        </a>
    </div>
    <%}%>
</script>