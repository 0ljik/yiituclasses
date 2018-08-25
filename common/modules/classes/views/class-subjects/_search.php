<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\classes\models\ClassSubjectsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="class-subjects-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'casu_id') ?>

    <?= $form->field($model, 'casu_name') ?>

    <?= $form->field($model, 'casu_start') ?>

    <?= $form->field($model, 'casu_end') ?>

    <?= $form->field($model, 'casu_body') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('classes', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('classes', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
