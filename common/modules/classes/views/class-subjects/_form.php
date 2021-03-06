<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\classes\models\ClassSubjects */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="class-subjects-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'casu_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'casu_start')->textInput() ?>

    <?= $form->field($model, 'casu_end')->textInput() ?>

    <?= $form->field($model, 'casu_body')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('classes', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
