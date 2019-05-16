<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AdCategory */

$this->title = 'Update Ad Category: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Ad Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ad-category-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
