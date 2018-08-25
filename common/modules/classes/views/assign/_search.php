<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\classes\models\MtmAssignmentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mtm-assignment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'mta_mtmc_id') ?>

    <?= $form->field($model, 'mta_user_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('classes', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('classes', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
