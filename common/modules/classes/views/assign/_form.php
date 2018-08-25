<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\classes\models\MtmAssignment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mtm-assignment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mta_mtmc_id')->textInput() ?>

    <?= $form->field($model, 'mta_user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('classes', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
