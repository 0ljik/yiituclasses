<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\classes\models\Mtm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mtm-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mtm_group_id')->textInput() ?>

    <?= $form->field($model, 'mtm_subject_id')->textInput() ?>

    <?= $form->field($model, 'mtm_class_subject_id')->textInput() ?>

    <?= $form->field($model, 'mtm_class_assets_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('classes', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
