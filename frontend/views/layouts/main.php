<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?= $this->blocks['screen'] ? $this->blocks['screen'] : ''; ?>


<div class="page-wapper">
    <!--nav start-->
    <div id="header">
        <div class="wapper">
            <a class="logo fl" href="<?=\yii\helpers\Url::to(['index'])?>" title="logo">
                <img src="/img/index_nav_logo.png" alt="JQDESIGN">
            </a>
            <nav class="nav fr">
                <a class="home active" href="javascript:void(0)">Home</a>
                <a href="javascript:void(0)">Design</a>
                <a href="javascript:void(0)">About</a>
                <a href="javascript:void(0)">Like</a>
            </nav>
        </div>
    </div>
    <!--nav end-->
    <?=$content?>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
