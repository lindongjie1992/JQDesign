<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProjectCategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '案例分类';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-category-index">

    <p>
        <?= Html::a('创建', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>名称</th>
            <th>排序</th>
            <th class="action-column">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        <?php if(empty($list)): ?>
            <td colspan="3"><div class="empty">暂无数据</div></td>
        <?php endif; ?>
        <?php foreach ($list as $k => $v): ?>
            <tr data-key="1">
                <td><?=$k?></td>
                <td><?=$v['name']?></td>
                <td><?=$v['sort']?></td>
                <td>
                    <a href="<?=Url::to(['/project-category/view','id'=>$k])?>" title="View" aria-label="View" data-pjax="0"><span class="glyphicon glyphicon-eye-open"></span></a>
                    <a href="<?=Url::to(['/project-category/update','id'=>$k])?>" title="Update" aria-label="Update" data-pjax="0"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a href="<?=Url::to(['/project-category/delete','id'=>$k])?>" title="Delete" aria-label="Delete" data-pjax="0" data-confirm="Are you sure you want to delete this item?" data-method="post"><span class="glyphicon glyphicon-trash"></span></a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>


</div>
