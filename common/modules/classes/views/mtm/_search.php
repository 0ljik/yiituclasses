<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\classes\models\MtmSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mtm-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'group_id') ?>

    <?= $form->field($model, 'subject_id') ?>

    <?= $form->field($model, 'class_subject_id') ?>

    <?= $form->field($model, 'class_assets_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('classes', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('classes', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
