<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '案例列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-index">
    <p>
        <?= Html::a('创建', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            [
                'label'=>'封面图',
                'format'=>'raw',
                'value'=>function($m){
                    return Html::img($m->pic,['width' => 100]);
                }
            ],
            'sort',
            [
                'attribute' => 'created_at',
                'value' => function($m){
                    return date('Y-m-d H:i:s',$m->created_at);
                }
            ],
            //'updated_at',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
