<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '文章列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-index">

    <p>
        <?= Html::a('创建', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            [
                'attribute'=>'id',
                'value' => 'id',
                'headerOptions'=> ['width'=> '100'],
            ],
            [
                'attribute'=>'cid',
                'value' => 'cid',
                'headerOptions'=> ['width'=> '100'],
            ],
            'title',
            [
                'attribute' => 'pic',
                'format' => 'raw',
                'value' => function($model){
                    return Html::img($model->pic,[
                       'width' => 50,
                        'height' => 50
                    ]);
                }
            ],
            'description',
//            [
//                'attribute' => 'content',
//                'format' => 'raw',
//                'value' => 'content'
//            ],
            //'sort',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
