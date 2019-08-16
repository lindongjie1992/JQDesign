<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
AppAsset::register($this);
$action = $this->context->action->id;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="keywords" content="JQDESIGN设计"/>
    <meta name="description" content="JQDESIGN设计" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="stylesheet" href="//at.alicdn.com/t/font_1260412_gc7hi4fipv6.css">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?> - JQDESIGN</title>
    <?php $this->head() ?>
    <script>
        var baseUrl = "<?=Yii::$app->request->hostInfo?>";
    </script>
</head>
<body>
<?php $this->beginBody() ?>
<?= $this->blocks['screen'] ? $this->blocks['screen'] : ''; ?>

<div class="page-wapper" <?= $this->context->action->id == "index" ? 'style="display:none"' : '' ?>>
    <!--nav start-->
    <div id="header">
        <div class="wapper">
            <a class="logo fl" href="<?=\yii\helpers\Url::to(['index'])?>" title="logo">
                <img src="/img/index_nav_logo.png" alt="JQDESIGN">
            </a>
            <nav class="nav fr">
                <a class="<?=strpos($action,'index') !== false ? 'active' : ''?>" href="<?=\yii\helpers\Url::to(['index'])?>">Home</a>
                <a class="<?=strpos($action,'case') !== false ? 'active' : ''?>" href="<?=\yii\helpers\Url::to(['index/case-list'])?>">Design</a>
                <a href="#">About</a>
                <a href="#">Like</a>
            </nav>
        </div>
    </div>
    <!--nav end-->
    <?=$content?>
</div>

<div class="side-nav">
    <a class="msg nav-item" href="javascript:void(0);">
        <i class="iconfont icon-jiaoliuweixuanzhong"></i>
    </a>
    <div class="side-nav-cont">
        <div class="tt">
            <span class="text">在线咨询</span>
            <a class="close-btn" href="javascript:void(0);">
                <i class="iconfont icon-close"></i>
            </a>
        </div>
        <ul>
            <li class="for-qq" onclick="window.open('http://wpa.qq.com/msgrd?v=3&amp;uin=2430643863&amp;site=qq&amp;menu=yes')">
                <i class="iconfont icon-qq"></i>
                2430643863
            </li>
            <li class="for-phone">
                <i class="iconfont icon-dianhua"></i>
                联系电话
                <p>18717171969</p>
            </li>
        </ul>
    </div>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
