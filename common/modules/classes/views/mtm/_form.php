<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\classes\models\Mtm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mtm-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'group_id')->textInput() ?>

    <?= $form->field($model, 'subject_id')->textInput() ?>

    <?= $form->field($model, 'class_subject_id')->textInput() ?>

    <?= $form->field($model, 'class_assets_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('classes', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
