<?php
    $this->title = "设计案例";
    $cid = Yii::$app->request->get('cid');
?>

<div class="page page-list clearfix">
    <div class="menu fl">
        <div class="hd">
            <h2>设计案例</h2>
            <p>Design case</p>
        </div>
        <ul class="bd">
            <li><a <?= empty($cid) ? 'class="active"' : '' ?> href="<?=\yii\helpers\Url::to(["index/case-list"])?>">全 部</a></li>
            <?php foreach ($project_category as $k => $v): ?>
                <li><a <?= $cid == $v['id'] ? 'class="active"' : '' ?> href="<?=\yii\helpers\Url::to(["case-list/cid/{$v['id']}"])?>"><?=$v['name']?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="cont fl">
        <?php if(empty($list)): ?>
            <div class="no-data">
                <img src="/img/no-data.png" alt="暂无数据">
                <p>作者尚未上传作品数据</p>
            </div>
            <?php else: ?>
            <ul class="clearfix">
                <?php foreach ($list as $k => $v):?>
                    <li>
                        <a href="<?=\yii\helpers\Url::to(["case-detail/id/{$v['id']}"])?>" style="background:url(<?=Yii::$app->params['domain'] . '/' . $v['pic']?>) center center no-repeat; background-size:cover;">
                            <div class="info">
                                <h2><?=$v['title']?></h2>
                                <p><?=$v['description']?></p>
                            </div>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</div>