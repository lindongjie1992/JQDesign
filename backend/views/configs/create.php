<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Configs */

$this->title = 'Create Configs';
$this->params['breadcrumbs'][] = ['label' => 'Configs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="configs-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
