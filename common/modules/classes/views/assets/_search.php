<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\classes\models\ClassAssetsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="class-assets-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'cas_id') ?>

    <?= $form->field($model, 'cas_title') ?>

    <?= $form->field($model, 'cas_body') ?>

    <?= $form->field($model, 'cas_start_time') ?>

    <?= $form->field($model, 'cas_end_time') ?>

    <?php // echo $form->field($model, 'author_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('classes', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('classes', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
