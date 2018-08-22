<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\classes\models\Assign */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="assign-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--<= $form->field($model, 'mtm_id')->textInput() ?>-->

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'group_id')->textInput() ?>

    <?= $form->field($model, 'subject_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('classes', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
