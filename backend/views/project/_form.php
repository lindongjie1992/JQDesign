<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Project */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="project-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cid')->dropDownList((new \common\models\ProjectCategory())->getOptions()) ?>

    <?= $form->field($model, 'pic')->widget('manks\FileInput', []) ?>

    <?= $form->field($model, 'belong_to')->textInput(); ?>

    <?= $form->field($model, 'description')->textarea(); ?>

    <?= $form->field($model, 'content')->widget('kucha\ueditor\UEditor',[]); ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
