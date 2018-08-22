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

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'body') ?>

    <?= $form->field($model, 'start') ?>

    <?= $form->field($model, 'end') ?>

    <?php // echo $form->field($model, 'author_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('classes', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('classes', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
