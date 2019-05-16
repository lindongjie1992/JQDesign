<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Configs */

$this->title = 'Update Configs: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Configs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->key]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="configs-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
